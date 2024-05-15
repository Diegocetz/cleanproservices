<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User extends CI_Controller {
       
        public function __construct()
        {
                parent::__construct();							
                        $this->load->model('model_template');
$this->load->helper('array','form','email');
                $this->load->library('form_validation');
             

        }

		
            public function create()
            {
                
                $data['program_1'] = $this->model_template->get_content('1');


            
                $data['username'] = 'Create a news item';
            
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('password2', 'Password2', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');

            
                if ($this->form_validation->run() === FALSE)  //   Verificamos si el usuario superó la validación
                {
                    $this->load->view('secciones/header', $data);
                    $this->load->view('registro');       //   En caso que no, volvemos a presentar la pantalla de login
                    $this->load->view('secciones/footer');


                }
                else
                {
                    $this->load->model('user_model');
                    $this->user_model->set_news();
                    $this->load->view('registro');
                    $this->load->view('secciones/header', $data);

                }
                
            }
        }