<!doctype html>
<html lang="es">

<?php include_once "encabezado.php" ?>
<br>
<br>
<br>


<?php

/** @noinspection ForgottenDebugOutputInspection */
include_once "../utiles/SimpleXLS.php";

$target_dir = 'subidas/';
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

if ($xls = SimpleXLS::parse($target_file)) {
} else {
  echo SimpleXLS::parseError();
}
?>


<body>
  <br><br>
  <div class="container">
    <br>
    <h1 class="text-center">Cargar desde excel</h1>
    <br>
    <div class="outer-container">
      <form action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
        <div>
          <label>Elija Archivo Excel</label> <input type="file" name="file" id="file" accept=".xls">
          <button type="submit" id="submit" name="import" class="btn-submit">Importar Registros</button>
        </div>
      </form>

      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>RUT</th>
              <th>RFID</th>
              <th>NFC</th>
            </tr>
          </thead>
          <tbody>
            <br>
            <?php foreach ($xls->rows() as $totem) { ?>
              <tr>
                <td><?php echo $totem[0] ?></td>
                <td><?php echo $totem[1] ?></td>
                <td><?php echo $totem[2] ?></td>
                <td><?php echo $totem[3] ?></td>
                <td><?php echo $totem[4] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>
    <div id="response" class="<?php if (!empty($type)) {
                                echo $type . " display-block";
                              } ?>"><?php if (!empty($message)) {
                                      echo $message;
                                    } ?></div>
  </div>

</body>
<br><br><br>
<?php include_once "../pie.php" ?>

</html>