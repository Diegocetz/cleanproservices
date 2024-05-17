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
       
  <center>  <h1 class="title " style="color: black;">Administración de personal</h1></center>
        <div class="form-row">
            <div class="form-column col-sm-4 mb-4">
                <label for="nombre" class="labels">Nombre:</label>
                <input  class="ipt_forms" name="nombre" id="nombre_edit">
            </div>
            <div class="form-column col-sm-4 mb-4">
                <label for="nombre2" class="labels">Nombre2:</label>
                <input  class="ipt_forms" name="nombre2" id="nombre2_edit">
            </div>
            <div class="form-column col-sm-4 mb-4">
                <label for="apellido_paterno" class="labels">Apellido Paterno:</label>
                <input  class="ipt_forms" name="apellido_paterno" id="apellido_paterno_edit">
            </div>
            <div class="form-column col-sm-4 mb-4">
                <label for="apellido_materno" class="labels">Apellido Materno:</label>
                <input  class="ipt_forms" name="apellido_materno" id="apellido_materno_edit">
            </div>
        </div>
        <div class="form-row">
            <div class="form-column col-sm-4 mb-4">
                <label for="procedencia" class="labels">Procedencia:</label>
                <select name="procedencia" class="ipt_forms" id="procedencia_edit">
                    <option value="">Selecciona una opción</option>
                    <option value="Interno">Interno</option>
                    <option value="Externo">Externo</option>
                </select>
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
                    <?php foreach ($roles as $rol): ?>
                        <!-- Comprobamos si el rol actual coincide con el rol del personal -->
                        <?php $selected = ($rol['nombre_rango'] === $rol_nombre) ? 'selected' : ''; ?>
                        <option value="<?php echo $rol['id_rango']; ?>" <?php echo $selected; ?>><?php echo $rol['nombre_rango']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-column col-sm-4 mb-4">
                <input type="submit" class="btn_guardar" value="Guardar">
                <input type="hidden" id="id_personal_edit" name="id_personal_edit">
                <input type="hidden" id="id_personal_edit" name="id_personal_edit">
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
                            <th scope="col">1er Nombre</th>
                            <th scope="col">2do Nombre</th>
                            <th scope="col">Apellido paterno</th>
                            <th scope="col">Apellido materno</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Procedencia</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php if (!empty($query)): ?>
                            <?php foreach ($query as $item): ?>
                                <tr>
                                    <td><?php echo $item['nombre']; ?></td> 
                                    <td><?php echo $item['nombre2']; ?></td> 
                                    <td><?php echo $item['apellido_materno']; ?></td>
                                    <td><?php echo $item['apellido_paterno']; ?></td>
                                    <td><?php echo $item['nombre_rango']; ?></td>
                                    <td><?php echo $item['procedencia']; ?></td>
                                    <td>
                                     
                                        <button  class="btn btn-warning" data-id="<?php echo $item['id_personal']; ?>">
                                        <i class="bi bi-trash"></i></button>
                                        <button class="btn btn-success" data-id="<?php echo $item['id_personal']; ?>" >
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
        alert('ID de personal no válido.');
        return;
    }

    var pagina = "<?php echo base_url(); ?>Mostrar/eliminar";
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
    var id = $(this).data('id'); // Obtener el ID del personal

    // Obtener los datos del personal
    var nombre = $(this).closest('tr').find('td:eq(0)').text();
    var nombre2 = $(this).closest('tr').find('td:eq(1)').text();
    var apellido_paterno = $(this).closest('tr').find('td:eq(2)').text();
    var apellido_materno = $(this).closest('tr').find('td:eq(3)').text();
    var procedencia = $(this).closest('tr').find('td:eq(4)').text(); // Índice 4 para Procedencia
    var rango_id = $(this).closest('tr').find('td:eq(5)').text(); // Obtener el ID del rol
    var rango_nombre = $(this).closest('tr').find('td:eq(6)').text(); // Obtener el nombre del rol

    // Llenar el formulario de agregar/editar con los datos del personal
    $('#nombre_edit').val(nombre);
    $('#nombre2_edit').val(nombre2);
    $('#apellido_paterno_edit').val(apellido_paterno);
    $('#apellido_materno_edit').val(apellido_materno);
    $('#procedencia_edit').val(procedencia); // Cambiado a procedencia

    // Establecer el ID del personal que se está editando en el campo oculto
    $('#id_personal_edit').val(id);
    
    // Establecer el valor seleccionado del campo select para el rol
    $('#id_rango_edit option').filter(function() {
        return $(this).text() === rango_nombre;
    }).prop('selected', true);

    // Mostrar el formulario de agregar personal
    $('#form_agregar').show();
});



            // agregar Y editar personal
            $('#form_agregar').submit(function(event) {
                event.preventDefault(); 

                var id_personal = $('#id_personal_edit').val(); // Obtener el ID del personal 

                // Obtener los datos del formulario
                var nombre = $('#nombre_edit').val();
                var nombre2 = $('#nombre2_edit').val();
                var apellido_paterno = $('#apellido_paterno_edit').val();
                var apellido_materno = $('#apellido_materno_edit').val();
                var procedencia = $('#procedencia_edit').val();
                var id_rango = $('#id_rango_edit').val();

                // Crear un objeto con los datos del formulario
                var datos = {
                    id: id_personal,
                    nombre: nombre,
                    nombre2: nombre2,
                    apellido_paterno: apellido_paterno,
                    apellido_materno: apellido_materno,
                    procedencia: procedencia,
                    id_rango: id_rango
                };

               
                var url = id_personal ? '<?php echo base_url('Mostrar/modificar'); ?>' : '<?php echo base_url('Mostrar/insert'); ?>';

               
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