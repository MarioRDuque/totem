<?php

$id_persona_anterior = null;
$entroAlguien = false;

$conexion = pg_connect("host=localhost port=5432 dbname=totem user=postgres password=root") or die('Error al conectar con la base de datos: ' . pg_last_error());
$query = "SELECT * FROM public.registros r INNER JOIN public.persona p ON p.id_persona = r.id_persona ORDER BY r.fecha DESC limit 1";

$qu = pg_query($conexion, $query);

$data = pg_fetch_object($qu);

if ($data && $data->id_persona != $id_persona_anterior) {
  $entroAlguien = false;
} else {
  $entroAlguien = true;
  $id_persona_anterior = $data->id_persona;
}

echo "<h2 class='text-center'><i>Bienvenido " . $data->nombre . " " . $data->apellidos . ";</i></h2>  <br>";
echo "<h2 class='text-center'> <i>Su Temperatura es: " . $data->temperatura . " </i></h2>";

/* Cierra la conexion con la base de datos */
pg_close($conexion);

?>