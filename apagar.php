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


<body class="p-2">
  <br><br>
  <div class="container">
    <br>
    <h1 class="text-center">Apagar</h1>
    <br>
    <form action="<?php apagar() ?>" method="POST" class="text-center">
      <button type="submit" class="btn btn-success">Apagar</button>
    </form>
  </div>

  <?php

  function apagar()
  {
  }


  ?>
</body>
<br><br><br>
<?php include_once "pie.php" ?>
</html>