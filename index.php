<!DOCTYPE html>
<html>

<head>
  <title>Totem</title>
  <link rel="stylesheet" href="utiles/bootstrap.min.css">
  <script src="utiles/jquery.js" type="text/javascript"></script>
  <script src="utiles/bootstrap.min.js" type="text/javascript"></script>
</head>

<body class="p-2">
  <br>

  <div class="row m-0">
    <div class="col-md-4">
      <div>
        <br><br>
        <h3 class='text-center' style='font-size: 40px' id="tambiente"> </h3>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <img src="utiles/logo1.jpg" class="img-fluid" alt="..."></div>
    <input type="text" id="idRegistro" hidden>
    <div class="col-md-4">
      <div id="reloj"></div>
    </div>
  </div>

  <br><br>

  <div class="row m-0">
    <div id="car1" class="carousel-item active" style="border: 0;">
      <video id="mi-video" autoplay muted class="d-block w-100" style="border: 0;">
        <source src="utiles/video1.mp4" type="video/mp4">
      </video>
    </div>
  </div>

  <br><br>

  <div class="">
    <div id="cuerpo"></div>
  </div>
  <br>

  <div class="row m-0" id="aviso" hidden>
    <div class="col-md-4">
    </div>
    <div class="col-md-4 text-center">
      <ul>
        <li>1. Registra tu asistencia</li>
        <li>2. Checkea tu temperatura</li>
        <li>3. Desinfecta tus manos</li>
      </ul>
      ... Todo sin contacto
      <h5>#cuidemonosentretodos</h5>
    </div>
    <div class="col-md-4">
    </div>
  </div>

  <br>

  <div class="row m-0">
    <div class="col-md-4">
    </div>
    <div class="col-md-4 text-center">
      <img src="utiles/logo2.jpg" class="img-fluid" alt="..."></div>
    <div class="col-md-4">
    </div>
  </div>

  <br><br>
</body>

</html>

<script>
  $("#mi-video").on('ended', function() {
    var $fuente = "";
    $('#mi-video').find('source').each(function() {
      $fuente = $(this).attr('src');
    });

    switch ($fuente) {
      case "utiles/video1.mp4":
        $('source', $('#mi-video')).attr('src', "utiles/video2.mp4");
        break;
      case "utiles/video2.mp4":
        $('source', $('#mi-video')).attr('src', "utiles/video3.mp4");
        break;
      case "utiles/video3.mp4":
        $('source', $('#mi-video')).attr('src', "utiles/video4.mp4");
        break;
      case "utiles/video4.mp4":
        $('source', $('#mi-video')).attr('src', "utiles/video1.mp4");
        break;
      default:
        $('source', $('#mi-video')).attr('src', "utiles/video1.mp4");
        break;
    }
    $('#mi-video')[0].load();
    $('#mi-video')[0].play();
  });

  setInterval(function() {
    var idRegistro = document.getElementById("idRegistro").value;
    var cuerpo = document.getElementById("cuerpo").innerHTML;
    $("#reloj").load("reloj.php");
    $("#cuerpo").load("funciones.php", {
      'idRegistro': idRegistro,
      'cuerpo': cuerpo
    });
  }, 300);
  setInterval(function() {
    location.reload();
  }, 600000);
</script>