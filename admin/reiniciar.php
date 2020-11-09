<!doctype html>
<html lang="es">

<?php include_once "encabezado.php" ?>
<br>
<br>
<br>


<body>
  <br><br>
  <div class="container">
    <br>
    <h1 class="text-center">Reiniciar</h1>
    <br>
    <form action="<?php exec("sudo sh /home/pi/shells/reinicia.sh") ?>" method="POST" class="text-center">
      <button type="submit" class="btn btn-success">Reiniciar</button>
    </form>
  </div>

</body>

<br><br><br>
<?php include_once "../pie.php" ?>

</html>