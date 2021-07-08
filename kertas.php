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
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,800&display=swap" rel="stylesheet" />

    <!-- font awesome -->
    <link href="vendor/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">

    <title>MyATK | Stationary Store</title>
</head>

<body>
    <?php navbar(); ?>

    <!-- Jumbotron Start-->
    <section class="jumbotron my-3">
        <div class="container">
            <h1>Kertas Terbaik di MYATK</h1>
            <div class="row mt-4">
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/kertas/sidua4.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kertas Sidu A4</h5>
                            <p class="card-text">
                                Jenis Barang : Kertas HVS <br>
                                Merk : Sinar Dunia<br>
                                Ukuran : A4<br>
                                Gramatur : 70 Gram<br>
                                1 pak isi 500 lembar<br>
                                <br>
                                <b>Harga : Rp. 40.000</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/kertas/siduf4.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kertas Sidu F4</h5>
                            <p class="card-text">
                                Jenis Barang : Kertas HVS <br>
                                Merk : Sinar Dunia<br>
                                Ukuran : F4<br>
                                Gramatur : 70 Gram<br>
                                1 pak isi 500 lembar<br>
                                <br>
                                <b>Harga : Rp. 45.000</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/kertas/paperonea4.png" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kertas Paper One A4</h5>
                            <p class="card-text">
                                Jenis Barang : Kertas HVS <br>
                                Merk : Paper One<br>
                                Ukuran : A4<br>
                                Gramatur : 70 Gram<br>
                                1 pak isi 500 lembar<br>
                                <br>
                                <b>Harga : Rp. 41.300</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/kertas/foliobergaris.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Folio Bergaris</h5>
                            <p class="card-text">Harga per 1 Pack<br>
                                1 Pack isi 100 Lembar<br>
                                Merk: Sinar Dunia<br>
                                Gramatur: 70 gram<br>
                                Ukuran Kertas: 32 x 42 cm.<br>
                                <br>
                                <b>Harga : Rp. 21.300</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jumbotron End-->

    <!--Card Start-->
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

</body>

</html>