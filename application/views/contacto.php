
<!-- user.php -->
<head>

   <!-- Otros elementos head aquí -->
   <script src="https://www.google.com/recaptcha/api.js?render=6LdmvqApAAAAANinxpuAHqFOb1UBZbHQdNnf9d0h"></script>
   <script>
      function onSubmit(token) {
         document.getElementById("demo-form").submit(); // Enviar el formulario después de la verificación del reCAPTCHA
      }
   </script>
</head>

<!-- user.php -->
<div class="container-custom1">
<div class="container container-fluid">
   <br><br><br><br><br><br>
   <div class="card-group">
      <div class="card color-custom2">
         <div class="card-body text-custom6">
            <label for="exampleInputPassword1">Nombre(s)</label>
            <input type="name" class="form-control form-control-md" id="exampleInputPassword1" placeholder="Escribe tu nombre">
            <label for="exampleInputPassword1">Apellido(s)</label>
            <input type="name" class="form-control form-control-md" id="exampleInputPassword1" placeholder="Escribe tu apellido">
            <label for="exampleInputEmail1">Correo Electronico</label>
            <input type="email" class="form-control form-control-md" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu correo electronico">
            <label for="exampleInputNumber1">Número de Teléfono</label>
            <input type="phone" class="form-control form-control-md" id="exampleInputNumber1" placeholder="Escribe tu telefono">
            <label for="exampleInputPassword1">Estado</label>
            <select class="custom-select custom-select-md">
               <option selected>Selecciona tu Estado</option>
               <option value="1">Yucatán</option>
            </select>
            <label for="exampleInputPassword1">Municipio</label>
            <select class="custom-select custom-select-md">
               <option selected>Selecciona tu Municipio</option>
               <option value="1">Mérida</option>
               <option value="2">Valladolid</option>
               <option value="3">Kanasín</option>
               <option value="4">Tizimín</option>
            </select>
            <label for="exampleFormControlTextarea1">¿En qué podemos ayudarle?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            <br><br>
            <div class="d-flex justify-content-center">
               <button type="submit" class="btn">Envíar</button>
            </div>
         </div>
      </div>
      <div class="card color-custom2">
         <h2 class="card-header text-center">Contacto directo</h2>
         <div class="card-body text-custom6">
            <img class="img-fluid img-custom1" src="assets\img\logo clean.jpg">
            <br>
            <li><i class="bi bi-house fa-2x"></i>
               <h4 class="col">Calle 18 #154 15 y 13, Prado Norte. C.P 97139. Mérida, Yucatán</h4>
            </li>
            <br>
            <li><i class="bi bi-envelope fa-2x "></i>
               <h4 class="col">cleanproservices@gmail.com</h4>
            </li>
            <br>
            <li><i class="bi bi-telephone fa-2x "></i>
               <h4 class="col">999 243 4809</h4>
            </li>
            <br>
         </div>
      </div>
   </div>
</div>
</div>
<br><br><br><br>
   <div class="container container-fluid w-50">
      <div class="card">
         <div class="card-header">
            <h2 class="col text-center">
               Ubicación
            </h2>
         </div>
         <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?origin=mfe&pb=!1m4!2m1!1sMultilimpia!5e0!6i15" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <br><br>