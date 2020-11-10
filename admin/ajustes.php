<!doctype html>
<html lang="es">

<?php include_once "encabezado.php" ?>
<?php

$exito = false;
$texto = false;
if ($_REQUEST) {
  $exito = $_REQUEST['exito'];
  $texto = $_REQUEST['texto'];
}

$fecha = date("Y-m-d H:i:s");
$hora = "";

date_default_timezone_set('America/Santiago');
setlocale(LC_ALL, 'es_CH');

$f1 = date("Y-m-d H:i:s");
?>


<body>
  <div class="container">
    <br>
    <?php
    if ($exito) {
      echo "<div class='alert alert-success' role='alert' id='alerta'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <strong>Exito! $texto </strong>    La operación solicitada se ha realizado correctamente.
     </div>";
    }
    ?>
    <h1 class="text-center">Ajuste Reloj</h1>
    <br>
    <h3 class="text-center">Hora Actual</h3>
    <h3 class="text-center"><?php echo $f1; ?></h3>
    <form action="actualizarHorario.php" method="POST">
      <div class="form-group">
        <label for="fecha">Fecha</label>
        <input value="<?php echo $fecha; ?>" required name="fecha" type="date" id="fecha" placeholder="Fecha" class="form-control">
      </div>
      <div class="form-group">
        <label for="hora">Hora</label>
        <input value="<?php echo $hora; ?>" required name="hora" type="time" id="hora" placeholder="Hora" class="form-control">
      </div>
      <button type="submit" class="btn btn-success">Fijar Horario</button>
    </form>
  </div>
</body>
<br><br><br>
<?php include_once "../pie.php" ?>

</html>