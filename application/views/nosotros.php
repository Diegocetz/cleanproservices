<body>

<br><br>
<br><br>
<br><br>
<br><br>
<div class="container container-fluid">
  <div class="card-deck">
  <div class="card">
          
  <?php
              if(!empty($imagen2)){
              foreach($imagen2 as $item){
                echo '<img class="rounded-circle img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>  

          <div class="card-body card-black">
               <?php if(!empty($contenido_encabezado2)){
            foreach($contenido_encabezado2 as $item){
              echo '<h2 class="card-title">' . $item['nombre'] . '</h2>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          </div>
        </div>
        <div class="card ">
              <?php
              if(!empty($imagen2)){
              foreach($imagen2 as $item){
                echo '<img class="rounded-circle img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>

          <div class="card-body card-black">
              <?php if(!empty($contenido_encabezado3)){
            foreach($contenido_encabezado3 as $item){
              echo '<h2 class="card-title">' . $item['nombre'] . '</h2>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          </div>
          </div>


        <div class="card ">
        <?php
              if(!empty($imagen2)){
              foreach($imagen2 as $item){
                echo '<img class="rounded-circle img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>

          <div class="card-body card-black">
             <?php if(!empty($contenido_encabezado4)){
            foreach($contenido_encabezado4 as $item){
              echo '<h2 class="card-title">' . $item['nombre'] . '</h2>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        </div>
        </div>

        </div>
<br><br>

<div class="container container-fluid">
<div class="row">

<div class="col-sm-6">
<img class="img-fluid" src="assets\img\personal.jpg" alt="Card image cap">
</div>

<div class="col-sm-6">
<div class="card p-5">
  <div class="card-body">
    <h2 class="card-title p-3">
    ¿Cómo elegimos al personal que brinda tu servicio?
    </h2>
    
    <li class="card-text p-3">
      Aplicamos a los candidatos una entrevista estructurada realizada por nuestro equipo de criminólogos con el fin de detectar que la persona no sea propensa a realizar alguna actividad ilícita, tenga conexión con grupos criminales o haya cometido delitos en empleos anteriores.
</li>

</div>
</div>
</div>


</div>
<br><br><br><br>

<div class="row">

<div class="col-sm">
<div class="card p-5">
<h2 class="card-title v">
Capacitamos a nuestro equipo para entregar detalles especiales en tu hogar.
</h2>
<li class="card-text p-3">
      Sólo 3 de cada 10 personas aprueban nuestro proceso, esto nos asegura que contemos solo con el mejor equipo.
</li>

</div>
</div>

<div class="col-sm">
<img class="img-fluid" src="assets\img\contrato.jpg" alt="Card image cap">
</div>

</div>
</div>
<br><br>



  <h1 class="card-title">Mantener desinfectados los espacios de trabajo es prioridad.
Déjalo en nuestras manos.</h1>

       
        <br><br>

        <!--
        <div class="card-deck">
  <div class="card">
  <img class="rounded-circle img-fluid" src="assets\img\desinfeccion.jpg" alt="card-image"> 
         
          <div class="card-body">
            <h2 class="card-title">Servicio de desinfección</h2>

            <p class="card-text">Sanitizamos tu oficina 1 vez por mes y te entregamos un certificado avalado por la COFEPRIS.
            </p>
          </div>
        </div>
        <div class="card">
        <img class="rounded-circle img-fluid" src="assets\img\desinfeccion.jpg" alt="card-image"> 

  
              <div class="card-body ">
              <h2 class="card-title">Flexibilidad</h2>
  
              <p class="card-text">Solicítalo desde 3 horas a la semana. Tu oficina es única y por eso nos adaptamos a tus necesidades.
              </p>
          </div>
          </div>


        <div class="card">
             <img class="rounded-circle img-fluid" src="assets\img\desinfeccion.jpg" alt="card-image">
              
            
          <div class="card-body">
          <h2 class="card-title">Pago mensual</h2>
          <p class="card-text">El pago y la facturación son mensuales. Aceptamos transferencia y tarjeta de crédito o débito.
          </p>
        </div>
        </div>
        </div>

        -->
        <div class="row">

        <div class="col-sm-6">
<img class="img-fluid" src="assets\img\familia.jpg" alt="Card image cap">

      </div>

  <div class="col-sm-6">
<div class="card">
  <div class="card-body">
    <h2 class="card-title">Contribuye al impacto social que genera nuestra comunidad
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
        </div> 
        </div> 

<br><br>
<div class="row">
  <div class="col-sm-6">
<div class="card">
  <div class="card-body">
    <h2 class="card-title">En los detalles, hacemos la diferencia
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
        </div>
        </div>

<div class="col-sm-6">
<img class="img-fluid" src="assets\img\personal.jpg" alt="Card image cap">

      </div>
      </div>
      

      </div>
      </div>
<br><br>
        </body>