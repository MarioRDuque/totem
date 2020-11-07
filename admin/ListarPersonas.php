<!DOCTYPE html>
<html>
<?php include_once "encabezado.php" ?>
<br>
<?php?>
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
								<td>
									<button type="button" class="btn btn-danger" href="<?php echo "EliminarPersonas.php?id=" . $totem->id_persona ?>" data-toggle="modal" data-target="#staticBackdrop<?php echo $totem->id_persona ?>">
										Eliminar
									</button>

									<div class="modal fade" id="staticBackdrop<?php echo $totem->id_persona ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel">Eliminar</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													¿Estas seguro de eliminar a <?php echo "" . $totem->nombre ?> ?
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
													<a class="btn btn-primary" href="<?php echo "EliminarPersonas.php?id=" . $totem->id_persona ?>">Aceptar</a>
												</div>
											</div>
										</div>
									</div>
								</td>
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