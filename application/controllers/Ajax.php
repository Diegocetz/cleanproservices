<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller
{
    public function crearBoton()
    {
        if (!$this->input->is_ajax_request()) {
            redirect('404');
        } else {
            $respuestas         = array();
            $input              = $this->input->post("input_valor");
            $respuestas['html'] = "<div>Hola " . $input . "</div>";
            
            echo json_encode($respuestas);
            exit();
        }
        $datos['titulo'] = 'Codeigniter con ajax';

        $this->load->view('secciones/headAjax', $datos);
        $this->load->view('ajax', $datos);
        $this->load->view('secciones/footer');
    }
}

