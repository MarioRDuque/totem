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
<?php include_once "../pie.php" ?>

</html>