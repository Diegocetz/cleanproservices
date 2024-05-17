<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {
       
        public function __construct()
        {
                parent::__construct();							
                        $this->load->helper('form','email');
                        $this->load->library('form_validation', 'session');       
                        $this->load->model('Aunt');     
        }	
        public function logout(){
            $this->session->unset_userdata('authenticated');
            $this->session->unset_userdata('auth_user');
            $this->session->set_flashdata('status','You are logged out successfully');
            redirect(base_url('login'));

        }
    }