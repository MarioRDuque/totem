<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="utiles/bootstrap.min.css">
    <script src="utiles/jquery.js" type="text/javascript"></script>
    <script src="utiles/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
    <br>
    <div class="text-center">
        <h1>Iniciar Sesion</h1>
    </div>
    <br><br>
    <div class="text-center">
        <img src="utiles/login.jpg" class="rounded" width="150" height="150">
    </div>
    <br>
    <br>
    <div id="login">
    <form action="verificacion.php" method="GET">
    <div class="form-row">
        <div class="col-3">
        </div>
        <div class="col-6">
        <label>Usuario</label>
        <input type="text" class="form-control" name="usuario" placeholder="usuario" required>
    </div>
    <div class="col-3">
    </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col-3">
        </div>
        <div class="col-6">
        <label>Contraseña</label>
        <input type="password" class="tex form-control" name="clave" placeholder="clave" required>
    </div>
    <div class="col-3">
    </div>
    </div>
    <br>
    <div class="text-center">
       <input type="submit" class="btn btn-success" value="Ingresar"/>
    </div>
    </form>
    </div>
</body>

</html>