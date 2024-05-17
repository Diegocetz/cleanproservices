<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Mostrar extends CI_Controller {
       
        public function __construct()
        {
                parent::__construct();
               
              						
                        $this->load->helper('form','email');
                        $this->load->library('form_validation');       
                        $this->load->model('user_model');     
        }		  

  public function index(){
    $datos['roles'] = $this->user_model->trae_rol();
                $data['query'] = $this->user_model->get();
                $this->load->view('secciones/header', $data);

                $this->load->view('user', $data);
  }
  public function insert() {
    // Obtener los datos del formulario
    $nombre = $this->input->post('nombre');
    $nombre2 = $this->input->post('nombre2');
    $apellido_paterno = $this->input->post('apellido_paterno');
    $apellido_materno = $this->input->post('apellido_materno');
    $id_rango = $this->input->post('id_rango');
    $procedencia = $this->input->post('procedencia'); 
    $status = 1; // Establecer el valor de estatus como 1 por defecto para que este activo

    // Verificar que los campos no estén vacíos
    if (!empty($nombre) && !empty($apellido_paterno) && !empty($id_rango)) {
        
        $datos = array(
            'nombre' => $nombre,
            'nombre2' => $nombre2,
            'apellido_paterno' => $apellido_paterno,
            'apellido_materno' => $apellido_materno,
            'id_rango' => $id_rango,
            'procedencia' => $procedencia,
            'status' => $status
        );

        // Insertar los datos en la base de datos
        if ($this->user_model->insert($datos)) {
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
    $exito = $this->user_model->eliminar($id); 
    
    if ($exito) {

        echo json_encode(array('success' => true));
    } else {
      
        echo json_encode(array('success' => false, 'message' => 'Error al eliminar la historia.'));
    }
}
public function modificar() {
    // Obtener los datos enviados por la solicitud AJAX
    $id_personal = $this->input->post('id');
    $nombre = $this->input->post('nombre');
    $nombre2 = $this->input->post('nombre2');
    $apellido_paterno = $this->input->post('apellido_paterno');
    $apellido_materno = $this->input->post('apellido_materno');
    $procedencia = $this->input->post('procedencia');
    $id_rango = $this->input->post('id_rango');
    $nombre_rango = $this->input->post('nombre_rango'); 

   
    $actualizacion_exitosa = $this->user_model->modificar($id_personal, $nombre, $nombre2, $apellido_paterno, $apellido_materno, $procedencia, $id_rango, $nombre_rango);
    
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