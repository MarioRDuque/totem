<?php

/** @noinspection ForgottenDebugOutputInspection */
include_once "../utiles/SimpleXLS.php";
echo '<h1>Parse books.xsl</h1><pre>';

$target_dir = 'subidas/';
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

echo $target_file;
if ($xls = SimpleXLS::parse($target_file)) {
  print_r($xls->rows());
} else {
  echo SimpleXLS::parseError();
}
echo '<pre>';
?>
<div class="outer-container">
  <form action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
    <div>
      <label>Elija Archivo Excel</label> <input type="file" name="file" id="file" accept=".xls">
      <button type="submit" id="submit" name="import" class="btn-submit">Importar Registros</button>

    </div>

  </form>

</div>
<div id="response" class="<?php if (!empty($type)) {
                            echo $type . " display-block";
                          } ?>"><?php if (!empty($message)) {
                                  echo $message;
                                } ?></div>