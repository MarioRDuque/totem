<!DOCTYPE html>
<html>

<head>
  <title>Totem</title>
  <link rel="stylesheet" href="utiles/bootstrap.min.css">
  <script src="utiles/jquery.js" type="text/javascript"></script>
  <script src="utiles/bootstrap.min.js" type="text/javascript"></script>
</head>
<body class="p-5">
<?php include_once "encabezado.php" ?>
<br>
<br>
<br>
<?php
if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "utiles/base_de_datos.php";
$sentencia = $base_de_datos->prepare("select * from persona where id_persona = ?;");
$sentencia->execute([$id]);
$persona = $sentencia->fetchObject();
if (!$persona) {
    echo "¡No existe alguna persona con ese ID!";
    exit();
}
?>
		<div class="text-center">
		<h1>Editar Persona</h1>
		</div>
		<br>
		<br>
		<br>
		<form action="guardarDatosEditados.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $persona->id_persona; ?>">
			<div class="form-row">
			<div class="col-3"></div>
			<div class="col-3">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input value="<?php echo $persona->nombre; ?>" required name="nombre" type="text" id="nombre" placeholder="Nombre de persona" class="form-control">
			</div>
			</div>
			<div class="col-3">
			<div class="form-group">
				<label for="apellidos">Apellidos</label>
				<input value="<?php echo $persona->apellidos; ?>" required name="apellidos" type="text" id="apellidos" placeholder="Apellidos de la persona" class="form-control">
			</div>
			</div>
			<div class="col-3">
			</div>
			</div>
			<div class="form-row">
			<div class="col-3"></div>
			<div class="col-3">
			<div class="form-group">
				<label for="rut">RUT</label>
				<input value="<?php echo $persona->rut; ?>" required name="rut" type="text" id="rut" placeholder="RUT de persona" class="form-control">
			</div>
			</div>
			<div class="col-3">
			<div class="form-group">
				<label for="rfid">RFID</label>
				<input value="<?php echo $persona->rfid; ?>" required name="rfid" type="text" id="rfid" placeholder="RFID de persona" class="form-control">
			</div>
			</div>
			<div class="col-3"></div>
			</div>
			<div class="text-center">
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./ListarPersonas.php" class="btn btn-warning">Volver</a>
			</div>
		</form>
</body>
</html>