
<?php
	class Carrito extends CI_Controller {
	
			public function __construct()
			{
					parent::__construct();
					$this->load->model('model_carrito');
					$this->load->library('cart');
                    $this->load->helper('form');

			}
            public function carrito(){
                $data['1'] = $this->model_carrito->cart_delete();
                /*$data['update'] = $this->model_carrito->cart_update();
                $data['delete'] = $this->model_carrito->cart_delete();
*/

                $this->load->view('carrito', $data);

            }
        }



 
	


