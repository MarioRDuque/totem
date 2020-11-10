<?php

exec("sudo sh /home/pi/controTemp/lector/web_stop.sh");

header("Location: rfid.php?exito=1");