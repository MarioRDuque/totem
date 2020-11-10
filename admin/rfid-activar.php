<?php

exec("sudo sh /home/pi/controTemp/lector/web_start.sh");

header("Location: rfid.php?exito=1");
