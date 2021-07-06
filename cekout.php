<?php
include_once('functions.php');
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

  <title>Checkout</title>

  <!-- Mengubah Font Halaman Check Out -->
  <style>
    body {
      font-family: 'Rubik', sans-serif;
    }
  </style>

</head>

<body>
  <?php navbar(); ?>

  <!--EDIT URANG-->
  <!-- Jumbotron Start-->
  <section>
    <div class="second">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 pt-4 text-center"></div>
          <h2>Home/Checkout</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- Jumbotron End-->

  <!--Icon Start-->

  <section style="padding: 60px 0;">
    <div class="d-flex justify-content-center">
      <a href="" class="btn btn-link fs-4 fw-bold text-decoration-none px-5" style="border-radius: 0px !important;">Shopping Cart</a>
      <a href="" class="btn btn-link active fs-4 fw-bold text-decoration-none px-5" style="border-radius: 0px !important;">Checkout</a>
    </div>
    <div class="py-5">
      <!-- Menunggu Pembayaran -->
      <div class="py-3">
        <h2 class="fw-bold text-center">Menunggu Pembayaran</h2 class="fw-bold text-center">
        <div class="col-md-8 mx-auto">
          <p class="text-center fs-4 mt-4 text-secondary">Mohon selesaikan Anda sebelum tanggal 09 Juni 2021 11:33 dengan rincian sebagai berikut.</p>
        </div>
      </div>

      <hr style="height: 3px;">

      <!-- Transfer Rekening -->
      <div class="py-3">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <img src="images/logo-bank-bni.png" alt="" class="w-75 rounded mx-auto d-block">
          </div>
          <div class="col-md-4 text-center">
            <p class="fs-4">Transfer ke Rekening</p>
            <p class="fs-4 fw-bold">5030124 BNI a/n Muhammad Faishal</p>
            <p class="fs-4 fw-bold">Kode Unik : 617</p>
            <p class="fs-4 fw-bold">Total yang harus dibayarkan Rp. 218,617</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <p class="text-center fs-4 mt-5">Setelah itu kirimkan bukti transfer (+62)813-2121-4356 beserta mencamtumkan kode unik guna mempercepat proses pembayaran</p>
          </div>
        </div>
      </div>

      <hr style="height: 3px;">

      <!-- Pembatalan Pembelian -->
      <div class="py-3">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <p class="text-center fs-4">Pembelian akan otomatis dibatalkan apabila Anda tidak melakukan pembayaran lebih 1 hari</p>
          </div>
        </div>
      </div>

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