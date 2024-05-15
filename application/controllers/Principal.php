
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Principal extends CI_Controller {
	
			public function __construct()
			{
					parent::__construct();							
							$this->load->model('model_template');

					$this->load->helper('url');	

			}
	
			public function index()
			{				
				
					$data['program_1'] = $this->model_template->get_content('1');
					$data['program_2'] = $this->model_template->get_content('2');
					$data['program_3'] = $this->model_template->get_content('3');
					$data['character_1'] = $this->model_template->get_content('4');
					$data['character_2'] = $this->model_template->get_content('5');
					$data['character_ 3'] = $this->model_template->get_content('6');
					$data['title'] = 'ESTE ES EL TITULO';


					$this->load->view('secciones/header', $data);
					$this->load->view('secciones/head', $data);
					$this->load->view('principal', $data);
					$this->load->view('secciones/footer', $data);
			}
		
			public function nosotros()
			{
				
					$data['character_1'] = $this->model_template->get_content_about('1');
					$data['character_2'] = $this->model_template->get_content_about('2');
					$data['character_3'] = $this->model_template->get_content_about('3');
					$data['character_4'] = $this->model_template->get_content_about('4');
					$data['character_5'] = $this->model_template->get_content_about('5');
					$data['title'] = 'ESTE ES EL TITULO';
			
					$this->load->view('secciones/header', $data);
					$this->load->view('secciones/head', $data);
					$this->load->view('nosotros', $data);
					$this->load->view('secciones/footer');
			}
	


			public function precios()
			{
				
					$data['question_1'] = $this->model_template->get_content_pricing('1');
					$data['question_2'] = $this->model_template->get_content_pricing('2');
					$data['question_3'] = $this->model_template->get_content_pricing('3');

								
					$this->load->view('secciones/header', $data);
					$this->load->view('secciones/head', $data);
					$this->load->view('precios', $data);
					$this->load->view('secciones/footer');
			}
	

	public function contacto(){

		$data['question_1'] = $this->model_template->get_content_pricing('1');
		

		$recaptcha_response = $this->input->post('g-recaptcha-response');
        $secret_key = '6LdmvqApAAAAANinxpuAHqFOb1UBZbHQdNnf9d0h';

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $secret_key,
            'response' => $recaptcha_response
        );

        $options = array(
            'http' => array (
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $verify = file_get_contents($url, false, $context);
        $captcha_success = json_decode($verify);

        if ($captcha_success->success) {
            // Captcha verificado, continuar con el inicio de sesión
            // lógica de inicio de sesión aquí
        } else {
            // Captcha no verificado, mostrar un mensaje de error o realizar otra acción
        }


		$this->load->view('secciones/header', $data);
		$this->load->view('contacto',$data);
		$this->load->view('secciones/head',$data);
		$this->load->view('secciones/footer',$data);

	}




	}

