<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Auth extends CI_Model 
    {
       
        public function __construct()
        {
                parent::__construct();							
             if($this->session->has_userdata('authenticated'))
                {
                if($this->session->userdata('authenticated')=='1')
                {
                    echo "You are user";
                }
            }else{
    $this->session->set_flashdata('status', 'login first');
    redirect(base_url('login'));

                
             }        
        }	

    }