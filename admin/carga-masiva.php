<?php
include_once "../utiles/base_de_datos.php";
require_once('../utiles/excel_reader2.php');
require_once('../utiles/SpreadsheetReader.php');

if (isset($_POST["import"])) {
  $allowedFileType = ['application/vnd.ms-excel', 'text/xls', 'text/xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  if (in_array($_FILES["file"]["type"], $allowedFileType)) {

    $targetPath = 'subidas/' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

    $Reader = new SpreadsheetReader($targetPath);

    $sheetCount = count($Reader->sheets());
    for ($i = 0; $i < $sheetCount; $i++) {

      $Reader->ChangeSheet($i);

      foreach ($Reader as $Row) {

        $nombres = "";
        if (isset($Row[0])) {
          $nombres = pg_escape_string($con, $Row[0]);
        }

        $cargo = "";
        if (isset($Row[1])) {
          $cargo = pg_escape_string($con, $Row[1]);
        }

        $celular = "";
        if (isset($Row[2])) {
          $celular = pg_escape_string($con, $Row[2]);
        }

        $descripcion = "";
        if (isset($Row[3])) {
          $descripcion = pg_escape_string($con, $Row[3]);
        }

        if (!empty($nombres) || !empty($cargo) || !empty($celular) || !empty($descripcion)) {
          $query = "insert into tbl_productos(nombres,cargo, celular, descripcion) values('" . $nombres . "','" . $cargo . "','" . $celular . "','" . $descripcion . "')";
          $resultados = pg_query($con, $query);

          if (!empty($resultados)) {
            $type = "success";
            $message = "Excel importado correctamente";
          } else {
            $type = "error";
            $message = "Hubo un problema al importar registros";
          }
        }
      }
    }
  } else {
    $type = "error";
    $message = "El archivo enviado es invalido. Por favor vuelva a intentarlo";
  }
}
?>
<!doctype html>
<html lang="es">

<?php include_once "encabezado.php" ?>

<body>
  <div class="container">
    <h3 class="mt-5">Importar archivo de Excel</h3>
    <hr>
    <div class="row">
      <div class="col-12 col-md-12">
        <!-- Contenido -->

        <div class="outer-container">
          <form action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
              <label>Elija Archivo Excel</label> <input type="file" name="file" id="file" accept=".xls,.xlsx">
              <button type="submit" id="submit" name="import" class="btn-submit">Importar Registros</button>

            </div>

          </form>

        </div>
        <div id="response" class="<?php if (!empty($type)) {
                                    echo $type . " display-block";
                                  } ?>"><?php if (!empty($message)) {
                                          echo $message;
                                        } ?></div>


        <?php
        $sqlSelect = $base_de_datos->query("select * from persona");;
        $result = $sqlSelect->fetchAll(PDO::FETCH_OBJ);;

        if ($result) {
        ?>

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
              <?php foreach ($result as $totem) { ?>
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
        <?php
        }
        ?>
        <!-- Fin Contenido -->
      </div>
    </div>
    <!-- Fin row -->


  </div>
</body>

<?php include_once "../pie.php" ?>

</html>