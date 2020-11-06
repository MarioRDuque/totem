<?php

include_once "utiles/base_de_datos.php";

// $id_registro_anterior = null;
// $entroAlguien = false;

$conexion = pg_connect("host=" . $rutaServidor . " port=" . $puerto . " dbname=" . $nombreBaseDeDatos . " user=" . $usuario . " password=" . $clave . "") or die('Error al conectar con la base de datos: ' . pg_last_error());
$query = "SELECT * FROM public.registros r LEFT JOIN public.persona p ON p.rfid = r.rfid ORDER BY r.fecha DESC limit 1";
$query2 = "SELECT * FROM public.registros WHERE tambiente > 0 ORDER BY fecha  DESC limit 1";

$qu = pg_query($conexion, $query);
$data = pg_fetch_object($qu);

//ultima temperatura ambiente
$qu2 = pg_query($conexion, $query2);
$data2 = pg_fetch_object($qu2);

if ($data) {
  $codigoError = $data->cod_error;
  switch ($codigoError) {
    case '0':
      echo "<h2 class='text-center'>Bienvenido " . $data->nombre . " " . $data->apellidos . ";</h2>  <br>";
      echo "<h2 class='text-center'> Su Temperatura es: " . $data->temperatura . " °C</h2>";
      if ($data != null && $data->id_persona == null) {
        echo "<h3 class='text-center'> Por favor dirígete a La Administración para completar tu registro.</h3>";
      }
      break;
    case '4':
      echo "<h2 class='text-center'>Bienvenido " . $data->nombre . " " . $data->apellidos . ";</h2>  <br>";
      echo "<h3 class='text-center'> Por Favor, intenta nuevamente.</h3>";
      break;
  }
}

if ($data2) {
  echo "
  <script type=\"text/javascript\">
   document.getElementById('tambiente').innerHTML=' $data2->tambiente  °C';
  </script>   ";
}

// if ($data && $data->id_registro == $id_registro_anterior) {
//   $entroAlguien = false;
// } else {
//   $entroAlguien = true;
//   $id_registro_anterior = $data->id_registro;
// }

pg_close($conexion);
