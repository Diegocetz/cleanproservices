<!-- user.php -->
<head>
    <!-- Otros elementos head aquí -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdmvqApAAAAANinxpuAHqFOb1UBZbHQdNnf9d0h"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit(); // Enviar el formulario después de la verificación del reCAPTCHA
        }
    </script>
</head>

<!-- user.php -->
    <br><br><br><br>


    <div class="container container-fluid container-login">
        <div class="card p-2">
<br>
        <div class="col-sm-12">
        <h2 class="card-title text-center">Iniciar sesión</h2>
    </div>
<br>
    <div class="alert alert-primary" role="alert">
    Acceda y gestione sus datos.
</div>

        <?php echo form_open('login', 'id="demo-form"'); ?>
            <div class="form-group">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" class="form-control form-control-md">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control form-control-md">
            </div>
            <br>
            <div class="form-group">
                <button class="g-recaptcha btn btn-block" 
                        data-sitekey="TU_RECAPTCHA_SITE_KEY" 
                        data-callback='onSubmit' 
                        data-action='submit'>Iniciar sesión</button>
            </div>

            <div class="row">

            <div class="col-sm"> 
            <div class="d-flex justify-content-center">
        <a class="card-text" href="">¿No tienes una cuenta?</a>
    </div>
    <br>
    </div>

    <div class="col-sm">
    <div class="d-flex justify-content-center">

        <a class="card-text" href="">Restablecer contraseña</a> 

    </div>
    </div>
    
 </div>
    </div>
    </div>
        <?php echo form_close(); ?>
        <br><br><br><br><br>
   
