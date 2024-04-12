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
    <h1 class="display-1 text-center login">Login</h1>
    <div class="login-container px-3 mt-0 mb-5">
        <h1 class="text-center display-4">Iniciar sesión</h1>

        <?php echo form_open('login', 'id="demo-form"'); ?>
            <div class="form-group mb-2">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group mb-5">
                <button class="md-5 g-recaptcha btn btn-primary btn-lg btn-block" 
                        data-sitekey="TU_RECAPTCHA_SITE_KEY" 
                        data-callback='onSubmit' 
                        data-action='submit'>Iniciar sesión</button>
            </div>
        <?php echo form_close(); ?>
        
    </div>
