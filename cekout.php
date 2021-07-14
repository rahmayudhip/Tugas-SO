<?php
include_once('functions.php');
session_start();
$db = dbConnect();

$random = (rand(100, 999));

$cartArr = $_POST['id_cart'];
$qtyArr = $_POST['qty'];
$barangArr = $_POST['id_barang'];
$hargaArr = $_POST['harga'];

$totalHarga = 0;
for ($i = 0; $i < count($_POST['id_barang']); $i++) {
  $sql = $db->query("INSERT");
  $totalHarga = $totalHarga + ($hargaArr[$i] * $qtyArr[$i]);
}

$pembelian = $_POST['pembelian'];

$totalHarga = $totalHarga + ($random);

// insert to transaksi
$calonID = createId('transaksi', 'id_transaksi', 'tr-');
$insertTransaksi = "INSERT INTO `transaksi` VALUES ('$calonID','$pembelian',$totalHarga,NULL,NULL, {$_SESSION["UserID"]})";
// var_dump($db->query($insertTransaksi);

$db->query($insertTransaksi);
// die;

// insert to detail transaksi
for ($i = 0; $i < count($barangArr); $i++) {
  $insertDetailTransaksi = "INSERT INTO `detail_transaksi` VALUES (NULL, '$calonID',$barangArr[$i],$qtyArr[$i])";
  // var_dump(($insertDetailTransaksi));
  ($db->query($insertDetailTransaksi));


  $tersisa = $db->query("SELECT stok, terjual FROM barang WHERE id_barang = $barangArr[$i]")->fetch_assoc();
  $db->query("UPDATE `barang` SET `stok` = '" . ($tersisa['stok'] - $qtyArr[$i]) . "', `terjual` = '" . ($tersisa['terjual'] + $qtyArr[$i]) . "' WHERE `barang`.`id_barang` = {$barangArr[$i]}");
}


for ($i = 0; $i < count($cartArr); $i++) {
  $db->query("DELETE FROM cart WHERE id_cart = {$cartArr[$i]}");
}
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

  <title>Checkout</title>

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
      <p class="fs-4 fw-bold text-decoration-none px-5" style="border-radius: 0px !important;">Shopping Cart</p>
      <p class="fs-4 fw-bold text-decoration-none px-5" style="border-radius: 0px !important; border-bottom : 5px solid black;">Checkout</p>
    </div>
    <div class="py-5">
      <!-- Menunggu Pembayaran -->
      <div class="py-3">
        <h2 class="fw-bold text-center">Menunggu Pembayaran</h2 class="fw-bold text-center">
        <div class="col-md-8 mx-auto">
          <p class="text-center fs-4 mt-4 text-secondary">Mohon selesaikan Anda sebelum tanggal <?= date('d-m-Y', strtotime($_POST['pembelian']) + 86400) ?> dengan rincian sebagai berikut.</p>
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
            <p class="fs-4 fw-bold">Kode Unik : <?= $random ?></p>
            <p class="fs-4 fw-bold">Total yang harus dibayarkan <br> <?= getRupiah($totalHarga, 0); ?></p>
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