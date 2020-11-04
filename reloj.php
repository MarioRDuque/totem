<?php
echo "<br><br>";
setlocale(LC_ALL, 'es_ES');
$hora = strftime("%H : %M : %S");
$fecha = strftime("Hoy es %A %d de %B");
echo "<p style='font-size: 20px' > " . $hora . "</p><br>";
echo "<p style='font-size: 14px' > " . $fecha . "</p><br><br>";
