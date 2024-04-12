


<!--Finaliza el navbar-->
<div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">

  <div class="carousel-indicators carousel-control-prev">
    <button type="btn" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
    </button>
    <button type="btn" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="1" aria-label="Slide 2">
    </button>
    <button type="btn" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="2" aria-label="Slide 3">
    </button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
      echo '<video class="img-fluid embed-responsive" autoplay loop muted src="' . $item['ruta_imagen'] . ' type="video/mp4"/> '; 
            }
          }
          ?>
    </div>

    <div class="carousel-item">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
     echo '<video class="img-fluid embed-responsive" autoplay loop muted src="' . $item['ruta_imagen'] . 'type="video/mp4"/>';

            }
          }
          ?>
    </div>
    

    <div class="carousel-item">
    <?php if(!empty($video2)){
            foreach($video2 as $item){
    echo '<video class="img-fluid embed-responsive" autoplay loop muted src="' . $item['ruta_imagen'] . 'type="video/mp4"/>'; 

            }
          }
          ?>
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Antes</span>
  </button>

  <button class="carousel-control-next" type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
  

<!--CUERPO DE PAGINA-->
<body>
<br><br><br><br><br><br><br>

        <div class="container container-fluid">

            <div class="col-sm-12">
    <?php if(!empty($contenido_encabezado)){
            foreach($contenido_encabezado as $item){
              echo '<h2 class="card-title display-4 text-center">' . $item['nombre'] . '</h2>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
    </div>         

    <br><br><br><br>

    <div class="row">
      <div class="col-sm-8">
  <?php if(!empty($contenido_encabezado13)){
            foreach($contenido_encabezado13 as $item){
              echo '<h2 class="card-title ">' . $item['nombre'] . '</h2>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>     
  </div>
  <div class="col-sm">
  <img class="img-fluid rounded" src="assets\img\logo clean.jpg" alt="">
        </div>
        </div>

      

           

        
        
 
  

<br><br>
        <div class="col-lg">
        <h2 class="card-title display-4 text-center">
          Nuestros programas
        </h2>
        </div>
        <br>
        <br>

      <div class="row">
           <div class="col-sm">
      <img class="img-fluid rounded" src="assets\img\limpieza1.jpg" alt="Card image">
        </div>

        <div class="col-sm-8">
          <h2 class="card-title">
            Limpiezas exhaustivas
          </h2>   
         
          <p class="card-text">
          La limpieza exahustivas se lleva a cabo después de altas hospitalarias o intervenciones médicas. Después de la limpieza, es crucial realizar una desinfección exhaustiva del espacio y de todos sus elementos.
        </p>

        <p class="card-text">
          Nuestro objetivo asegurar que todo esté absolutamente limpio para evitar la penetración de virus u otros agentes perjudiciales en el cuerpo.
          </p>
        </div>
        </div>

        <br><br>

          <div class="row">

          <div class="col-sm">
          <img class="img-fluid rounded" src="assets\img\limpieza2.jpg" alt="Card image">
        </div>

        <div class="col-sm-8">
        <h2 class="card-title">
          Limpieza a inmuebles
        </h2>

        <p class="card-text">
        Una de las principales razones para limpiar el inmueble, es el cuidado de nuestra salud.  ¡Sí! cuando no se ejecutan limpiezas con frecuencia, los gérmenes y bacterias se hacen presente, ocasionando problemas respiratorios, alergias, y gripe.        </p>
        </p>

        <p class="card-text">
        Disponemos de modernas maquinarias de limpieza para hacer el trabajo de forma efectiva, en tiempo récord. Además de contar con operarios profesionales que saben lo que hacen
        </p>
      </div>
        </div>
        
        <br><br>

        <div class="row">

        <div class="col-sm">
        <img class="img-fluid rounded" src="assets\img\limpieza3.jpg" alt="Card image">
        </div>
        
        <div class="col-sm-8">
        <h2 class="card-title">
          Desinfección patógena
        </h2>

        <p class="card-text">
        La desinfección patógena es un proceso mediante el cual se busca eliminar agentes patógenos presentes en un área específica. Estos agentes incluyen hongos, larvas, esporas y diversos tipos de virus, como el Coronavirus o COVID-19.
        </p>

        <p class="card-text">
        Nuestro procedimiento es altamente efectivo, ya que destruye los microorganismos en tan solo 30 segundos y puede permanecer en la superficie tratada hasta por 7 días. Además, la fórmula utilizada es 100% biodegradable y no representa riesgos para los seres humanos ni las mascotas.
        </p>
        </div>

        </div>

<br><br><br><br>
        <div class="col-sm">
        <h1 class="text-center display-4">
          ¿Cómo agendar un servicio de limpieza a domicilio?
        </h1>
        </div>
       <br><br>

       <div class="row">
           <div class="col-sm-8">
        <h4 class="card-title">
          Agenda
        </h4>
          <p class="card-text">
            Selecciona la fecha, hora y duración para tu servicio en nuestra app o web
          </p>  
        </div>
        <div class="col-sm">
          <img class="img-fluid rounded" src="assets\img\agenda.png" alt="">
        </div>
        </div>
        <br><br>
       <div class="row">
           <div class="col-sm-8">
        <h4 class="card-title">
          Paga
        </h4>
        <p class="card-text">
          Realiza tu pago de forma segura con tarjeta débito/crédito, OxxoPay y SPEI
        </p>
        </div>
        <div class="col-sm">
          <img class="img-fluid rounded" src="assets\img\pago.png" alt="">
        </div>
        </div>
 <br><br>
        <div class="row">
           <div class="col-sm-8">
        <h4 class="card-title">
          Limpieza en camino!
        </h4>
        <p class="card-text">
          Una vez terminado tu servicio podrás calificar a la persona asignada.
        </p>
      
        </div>
        <div class="col-sm">
          <img class="img-fluid rounded" src="assets\img\clean.png" alt="">
        </div>
        </div>
       
 <br><br>
        <div class="d-flex justify-content-center">
        <button class="btn">Saber Más</button>
        </div>
        


   

        <br>
<br>

<h2 class="display-4 card-title">Preguntas frecuentes</h2>
<br>
        <div id="accordion">
  <div class="card bg-footer">
    <div class="card-header bg-footer" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed bg-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h4 class="card-text">¿Cómo es el servicio de desifección?</h4>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      Desinfección de instalaciones mediante técnicas de pulverización y nebulización con desinfectantes de amplio espectro, para prevenir la propagación de bacterias y virus      </div>
    </div>
  </div>
  <div class="card bg-footer">
    <div class="card-header bg-footer" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed bg-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h4 class="card-text"> ¿Cómo evitar las hormigas?</h4>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      Los problemas surgen cuando entran en nuestros hogares en busca de comida y agua, dónde el control de hormigas puede llegar a ser muy complejo      </div>
    </div>
  </div>
  <div class="card bg-footer">
    <div class="card-header bg-footer" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed bg-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h4 class="card-text">¿Cuándo fumigar?</h4>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      No importa la temporada, ya que todo el año estamos expuestos a diferentes plagas (por ejemplo roedores en invierno, alacranes en verano, ciempiés en época de lluvias, algunas especies de cucaracha todo el año, etc.).      </div>
    </div>
  </div>
        </div>
        </div>

<br><br>

        </body>

  











        