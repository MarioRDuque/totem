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
    <h1 class="text-center">Reiniciar</h1>
    <br>
    <form action="<?php reiniciar() ?>" method="POST" class="text-center">
      <button type="submit" class="btn btn-success">Reiniciar</button>
    </form>
  </div>

  <?php

  function reiniciar()
  {
  }


  ?>
</body>

</html>