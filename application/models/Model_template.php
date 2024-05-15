<?php

class Model_template extends CI_Model{

    function __construct(){
        parent:: __construct();

    }


    public function get_content($val){
        $this->db->where("id", $val);
        $query=$this->db->get('template');
        if($query!==false && $query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function get_content_about($val){
        $this->db->where("id", $val);
        $query=$this->db->get('about');
        if($query!==false && $query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function get_content_pricing($val){
        $this->db->where("id", $val);
        $query=$this->db->get('princing');
        if($query!==false && $query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    
}