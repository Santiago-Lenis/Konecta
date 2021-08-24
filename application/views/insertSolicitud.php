
<h1>INSERTAR SOLICITUD</h1>

<form id="fraddsoli">


<div class="mb-3">
    <label for="CODIGO" class="form-label">Codigo de la solicitud</label>
    <input type="text" class="form-control" name="CODIGO" placeholder="Ingrese el codigo de la solicitud">
  </div>

  <div class="mb-3">
    <label for="DESCRIPCION" class="form-label">descripcion de la solicitud</label>
    <input type="text" class="form-control" name="DESCRIPCION" placeholder="Ingrese la descripcion de la solicitud">
  </div>

  <div class="mb-3">
    <label for="RESUMEN" class="form-label">Resumen de la solicitud</label>
    <input type="text" class="form-control" name="RESUMEN" placeholder="Ingrese resumen de la solicitud">
  </div>

  <div class="mb-3">
    <label for="ID_EMPLEADO" class="form-label">ID de un empleado existente</label>
    <input type="text" class="form-control" name="ID_EMPLEADO" placeholder="Ingrese el ID de un empleado existente" aria-describedby="nota">
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
