<html>
<head>
<title>My Form</title>
</head>
<body>
<br><br><br><br><br>

<?php echo form_open('registro'); ?>

<div class="container container-fluid">
<div class="card-group">
    <div class="card">
        <img class="img-fluid" src="assets\img\logo clean.jpg" alt="">
    </div>
<div class="card">
    <div class="card-body">
        <h4>Register with your e-mail</h4>
<div class="form-group">
<label for="username" class="col-sm col-form-label"><p>Username</p></label>
<div class="col-sm-12">
<?php echo form_error('username'); ?>  
<input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>"/>
</div>
</div>

<div class="form-group">
<label for="email" class="col-sm col-form-label"><p>Email Address</p></label>
<div class="col-sm-12">
<?php echo form_error('email'); ?>  
<input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>"/>
</div>
</div>

<div class="form-row">
    <div class="form-group col-sm-6">
<label for="password" class="col-sm col-form-label"><p>Password</p></label>
<div class="col-sm">
<?php echo form_error('password'); ?>  

<input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>"/>
    </div>
    </div>

    <div class="form-group col-sm-6">
<label for="password" class="col-sm col-form-label"><p>Password Confirm</p></label>
<div class="col-sm">
<?php echo form_error('passconf'); ?>  
<input type="password" name="passconf" class="form-control" value="<?php echo set_value('passconf'); ?>"/>
</div>
</div>
</div>

<small>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</small>
<br><br>
<div class="form-group col-sm-12">
<input type="submit" class="col-sm col-form-label btn btn-primary" value="Create Account" />
</div>
</div>
</div>
</div>
</div>
</div>
</form>

</body>
</html>