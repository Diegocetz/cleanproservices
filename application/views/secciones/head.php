
<nav class="navbar fixed-top  navbar-expand-lg"> 
<div class="container-fluid">
<a class="navbar-brand" href="<?php echo base_url()?>principal">
  
    <?php
              if(!empty($imagen4)){
              foreach($imagen4 as $item){
                echo '<img class="rounded-circle img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  
              }
            }
            ?> 
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
        <a class="nav-link" href="<?php echo base_url()?>principal">Inicio</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>nosotros">Nosotros</a>
      </li>
             
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>precios">Precios</a>
      </li>
          
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>contacto">Contacto</a>
    
    </ul>



    <a class="mx-3" href="<?php echo base_url()?>user"><h2><i class="bi bi-person"></i></h2></a>  
    <a class="mx-3" href="<?php echo base_url()?>user"><h2><i class="bi bi-person-add"></i></h2></a>  


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
      