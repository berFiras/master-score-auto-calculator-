<?php
	class Application  extends CI_Controller{
        // Register user
        public function __construct() {
            parent::__construct();
		}
    
        public function home() {
            $this->load->view('application/home');
        }
		
	}
