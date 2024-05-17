<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {
       
        public function __construct()
        {
                parent::__construct();
                if($this->session->has_userdata('authenticated')){
                        $this->session->set_flashdata('status', 'You are loggedin successfuly');
                        redirect(base_url('dashboard'));
                }   						
                        $this->load->helper('form','email');
                        $this->load->library('form_validation', 'session');       
                        $this->load->model('login_model');     
        }		

  public function index(){
$this->load->view('login');
    $this->load->view('secciones/header');

  }
  /*  }
public function validate() { 
    
    
    $this->form_validation->set_error_delimiters('','');
        
                $this->form_validation->set_rules(
                    'email', 'email',
                    'required|valid_email',
                    array(
                            'required'      => 'You have not provided %s.',
                    )
            );

            $this->form_validation->set_rules('password', 'Password', 'required',
                    array(
                            'required' => 'You must provide a %s.')
        );
        
            
                if ($this->form_validation->run() === FALSE)  //   Verificamos si el usuario superó la validación
                {
                    $errors = array(
                        'email' => form_error('email'),
                        'password' => form_error('password')
                    );
                    echo json_encode($errors);
                    $this->output->set_status_header(400);
                

                }else{
                   $user = $this->input->post('email');
                   $pass = $this->input->post('password');
                   if(!$reset = 
                    $this->login_model->login($user, $pass)){
                            echo json_encode(array('msg' => 'Verifique sus credenciales'));
                            $this->output->set_status_header(401);
                            // Sets the header as:  Unauthorized

                            exit;
                    }
                   
                        $newdata = array(
                            'id' => $reset->id,
                            'username' => $reset->username,
                            'is_logged' => TRUE,
                    ); 
                    $this->session->set_flashdata('msg', 'Bienvenido al sistema ' . $newdata['']);
                    redirect('Principal');
                    $this->load->model('login_model');
                    $this->login_model->login();
                    $this->load->view('formsuccess');
                    $this->load->view('secciones/header');

                }
            }
            public function logout(){
                $vars = array('id', 'status','rango','username','is_logged');
                $this->session->unset_userdata($vars);
                $this->session->sess_destroy();
                redirect('login');
                
            }
        }  */
        public function validate(){
            $this->form_validation->set_error_delimiters('','');
        
            $this->form_validation->set_rules(
                'email', 'email',
                'required|valid_email',
                array(
                        'required'      => 'You have not provided %s.',
                )
        );

        $this->form_validation->set_rules('password', 'Password', 'required',
                array(
                        'required' => 'You must provide a %s.')
    );
    
        
            if ($this->form_validation->run() === FALSE)  //   Verificamos si el usuario superó la validación
            {
               
            $this->index();
            

            }else{
                $data = [
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
         ];
                $user = new Login_model;
                $result = $user->login($data);
                if($result != FALSE)
                {
            echo $result->username;
            $auth_userdetails = [
                'username' => $result->username,
                'email' => $result->email,
            ];
            $this->session->set_userdata('authenticated', '1');
            $this->session->set_userdata('auth_user', $auth_userdetails);
            $this->session->set_flashdata('status','Welcome');

            redirect(base_url('dashboard'));

                } else {
              $this->session->set_flashdata('status','Invalid Email Id or Password');
              redirect(base_url('login'));

                }
               

            }
        
        }
    }

    ?>