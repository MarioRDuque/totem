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
      <video id="mi-video" autoplay muted class="d-block w-100">
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
  $("#mi-video").on('ended', function() {
    var $fuente = "";
    var $videoFile = "";

    var video = $('#mi-video');

    video.find('source').each(function() {
      $fuente = $(this).attr('src');
    });

    switch ($fuente) {
      case "video1.mp4":
        $videoFile = "video2.mp4";
        break;
      case "video2.mp4":
        $videoFile = "video3.mp4";
        break;
      case "video3.mp4":
        $videoFile = "video4.mp4";
        break;
      case "video4.mp4":
        $videoFile = "video1.mp4";
        break;
      default:
        $videoFile = "video1.mp4";
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
    $("#temperatura").load("temperatura.php");
  }, 30000);
  setInterval(function() {
    $("#cuerpo").load("funciones.php");
  }, 3000);
</script>