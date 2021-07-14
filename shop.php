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
            <h1>Shop</h1>
            <div class="row mt-4">
                <?php
                $db = dbConnect();
                $sql = "SELECT * FROM barang";
                $result = $db->query($sql);
                $rows = $result->fetch_all(MYSQLI_ASSOC);

                foreach ($rows as $rowsData) :
                ?>

                    <div class="col-sm-6 col-md-3">
                        <div class="card p-1 text-center" style="width: 18rem;">
                            <img src="<?= $rowsData["foto"]; ?>" class="card-img-top img-thumbnail" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $rowsData["nama_barang"]; ?></h5>
                                <p class="card-text">
                                    <?= $rowsData["keterangan"]; ?><br><br>
                                    <b>Harga : <?= getRupiah($rowsData["harga"]); ?></b><br>
                                    <b><?= getStok($rowsData["stok"]); ?></b><br>
                                    <br>
                                    <b><?= getTerjual($rowsData["terjual"]); ?></b><br>
                                    <?php getRating($rowsData["rating"]); ?>
                                    <?= "{$rowsData["rating"]}" ?>
                                </p>
                                <?php
                                if (($rowsData["stok"]) != 0 && (isset($_SESSION["UserID"]))) : ?>
                                    <form action="proses-cart.php" method="POST">
                                        <input name="barang_id" type="text" value="<?= $rowsData["id_barang"]; ?>" hidden>
                                        <input name="calon_pembeli" type="text" value="<?= $_SESSION["UserID"]; ?>" hidden>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></button>
                                    </form>
                                <?php else : ?>
                                    <button class="btn btn-danger" disabled><i class="fas fa-shopping-cart"></i></button>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Jumbotron End-->

    <!--Card Start-->
    <br>
    <hr>
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