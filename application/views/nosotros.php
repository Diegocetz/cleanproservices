<body>

<div class="container-custom1 container-fluid img-custom2">
  
  <div class="row">

  <div class="text-custom5 text-white col">

               <?php if(!empty($contenido_encabezado2)){
            foreach($contenido_encabezado2 as $item){
              echo '<h1 class="text-center">' . $item['nombre'] . '</h1>';
              echo '<p>'. $item['contenido'] . '</p>';
            }
          }
          ?>
          </div>
          <div class="col-sm">
    <!--      
  <?php
              if(!empty($imagen2)){
              foreach($imagen2 as $item){
                echo '<img class=" img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>  
          -->
          <img class="img-fluid img-custom1" src="assets\img\quienes.png" alt="">
            </div>       
             </div>
        </div>
        <br>
<div class="container container-fluid">
        <div class="row">
             <!--
             
             <?php
              if(!empty($imagen2)){
              foreach($imagen2 as $item){
                echo '<img class="rounded-circle img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>
            -->
            <div class="col-sm">

            <img class="img-fluid img-custom1" src="assets\img\meta.png" alt="">
            </div>

            <div class="text-custom5  col">

              <?php if(!empty($contenido_encabezado3)){
              foreach($contenido_encabezado3 as $item){
              echo '<h1 class="text-center">' . $item['nombre'] . '</h2>';
              echo '<p>'. $item['contenido'] . '</p>';
            }
          }
          ?>
          </div>
          </div>
          

        <div class="row">
        
        <div class="text-custom5  col">
             <?php if(!empty($contenido_encabezado4)){
            foreach($contenido_encabezado4 as $item){
              echo '<h1 class="text-center">' . $item['nombre'] . '</h2>';
              echo '<p>'. $item['contenido'] . '</p>';
            }
          }
          ?>
        </div>
        <div class="col-sm">
          <!--
        <?php
              if(!empty($imagen2)){
              foreach($imagen2 as $item){
                echo '<img class="img-custom1 img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>
            -->
            <img class="img-fluid img-custom1" src="assets\img\mision.png" alt="">
        </div>
        </div>
</div>
<br><br>
        <div class="container-custom1 container-fluid img-custom2">
          <div class="container">


          </div>

        <div class="row">
        <div class="text-custom5 text-white col">
<img class="img-fluid img-custom1" src="assets\img\familia.jpg" alt="Card image cap">
      </div>


      <div class="text-custom5 text-white col">
    <h2>
      Contribuye al impacto social que genera nuestra comunidad
    </h2>

    <li class="card-text p-3">
    Nuestros equipo cuentan con ingresos superiores y justos por su trabajo.
    </li>

    <li class="card-text p-3">
    Al igual que todos tienen acceso a seguro médico.
    </li>

    <li class="card-text p-3">
    Tienen libertad de elegir las horas y zonas en las que quieren trabajar.
    </li>
    
    <li class="card-text p-3">
    Dedican más tiempo a sus familias.
      </li>
     
        </div> 
        </div> 

<br><br>

<div class="row">
<div class="text-custom5 text-white col">
    <h2>
      En los detalles, hacemos la diferencia
    </h2>

    <li class="card-text p-3">
    Damos seguimiento y atención personalizada a tus servicios.
    </li>

    <li class="card-text p-3">
    Al igual que en los servicios de hogar, nos aseguramos que la persona que entre a tu oficina sea confiable.
    </li>

    <li class="card-text p-3">
    Puedes cancelar en el momento que lo decidas, sin plazos forzosos.
    </li>
    
    <li class="card-text p-3">
¿Necesitas insumos de limpieza? Podemos incluirlos en tu servicio.
    </li>
     
        </div>


        <div class="text-custom5 text-white col">
<img class="img-fluid img-custom1" src="assets\img\personal.jpg" alt="Card image cap">

      </div>
      </div>
      </div>
<br><br>
        </body>