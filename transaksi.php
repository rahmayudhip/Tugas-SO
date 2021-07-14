<?php
include_once('functions.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,800&display=swap" rel="stylesheet" />


</head>

<body>
    <?php navbar() ?>

    <!-- Content -->
    <div class="p-5 mb-5" style="background: rgba(238, 220, 157, 0.33); color: rgba(0, 0, 0, 0.73); font-family: Rubik, sans-serif;">
        <div class="container">
            Transaksi
        </div>
    </div>

    <!-- Jumbotron Start -->
    <section class="jumbotron my-3">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Alat Pemotong
                </div>
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="images/Gambar/cutter1.jpeg" class="card-img-top img-thumbnail" alt="..." style="width: 10rem;">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title">Cutter</h5>
                            <p class="card-text" style="color: rgba(0, 0, 0, 0.4);">Tanggal</p>
                            <p class="card-text">5000</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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