<?php

$conexion = pg_connect("host=localhost port=5432 dbname=totem user=postgres password=root") or die('Error al conectar con la base de datos: ' . pg_last_error());
$query = "SELECT * FROM public.registros r INNER JOIN public.persona p ON p.id_persona = r.id_persona ORDER BY r.fecha DESC limit 1";

$qu = pg_query($conexion, $query);

$data = pg_fetch_object($qu);


if($data!=null && $data->id_persona!=null){
  echo "<br><br><h2 class='text-center' style='font-size: 20px'>Temperatura: " . $data->tambiente . " </h2>";
}

/* Cierra la conexion con la base de datos */
pg_close($conexion);
