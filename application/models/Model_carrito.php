<?php

class Model_carrito extends CI_Model{

    function __construct(){
        parent:: __construct();

    }

public function cart_insert(){


$data = array(
    array(
            'id'      => 'sku_123ABC',
            'qty'     => 1,
            'price'   => 39.95,
            'name'    => 'Plan Basico'
    ),
    array(
            'id'      => 'sku_567ZYX',
            'qty'     => 1,
            'price'   => 9.95,
            'name'    => 'Plan Pro'
    ),
    array(
            'id'      => 'sku_965QRS',
            'qty'     => 1,
            'price'   => 29.95,
            'name'    => 'Plan Personalizado',
            'options' => array('Size' => 'L', 'Color' => 'Red')

    )
);

$this->cart->insert($data);
}


public function cart_update(){


$data = array(
array(
        'rowid'   => 'sku_123ABC',
        'qty'     => 3
),
array(
        'rowid'   => 'sku_567ZYX',
        'qty'     => 4
),
array(
        'rowid'   => 'sku_965QRS',
        'qty'     => 2
)
);

$this->cart->update($data);

}

public function cart_delete(){
    $data = array(
        'rowid' => 'b99ccdf16028f015540f341130b6d8ec',
        'qty'   => 0
    );
    
    $this->cart->update($data);
}

}