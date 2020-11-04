<?php
echo "<br><br>";
setlocale(LC_ALL, 'es_ES');
$hora = strftime("%H : %M : %S");
$fecha = strftime("Hoy es %A %d de %B");
echo "<h3><p style='font-size: 20px' > " . $hora . "</p><h3><br>";
echo "<h3><p style='font-size: 14px' > " . $fecha . "</p><h3><br><br>";
