<!doctype html>
<html lang="es">

<?php include_once "encabezado.php" ?>
<br>
<br>
<br>
<?php

$exito = false;
if ($_REQUEST) {
    $exito = $_REQUEST['exito'];
}
?>

<body>
    <div class="container">
        <br>
        <?php
        if ($exito) {
            echo "<div class='alert alert-success' role='alert' id='alerta'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <strong>Exito!</strong>    La operación solicitada se ha realizado correctamente.
     </div>";
        }
        ?>
        <h1 class="text-center">RFID</h1>
        
        <br>
        <div class="form">
            <form action="rfid-funciones.php" method="POST" class="text-center">
                <button type="submit" class="btn btn-success">Activar</button>
            </form>
        </div>
        <br><br>
        <div class="form">
            <form action="rfid-funciones.php" method="POST" class="text-center">
                <button type="submit" class="btn btn-success">Desactivar</button>
            </form>
        </div>
    </div>

</body>

<br><br><br>
<?php include_once "../pie.php" ?>

</html>