<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Conexión de PHP con PostgreSQL usando PDO">
  <meta name="author" content="Parzibyte">
  <title>Totem</title>
  <link href="utiles/bootstrap.min.css" rel="stylesheet">
</head>

<?php include_once "encabezado.php" ?>
<br>
<br>
<br>
<?php
$fecha = date("Y-m-d H:i:s");
$hora = "";

date_default_timezone_set('America/Santiago');
setlocale(LC_ALL, 'es_CH');

$f1 = date("Y-m-d H:i:s");
?>


<body class="p-2">
  <br><br>
  <div class="container">
    <br>
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
</body>
<br><br><br>
<?php include_once "pie.php" ?>
</html>