<?php
include_once("functions.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,800&display=swap" rel="stylesheet" />

  <title>MyATK | Stationary Store</title>
</head>

<body>
  <?php navbar(); ?>

  <!-- Jumbotron Start-->
  <section>
    <div class="main">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 pt-4 text-center"></div>
          <h6>Sale Up to 40% Today !</h6>
          <h1>Winsor and Newtons Cotman <br />Watercolours</h1>
          <button class="btn1 mt-2">Buy Now Today</button>
        </div>
      </div>
    </div>
  </section>
  <!-- Jumbotron End-->

  <!--Card Start-->
  <br />
  <br />
  <br />
  <section id="wrapper_1">
    <div class="container1" style="display: inline-block">
      <img src="images\kertas.png" alt="Snow" style="width: 100%" />
      <a href="kertas.php"><button class="btn">Kertas</button></a>
    </div>
    <div class="container1" style="display: inline-block">
      <img src="images\penggaris.png" alt="Snow" style="width: 100%" />
      <a href="alat_gambar.php"><button class="btn">Alat Gambar</button></a>
    </div>
    <div class="container1" style="display: inline-block">
      <img src="images\gunting.png" alt="Snow" style="width: 100%" />
      <a href="alat_pemotong.php"><button class="btn">Alat Pemotong</button></a>
    </div>
  </section>
  <br />
  <br />

  <!--Card Ends-->

  <!--Footer Start-->
  <section class="news py-5">
    <footer>
      <div class="footer-content">
        <h3>Find Us </h3>
        <p>You can find out more about us by choosing our social media below </p>
        <ul class="socials">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
        <p>copyright &copy;2021 </p>
        <br>

    </footer>
  </section>
  <!--Footer end-->

</body>

</html>