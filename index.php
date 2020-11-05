<!DOCTYPE html>
<html>

<head>
  <title>Totem</title>
  <link rel="stylesheet" href="utiles/bootstrap.min.css">
  <script src="utiles/jquery.js" type="text/javascript"></script>
  <script src="utiles/bootstrap.min.js" type="text/javascript"></script>
</head>

<body class="p-2">
  <div class="row m-0">
    <div class="col-md-4">
      <div>
        <br><br>
        <h2 class='text-center' style='font-size: 20px' id="tambiente"> </h2>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <img src="utiles/logo1.jpg" class="img-fluid" alt="..."></div>
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
    var $videoFile = "";

    var video = $('#mi-video');

    video.find('source').each(function() {
      $fuente = $(this).attr('src');
    });

    switch ($fuente) {
      case "utiles/video1.mp4":
        $videoFile = "utiles/video2.mp4";
        break;
      case "utiles/video2.mp4":
        $videoFile = "utiles/video3.mp4";
        break;
      case "utiles/video3.mp4":
        $videoFile = "utiles/video4.mp4";
        break;
      case "utiles/video4.mp4":
        $videoFile = "utiles/video1.mp4";
        break;
      default:
        $videoFile = "utiles/video1.mp4";
        break;
    }

    var $video = $('#mi-video'),
      videoSrc = $('source', $video).attr('src', $videoFile);
    $video[0].load();
    $video[0].play();
  });

  setInterval(function() {
    $("#reloj").load("reloj.php");
  }, 300);
  setInterval(function() {
    $("#cuerpo").load("funciones.php");
  }, 3000);
  setInterval(function() {
    location.reload();
  }, 900000);
</script>