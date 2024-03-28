<head>
<nav class="navbar navbar-expand-lg navbar-bg bg fixed-top"> 
<a class="navbar-brand" href="#">
  
    <?php
              if(!empty($imagen4)){
              foreach($imagen4 as $item){
                echo '<img class="rounded-circle img-px mx-auto" src="' . $item['ruta_imagen'] . '" alt="">';  
              }
            }
        
            ?> 
           </a>
            

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
</button> 

    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">

    
    
    <ul class="navbar-nav ">    
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
      </li>
    </ul>

    <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-user-circle-o fa-2x "></i></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fa fa-shopping-bag fa-2x "></i>
      </a>
      </li>
    
          </div>  
  </nav>
        </head>
      