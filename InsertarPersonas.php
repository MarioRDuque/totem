
<?php

?>
<?php

if (!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["rut"]) || !isset($_POST["rfid"])) {
    exit();
}

include_once "utiles/base_de_datos.php";
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$rut = $_POST["rut"];
$rfid = $_POST["rfid"];

$sentencia = $base_de_datos->prepare("INSERT INTO persona(nombre, apellidos, rut, rfid) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $apellidos, $rut, $rfid]);

 if ($resultado === true) {
    header("Location: ListarPersonas.php");
 } else {
     echo "Algo salió mal. Por favor verifica que la tabla exista";
 }
