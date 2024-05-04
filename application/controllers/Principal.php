<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Pagina_model','m');
	}


	public function index()
	{
		/*SE CARGA EL CONTENIDO DE TEXTO*/
		$datos['contenido_encabezado']=$this->m->consulta_contenido("1");
		$datos['contenido_encabezado5']=$this->m->consulta_contenido("5");
		
		$datos['contenido_encabezado11']=$this->m->consulta_contenido("19");
		$datos['contenido_encabezado12']=$this->m->consulta_contenido("20");
		$datos['contenido_encabezado13']=$this->m->consulta_contenido("21");


		$datos['precio_basico']=$this->m->consulta_contenido("11");
		$datos['precio_pro']=$this->m->consulta_contenido("12");


		
		/*SE CARGA LAS IMAGENES*/
	
	
		$datos['imagen4']=$this->m->consulta_imagen("6");
		$datos['video']=$this->m->consulta_imagen("9");
		$datos['video2']=$this->m->consulta_imagen("10");
		$datos['video3']=$this->m->consulta_imagen("11");
		$datos['banner']=$this->m->consulta_imagen("12");
		$datos['banner2']=$this->m->consulta_imagen("13");
		$datos['logo']=$this->m->consulta_imagen("14");
		$datos['banner3']=$this->m->consulta_imagen("15");



$this->load->view('secciones/header', $datos);
		$this->load->view('principal',$datos);
		$this->load->view('secciones/head',$datos);
		$this->load->view('secciones/footer',$datos);
	

	}

	public function nosotros()
	{
		$datos['contenido_encabezado2']=$this->m->consulta_contenido("2");
		$datos['contenido_encabezado3']=$this->m->consulta_contenido("3");
		$datos['contenido_encabezado4']=$this->m->consulta_contenido("4");


		$datos['imagen']=$this->m->consulta_imagen("8");
		$datos['imagen2']=$this->m->consulta_imagen("7");
		$datos['imagen3']=$this->m->consulta_imagen("5");
		$datos['imagen4']=$this->m->consulta_imagen("6");



		$this->load->view('secciones/header', $datos);
		$this->load->view('nosotros',$datos);
		$this->load->view('secciones/head',$datos);
		$this->load->view('secciones/footer',$datos);


	}

	public function precios()
	{
		$datos['contenido_encabezado6']=$this->m->consulta_contenido("6");
		$datos['contenido_encabezado7']=$this->m->consulta_contenido("7");
		$datos['contenido_encabezado8']=$this->m->consulta_contenido("8");
		$datos['contenido_encabezado9']=$this->m->consulta_contenido("9");
		$datos['contenido_encabezado10']=$this->m->consulta_contenido("10");

		$datos['imagen4']=$this->m->consulta_imagen("6");

		
	

		$this->load->view('secciones/header', $datos);
		$this->load->view('precios',$datos);
		$this->load->view('secciones/head',$datos);
		$this->load->view('secciones/footer',$datos);


	}

	public function contacto(){

		$datos['contenido_encabezado']=$this->m->consulta_contenido("1");
		$datos['imagen4']=$this->m->consulta_imagen("6");
		

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


		$this->load->view('secciones/header', $datos);
		$this->load->view('contacto',$datos);
		$this->load->view('secciones/head',$datos);
		$this->load->view('secciones/footer',$datos);

	}




public function admin()
{
	$datos['contenido_encabezado6']=$this->m->consulta_contenido("6");
	$datos['contenido_encabezado7']=$this->m->consulta_contenido("7");
	$datos['contenido_encabezado8']=$this->m->consulta_contenido("8");
	$datos['contenido_encabezado9']=$this->m->consulta_contenido("9");
	$datos['contenido_encabezado10']=$this->m->consulta_contenido("10");

	$datos['imagen4']=$this->m->consulta_imagen("6");

	


	$this->load->view('secciones/header', $datos);
	$this->load->view('admin',$datos);


}
}


 
	


