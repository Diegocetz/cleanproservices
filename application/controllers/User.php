<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Pagina_model','m');
        $this->load->helper('form'); // Cargar el helper de formularios
    }
    
    public function index(){
        $datos['contenido_encabezado']=$this->m->consulta_contenido("1");

        $this->load->view('secciones/header');
        $this->load->view('user',$datos);
		$this->load->view('secciones/footer',$datos);
    }

    public function login(){
        // Verificar el token de reCAPTCHA
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
    }
}
