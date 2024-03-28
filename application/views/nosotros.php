<body>
<div class="container-fluid">
  <div class="card-group">
  
  <div class="card ">
              <?php
              if(!empty($imagen)){
              foreach($imagen as $item){
                echo '<img class="rounded-circle img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>
          </div>
         
          <div class="card p-3 card-black">
               <?php if(!empty($contenido_encabezado2)){
            foreach($contenido_encabezado2 as $item){
              echo '<h5 class="card-title">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          </div>

        <div class="card ">
              <?php
              if(!empty($imagen2)){
              foreach($imagen2 as $item){
                echo '<img class="rounded-circle img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  

              }
            }
            ?>
            </div>

          <div class="card p-3 card-black">
              <?php if(!empty($contenido_encabezado3)){
            foreach($contenido_encabezado3 as $item){
              echo '<h5 class="card-title">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
          </div>


        <div class="card ">
              <?php
              if(!empty($imagen3)){
              foreach($imagen3 as $item){
                echo '<img class="rounded-circle img-fluid" src="' . $item['ruta_imagen'] . '" alt="">';  
              }
            }
            ?>
            </div>
            
          <div class="card p-3 card-black">
             <?php if(!empty($contenido_encabezado4)){
            foreach($contenido_encabezado4 as $item){
              echo '<h5 class="card-title">' . $item['nombre'] . '</h5>';
              echo '<p class="card-text">'. $item['contenido'] . '</p>';
            }
          }
          ?>
        </div>
            </div>
        </div>

        </body>