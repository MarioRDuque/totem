<!DOCTYPE html>
<html>

<head>
  <title>Totem</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.js" type="text/javascript"></script>
  <script src="bootstrap.min.js" type="text/javascript"></script>
</head>

<body class="p-2">

  <?php
  echo  "<p style='float: right;'> " . date("d/m/Y - H:i:s") . "</p>";
  ?>
  <br><br>
  <div class="">
    <img src="logo1.jpg" class="rounded mx-auto d-block" alt="...">
    <br>
    <h2 class="text-center" id="nombre"></h2>
    <div id="cuerpo"></div>
  </div>
  <br>
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div id="car1" class="carousel-item active">
      <video autoplay src="video1.mp4" controls class="d-block w-100" alt="...">
    </div>
    <div id="car2" class="carousel-item">
      <video src="video2.mp4" controls class="d-block w-100" alt="...">
    </div>
    <div id="car3" class="carousel-item">
      <video src="video3.mp4" controls class="d-block w-100" alt="...">
    </div>
    <div id="car4" class="carousel-item">
      <video src="video4.mp4" controls class="d-block w-100" alt="...">
    </div>
  </div>
  <br><br>
</body>
<br><br>
</html>

<script>
  $('#carousel').on('slide.bs.carousel', function(e) {
    let elemento = $('#carousel .carousel-item.active video').first();
    if (elemento.prop("tagName") == "VIDEO") {
      elemento.get(0).play();
    }
  });

  $('#carousel').bind('slide.bs.carousel', function(e) {
    let elemento = $('#carousel .carousel-item.active video').first();
    if (elemento.prop("tagName") == "VIDEO") {
      elemento.get(0).pause();
    }
  });

  $('video').on('play', function(e) {
    $("#carousel").carousel('pause');
  });
  $('video').on('stop pause ended', function(e) {
    $("#carousel").carousel();
  });

  setInterval(function() {
    $("#cuerpo").load("funciones.php");
  }, 100);
</script>