<?php

   $usario = $_GET["usuario"];
   $clave = $_GET["clave"];


   if (($usario == "admin") && ($clave == "DiguillinCheck")) {

      header("Location: admin.php");

   } else {
      header("Location: login.php");
     
   }

?>

