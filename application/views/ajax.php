    <!-- Aquí cargamos jquery y el archivos de nuestras funciones -->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/functions.js"></script>

<div class="container">
   <div class="row">
      <div class="col-md-6" >
         <input id="input-valor" type="text" name="input-valor">
         <button id="boton-ajax" class="btn btn-success">
         Traer con ajax
         </button>
      </div>
      <div id="respuesta-ajax" class="col-md-6">
         <div>Hola</div>
      </div>
   </div>
</div>