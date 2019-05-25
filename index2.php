<?php
  session_start();
?>
<?php
if(isset($_GET["delete"])) {
  unset($_SESSION['image']);
}

if(isset($_POST["submit"])) {
$target_dir = "uploads/";
$target_file = $target_dir . basename(@$_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {

        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }


// Check file size
if (@$_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $_SESSION['image'] = $_FILES["fileToUpload"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

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
          <h3>Gambar</h3>
          <hr/>

          <div class="table-responsive">
            <?php if(isset($_SESSION["image"])){
              ?>
              <a href="index2.php?delete=yes" class="btn btn-danger">Ganti Gambar</a>
              <br/>
            <img src="uploads/<?=$_SESSION["image"];?>">
              <?php
            ;}else{
              ?>
              <form action="" method="post" enctype="multipart/form-data">
                  Select image to upload:
                  <input type="file" name="fileToUpload" id="fileToUpload">
                  <input type="submit" value="Upload Image" name="submit">
              </form>
              <?php
            ;}?>
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
