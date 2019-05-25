
<?php
  session_start();
  if(!isset($_SESSION["image"]) OR !isset($_POST["height"]) OR !isset($_POST["width"])){
    header("Location: index2.php");
  }
?>
<?php

require_once 'src/autoloader.php';

use Grafika\Imagick\Editor; // Import package
use Grafika\Grafika;


try {
  $editor = Grafika::createEditor();
  $editor->open( $image, "uploads/".$_SESSION["image"] );
  $editor->crop( $image,  $_POST["width"], $_POST["height"], 'smart' );
  $editor->save( $image, "afterimage.jpg", null, 90 );


} catch (Exception $e){ // Catch exceptions for safety
    echo $e->getMessage();
}


?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by  -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Image Processing - Kelompok Asep - Hafiz - Diva</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
    <!-- Bootstrap core CSS -->
    <link href="assets//dist/css/bootstrap-material-design.min.css" rel="stylesheet">

    <link href="assets/dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/dist/css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets//dist/css/carousel.css" rel="stylesheet">
    <link href="assets//dist/css/sweetalert2.css" rel="stylesheet">
    <!-- style css -->
    <link href="assets//dist/css/style.css" rel="stylesheet">
    <!-- material desain icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- fa icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="assets//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="assets//dist/js/jquery.js"></script>


  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="0">
    <div class="container">
      <hr/>
      <h1 class="text-center ">Aplikasi Pengolahan Citra Digital Berbasis Web</h1>
      <hr/>
      <div class="row">
        <?php
        include "toolbox.php";
         ?>
        <div class="col-sm-9" style="border-left:2px solid #808080;">
          <h3>Gambar</h3> <a href="index2.php" class="btn btn-primary">Lihat Gambar Asli</a>
          <hr/>
          <div class="table-responsive">
            <?php if(isset($_SESSION["image"])){
              ?>
            <img src="afterimage.jpg">
              <?php
            ;}
            ?>
          </div>
        </div>
      </div>
    </div>






    <!-- FOOTER -->
    <footer class="container" style="margin-top:100px;">
      <p class="float-right"><a href="#">ASEP - HAFIZ - DIVA</a></p>
      <p>&copy; <?php echo date('Y');?> Pengolahan Citra Digital. &middot; </p>
    </footer>
    </main>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets//assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets//assets/js/vendor/popper.min.js"></script>
    <script src="assets//dist/js/bootstrap-material-design.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets//assets/js/vendor/holder.min.js"></script>

    <script src="assets//dist/js/jquery.js"></script>
    <!-- <script src="assets//dist/js/step.js"></script> -->
    <script src="assets//dist/js/bootstrap.min.js"></script>
    <script src="assets//dist/js/sweetalert2.all.min.js"></script>
    <script src="assets//dist/js/jquery.isotope.min.js"></script>
    <script src="assets//dist/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript">


    /* affix the navbar after scroll below header */
    $('nav').affix({
          offset: {
            top: $('#limit').offset().top
          }
    });
    </script>


    </body>

    </html>
