<!doctype html>
<html lang="es">

<?php include_once "encabezado.php" ?>
<br>
<br>
<br>
<?php

$exito = false;
if ($_REQUEST) {
  $exito = $_REQUEST['exito'];
}
?>

<body>
  <br><br>
  <div class="container">
    <br>
    <?php
    if ($exito) {
      echo "<div class='alert alert-success' role='alert' id='alerta'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <strong>Exito!</strong>    La operación solicitada se ha realizado correctamente.
     </div>";
    }
    ?>
    <h1 class="text-center">Apagar</h1>
    <br>
    <form action="apagar-funcion.php" method="POST" class="text-center">
      <button type="submit" class="btn btn-success">Apagar</button>
    </form>
  </div>

</body>
<br><br><br>
<?php include_once "../pie.php" ?>

</html>