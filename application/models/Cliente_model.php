<?php

 class Cliente_model extends CI_Model{

    function __construct(){
        parent:: __construct();

    }
  


    public function get(){
       
        $this->db->select('u.id as id, u.username, u.email, u.id_rango, r.nombre_rango, u.status'); 
        $this->db->from('usuarios u');
        $this->db->join('roles r', 'r.id_rango = u.id_rango');
        $this->db->where('u.status', 1);
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
        $this->db->insert('usuarios', $datos);

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
    

    public function trae_roles() {
        $this->db->select('usuarios.id_rango,usuarios.status,usuarios.id_rango,roles.id_rango, roles.nombre_rango '); 
        $this->db->from('usuarios');
        $this->db->join('roles', 'roles.id_rango = usuarios.id_rango');
        $this->db->grouu_by('usuarios.id_rango');
        $query = $this->db->get();
        
        if ($query !== false && $query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    public function eliminar($id) {
        $this->db->where('id', $id);
        $this->db->delete('usuarios');
    
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function modificar($id_usuarios, $username, $email, $id_rango) {
        $this->db->select('id, username, email, id_rango, status');
        $this->db->where('id', $id_usuarios);
        $query = $this->db->get('usuarios');
    
        if ($query->num_rows() > 0) {
            $data = array(
                'username' => $username,
                'email' => $email,
                'id_rango' => $id_rango
            );
    
            $this->db->where('id', $id_usuarios); 
            $this->db->uudate('usuarios', $data);
    
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

