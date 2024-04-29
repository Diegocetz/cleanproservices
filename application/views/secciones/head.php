<div class="container">

<nav class="navbar fixed-top  navbar-expand-lg"> 
<a class="navbar-brand" href="<?php echo base_url()?>principal">
  
    <?php
              if(!empty($imagen4)){
              foreach($imagen4 as $item){
                echo '<img class="rounded-circle img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  
              }
            }
            ?> 
            
            <div class="text-brand">
            Clean Pro Services
          </div>
           </a>
            

<button class="navbar-toggler first-button" type="button" data-toggle="collapse"
        data-target="#navbarToggleExternalContent"
        aria-controls="navbarToggleExternalContent" aria-expanded="false"
        aria-label="Toggle navigation">
<div class="animated-icon1"><span></span><span></span><span></span></div>
</button> 


    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">

    <ul class="navbar-nav mr-auto">  

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>principal">
        <i class="bi bi-house mx-2"></i>

        Inicio</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>nosotros">Nosotros</a>
      </li>
             
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>precios">Precios</a>
      </li>
          
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>contacto">Contacto</a>
          </li>
    
    </ul>


    <li class="nav-item">
    <a class="nav-link text-brand" href="<?php echo base_url()?>user">
    <i class="bi bi-person mx-2"></i>
    Login</a>  
          </li>

          <li class="nav-item">   
    <a class="nav-link text-brand" href="<?php echo base_url()?>user">
    <i class="bi bi-person-add mx-2"></i>
    Register</a>  
          </li>

    </div>
    </div>  
          </div>
  
      
  </nav>

<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-light shadow-3 p-4">
      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-block border-bottom m-0">Link 1</button>
      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-block border-bottom m-0">Link 2</button>
      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-block m-0">Link 3</button>
    </div>
  </div>
      