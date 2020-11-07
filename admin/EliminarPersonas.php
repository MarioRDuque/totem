<?php

if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "../utiles/base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM persona WHERE id_persona = ?;");
$resultado = $sentencia->execute([$id]);
if ($resultado === true) {
    header("Location: ListarPersonas.php");
} else {
    echo "Algo salió mal";
}

