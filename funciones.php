<?php

include_once "base_de_datos.php";

$id_persona_anterior = null;
$entroAlguien = false;

$conexion = pg_connect("host=" . $rutaServidor . " port=" . $puerto . " dbname=" . $nombreBaseDeDatos . " user=" . $usuario . " password=" . $clave . "") or die('Error al conectar con la base de datos: ' . pg_last_error());
$query = "SELECT * FROM public.registros r LEFT JOIN public.persona p ON p.rfid = r.rfid ORDER BY r.fecha DESC limit 1";

$qu = pg_query($conexion, $query);

$data = pg_fetch_object($qu);

if ($data && $data->id_persona != $id_persona_anterior) {
  $entroAlguien = false;
} else {
  $entroAlguien = true;
}

if ($data != null && $data->id_persona != null) {
  echo "<h2 class='text-center'><i>Bienvenido " . $data->nombre . " " . $data->apellidos . ";</i></h2>  <br>";
  echo "<h2 class='text-center'> <i>Su Temperatura es: " . $data->temperatura . " </i></h2>";
  echo "
            <script type=\"text/javascript\">
            document.getElementById('tambiente').innerHTML='Temperatura:  $data->tambiente  ';
            </script>
        ";
} else {
  if ($data != null && $data->id_registro != null) {
    echo "<h2 class='text-center'><i>Bienvenido NN; por favor debe enrolar su pulsera.</i></h2>  <br>";
    echo "<h2 class='text-center'> <i>Su Temperatura es: XXX </i></h2>";
    echo "
              <script type=\"text/javascript\">
              document.getElementById('tambiente').innerHTML='Temperatura:  $data->tambiente  ';
              </script>
          ";
  }
}

/* Cierra la conexion con la base de datos */
pg_close($conexion);
