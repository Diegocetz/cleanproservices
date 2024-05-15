<!-- user.php -->
    <!-- Otros elementos head aquí -->
    <!--
    <script src="https://www.google.com/recaptcha/api.js?render=6LdmvqApAAAAANinxpuAHqFOb1UBZbHQdNnf9d0h"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit(); // Enviar el formulario después de la verificación del reCAPTCHA
        }
    </script>

    <br><br><br><br>


    <div class="container container-fluid w-25">
        <br><br>
        <div class="card p-2">
<br>
        <div class="col-sm-12">
        <h2 class="card-title text-center">Iniciar sesión</h2>
    </div>
<br>
    <div class="alert alert-primary" role="alert">
    Acceda y gestione sus datos.
</div>


    -->

      

<!--
    <h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="text" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>
    
    <html>
<head>
        <title><?php echo $title;?></title>
</head>
<body>
        <h1><?php echo $heading;?></h1>

        <h3>My Todo List</h3>

        <ul>
        <?php foreach ($todo_list as $item):?>

                <li><?php echo $item;?></li>

        <?php endforeach;?>
        </ul>

</body>
</html>
        -->
        <?=heading($title, 2);?>
<?php foreach($results as $result): ?>  
  <?=form_open('template/add'); ?>     
    <div class="template">  
     <p><?=$result->marca;?></p>
     
  <div class="image"><?=img('images/'.$result->imagen);?></div>
 
  <div class="detalles"><?='Pantalla: '.$result->pantalla.br(1).'Ram: '.$result->ram.br(1).
                           'Procesador: '.$result->procesador.br(1).'Disco Duro: '.$result->disco_duro;?></div>
              
  <div class="price"><?='Precio: '.'$'.$result->precio;?></div>

        <div class="option">
             <?php if($result->valores):?>
               
                    <?=form_label($result->opcion);?>
                    <?=form_dropdown($result->opcion,$result->valores);?>

                <?php endif; ?>
              
            <?=form_hidden('id', $result->id); ?>
            <?=form_hidden('segment', $this->uri->segment(3));?>
            <?=form_submit('action', 'Comprar'); ?>
      </div>      
  </div><!-- End Products -->
            <?=form_close(); ?>
  <?php endforeach; ?>   
           
<div id="pagination"><?=$this->pagination->create_links();?></div>

