<?php
	class note_model extends CI_Model{
		public function register($cin){
			// note data array
			$data = array(
				'cin' => $cin,
				'anneebac' => $this->input->post('annbac'),
        'mentionbac' => $this->input->post('mentionbac'),
        'nbr_red_bac' => $this->input->post('red_bac'),
				'etab_dernier_diplome' => $this->input->post('e_diplome'),
				'nature_diplome' => $this->input->post('n_diplome'),
				'specialite' => $this->input->post('specialite'),
        'annee_obtition_diplome' => $this->input->post('o_diplome'),
        'annee_p' => $this->input->post('etuSup_year_1'),
				'etablissement_p' => $this->input->post('etuSup_etab_1'),
				'etudes_poursuivi_p' => $this->input->post('etuSup_etud_1'),
				'moyen_p' => $this->input->post('etuSup_moy_1'),
        'nbr_red_etusup_p' => $this->input->post('etuSup_nbr_redouble_1'),
        'mention_p' => $this->input->post('etuSup_mention_1'),
				'session_p' => $this->input->post('etuSup_session_1'),
				'annee_d' => $this->input->post('etuSup_year_2'),
				'etablissement_d' => $this->input->post('etuSup_etab_2'),
				'etudes_poursuivi_d' => $this->input->post('etuSup_etud_2'),
				'moyen_d' => $this->input->post('etuSup_moy_2'),
        'nbr_red_etusup_d' => $this->input->post('etuSup_nbr_redouble_2'),
        'mention_d' => $this->input->post('etuSup_mention_2'),
				'session_d' => $this->input->post('etuSup_session_2'),
				'annee_t' => $this->input->post('etuSup_year_3'),
				'etablissement_t' => $this->input->post('etuSup_etab_3'),
				'etudes_poursuivi_t' => $this->input->post('etuSup_etud_3'),
				'moyen_t' => $this->input->post('etuSup_moy_3'),
        'nbr_red_etusup_t' => $this->input->post('etuSup_nbr_redouble_3'),
        'mention_t' => $this->input->post('etuSup_mention_3'),
				'session_t' => $this->input->post('etuSup_session_3'),
              
			);

			// Insert note
			if (!$this->db->insert('notes', $data)) {
							return false;
			}
 	 		
			$score = $this->calculate_score($cin);	
		
			$data['score'] = $score;

			$this->db->where('cin', $cin);
 		  return $this->db->update('notes', $data);
	}	
		
		private function calculate_score($cin) {
			//nthabet menha: check if score already calculated			
			$sql = <<<EOT
SELECT
users.id, users.choix,
master.bonus_mention, master.bonus_non_redoublant, master.bonus_annee_diplome, 
notes.mention_p, notes.nbr_red_etusup_p,notes.mention_d, notes.nbr_red_etusup_d,notes.mention_t, notes.nbr_red_etusup_t, notes.moyen_p, notes.moyen_d, notes.moyen_t,
notes.annee_obtition_diplome
FROM `users`
JOIN master on master.id = users.choix
JOIN notes on users.cin = notes.cin
WHERE users.cin = ?
	
EOT;

			$query = $this->db->query($sql, array($cin));
			if (!$query) {
					return -1;
			}
			
            if (empty($query->result())) {
                return -1;
            }

            $score_data = $query->result()[0];

			$score = $score_data->moyen_p +  $score_data->moyen_d +  $score_data->moyen_t;
			$score += $score_data->bonus_mention * $score_data->mention_p +	 $score_data->bonus_mention * $score_data->mention_d +	 $score_data->bonus_mention * $score_data->mention_t;
		  $score += ( $score_data->nbr_red_etusup_p == 0 ? $score_data->bonus_non_redoublant : 0) ;	
		  $score += ( $score_data->nbr_red_etusup_d == 0 ? $score_data->bonus_non_redoublant : 0) ;	
		  $score += ( $score_data->nbr_red_etusup_t == 0 ? $score_data->bonus_non_redoublant : 0) ;	
			$score += ( $score_data->annee_obtition_diplome == date('Y') ? $score_data->bonus_annee_diplome : 0);
			return $score;
		}
		
		public function get_best_scores_by_etab($etab_id,$master_id, $number_applicant) {
			$sql = <<<EOT
SELECT * FROM notes
JOIN users ON users.cin = notes.cin
WHERE notes.etab_dernier_diplome = ? 
AND users.choix = ?
ORDER BY notes.score DESC
LIMIT ?
EOT;
	    $query = $this->db->query($sql, array($etab_id, $master_id, $number_applicant));
			return $query->result();
		}

		public function get_best_scores_except_etab($etab_id, $master_id, $number_applicant) {
			$sql = <<<EOT
SELECT * FROM notes
JOIN users ON users.cin = notes.cin
WHERE notes.etab_dernier_diplome != ? 
AND users.choix = ?
ORDER BY notes.score DESC
LIMIT ?
EOT;
	    $query = $this->db->query($sql, array($etab_id, $master_id, $number_applicant));
			return $query->result();
		}

		function get_best_scores_by_master($master_id, $etab_id, $offset=30) {
				$first_offset = intval($offset * 0.8);
				
				$scores_first = $this->get_best_scores_by_etab($etab_id, $master_id, $first_offset);	
				$scores_last = $this->get_best_scores_except_etab($etab_id, $master_id, ($offset - count($scores_first)));

				return array_merge($scores_first, $scores_last);
		}

		// Check if notename exists
		public function check_cin_exists($cin){
			$this->form_validation->set_message('check_cin_exists', 'That cin is taken. Please choose a different one');
			if($this->note_model->cin_exists($cin)){
				return true;
			} else {
				return false;
			}
		}
		
		public function get_notes($cin) {
			$query = $this->db->get_where('notes', array('cin' => $cin));
			return $query->row_array();
		}

		// Check notename exists
		public function cin_exists($cin){
			$query = $this->db->get_where('notes', array('cin' => $cin));
			if(empty($query->row_array())){
				return false;
			} else {
				return true;
			}
		}
	}
