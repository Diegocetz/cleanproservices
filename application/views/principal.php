

<!--empieza seccion navbar-->
<nav
 class="navbar flex-column fixed-top navbar-expand-lg navbar-light bg-light"> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="">Clean Pro Services</a>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">Inicio</a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="C:\xampp\htdocs\Testing.github.io\planNegocios.html" role="button" data-bs-toggle="dropdown">Productos</a>
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="C:\xampp\htdocs\Testing.github.io\planNegocios.html">Resumen ejecutivo</a></li>
            <li><a class="dropdown-item" href="#">Administrativo organizacional</a></li>
            <li><a class="dropdown-item" href="#">Mercado</a></li>
            <li><a class="dropdown-item" href="#">Producción o servicios</a></li>
            <li><a class="dropdown-item" href="#">Responsabilidad social</a></li>
            <li><a class="dropdown-item" href="#">Legal</a></li>
            <li><a class="dropdown-item" href="#">Finanzas</a></li>
         </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Conocenos</a>
          
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Resumen ejecutivo</a></li>
            <li><a class="dropdown-item" href="#">Administrativo organizacional</a></li>
            <li><a class="dropdown-item" href="#">Mercado</a></li>
            <li><a class="dropdown-item" href="#">Producción o servicios</a></li>
            <li><a class="dropdown-item" href="#">Responsabilidad social</a></li>
            <li><a class="dropdown-item" href="#">Legal</a></li>
            <li><a class="dropdown-item" href="#">Finanzas</a></li>
         </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Contacto</a>
          
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Resumen ejecutivo</a></li>
            <li><a class="dropdown-item" href="#">Administrativo organizacional</a></li>
            <li><a class="dropdown-item" href="#">Mercado</a></li>
            <li><a class="dropdown-item" href="#">Producción o servicios</a></li>
            <li><a class="dropdown-item" href="#">Responsabilidad social</a></li>
            <li><a class="dropdown-item" href="#">Legal</a></li>
            <li><a class="dropdown-item" href="#">Finanzas</a></li>
         </ul>
        </li>
        
    </ul>
    
  </div>
  </nav>

<!--Finaliza el navbar-->
<body>


<div
  id="carouselVideoExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
      echo '<video class="img-fluid" autoplay loop muted><source src="' . $item['ruta_imagen'] . 'type="video/mp4"/></video>'; 
            }
          }
          ?>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
      echo '<video class="img-fluid" autoplay loop muted><source src="' . $item['ruta_imagen'] . 'type="video/mp4"/></video>'; 
            }
          }
          ?>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>

    <div class="carousel-item">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
      echo '<video class="img-fluid" autoplay loop muted><source src="' . $item['ruta_imagen'] . 'type="video/mp4"/></video>'; 
            }
          }
          ?>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  


  
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
</div>



