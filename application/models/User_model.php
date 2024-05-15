<?php

class User_model extends CI_Model{

    function __construct(){
        parent:: __construct();

    }
    public function set_news()
    {
            
        $slug = url_title($this->input->post('username'), 'dash', TRUE);
    
        $data = array(
            'username' => $this->input->post('username'),
            'username' => $slug,           
            'password' => $this->input->post('password'),
            'password2' => $this->input->post('password2'),
            'email' => $this->input->post('email'),



        );
    
        return $this->db->insert('usuarios', $data);
    }
}