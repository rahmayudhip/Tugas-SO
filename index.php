<?php
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
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,800&display=swap" rel="stylesheet" />

  <title>MyATK | Stationary Store</title>
</head>

<body>
  <!--Navbar Start-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.html">MyATK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
        </ul>
        <?php if (!isset($_SESSION["Name"])) : ?>
          <form class="d-flex">
            <a class="nav-link" href="login.php">LOGIN</a>
            <svg href="#" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
              <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
            </svg>
          </form>
        <?php else : ?>
          <!-- <ul class="navbar-nav me-auto my-2 my-lg-0">
            <li class="nav-item"> -->
          <a class="nav-link" href="profile.php">Hi, <?= $_SESSION["Name"]; ?></a>
          <a href="logout.php">Button Sementara Logout</a>
          <!-- </li>
          </ul> -->
        <?php endif; ?>
      </div>
    </div>
  </nav>
</body>

<!--Navbar Ends-->

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
    <button class="btn">Kertas</button>
  </div>
  <div class="container1" style="display: inline-block">
    <img src="images\penggaris.png" alt="Snow" style="width: 100%" />
    <button class="btn">Alat Gambar</button>
  </div>
  <div class="container1" style="display: inline-block">
    <img src="images\gunting.png" alt="Snow" style="width: 100%" />
    <button class="btn">Alat Pemotong</button>
  </div>
</section>
<br />
<br />

<!--Card Ends-->

<!--Footer Start-->
<section class="news py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 me-auto text-left">
        <h1>Touch with us</h1>
        <input type="text" placeholder="Enter Your Email" />
        <button class="btn3">Submit</button>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </svg>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-11"></div>
      <div class="row"></div>
    </div>
  </div>
</section>
<!--Footer end-->

</html>