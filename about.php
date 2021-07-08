<?php include_once("functions.php");
session_start() ?>
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
  

  <!-- Jumbotron Start-->
  <section>
    <div class="p-5 mb-5" style="background: rgba(238, 220, 157, 0.33); color: rgba(0, 0, 0, 0.73);">
      <div class="container">
        About
      </div>
    </div>
  </section>
  <!-- Jumbotron End-->

  <!--Icon Start-->
  <section id="wrapper_2">
    <div class="container3">
      <img src="images\alamat.png" alt="kertas" style="width: 120" />
      <br>
      <br />
      <h3 class="subtitle">Jl.Ciliwung No.4<br>
        Kecamatan Sukasari<br>
        Kota Bandung</h3>
    </div>
    <div class="container3">
      <img src="images\telepon.png" alt="gunting" style="width: 120" />
      <br>
      <br />
      <h3 class="subtitle">Free toll : 0896-7932-1231</h3>
    </div>
    <div class="container3">
      <img src="images\email.png" alt="penggaris" style="width: 120" />
      <br>
      <br />
      <h3 class="subtitle">myatk@gmail.com</h3>
    </div>
  </section>
  <!--Icon End-->

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
</body>

</html>