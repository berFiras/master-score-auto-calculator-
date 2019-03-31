<?php
	class Admin extends CI_Controller{
        public function __construct() {
            parent::__construct();
			$this->load->model(array('master_model', 'note_model', 'user_model'));
			$this->load->library('session');
			// Fixed admin login and password
			$this->admin_login = 'firas';
			$this->admin_password = 'firas';

			if (($this->session->userdata('admin') == $this->admin_login )) {
				$this->admin = $this->session->userdata('admin');
			}
	}
	
	private function logged_admin() {
		if ($this->session->userdata('admin') == $this->admin_login) {
			return true;
		}

		return false;
	}

	private function to_login_if_not_logged() {
		if (!$this->logged_admin()) {
			redirect('admin/login');
		}
	}

	private function to_dashboard_if_logged() {
		if ($this->logged_admin()) {
			redirect('admin/dashboard');
		}
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('admin/login');
	}

	public function login(){
		$this->to_dashboard_if_logged();
		
        	$data['title']= 'Login Admin';

       
	        $admin_login = NULL;
		       $admin_password = NULL;

	        extract($_POST);
        	if(isset($submit)) {
			// form validate here

			if ($admin_login == $this->admin_login and $admin_password == $this->admin_password) {
				$this->session->set_userdata('admin', $admin_login);
				redirect('admin/dashboard');
			} else {
				$data['error'] = 'Login admin ou mot de passe est incorrecte !';
			}
		
		}


   $this->load->view('admin/login', $data);
	}	
		public function best_scores() {
			$this->to_login_if_not_logged();
			$etab_id = 'ISI-MAHDIA' ;
			$offset = 30;
			$master_id = NULL;
			$cin = NULL;
			$action = 'show';

			extract($_GET);
			// handle actions
            if ($action == 'delete') {
			    if ($cin == NULL) {
						$data['error'] = 'Vous devez sélection l\'etudiant à supprimer !';
					} else {
						if ($this->user_model->delete_user($cin) == 1) {
							$data['success'] = 'Demande a etait annullé avec succès';
						} else {
						  $data['error'] = 'Etudiant non trouvé où déjà supprime!';
						}
					}
		    }

			$best_scores = $this->note_model->get_best_scores_by_master($master_id, $etab_id, $offset);
			$this->load->view('admin/header');
			$data['best_scores'] = $best_scores;	
			$this->load->view('admin/best_scores', $data);
			$this->load->view('admin/footer');
		}


		public function dashboard() {
			$this->to_login_if_not_logged();
			$this->load->view('admin/header');
			$this->load->view('admin/welcome');
			$this->load->view('admin/footer');
		}

		public function master() {
			$this->to_login_if_not_logged();
			$data['title'] = 'Gestion master';
			$titre = NULL;
			$description = NULL;
			$bonus_mention = NULL;
			$bonus_non_redoublant = NULL;
			$bonus_annee_diplome = NULL;

			$master_id = NULL;
			$action = 'show';
			$confirm = false;

			extract($_GET);
			extract($_POST);
			// handle actions
			switch ($action) {
				case 'delete':
					if ($master_id == NULL) {
						$data['error'] = 'Vous devez sélection un mastère à supprimer !';
					} else {
						if ($this->master_model->delete_master($master_id) == 1) {
							$data['success'] = 'Mastere a etait supprimer avec succès';
						} else {
						  $data['error'] = 'Mastère non trouvé où déjà supprime!';
						}
					}
					break;
				case 'update':
					if ($master_id == NULL) {
						$data['error'] = 'Vous devez sélection un mastère pour mettre à jour !!';
					} else {
						if ($this->master_model->update_master($master_id) == 1) {
							$data['success'] = 'Mastère a etait modifier avec succès';
						} else {
						  $data['error'] = 'Mastère non trouvé où était supprimé !';
						}
					}

					break;
				case 'add':
 				  	// form validate here
						$this->form_validation->set_rules('titre','Titre','required');
						$this->form_validation->set_rules('bonus_mention','Bonus mention','integer|required');
						$this->form_validation->set_rules('bonus_non_redoublant','Bonus non redoublant','integer|required');
						$this->form_validation->set_rules('bonus_annee_diplome','Bonus annee diplime','integer|required');

						if($this->form_validation->run() === TRUE){
	
							$this->master_model->add_master();
							$data['success'] = "Mastère '$titre' a etait ajouter avec succés..";		
						} else {
							$data['error'] = 'Verifiez les champs !';
						}
					break;

			}

			$data['masters'] = $this->master_model->get_masters();
			$this->load->view('admin/header');
			$this->load->view('admin/master', $data);
			$this->load->view('admin/footer');

		
		}	

		public function applicant() {
		
		}


		// Check if cin exists
		public function check_cin_exists($cin){
			$this->form_validation->set_message('check_cin_exists', 'That cin is taken. Please choose a different one');
			if($this->note_model->cin_exists($cin)){
				return true;
			} else {
				return false;
			}
		}
	}
