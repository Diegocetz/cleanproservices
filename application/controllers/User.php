<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('Pagina_model','m');
	}
public function index(){
	$datos['contenido_encabezado']=$this->m->consulta_contenido("1");


       $this->load->view('secciones/header');
		$this->load->view('user',$datos);
		$this->load->view('secciones/footer');

	}

}