<head>
 <!-- Scripts -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jstabla.js"></script>
    <!--<script src="<?= base_url(); ?>assets/js/funciones.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

     </head>         
<body>

<div class="container">
    <div class="login-wrapper col-sm-12 mb-4">
    <form id="form_agregar" action="<?php echo base_url('Principal/insert'); ?>" method="post">
       
  <center>  <h1 class="title " style="color: black;">Administración de Usuarios</h1></center>
        <div class="form-row">
            <div class="form-column col-sm-4 mb-4">
                <label for="username" class="labels">username:</label>
                <input  class="ipt_forms" name="username" id="username_edit">
            </div>
            <div class="form-column col-sm-4 mb-4">
                <label for="email" class="labels">email:</label>
                <input  class="ipt_forms" name="email" id="email_edit">
            </div>
        </div>
       
            <div class="form-column col-sm-4 mb-4">
                <label for="id_rango" class="labels">Rol:</label>
                <select name="id_rango" class="ipt_forms" id="id_rango_edit">
                    <option value="">Selecciona una opción</option>
                    <option value="1">CEO</option>
                    <option value="2">Product Manager</option>
                    <option value="3">Senior</option>
                    <option value="4">Junior</option>
                    <option value="5">Enginner</option>
                    <option value="6">Consultor</option>
                    <option value="7">Usuario</option>
                    <?php foreach ($roles as $rol): ?>
                        <!-- Comprobamos si el rol actual coincide con el rol ded -->
                        <?php $selected = ($rol['nombre_rango'] === $rol_nombre) ? 'selected' : ''; ?>
                        <option value="<?php echo $rol['id_rango']; ?>" <?php echo $selected; ?>><?php echo $rol['nombre_rango']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-column col-sm-4 mb-4">
                <input type="submit" class="btn_guardar" value="Guardar">
                <input type="hidden" id="id_edit" name="id_edit">
                <input type="hidden" id="id_edit" name="id_edit">
            </div>
        </div>
        <input type="hidden" name="status" value="1"> 
        <br><br>
    </form>

<div class="container container-fluid">
<div class="tabla-container table-wrapper col-sm-12 mb-4">
            <div class="table">
                <table id="tabla" class="display table table-striped table-bordered">
                      
                    <thead>
                        <tr>
                            <th scope="col">username</th>
                            <th scope="col">email/th>
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php if (!empty($query)): ?>
                            <?php foreach ($query as $item): ?>
                                <tr>
                                    <td><?php echo $item['username']; ?></td> 
                                    <td><?php echo $item['email']; ?></td> 
                                    <td><?php echo $item['id_rango']; ?></td>
                                    <td>
                                     
                                        <button  class="btn btn-warning" data-id="<?php echo $item['id']; ?>">
                                        <i class="bi bi-trash"></i></button>
                                        <button class="btn btn-success" data-id="<?php echo $item['id']; ?>" >
                                        <i class="bi bi-pencil-square"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">No hay paquetes disponibles en este momento.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
</div>
        
        
    </div>

    <script>
        $(document).ready(function() {
            
            $('.btn-warning').click(function() {
                var id = $(this).data('id'); // Trae el ID de la historia
                eliminar(id); // Llamar a la función para eliminar la historia
            });

            function eliminar(id) {
    if (!id) {
        alert('ID dd no válido.');
        return;
    }

    var pagina = "<?php echo base_url(); ?>MostrarCliente/eliminar";
    var datos = { "id": id };

    swal({
        title: "¿Estás seguro de eliminar el registro?",
        text: "¡Una vez eliminado, no lo podrás recuperar !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            // Realizar la solicitud AJAX para eliminar el registro
            $.ajax({
                type: 'POST',
                url: pagina,
                data: datos,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Si la eliminación fue exitosa, eliminar la fila de la tabla
                        $('#tabla').find('[data-id="' + id + '"]').closest('tr').remove();

                        swal({
                            title: "Éxito",
                            text: "Eliminado correctamente",
                            icon: "success"
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        swal("Error", response.message, "error");
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    swal("Error", "Error en la solicitud AJAX", "error");
                }
            });
        } else {
            swal({
              
               title: "Cancelado"
               
                 });
        }
    });
}


            $('.btn-success').click(function() {
    var id = $(this).data('id'); // Obtener el ID ded

    // Obtener los datos ded
    var username = $(this).closest('tr').find('td:eq(0)').text();
    var email = $(this).closest('tr').find('td:eq(1)').text();
    var rango_id = $(this).closest('tr').find('td:eq(2)').text(); // Obtener el ID del rol
    var rango_nombre = $(this).closest('tr').find('td:eq(3)').text(); // Obtener el username del rol

    // Llenar el formulario de agregar/editar con los datos ded
    $('#username_edit').val(username);
    $('#email_edit').val(email);

    // Establecer el ID ded que se está editando en el campo oculto
    $('#id_edit').val(id);
    
    // Establecer el valor seleccionado del campo select para el rol
    $('#id_rango_edit option').filter(function() {
        return $(this).text() === rango_nombre;
    }).prop('selected', true);

    // MostrarCliente el formulario de agregad
    $('#form_agregar').show();
});



            // agregar Y editad
            $('#form_agregar').submit(function(event) {
                event.preventDefault(); 

                var id = $('#id_edit').val(); // Obtener el ID ded 

                // Obtener los datos del formulario
                var username = $('#username_edit').val();
                var email = $('#email_edit').val();
                var id_rango = $('#id_rango_edit').val();

                // Crear un objeto con los datos del formulario
                var datos = {
                    id: id,
                    username: username,
                    email: email,
                    id_rango: id_rango
                };

               
                var url = id ? '<?php echo base_url('MostrarCliente/modificar'); ?>' : '<?php echo base_url('MostrarCliente/insert'); ?>';

               
                $.ajax({
                type: 'POST',
                url: url,
                data: datos,
                dataType: 'json',
                success: function(response) {
                        if (response.success) {
                        
                            swal({
                                title: "Éxito",
                                text: "Los datos se han guardado correctamente",
                                icon: "success"
                            }).then(() => {
                                location.reload(); 
                            });
                        } else {
                        
                            swal("Error", response.message, "error");
                        }
                    },
                    error: function(xhr, status, error) {
                       console.error(xhr.responseText);
                        swal("Error", "Error en la solicitud AJAX", "error");
                    }
                });

            });
        });
    </script>