


<!--Finaliza el navbar-->
<div
  id="carouselVideoExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel">


  
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
      echo '<video class="img-fluid embed-responsive embed-responsive-16by9" autoplay loop muted> <source src="' . $item['ruta_imagen'] . ' type="video/mp4"/> </video>'; 
            }
          }
          ?>
                <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
        <p>
          Nulla vitae elit libero, a pharetra augue mollis interdum.
        </p>
      </div>
    </div>

    <div class="carousel-item">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
     echo '<video class="img-fluid embed-responsive embed-responsive-16by9" autoplay loop muted><source src="' . $item['ruta_imagen'] . 'type="video/mp4"/></video>'; 

            }
          }
          ?>
                <div class="carousel-caption d-none d-md-block">

                <h5>Second slide label</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
    

    <div class="carousel-item">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
    echo '<video class="img-fluid embed-responsive embed-responsive-16by9" autoplay loop muted><source src="' . $item['ruta_imagen'] . 'type="video/mp4"/></video>'; 

            }
          }
          ?>

<div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>
          Praesent commodo cursus magna, vel scelerisque nisl consectetur.
        </p>
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
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!--CUERPO DE PAGINA-->
<body>
<hr></hr>

        <div class="container-fluid">
          
        <?php
              if(!empty($imagen4)){
              foreach($imagen4 as $item){
                echo '<img class="img-thumbnail rounded-circle mx-auto d-block img-fluid" style="width: 18rem" src="' . $item['ruta_imagen'] . '" alt="New York">';  
              }
            }
            ?> 
    <?php if(!empty($contenido_encabezado)){
            foreach($contenido_encabezado as $item){
              echo '<h1 class="text-center display-1">' . $item['nombre'] . '</h1>';
              echo '<p class="text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
    </div>
  <hr></hr>

    
    <div class="card-body">
  <?php if(!empty($contenido_encabezado13)){
            foreach($contenido_encabezado13 as $item){
              echo '<h1 class="card-title text-center">' . $item['nombre'] . '</h1>';
              echo '<p class="card-text text-center small">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          
  </div>

            <div class="card-deck">
        <div class="card">
        <?php
              if(!empty($banner)){
              foreach($banner as $item){
                echo '<img class="card-img img-filter img-fluid" src="' . $item['ruta_imagen'] . '" alt="Card image cap">';  
              }
            }
            ?>
              <div class="card-img-overlay">
      <?php if(!empty($contenido_encabezado5)){
            foreach($contenido_encabezado5 as $item){
              echo '<h5 class="card-title text-white">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        <button class="btn btn-lg">Leer Más</button>
      </div>
    </div>

    <div class="card">
        <?php
              if(!empty($banner2)){
              foreach($banner2 as $item){
                echo '<img class="card-img img-filter img-fluid" src="' . $item['ruta_imagen'] . '" alt="Card image cap">';  
              }
            }
            ?>
              <div class="card-img-overlay">
      <?php if(!empty($contenido_encabezado11)){
            foreach($contenido_encabezado11 as $item){
              echo '<h5 class="card-title text-white">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        <button class="btn btn-lg">Leer Más</button>
      </div>
    </div>

        
    <div class="card">
        <?php
              if(!empty($banner3)){
              foreach($banner3 as $item){
                echo '<img class="card-img img-filter img-fluid" src="' . $item['ruta_imagen'] . '" alt="Card image cap">';  
              }
            }
            ?>
              <div class="card-img-overlay">
      <?php if(!empty($contenido_encabezado12)){
            foreach($contenido_encabezado12 as $item){
              echo '<h5 class="card-title text-white">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        <button class="btn btn-lg">Leer Más</button>
      </div>
    </div>
        </div>
        </div>
        <hr></hr>

        <div class="card-body">
        <h1 class="text-center display-4">Nuestros programas</h1>
        </div>

<div class="container-fluid">
           <div class="card-columns">
        <div class="card">
        <img class="card-img" src="assets\img\LIMPIEZAS EXHAUSTIVAS.jpg" alt="Card image">
        </div>
       
        <div class="card p-3 card-black">
          <h5>Limpiezas exhaustivas</h5>   
        </div>

          <div class="card">
        <img class="card-img" src="assets\img\LIMPIEZA A INMUEBLES.jpg" alt="Card image">
        </div>

        <div class="card p-3  card-black">
        <h5>Limpieza a inmuebles</h5>
        </div>
        

        <div class="card">
        <img class="card-img" src="assets\img\desinfeccion.jpg" alt="Card image">
        </div>
        
        <div class="card p-3  card-black">
        <h5>DESINFECCIÓN PATÓGENA</h5>
        </div>
        </div>

        <hr></hr>


        <div class="card-body">
        <h1 class="text-center display-4">Preguntas frecuentes</h1>
        </div>

<div class="container-fluid">
           <div class="card-deck">
        <div class="card">       
        <div class="card-body">
        <h5 class="card-title">¿CÓMO ES EL SERVICIO DE DESINFECCIÓN?</h5>
          <p class="card-text">Desinfección de instalaciones mediante técnicas de pulverización y nebulización con desinfectantes de amplio espectro, para prevenir la propagación de bacterias y virus, como el de la gripe o el coronavirus.</p>  
        </div>
        </div>

          <div class="card">
          <div class="card-body">
        <h5 class="card-title">¿CUÁNDO FUMIGAR?</h5>
        <p class="card-text">No importa la temporada, ya que todo el año estamos expuestos a diferentes plagas (por ejemplo roedores en invierno, alacranes en verano, ciempiés en época de lluvias, algunas especies de cucaracha todo el año, etc.).</p>
        </div>
        </div>

        <div class="card">        
        <div class="card-body">
        <h5 class="card-title">¿CÓMO EVITAR LAS HORMIGAS?</h5>
        <p class="card-text">Los problemas surgen cuando entran en nuestros hogares en busca de comida y agua, dónde el control de hormigas puede llegar a ser muy complejo.</p>
      
        </div>
        </div>
        </div>
        <div class="d-flex justify-content-center">
        <button class="btn btn-lg">Saber Más</button>
        </div>


        <hr></hr>


  

        </body>

  











        