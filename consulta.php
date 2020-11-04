<!DOCTYPE html>
<html>

<head>
  <title>Consultas</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.js" type="text/javascript"></script>
</head>

<body class="p-2">
  <?php
  echo  "<p style='float: right;'> " . date("d/m/Y - H:i:s") . "</p>";
  ?>
  <br><br>
  <div class="">
    <img src="logo1.jpg" class="rounded mx-auto d-block" alt="...">
    <br>
    <h1 class="text-center">Exportar registros</h1>
    <br>
    <div class="text-center">
      <input type="date" id="inicio">
      <input type="date" id="fin">
      <br><br><br>
      <a class="btn btn-primary" href="excel.php">Exportar</a>
    </div>
</body>

</html>