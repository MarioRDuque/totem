<!DOCTYPE html>
<html>

<head>
  <title>Totem</title>
</head>

<body>
  <h1><?php echo "Hello World" ?></h1>
</body>

</html>

<?php
$conexion = pg_connect("host=localhost port=5432 dbname=totem user=postgres password=root") or die('Error al conectar con la base de datos: ' . pg_last_error());
$query = "SELECT * FROM public.registros limit 1";
$result = pg_query($query);

$arr = pg_fetch_all($result);

print_r($arr);

echo 'test2';
?>