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

    <!-- font awesome -->
    <link href="vendor/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">

    <title>MyATK | Stationary Store</title>
</head>

<body>
    <?php navbar(); ?>

    <!-- Jumbotron Start-->
    <section class="jumbotron my-3">
        <div class="container">
            <h1>Alat gambar berkualitas </h1>
            <div class="row mt-4">
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/pencil9000.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pencil 9000B</h5>
                            <p class="card-text">
                                Jenis Barang : Pensil <br>
                                Merk : Faber-Castell<br>
                                Ukuran : 9000<br>
                                Size HB - 8B<br>
                                1 pak isi 8 buah<br>
                                <br>
                                <b>Harga : Rp. 90.000</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/drawingpen.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Drawing Pen UniPin</h5>
                            <p class="card-text">
                                Jenis Barang : Drawing Pen<br>
                                Merk : UniPin<br>
                                Ukuran : 0.1mm - 0.5mm<br>
                                <br>
                                <br>
                                <br>
                                <b>Harga : Rp. 6.600</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/cpencil.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Charcoal Pencil</h5>
                            <p class="card-text">
                                Jenis Barang : Pensil <br>
                                Merk : Drewnet <br>
                                Ukuran : Medium<br>
                                1 pak isi 5 buah<br>
                                <br>
                                <br>
                                <b>Harga : Rp. 39.800</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/mcpencil.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mechanical Pencil</h5>
                            <p class="card-text">
                                Jenis Barang : Pensil Mekanik <br>
                                Merk : BIC <br>
                                Ukuran : 0.7mm<br>
                                1 pak isi 6 buah<br>
                                <br>
                                <br>
                                <b>Harga : Rp. 42.500</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="jumbotron my-3">
        <div class="container">

            <div class="row mt-4">
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/acrylic.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cat acrylic</h5>
                            <p class="card-text">
                                Jenis Barang : Cat <br>
                                Merk : Maries<br>
                                Ukuran : 50ml<br>
                                Warna : Mix<br>
                                <br>
                                <br>
                                <b>Harga : Rp. 12.500 buah</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/catposter.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cat Poster</h5>
                            <p class="card-text">
                                Jenis Barang : Cat <br>
                                Merk : Koi<br>
                                Ukuran : 30ml<br>
                                Warna : Mix<br>
                                jumlah : 12 buah/pak<br>
                                <br>
                                <b>Harga : Rp. 79.350/ pak</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/minyak.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cat Minyak</h5>
                            <p class="card-text">
                                Jenis Barang : Cat <br>
                                Merk : Maries<br>
                                Ukuran : 10ml<br>
                                Warna : Mix<br>
                                jumlah : 12 buah/pak<br>
                                <br>
                                <b>Harga : Rp. 124.050/ pak</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/wpalette.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Palet cat</h5>
                            <p class="card-text">
                                Jenis Barang : Palet <br>
                                Merk : Kiky<br>
                                Ukuran : 20cm<br>
                                Warna : Coklat<br>
                                Bahan : OakWood<br>
                                <br>
                                <b>Harga : Rp. 66.000</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="jumbotron my-3">
        <div class="container">

            <div class="row mt-4">
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/kuascat.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kuas Besar</h5>
                            <p class="card-text">
                                Jenis Barang : Kuas <br>
                                Merk : SKT<br>
                                Ukuran : 1 Inch-7Inch<br>
                                Tipe : Flat<br>
                                <br>
                                <br>
                                <b>Harga : Rp. 4.500 </b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/kuaslukis.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kuas Lukis</h5>
                            <p class="card-text">
                                Jenis Barang : Kuas <br>
                                Merk : Joyko<br>
                                Ukuran : 2-12<br>
                                Tipe : Rounded Brush<br>
                                <br>
                                <br>
                                <b>Harga : Rp. 14.500 </b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/penggarisbesi.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Penggaris Besi</h5>
                            <p class="card-text">
                                Jenis Barang : Penggaris <br>
                                Merk : Joyko<br>
                                Ukuran : 25 Inch<br>
                                Warna : Silver<br>
                                <br>
                                <br>
                                <b>Harga : Rp. 14.050</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/penggarissegitiga.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Penggaris Segitiga</h5>
                            <p class="card-text">
                                Jenis Barang : Penggaris <br>
                                Merk : Kenko<br>
                                Ukuran : 7 Inch<br>
                                Warna : Hitam<br>
                                Bahan : Pelastik<br>
                                <br>
                                <b>Harga : Rp. 31.000</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="jumbotron my-3">
        <div class="container">

            <div class="row mt-4">
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/pensilwarna.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Color Pencil</h5>
                            <p class="card-text">
                                Jenis Barang : Pensil <br>
                                Merk : Faber-Castell<br>
                                Ukuran : 1 set<br>
                                Tipe : Pollychromos 120 <br>
                                <br>
                                <br>
                                <b>Harga : Rp. 224.500 </b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/brushp.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pen Brush</h5>
                            <p class="card-text">
                                Jenis Barang : Kuas Pulpen <br>
                                Merk : TiTi<br>
                                Ukuran : 2<br>
                                Tipe : Rounded Brush<br>
                                <br>
                                <br>
                                <b>Harga : Rp. 54.500/ pak</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/koi.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">WaterColor</h5>
                            <p class="card-text">
                                Jenis Barang : Cat Air <br>
                                Merk : Koi<br>
                                Ukuran : 9gr<br>
                                Warna : Mix<br>
                                <br>
                                <br>
                                <b>Harga : Rp. 74.000/ set</b>
                            </p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card p-2" style="width: 18rem;">
                        <img src="images/alat gambar/crayon.jpg" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crayon</h5>
                            <p class="card-text">
                                Jenis Barang : kerayon <br>
                                Merk : TiTi<br>
                                Ukuran : 12 x 2<br>
                                Warna : Mix<br>
                                <br>
                                <br>
                                <b>Harga : Rp. 71.000/ pak</b>
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