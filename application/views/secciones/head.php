
<nav class="navbar navbar-expand-lg fixed-top"> 
<a class="navbar-brand" href="<?php echo base_url()?>principal">
  
    <?php
              if(!empty($imagen4)){
              foreach($imagen4 as $item){
                echo '<img class="rounded-circle" src="' . $item['ruta_imagen'] . '" alt="">';  
              }
            }
            ?> 
           </a>
            
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
</button> 

    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
    
    <ul class="navbar-nav">    
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
  
  <li>
        <a class="btn text-white" href="<?php echo base_url()?>user">Login
              </a>  
          </li> 

          <li>
        <a class="btn text-white" href="#" role="button" >Registrar
         </a>
          </li>
          </ul>
    </div>  
      
  </nav>
      