<?php
class Blog_model extends CI_Model {
public function mostrar($val){
        $this->db->where("id", $val);
        $query=$this->db->get('registro');
        if($query!==false && $query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }}