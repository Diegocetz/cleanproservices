<div class="container container-fluid">
    <br><br>
    <div class="text-custom5 col">
        <div class="text-center">
            <h2>Carrito de Compras</h2>
        </div>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-custom1 text-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Total</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach ($cart_items as $item): ?>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $item['name']; ?></td>
                    <td>MX$<?php echo number_format($item['price'], 2); ?></td>
                    <td><?php echo $item['qty']; ?></td>
                    <td>MX$<?php echo number_format($item['subtotal'], 2); ?></td>
                    <td>
                        <form action="<?php echo site_url('carrito/remove_from_cart/'.$item['rowid']); ?>" method="post">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" class="text-right"><strong>Total:</strong></td>
                    <td>MX$<?php echo number_format($this->cart->total(), 2); ?></td>
                    <td>  
                         <form action="<?php echo site_url('carrito/insert_from_cart/'.$item['rowid']); ?>" method="post">
                            <button type="submit" class="btn btn-primary">Comprar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br><br>