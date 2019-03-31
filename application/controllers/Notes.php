<?php
    class Notes extends CI_Controller{
        // Register note
        public function __construct() {
            parent::__construct();
            $this->load->model(array('note_model'));
            $this->load->library('session');

            if (($this->session->userdata('user_cin') == NULL ) or ($this->session->userdata('user_datedenaiss') == NULL )) {
                redirect('users/login');
            } else {
                $this->user = $this->session->userdata('user_cin');
            }
        }

        private function to_score_if_already_registred() {
            if($this->note_model->cin_exists($this->user)) {
                redirect('notes/score');
            }
        }

        private function to_register_if_not_registred() {
            if(!$this->note_model->cin_exists($this->user)) {
                redirect('notes/register');
            }
        }

        public function notes(){
            $this->to_score_if_already_registred();
        
      $data['title']= 'Inscription Master';

       
      $annbac = NULL;
      $mentionbac = NULL;
      $red_bac = NULL;
      $e_diplome = NULL;
      $n_diplome = NULL;
      $specialite = NULL;
      $o_diplome = NULL;
      $etuSup_year_1 = NULL;
      $etuSup_niveau_1 = NULL;
      $etudes_poursuivi_p = NULL;
      $moyen_p = NULL;
      $nbr_red_etusup_p = NULL;
      $mention_p = NULL;
      $session_p = NULL;
      $annee_d = NULL;
      $etablissement_d = NULL;
      $etudes_poursuivi_d = NULL;
      $moyen_d = NULL;
      $nbr_red_etusud_d = NULL;
      $mention_d = NULL;
      $session_d = NULL;
      $annee_t = NULL;
      $etablissement_t = NULL;
      $etudes_poursuivi_t = NULL;
      $moyen_t = NULL;
      $nbr_red_etusup_t = NULL;
      $mention_t = NULL;
      $session_t = NULL;
        
      $cin = $this->user;

        extract($_POST);
      if(!isset($submit)) {

        $this->load->view('templates/header');
        $this->load->view('notes/register', $data);
        $this->load->view('templates/footer');
       } else {
        /*
                            // form validate here
                            $this->form_validation->set_rules('annbac','anneebac','required');
                            $this->form_validation->set_rules('mentionbac','mentionbac','required');
                            $this->form_validation->set_rules('nbr_red_bac','nbr_red_bac','required');
                            $this->form_validation->set_rules('etab_dernier_diplome','etab_dernier_diplome','required');
                            $this->form_validation->set_rules('nature_diplome','nature_diplome','required');
                            $this->form_validation->set_rules('specialite','specialite','required');
                            $this->form_validation->set_rules('annee_obtition_diplome','annee_obtition_diplome','required');
                            $this->form_validation->set_rules('annee_p','annee_p','required');
                            $this->form_validation->set_rules('etablissement_p','etablissement_p','required');
                            $this->form_validation->set_rules('etudes_poursuivi_p','etudes_poursuivi_p','required');
                            $this->form_validation->set_rules('moyen_p','moyen_p','required');
                            $this->form_validation->set_rules('nbr_red_etusup_p','nbr_red_etusup_p','required');
                            $this->form_validation->set_rules('mention_p','mention_p','required');
                            $this->form_validation->set_rules('session_p','session_p','required');
                            $this->form_validation->set_rules('annee_d','annee_d','required');
                            $this->form_validation->set_rules('etablissement_d','etablissement_d','required');
                            $this->form_validation->set_rules('etudes_poursuivi_d','etudes_poursuivi_d','required');
                            $this->form_validation->set_rules('moyen_d','moyen_d','required');
                            $this->form_validation->set_rules('nbr_red_etusup_d','nbr_red_etusup_d','required');
                            $this->form_validation->set_rules('mention_d','mention_d','required');
                            $this->form_validation->set_rules('session_d','session_d','required');
                            $this->form_validation->set_rules('annee_t','annee_t','required');
                            $this->form_validation->set_rules('etablissement_t','etablissement_t','required');
                            $this->form_validation->set_rules('etudes_poursuivi_t','etudes_poursuivi_t','required');
                            $this->form_validation->set_rules('moyen_t','moyen_t','required');
                            $this->form_validation->set_rules('nbr_red_etusup_t','nbr_red_etusup_t','required');
                            $this->form_validation->set_rules('mention_d','mention_d','required');
                            $this->form_validation->set_rules('session_t','session_t','required');
                            */
                            

                if ($o_diplome - $annbac < 3) {
                    $data['error'] = "Annee diplome n'est pas valide !!";
                    $this->load->view('templates/header');
                    $this->load->view('notes/register', $data);
                    $this->load->view('templates/footer');  
                
                } else if ( 
                    explode('-', $etuSup_year_1)[1] <= $annbac or 
                    explode('-', $etuSup_year_2)[1] <= explode('-', $etuSup_year_1)[1] or 
                    explode('-', $etuSup_year_3)[1] <= explode('-', $etuSup_year_2)[1] or 
                    explode('-', $etuSup_year_3)[1] < $o_diplome 
                ) {
                    $data['error'] = "Parcours universitaire non  valide !!";
                    $this->load->view('templates/header');
                    $this->load->view('notes/register', $data);
                    $this->load->view('templates/footer');  
                
                } else if ($this->check_cin_exists($cin)) {
                    $data['error'] = "CIN $cin existe deja !!";
                    $this->load->view('templates/header');
                    $this->load->view('notes/register', $data);
                    $this->load->view('templates/footer');  
                } else {
                    $this->note_model->register($cin); 
                    $this->load->view('templates/header');
                    $this->load->view('notes/sucess');
                    $this->load->view('templates/footer');
                }
        }
            
        }

        public function score() {
                        
         $this->to_register_if_not_registred();

         $data['notes'] = $this->note_model->get_notes($this->user);
            
         $this->load->view('templates/header');
         $this->load->view('notes/score', $data);
         $this->load->view('templates/footer');
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
    }
