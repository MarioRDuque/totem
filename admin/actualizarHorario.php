<?php

if (
  !isset($_POST["fecha"]) ||
  !isset($_POST["hora"])
) {
  exit();
}

$fecha = $_POST["fecha"];
$hora = $_POST["hora"];

shell_exec("date 01-01-2020");
shell_exec("time $hora");
