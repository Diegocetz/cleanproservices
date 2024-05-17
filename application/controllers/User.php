<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User extends CI_Controller {
       
        public function __construct()
        {
                parent::__construct();							
                        $this->load->model('model_template', 'user_model');
                        $this->load->helper('array','form','email');
                        $this->load->library('form_validation', 'session');            
        }		
            public function create() {
                
                $data['program_1'] = $this->model_template->get_content('1');
            
                $this->form_validation->set_rules(
                    'username', 'Username',
                    'required|min_length[5]|max_length[12]|is_unique[usuarios.username]',
                    array(
                            'required'      => 'You have not provided %s.',
                            'is_unique'     => 'This %s already exists.'
                    )
            );

                $this->form_validation->set_rules('password', 'Password', 'required',
                    array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[usuarios.email]');
            
                if ($this->form_validation->run() === FALSE)  //   Verificamos si el usuario superó la validación
                {
                    $this->load->view('secciones/header', $data);
                    $this->load->view('registro');       //   En caso que no, volvemos a presentar la pantalla de login


                }
                else
                {
                    $this->load->model('user_model');
                    $this->user_model->set_news();
                    $this->load->view('formsuccess');
                    $this->load->view('secciones/header', $data);

                }
                
            }


        }

        
        