<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class MostrarCliente extends CI_Controller {
       
        public function __construct()
        {
                parent::__construct();
               
              						
                        $this->load->helper('form','email');
                        $this->load->library('form_validation');       
                        $this->load->model('cliente_model');     
        }		  

  public function index(){
    $datos['roles'] = $this->cliente_model->trae_rol();
                $data['query'] = $this->cliente_model->get();
                $this->load->view('secciones/header', $data);

                $this->load->view('clientes', $data);
  }
  public function insert() {
    // Obtener los datos del formulario
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $id_rango = $this->input->post('id_rango');
    $status = 1; // Establecer el valor de estatus como 1 por defecto para que este activo

    // Verificar que los campos no estén vacíos
    if (!empty($username) && !empty($email) && !empty($id_rango)) {
        
        $datos = array(
            'username' => $username,
            'email' => $email,
            'id_rango' => $id_rango,
            'status' => $status
        );

        // Insertar los datos en la base de datos
        if ($this->cliente_model->insert($datos)) {
            // Devolver una respuesta JSON indicando éxito
            echo json_encode(array('success' => true));
        } else {
            // Devolver una respuesta JSON indicando error
            echo json_encode(array('success' => false, 'message' => 'Error al insertar los datos en la base de datos.'));
        }
    } else {
        // Devolver una respuesta JSON indicando campos obligatorios
        echo json_encode(array('success' => false, 'message' => 'Por favor complete todos los campos obligatorios.'));
    }
}

public function eliminar() {
    $id = $this->input->post('id');
    $exito = $this->cliente_model->eliminar($id); 
    
    if ($exito) {

        echo json_encode(array('success' => true));
    } else {
      
        echo json_encode(array('success' => false, 'message' => 'Error al eliminar la historia.'));
    }
}
public function modificar() {
    // Obtener los datos enviados por la solicitud AJAX
    $id = $this->input->post('id');
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $id_rango = $this->input->post('id_rango');
    $nombre_rango = $this->input->post('nombre_rango'); 

   
    $actualizacion_exitosa = $this->cliente_model->modificar($id, $username, $email, $id_rango, $nombre_rango);
    
    // Preparar la respuesta AJAX
    $response = array();
    if ($actualizacion_exitosa) {
        $response['success'] = true;
        $response['message'] = 'Registro actualizado correctamente.';
    } else {
        $response['success'] = false;
        $response['message'] = 'Error al actualizar el registro.';
    }

    // Enviar la respuesta AJAX como JSON
    echo json_encode($response);
}


}