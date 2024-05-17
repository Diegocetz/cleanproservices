<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<style>
	body{
		font-family: "Poppins", sans-serif;
		font-weight: 300;
	}
</style>
<!-- A grey horizontal navbar that becomes vertical on small screens -->
<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-light">  
	<div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets\img\user-svgrepo-com.svg" alt="Avatar Logo" style="width:50px;" class="img-rounded-circle"> 
    </a>
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>principal">HOME</a>
      </li>
     
    </ul>
  </div>

</nav>
<div class="row">
  <div class="col-sm">

<ul class="nav nav-tabs flex-column">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="<?= base_url('clientes') ?>">Usuarios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="<?= base_url('user') ?>">Personal</a>
  </li>
 
</ul> 
</div>
<div class="col-sm-10">
<div class="tab-content">
 
</div>
</div>
</div>