<?php

class Pagina_model extends CI_Model{

    function __construct(){
        parent:: __construct();

    }


    public function consulta_contenido($val){
        $this->db->select("nombre, contenido");
        $this->db->from("cat_secciones");
        $this->db->where("id", $val);
        $query=$this->db->get();
        if($query!==false && $query->num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
    }

public function consulta_imagen($val){

    $this->db->select("nombre, ruta_imagen");
    $this->db->from("cat_imagenes2");
    $this->db->where("id", $val);
    $query=$this->db->get();
    if($query!==false && $query->num_rows()>0){

        return $query->result_array();
        
    }else{
        return false;
    }
}


}
?>