<!--CUERPO DE PAGINA-->
<body>
        <div class="container-fluid">
        <div class="card text-white bg-dark mb-3">
        <?php
              if(!empty($imagen4)){
              foreach($imagen4 as $item){
                echo '<img class="rounded-circle mx-auto d-block img-fluid" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?> 
           <div class="card-body">
    <?php if(!empty($contenido_encabezado)){
            foreach($contenido_encabezado as $item){
              echo '<h1 class="card-title text-center">' . $item['nombre'] . '</h1>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
    </div>
  </div>

  <div class="card-deck">
  <div class="card text-white bg-dark mb-3">
              <?php
              if(!empty($imagen)){
              foreach($imagen as $item){
                echo '<img class="rounded-top card-img-top img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>

           <div class="card-body">
               <?php if(!empty($contenido_encabezado2)){
            foreach($contenido_encabezado2 as $item){
              echo '<h2 class="mt-0 mb-1">' . $item['nombre'] . '</h2>';
              echo '<p class="mt-0 mb-1 card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          </div>
        </div>
        <div class="card text-white bg-dark mb-3">
              <?php
              if(!empty($imagen2)){
              foreach($imagen2 as $item){
                echo '<img class="rounded-top card-img-top img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>
              <div class="card-body">
              <?php if(!empty($contenido_encabezado3)){
            foreach($contenido_encabezado3 as $item){
              echo '<h2 class="mt-0 mb-1">' . $item['nombre'] . '</h2>';
              echo '<p class="mt-0 mb-1 card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          </div>
        </div>
        <div class="card text-white bg-dark mb-3">

              <?php
              if(!empty($imagen3)){
              foreach($imagen3 as $item){
                echo '<img class="rounded-top card-img-top img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  
              }
            }
            ?>
             <div class="card-body">
             <?php if(!empty($contenido_encabezado4)){
            foreach($contenido_encabezado4 as $item){
              echo '<h2 class="mt-0 mb-1">' . $item['nombre'] . '</h2>';
              echo '<p class="mt-0 mb-1 card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        </div>
          </div>
            </div>
            
              
          
        <div class="card bg-dark text-white">
        <?php
              if(!empty($banner)){
              foreach($banner as $item){
                echo '<img class="card-img img-fluid" src="' . $item['ruta_imagen'] . '" alt="Card image cap">';  
              }
            }
            ?>
        <div class="card-img-overlay">
      <?php if(!empty($contenido_encabezado5)){
            foreach($contenido_encabezado5 as $item){
              echo '<h2 class="card-title">' . $item['nombre'] . '</h2>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        <button class="btn btn-lg">Leer Más</button>
      </div>
    </div>

    <div class="card bg-dark text-white">
        <?php
              if(!empty($banner2)){
              foreach($banner2 as $item){
                echo '<img class="card-img img-fluid" src="' . $item['ruta_imagen'] . '" alt="Card image cap">';  
              }
            }
            ?>
        <div class="card-img-overlay">
      <?php if(!empty($contenido_encabezado11)){
            foreach($contenido_encabezado11 as $item){
              echo '<h2 class="card-title">' . $item['nombre'] . '</h2>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        <button class="btn btn-lg">Leer Más</button>
      </div>
    </div>

        
    <div class="card bg-dark text-white">
        <?php
              if(!empty($banner3)){
              foreach($banner3 as $item){
                echo '<img class="card-img img-fluid" src="' . $item['ruta_imagen'] . '" alt="Card image cap">';  
              }
            }
            ?>
        <div class="card-img-overlay">
      <?php if(!empty($contenido_encabezado12)){
            foreach($contenido_encabezado12 as $item){
              echo '<h2 class="card-title">' . $item['nombre'] . '</h2>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        <button class="btn btn-lg">Leer Más</button>
      </div>
    </div>


    <div class="card-body">
  <?php if(!empty($contenido_encabezado6)){
            foreach($contenido_encabezado6 as $item){
              echo '<h1 class="card-title text-center">' . $item['nombre'] . '</h1>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          
  </div>

  <div class="card-deck">
  <div class="card text-white bg-dark mb-3">
  <div class="card-header">
  <?php if(!empty($contenido_encabezado9)){
            foreach($contenido_encabezado9 as $item){
              echo '<h1 class="card-title text-center">' . $item['nombre'] . '</h1>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
  </div>

        <div class="card-body">
             <?php if(!empty($contenido_encabezado7)){
            foreach($contenido_encabezado7 as $item){
              echo '<h5 class="card-title text-center">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';

            }
          }
          ?>
          
        </div>
        <div class="card-footer">
        <?php if(!empty($precio_basico)){
            foreach($precio_basico as $item){
              echo '<h5 class="card-title text-center">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          <button class="btn btn-light btn-lg btn-block">Registrar</button>
        </div>
      </div>      
    <div class="card text-white bg-dark mb-3">
    <div class="card-header">
        <?php if(!empty($contenido_encabezado10)){
            foreach($contenido_encabezado10 as $item){
              echo '<h1 class="card-title text-center">' . $item['nombre'] . '</h1>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        </div>
        <div class="card-body">
        <?php if(!empty($contenido_encabezado8)){
            foreach($contenido_encabezado8 as $item){
              echo '<h5 class="card-title text-center">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        </div>
        <div class="card-footer">
        <?php if(!empty($precio_pro)){
            foreach($precio_pro as $item){
              echo '<h5 class="card-title text-center">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          <button class="btn btn-light btn-lg btn-block">Registrar</button>
        </div>
      </div>      
    </div>       
       
  </div>
</div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
  











        