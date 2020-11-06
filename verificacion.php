<?php

   $usario = $_GET["usuario"];
   $contraseña = $_GET["contraseña"];


   if (($usario == "admin") && ($contraseña == "123456789")) {

      header("Location: admin.php");

   } else {
      header("Location: login.php");
     
   }

?>

