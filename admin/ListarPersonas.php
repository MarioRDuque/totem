<!DOCTYPE html>
<html>

<?php include_once "encabezado.php" ?>
<br>
<?php

?>
<?php
include_once "../utiles/base_de_datos.php";
$sentencia = $base_de_datos->query("select * from persona");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h1>Lista De Personas</h1>
		</div>
		<br>
		<div class="col-md-3 text-right">
			<a class="btn btn-primary" href="<?php echo "personas.php" ?>">Nuevo</a>
		</div>

		<br>
		<br>

		<body>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>RUT</th>
							<th>RFID</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<br>
						<?php foreach ($personas as $totem) { ?>
							<tr>
								<td><?php echo $totem->id_persona ?></td>
								<td><?php echo $totem->nombre ?></td>
								<td><?php echo $totem->apellidos ?></td>
								<td><?php echo $totem->rut ?></td>
								<td><?php echo $totem->rfid ?></td>
								<td><a class="btn btn-success" href="<?php echo "EditarPersonas.php?id=" . $totem->id_persona ?>">Editar</a></td>
								<td><a class="btn btn-danger" href="<?php echo "EliminarPersonas.php?id=" . $totem->id_persona ?>">Eliminar</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</body>
	</div>
</div>
<br><br><br>
<?php include_once "../pie.php" ?>
</html>