<?php

class Login_model extends CI_Model{

    function __construct(){
        parent:: __construct();

    }
    public function login($data)
    {
            
     $this->db->select('*');
     $this->db->where('email',$data['email']);
     $this->db->where('password',$data['password']);
     $this->db->from('usuarios');
     $this->db->limit(1);
     $query = $this->db->get();
     if($query->num_rows()==1){
        return $query->row();
     }else{
        return FALSE;
     }  
 }
}

