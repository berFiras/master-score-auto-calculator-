<?php
	class Users extends CI_Controller{
        // Register user
        public function __construct() {
            parent::__construct();
			$this->load->model(array('user_model', 'master_model'));
		}
		public function logout() {
			$this->session->sess_destroy();
			redirect('users/login');
		}
		private function to_score_if_logged_in() {
			if (($this->session->userdata('user_cin') !== NULL ) and ($this->session->userdata('user_datedenaiss') !== NULL )) {
				redirect('notes/score');
			}
		}

		private function to_login_if_not_logged_in() {
			if (($this->session->userdata('user_cin' == NULL)) or ($this->session->userdata('user_datedenaiss') == NULL)) {
				redirect('users/login');
			}
		}

		public function register(){
		$this->to_score_if_logged_in();

        $data['title']= 'Inscription';

        $cin = NULL;
        $nom = NULL;
        $prenom = NULL;
        $choix = NULL;
        $pays = NULL;
	      $nomjf = NULL;
	      $sex = NULL;
        $nationalite = NULL;
        $datedenaiss = NULL;
        $lieudenaiss= NULL;
        $adresscomplete = NULL;
       	$gouvernourat = NULL;
	      $ville = NULL;
        $codepostal = NULL;
        $telephone = NULL;
	      $adressemail = NULL;
	
				extract($_POST);
      	if(!isset($submit)) {

						$data['masters'] = $this->master_model->get_masters();
						
						$this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
      } else {
			$this->form_validation->set_rules('cin', 'cin', 'required|callback_check_cin_exists');
			$this->form_validation->set_rules('nom', 'nom', 'required');
			$this->form_validation->set_rules('prenom', 'prenom', 'required');
			$this->form_validation->set_rules('master_choix', 'choix', 'required');
			$this->form_validation->set_rules('pays', 'pays', 'required');
			$this->form_validation->set_rules('njf', 'nomjf', 'required');
			$this->form_validation->set_rules('sex', 'sex', 'required');
			$this->form_validation->set_rules('nationalite', 'nationalite', 'required');
			$this->form_validation->set_rules('date', 'datedenaiss', 'required');
			$this->form_validation->set_rules('lieu', 'lieudenaiss', 'required');
			$this->form_validation->set_rules('adresscomplete', 'adressc', 'required');
			$this->form_validation->set_rules('gouvernourat', 'gouvernourat', 'required');
			$this->form_validation->set_rules('ville', 'ville', 'required');
			$this->form_validation->set_rules('codepostal', 'codepostal', 'required');
			$this->form_validation->set_rules('telephone', 'telephone', 'required');
			$this->form_validation->set_rules('email', 'adressemail', 'required');
			
			// form validate here
			if($this->form_validation->run() === FALSE){
				if (!$this->check_cin_exists($cin)) {
					$data['error'] = $errors = "CIN $cin invalide ou déjà existant !";
					$this->load->view('templates/header');
					$this->load->view('users/fail', $data);
					$this->load->view('templates/footer');
				} else {
					$this->user_model->register();
					$this->load->view('templates/header');
					$this->load->view('users/sucess');
					$this->load->view('templates/footer');
				}
			} else {
				$data['error'] = 'verifiez les champs !';
    $this->load->view('templates/header');
				$this->load->view('users/fail', $data);
				$this->load->view('templates/footer');
			}
			
	        }
		}

		// Log in user
		public function login(){
			// : check datdenaiss being passed correctlly
			$this->to_score_if_logged_in();

			$data['title'] = 'Connexion Etudiant';
			
			$cin = NULL;
			$date = NULL;
			
			extract($_POST);
			if(!isset($submit)) {
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {
				$this->form_validation->set_rules('cin', 'cin', 'required');
				$this->form_validation->set_rules('date', 'datedenaiss', 'required');
							
				if($this->form_validation->run() === TRUE){
					if ($this->user_model->login()) {
						$session_data = array('user_cin' =>$cin, 'user_datedenaiss' => $date);
						$this->session->set_userdata($session_data);
						redirect('notes/register');
					} else {
						$data['error'] = 'CIN et Date de naissance invalide !';
					}
					
				} else {
					$data['error'] = 'verifiez les champs !';
				}
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			}
		}

		// Check if cin exists
		public function check_cin_exists($cin){
			$this->form_validation->set_message('check_cin_exists', 'That cin is taken. Please choose a different one');
			if($this->user_model->check_cin_exists($cin)){
				return true;
			} else {
				return false;
			}
		}

		
	}
