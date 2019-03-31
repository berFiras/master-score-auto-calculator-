<?php
	class Master_model extends CI_Model{
		public function get_masters() {
			$query = $this->db->get_where('master');
			$result = $query->result();
			if ($result == NULL) {
				return array();
			} 
			return $result;
		}	
		public function get_master($master_id) {
			$query = $this->db->get_where('master', array('id' => $master_id));
			return $query->result();
		}

		public function delete_master($master_id) {
			$result = $this->db->delete('master', array('id' => $master_id));
			return $this->db->affected_rows();
		}

		public function add_master() {
			
			$data = array(
				'titre' => $this->input->post('titre'),
				'description' => $this->input->post('description'),
				'bonus_mention' => $this->input->post('bonus_mention'),
				'bonus_non_redoublant' => $this->input->post('bonus_non_redoublant'),
				'bonus_annee_diplome' => $this->input->post('bonus_annee_diplome'),
		);
			// Insert master
			return $this->db->insert('master', $data);
		}

		public function update_master($master_id) {
			
		  $data = array(
					'titre' => $this->input->post('titre'),
					'description' => $this->input->post('description'),
					'bonus_mention' => $this->input->post('bonus_mention'),
					'bonus_non_redoublant' => $this->input->post('bonus_non_redoublant'),
					'bonus_annee_diplome' => $this->input->post('bonus_annee_diplome'),
			);

     $this->db->where('id', $master_id);
     return $this->db->update('master', $data);


		}

	}
