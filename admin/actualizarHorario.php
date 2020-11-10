<?php

if (
  !isset($_POST["fecha"]) ||
  !isset($_POST["hora"])
) {
  exit();
}

$fecha = $_POST["fecha"];

$fechaComoEntero = strtotime($fecha);
$anio = date("Y", $fechaComoEntero);
$mes = date("m", $fechaComoEntero);
$dia = date("d", $fechaComoEntero);

$hora = $_POST["hora"];

$horaminuto = str_replace(":", "",  $hora);

$texto = $mes.$dia.$horaminuto.$anio;

exec("sudo sh /home/pi/shells/actualizafecha.sh $texto");

header("Location: ajustes.php?exito=1&&texto=$texto");
