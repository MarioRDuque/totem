<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=registros.xls');

$inicio = "<script>document.getElementById('inicio').value</script>";
$fin = "<script>document.getElementById('fin').value</script>";

$conexion = pg_connect("host=localhost port=5432 dbname=totem user=postgres password=root") or die('Error al conectar con la base de datos: ' . pg_last_error());
$query = "SELECT * FROM public.registros r INNER JOIN public.persona p ON p.id_persona = r.id_persona";

$result = pg_Exec($conexion, $query);

$data = pg_fetch_assoc($result);

$isPrintHeader = false;

while ($row = pg_fetch_assoc($result)) {
  if (!$isPrintHeader) {

    echo implode("\t", array_keys($row)) . "\n";
    $isPrintHeader = true;
  }
  echo implode("\t", array_values($row)) . "\n";
}
