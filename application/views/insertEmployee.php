<h1>INSERTAR EMPLEADO</h1>

<form id="fraddemp">

<div class="mb-3">
    <label for="NOMBRE" class="form-label">Nombre del empleado</label>
    <input type="text" class="form-control" name="NOMBRE" placeholder="Ingrese El Nombre Del Empleado">
  </div>

  <div class="mb-3">
    <label for="SALARIO" class="form-label">Salario del empleado</label>
    <input type="number" class="form-control" name="SALARIO" placeholder="Ingrese el salario del empleado" aria-describedby="nota">
  </div>

  <div id="nota" class="form-text">
    Sera redirigido al inicio al finalizar el proceso.
  </div>
  
    <div class="d-grid gap-2 col-6 mx-auto">

    <button class="btn btn-success" type="submit">Enviar</button>
    <a class="btn btn-primary" href="<?php echo site_url('Welcome');?>">Volver a inicio</a>

    </div>


</form>

<script src=<?php echo (site_url('application/views/js/insertar.js')) ?>></script>
