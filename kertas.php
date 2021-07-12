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
                <?php
                $db = dbConnect();
                $sql = "SELECT * FROM barang WHERE kode_jenis_barang = 'KE2'";
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
                                    <?= $rowsData["keterangan"]; ?>
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