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

    <?php
    $db = dbConnect();
    $sql = "SELECT t.id_transaksi, t.tgl_transaksi, t.total_harga ,t.lunas, t.kode_unik
    FROM transaksi t 
    INNER JOIN user u 
    -- INNER JOIN detail_transaksi dt
    ON t.user_id = u.user_id  
    -- t.id_transaksi = dt.id_detail_transaksi 
    WHERE t.user_id = {$_SESSION["UserID"]} ORDER BY t.tgl_transaksi DESC";
    $result = $db->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    // var_dump($rows);
    $total = 0;

    foreach ($rows as $rowsData) :
    ?>

        <!-- Jumbotron Start -->
        <section class="jumbotron my-3">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <span class="badge rounded-pill bg-success"><b>Kode Transaksi :</b> <?= $rowsData['id_transaksi']; ?></span>
                        <span class="badge rounded-pill bg-primary"><b>Pemesanan pada :</b> <?= date('d-m-Y, H:i:s', strtotime($rowsData['tgl_transaksi'])); ?></span>
                        <span class="badge rounded-pill bg-warning"> <b>Total :</b> <?= getRupiah($rowsData["total_harga"], 0) ?></span>
                        <span class="badge rounded-pill bg-danger"> <b> Status Pemesanan :</b> <?= ($rowsData['lunas'] ? "Lunas" : "Belum Lunas")   ?></span>
                        <span class="badge rounded-pill bg-info"> <b> Kode Unik :</b> <?= $rowsData['kode_unik'] ?></span>
                    </div>
                    <?php
                    $sql = "SELECT `dt`.* ,`b`.*
                    FROM `transaksi` `t` 
                    INNER JOIN `detail_transaksi` `dt`
                    INNER JOIN `barang` `b`
                    ON `t`.`id_transaksi` = `dt`.`id_detail_transaksi` 
                    AND `dt`.`id_detail_barang` = `b`.`id_barang`
                    WHERE `dt`.`id_detail_transaksi` = '{$rowsData['id_transaksi']}'";
                    $result = $db->query($sql);
                    $data = $result->fetch_all(MYSQLI_ASSOC);
                    // var_dump($data);
                    foreach ($data as $dataTR) :
                    ?>
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="<?= $dataTR["foto"] ?>" class="card-img-top img-thumbnail" style="width: 10rem;">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title"><?= $dataTR["nama_barang"] ?></h5>
                                    <p class="card-text">
                                        <?= "{$dataTR["qty"]} x " . getRupiah($dataTR["harga"], 0) . " = " ?>
                                        <?= getRupiah(($dataTR["qty"] * $dataTR["harga"]), 0) ?>
                                        <!-- <?php $total = $total + ($dataTR["qty"] * $dataTR["harga"]) ?> -->
                                    </p>
                                    <p class="card-text">

                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    <?php endforeach ?>

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