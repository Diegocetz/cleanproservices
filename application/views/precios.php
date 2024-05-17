   <div class="container container-fluid">
   <br><br><br><br>
    <div class="text-custom5 col">
        <div class="text-center">
            <h2> Comienza tu plan limpieza ahora!</h2>
        </div>
    </div>
    <div class="card-deck p-5">

        <!--CARTA-->
        <div class="card">
            <div class="card-header bg-primary">
                <br>
            </div>

            <!-- CARTA CUERPO -->
            <div class="card-body text-custom5">
                <h1 class="text-center">Básico</h1>
                <p class="text-center">Limpieza particular</p>
                <h2 class="text-center">MX$499.99</h2>
                <form action="<?php echo site_url('principal/add_to_cart'); ?>" method="post">
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="name" value="Básico">
                    <input type="hidden" name="price" value="499.99">
                    <input type="hidden" name="qty" value="1">
                    <button type="submit" class="btn btn-block">Comenzar plan</button>
                </form>
                <br>
                <p>El plan básico incluye:</p>
                <li><i class="bi bi-check2-circle fa-2x"></i> Lavado de salas</li>
                <li><i class="bi bi-check2-circle fa-2x"></i> Lavado de colchones</li>
                <li><i class="bi bi-check2-circle fa-2x"></i> Lavado de alfombras</li>
            </div>
        </div>

        <!--CARTA-->
        <div class="card">
            <div class="card-header text-center bg-warning">
                <p class="badge-custom1">MOST POPULAR</p>
            </div>

            <!-- CARTA CUERPO -->
            <div class="card-body text-custom5 ">
                <h1 class="text-center">Profesional</h1>
                <p class="text-center">Limpieza Empresarial</p>
                <h2 class="text-center">MX$999.99</h2>
                <form action="<?php echo site_url('principal/add_to_cart'); ?>" method="post">
                    <input type="hidden" name="id" value="2">
                    <input type="hidden" name="name" value="Profesional">
                    <input type="hidden" name="price" value="999.99">
                    <input type="hidden" name="qty" value="1">
                    <button type="submit" class="btn btn-block">Comenzar plan</button>
                </form>
                <br>
                <p>El plan profesional incluye:</p>
                <li><i class="bi bi-check2-circle fa-2x"></i> Desinsectación y desratización</li>
                <li><i class="bi bi-check2-circle fa-2x"></i> Manejo integral de plagas</li>
                <li><i class="bi bi-check2-circle fa-2x"></i> Desinfección patógena</li>
            </div>
        </div>
    </div>
</div>
<br><br>
<br><br>
<div class="container container-fluid">
   <div class="table-responsive-sm">
      <table class="table  bg-dark text-white">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">
                  <h3>Servicios</h3>
               </th>
               <th scope="col">
                  <h3>Basico</h3>
                  <h2>MX$499.99</h2>
                  <button class="btn">Comenzar plan</button>
               </th>
               <th scope="col" class="thead">
                  <h3>Pro</h3>
                  <h2>MX$999.99</h2>
                  <button class="btn">Comenzar plan</button>
               </th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row">1</th>
               <td>Lavado de salas</td>
               <td><i class="bi bi-check-circle fa-2x"></i></td>
               <td><i class="bi bi-check-circle fa-2x"></i></td>
            </tr>
            <tr>
               <th scope="row">2</th>
               <td>Lavado de colchones</td>
               <td><i class="bi bi-check-circle fa-2x"></i></td>
               <td><i class="bi bi-check-circle fa-2x"></i></td>
            </tr>
            <tr>
               <th scope="row">3</th>
               <td>Lavado de alfombras</td>
               <td><i class="bi bi-check-circle fa-2x"></i></td>
               <td><i class="bi bi-check-circle fa-2x"></i></td>
            </tr>
            <th scope="row">4</th>
            <td>Desinsectación y desratización</td>
            <td><i class="bi bi-x-circle-fill fa-2x"></i></td>
            <td><i class="bi bi-check-circle fa-2x"></i></td>
            </tr>
            <th scope="row">5</th>
            <td>Manejo integral de plagas</td>
            <td><i class="bi bi-x-circle-fill fa-2x"></i></td>
            <td><i class="bi bi-check-circle fa-2x"></i></td>
            </tr>
            <th scope="row">6</th>
            <td>Desinfección patógena</td>
            <td><i class="bi bi-x-circle-fill fa-2x"></i></td>
            <td><i class="bi bi-check-circle fa-2x"></i></td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
</div>
<br><br>
<div class="container container-fluid">
   <div id="accordion">
      <div class="card-body text-custom5">
         <h2>Preguntas frecuentes</h2>
      </div>
      <div class="card">
         <div class="card-header text-custom6" id="headingOne">
            <button class="btn-card btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="collapse" aria-controls="collapseOne">
            <?php foreach ($question_1 as $news_item): ?>
               <h4><?php echo $news_item['title']; ?></h4>
            </button>
         </div>
         <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body text-custom6">
            <p><?php echo $news_item['text']; ?></p>
            </div>
         </div>
      </div>
      <?php endforeach; ?>

     <div class="card">
         <div class="card-header text-custom6" id="headingTwo">
            <button class="btn-card btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="collapse" aria-controls="collapseTwo">
            <?php foreach ($question_2 as $news_item): ?>
               <h4><?php echo $news_item['title']; ?></h4>
            </button>
         </div>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body text-custom6">
            <p><?php echo $news_item['text']; ?></p>
            </div>
         </div>
      </div>
      <?php endforeach; ?>

      <div class="card">
         <div class="card-header text-custom6" id="headingThree">
            <button class="btn-card btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="collapse" aria-controls="collapseThree">
            <?php foreach ($question_3 as $news_item): ?>
               <h4><?php echo $news_item['title']; ?></h4>
            </button>
         </div>
         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body text-custom6">
            <p><?php echo $news_item['text']; ?></p>
            </div>
         </div>
      </div>
   </div>
</div>
      <?php endforeach; ?>
      <br><br>