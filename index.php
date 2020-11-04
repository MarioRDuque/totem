<!DOCTYPE html>
<html>

<head>
  <title>Totem</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.js" type="text/javascript"></script>
  <script src="bootstrap.min.js" type="text/javascript"></script>
</head>

<body class="p-2">
  <div class="row">
    <div class="col-md-4">
      <div id="temperatura"></div>
    </div>
    <div class="col-md-4 text-center">
      <img src="logo1.jpg" class="img-fluid" alt="..."></div>
    <div class="col-md-4">
      <div id="reloj"></div>
    </div>
  </div>

  <br><br>

  <div class="row">
    <div id="car1" class="carousel-item active">
      <video autoplay muted loop class="d-block w-100">
        <source src="video4.mp4" type="video/mp4">
      </video>
    </div>
  </div>

  <br><br>

  <div class="">
    <div id="cuerpo"></div>
  </div>
  <br>

  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4 text-center">
      <img src="logo2.jpg" class="img-fluid" alt="..."></div>
    <div class="col-md-4">
    </div>
  </div>

  <br><br>
</body>

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
    $("#reloj").load("reloj.php");
    $("#temperatura").load("temperatura.php");
  }, 100);
</script>