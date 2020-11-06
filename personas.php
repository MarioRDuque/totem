<!DOCTYPE html>
<html>

<head>
    <title>Ingresar Persona</title>
    <link rel="stylesheet" href="utiles/bootstrap.min.css">
    <script src="utiles/jquery.js" type="text/javascript"></script>
</head>
<?php include_once "encabezado.php" ?>
<br>
<br>
<br>
<br>
<br>
<div class="text-center">
    <h1>Registrar Persona</h1>
</div>
<br>
<form action="InsertarPersonas.php" method="POST">
    <div class="form-row">
        <div class="col-3"></div>
        <div class="col-3">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input required name="nombre" class="form-control text-uppercase" id="nombre" placeholder="Nombre de la persona">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input required name="apellidos" class="form-control text-uppercase" id="apellidos" placeholder="Apellidos de la persona">
            </div>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="form-row">
        <div class="col-3"></div>
        <div class="col-3">
            <div class="form-group">
                <label for="rut">RUT</label>
                <input required name="rut" class="form-control text-uppercase" id="rut" placeholder="RUT de la persona">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="rfid">RFID</label>
                <input required name="rfid" class="form-control text-uppercase" id="rfid" placeholder="RFID de la persona">
            </div>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>

</form>

</html>