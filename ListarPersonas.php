<!DOCTYPE html>
<html>

<head>
	<title>Lista De Personas</title>
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
Este archivo lista todos los
datos de la tabla, obteniendo a
los mismos como un arreglo
================================
*/
?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("select * from persona");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!--Recordemos que podemos intercambiar HTML y PHP como queramos-->
<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h1>Lista De Personas</h1>
		</div>
		<div class="col-md-3 text-right">
			<a class="btn btn-primary" href="<?php echo "personas.php" ?>">Nuevo</a>
		</div>
		<!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->

		<br>
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
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
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
	</div>
</div>


</html>