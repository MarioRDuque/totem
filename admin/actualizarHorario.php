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

exec("sudo sh /var/www/html/totem/admin/actualizafecha.sh $mes$dia$horaminuto$anio");
