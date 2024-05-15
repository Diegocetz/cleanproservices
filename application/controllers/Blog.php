<?php
class Blog extends CI_Controller {
	
    public function __construct()
    {
            parent::__construct();
            $this->load->model('blog_model');
            $this->load->helper('form','url_helper');
					$this->load->library('cart','form_validation');
           

    }
    public function blog(){
        $data['hola'] = $this->blog_model->mostrar();
        /*$data['update'] = $this->model_carrito->cart_update();
        $data['delete'] = $this->model_carrito->cart_delete();
*/

        $this->load->view('blog', $data);

    }
}

