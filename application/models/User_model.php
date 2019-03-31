<?php
	class User_model extends CI_Model{
		public function register(){
			// User data array
			$data = array(
				'cin' => $this->input->post('cin'),
				'nom' => $this->input->post('nom'),
    'prenom' => $this->input->post('prenom'),
    'choix' => $this->input->post('master_choix'),
				'pays' => $this->input->post('pays'),
				'nomjf' => $this->input->post('njf'),
		  'nationalite' => $this->input->post('nationalite'),
    'datedenaiss' => $this->input->post('date'),
				'lieudenaiss' => $this->input->post('lieu'),
				'adresscomplete' => $this->input->post('adressc'),
				'gouvernourat' => $this->input->post('gouvernourat'),
	   'ville' => $this->input->post('ville'),
    'codepostal' => $this->input->post('codepostal'),
				'telephone' => $this->input->post('telephone'),
				'adressemail' => $this->input->post('email'),
				
			);

			// Insert user
			return $this->db->insert('users', $data);
		}
        
        public function delete_user($cin) {
			$result = $this->db->delete('users', array('cin' => $cin));
			return $this->db->affected_rows();
		}

		// Check username exists
		public function check_cin_exists($cin){
			$query = $this->db->get_where('users', array('cin' => $cin));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
		public function login(){
			$cin = $this->input->post('cin');
			$datedenaiss = $this->input->post('date');
			$query = $this->db->get_where('users', array('cin' => $cin, 'datedenaiss' => $datedenaiss));
			if(empty($query->row_array())){
			 return false;
			} else {
				return true;
			}
		}
	}
