<!DOCTYPE html>
<html>

<head>
  <title>Totem</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.js" type="text/javascript"></script>
  <script src="bootstrap.min.js" type="text/javascript"></script>
</head>
<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */

if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("select * from persona where id_persona = ?;");
$sentencia->execute([$id]);
$persona = $sentencia->fetchObject();
if (!$persona) {
    #No existe
    echo "¡No existe alguna persona con ese ID!";
    exit();
}

#Si la persona existe, se ejecuta esta parte del código
?>
<div class="row">
	<div class="col-12">
		<h1>Editar</h1>
		<form action="guardarDatosEditados.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $persona->id_persona; ?>">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input value="<?php echo $persona->nombre; ?>" required name="nombre" type="text" id="nombre" placeholder="Nombre de persona" class="form-control">
			</div>
			<div class="form-group">
				<label for="apellidos">Apellidos</label>
				<input value="<?php echo $persona->apellidos; ?>" required name="apellidos" type="text" id="apellidos" placeholder="Apellidos de la persona" class="form-control">
			</div>
			<div class="form-group">
				<label for="rut">RUT</label>
				<input value="<?php echo $persona->rut; ?>" required name="rut" type="number" id="rut" placeholder="RUT de persona" class="form-control">
			</div>
			<div class="form-group">
				<label for="rfid">RFID</label>
				<input value="<?php echo $persona->rfid; ?>" required name="rfid" type="number" id="rfid" placeholder="RFID de persona" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./ListarPersonas.php" class="btn btn-warning">Volver</a>
		</form>
	</div>
</div>
</html>