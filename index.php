<!DOCTYPE html>
<html>

<head>
  <title>Totem</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
  <div>
    <img src="logo1.jpg" class="rounded mx-auto d-block" alt="...">
    <br>
    <h2 class="text-center"><i>Bienvenido Bryan Joel Camacho Bermeo;</i></h2>
    <br>
    <h2 class="text-center"> <i>Su Temperatura es: 45° </i></h2>
  </div>
</body>

</html>

<?php
$id_persona_anterior = null;
$conexion = pg_connect("host=localhost port=5432 dbname=totem user=postgres password=root") or die('Error al conectar con la base de datos: ' . pg_last_error());
$query = "SELECT * FROM public.registros r INNER JOIN public.persona p ON p.id_persona = r.id_persona limit 1";
$result = pg_query($query);
$arr = pg_fetch_all($result);

if ($arr) {
  $fileObjeto = json_decode(json_encode($arr, JSON_FORCE_OBJECT));

  echo "<pre>" . PHP_EOL;
  var_dump($arr);
  var_dump($fileObjeto);
  echo "</pre>" . PHP_EOL;
}

print_r($arr);

echo 'test2';
?>