<?php

?>

<?php

if (
    !isset($_POST["nombre"]) ||
    !isset($_POST["apellidos"]) ||
    !isset($_POST["rut"]) ||
    !isset($_POST["rfid"]) 
) {
    exit();
}


include_once "base_de_datos.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$rut = $_POST["rut"];
$rfid = $_POST["rfid"];

$sentencia = $base_de_datos->prepare("UPDATE persona SET nombre = ?, apellidos = ?, rut = ?, rfid = ? WHERE id_persona = ?;");
$resultado = $sentencia->execute([$nombre, $apellidos, $rut, $rfid, $id]);
if ($resultado === true) {
    header("Location: ListarPersonas.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}