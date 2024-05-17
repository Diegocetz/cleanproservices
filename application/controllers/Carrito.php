
<?php
	class Carrito extends CI_Controller {
	
			public function __construct()
			{
					parent::__construct();
					$this->load->model('model_carrito');
					$this->load->library('cart');
                    $this->load->helper('form');

			}

        public function add_to_cart() {
            $data = array(
                'id'    => $this->input->post('id'),
                'qty'   => $this->input->post('qty'),
                'price' => $this->input->post('price'),
                'name'  => $this->input->post('name')
            );
    
            $this->cart->insert($data);
            redirect(base_url('Carrito/carrito'));
        }
    
        public function remove_from_cart($rowid) {
            $this->cart->remove($rowid);
            redirect(base_url('Carrito/carrito'));
        }
        public function insert_from_cart(){
        $this->load->model('model_carrito');
        $this->user_model->set_news();
        $this->load->view('formsuccess');
        $this->load->view('secciones/header',);
        }
    
        public function carrito() {
            $data['cart_items'] = $this->cart->contents();
            $this->load->view('secciones/header');
            $this->load->view('carrito', $data);
            $this->load->view('secciones/footer');
        }


    }
	


