<body>
<div class="card-body">
  <?php if(!empty($contenido_encabezado6)){
            foreach($contenido_encabezado6 as $item){
              echo '<h1 class="card-title text-center display-1">' . $item['nombre'] . '</h1>';
              echo '<p class="card-text text-center">'. $item['contenido'] . '</p>';
            }
          }
          ?>
      
  </div>


        <!--EMPIEZA PLAN BASICO-->  

  <div class="card-deck">

  <div class="card">
  <div class="card-header card-black">
  <?php if(!empty($contenido_encabezado9)){
            foreach($contenido_encabezado9 as $item){
              echo '<h2 class="card-title text-center">' . $item['nombre'] . '</h2>';
              echo '<h1 class=" display-4 card-text">'. $item['contenido'] . '</h1>';
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
                  <button class="btn">Registrar</button>
  
  </div>
       
        </div>  
        
      <!--EMPIEZA PLAN PRO-->  
      <div class="card">
      <div class="card-header card-black">
        <?php if(!empty($contenido_encabezado10)){
            foreach($contenido_encabezado10 as $item){
              echo '<h2 class="card-title text-center">' . $item['nombre'] . '</h2>';
              echo '<h1 class=" display-4 card-text ">'. $item['contenido'] . '</h1>';
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
                    <button class="btn">Registrar</button>

   </div>
        
      </div>      
    </div>       
       
</div>
<hr></hr>

        </body>
