
<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo inserta los datos 
enviados a través de formulario.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["rut"]) || !isset($_POST["rfid"])) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$rut = $_POST["rut"];
$rut = $_POST["rfid"];

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare("INSERT INTO persona(nombre, apellidos, rut, rfid) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $apellidos, $rut, $rfid]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

 if ($resultado === true) {
     # Redireccionar a la lista
    header("Location: ListarPersonas.php");
 } else {
     echo "Algo salió mal. Por favor verifica que la tabla exista";
 }
