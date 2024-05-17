<?php

class User_model extends CI_Model{

    function __construct(){
        parent:: __construct();

    }
    public function set_news()
    {
            
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'password' => $this->input->post('passconf'),
            'email' => $this->input->post('email'),



        );
    
        return $this->db->insert('usuarios', $data);
    }

    public function set_news2()
    {
            
        $data = array(
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),



        );
    
        return $this->db->insert('usuarios', $data);
    }



    public function get(){
       
        $this->db->select('p.id as id_personal, p.nombre, p.nombre2, p.apellido_materno,p.apellido_paterno, p.id_rango, r.nombre_rango, p.procedencia, p.status'); 
        $this->db->from('personal p');
        $this->db->join('roles r', 'r.id_rango = p.id_rango');
        $this->db->where('p.status', 1);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        
        if ($query !== false && $query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    public function insert($datos) {
        // Insertar los datos en la base de datos
        $this->db->insert('personal', $datos);

        // Verificar si la inserción fue exitosa
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function trae_rol() {
        $this->db->select('id_rango,nombre_rango'); 
        $this->db->from('roles');
        $query = $this->db->get();
        if ($query !== false && $query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    

    public function trae_roles($val) {
        $this->db->select('personal.id_rango,personal.status,personal.id_rango,roles.id_rango, roles.nombre_rango '); 
        $this->db->from('personal');
        $this->db->join('roles', 'roles.id_rango = personal.id_rango');
        $this->db->where('procedencia',$val);
        $this->db->group_by('personal.id_rango');
        $query = $this->db->get();
        
        if ($query !== false && $query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    public function eliminar($id) {
        $this->db->where('id', $id);
        $this->db->delete('personal');
    
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function modificar($id_personal, $nombre, $nombre2, $apellido_paterno, $apellido_materno, $procedencia, $id_rango) {
        $this->db->select('id, nombre, nombre2, apellido_paterno, apellido_materno, id_rango, procedencia, status');
        $this->db->where('id', $id_personal);
        $query = $this->db->get('personal');
    
        if ($query->num_rows() > 0) {
            $data = array(
                'nombre' => $nombre,
                'nombre2' => $nombre2,
                'apellido_paterno' => $apellido_paterno,
                'apellido_materno' => $apellido_materno,
                'procedencia' => $procedencia,
                'id_rango' => $id_rango
            );
    
            $this->db->where('id', $id_personal); 
            $this->db->update('personal', $data);
    
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    

    }
    
    ?>

