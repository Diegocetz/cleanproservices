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

        <?php echo form_open('Login/login');?>
            <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <?php echo form_error('email'); ?>
            </div>
            
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            <?php echo form_error('password'); ?>
            </div>
            <br>
            <div class="form-group">
                <button class="g-recaptcha btn btn-block" 
                        data-sitekey="TU_RECAPTCHA_SITE_KEY" 
                        data-callback='onSubmit' 
                        data-action='submit'>Iniciar sesión</button>
                        <?php echo $this->session->flashdata('login_error'); ?>
        <?php form_close(); ?>
            </div>

            <div class="col-sm"> 
            <div class="d-flex justify-content-center">
        <a class="" href="">¿No tienes una cuenta?</a>
    </div>
    <br>
    </div>

    <div class="col-sm">
    <div class="d-flex justify-content-center">

        <a class="" href="">Restablecer contraseña</a> 

    </div>
    </div>
    
 </div>
    </div>
    </div>
        <?php echo form_close(); ?>
        <br><br><br><br><br>
   
