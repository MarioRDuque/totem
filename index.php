<!DOCTYPE html>
<html>

<head>
  <title>Totem</title>
  <link rel="stylesheet" href="utiles/bootstrap.min.css">
  <link rel="stylesheet" href="utiles/texto.css">
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

  <div id="aviso" hidden>
    <div class="text-center">
      <ul>
        <li style="list-style: none;">
          <h4>1. Registra tu asistencia</h4>
        </li>
        <li style="list-style: none;">
          <h4>2. Checkea tu temperatura</h4>
        </li>
        <li style="list-style: none;">
          <h4>3. Desinfecta tus manos</h4>
        </li>
      </ul>
      <h4>... Todo sin contacto</h4>
      <h4>#cuidemonosentretodos</h5><br>
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
<footer class="page-footer font-small stylish-color-dark pt-4" style="bottom: 0; position: fixed; width: 100%;">
  <div class="footer-copyright text-center py-3 bg-light">
    <img src="utiles/logo1.jpg" class="rounded-circle" width="40" height="33">
    <a href="https://www.checkseguro.com/">www.checkseguro.com </a>          -   
    <img src="utiles/icono_instagram.jpg" class="rounded-circle" width="58" height="43">@check_seguro          -
    <img src="utiles/icono_facebook.jpg" class="rounded-circle" width="50" height="40">Check Seguro

  </div>
</footer>
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