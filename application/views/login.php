<body>
<br><br><br><br><br>


<?php if($this->session->flashdata('status')) : ?>
<div class="alert alert-success">
    <?= $this->session->flashdata('status'); ?>
</div>
<?php endif; ?>


<div class="container container-fluid">
<div class="card-group">
    <div class="card">
        <img class="img-fluid" src="assets\img\logo clean.jpg" alt="">
    </div>
<div class="card">
    <div class="card-body">
        <h4>Log in</h4>
<form action="<?php echo base_url('login') ?>" method="POST" id="formulario">

<div class="form-group" id="email">
<label for="exampleInputEmail1" class="col-sm col-form-label"><p>Email Address</p></label>
<div class="col-sm-12">
<input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>"/>
<div class="invalid-feedback">
    el correo es vacio
</div>
</div>
</div>

<div class="form-group" id="password">
<label for="exampleInputPassword1" class="col-sm col-form-label"><p>Password</p></label>
<div class="col-sm-12">
<input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>"/>

<div class="invalid-feedback">
la contraseña se encuentra vacia
</div>
</div>
</div>


<small>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</small>
<br><br>
<div class="form-group col-sm-12">
<input type="submit" class="col-sm col-form-label btn btn-primary" value="Log in to account" />
</div>
<div class="form-group" id="alert">

</div>
</div>
</div>
</div>
</div>
</form>

</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--
<script>
    (function($){
        $("#formulario").submit(function(ev){
            $("#alert").html("");
            $.ajax({
                url: 'login/validate',
                type: 'POST',
                data: $(this).serialize(),
                success: function(err){
                    var json = JSON.parse(err);
                    window.location.replace(json.url);
                },
                statusCode: {
                400: function(xhr){
                        $("#email > input").removeClass('is-invalid');
                        $("#password > input").removeClass('is-invalid');

                    var json = JSON.parse(xhr.responseText);
                if(json.email.length != 0){
                    $("#email > div").html(json.email);
                    $("#email > input").addClass('is-invalid');
                      }
                if(json.password.length != 0){
                    $("#password > div").html(json.password);
                    $("#password > input").addClass('is-invalid');    
                    }
                
                },
                401: function(xhr){
                    var json = JSON.parse(xhr.responseText);
                    $("#alert").html('<div class="alert alert-danger" role="alert">'+ json.msg +'</div>')
                }
            }
            });
            ev.preventDefault();
        });
    })(jQuery);
</script>