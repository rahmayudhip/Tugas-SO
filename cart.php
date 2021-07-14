<?php
include_once('functions.php');
session_start();
$db = dbConnect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,800&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Rubik', sans-serif;
    }
  </style>
</head>

<body>
  <?php navbar() ?>

  <!-- Header Content -->
  <div class="p-5 mb-5 " style="background: rgba(238, 220, 157, 0.33); color: rgba(0, 0, 0, 0.73); font-family: Rubik, sans-serif;">
    <div class="container">
      Home / Cart
    </div>
  </div>
  <div class="d-flex justify-content-center mb-4">
    <p class="fs-4 fw-bold text-decoration-none px-5" style="border-radius: 0px !important; border-bottom : 5px solid black;">Shopping Cart</p>
    <p class="fs-4 fw-bold text-decoration-none px-5" style="border-radius: 0px !important;">Checkout</p>
  </div>

  <!-- Error Messages -->
  <div class="container">
    <div class="row">
      <div class="col-md">

        <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == "1") {
            echo "<div class='alert alert-danger' role='alert'>Error!, Stok barang tidak bisa ditambahkan lagi (terbatas)</div>";
          } else if ($_GET['error'] == "2") {
            echo "<div class='alert alert-danger' role='alert'>Error!, Proses pembayaran gagal</div>";
          } else if ($_GET['error'] == "3") {
            echo "<div class='alert alert-danger' role='alert'>Error!, Kuantitas melebihi barang yang tersedia</div>";
          }
        } else if (isset($_GET['success'])) {
          if ($_GET['success'] == "1") {
            echo "<div class='alert alert-success' role='alert'>Quantitas berhasil ditambahkan</div>";
          } else if ($_GET['success'] == "2") {
            echo "<div class='alert alert-success' role='alert'>Barang berhasil disimpan ke keranjang</div>";
          } else if ($_GET['success'] == "3") {
            echo "<div class='alert alert-success' role='alert'>Barang sudah dihapus</div>";
          }
        }
        ?>
      </div>
    </div>
  </div>
  </ <!-- Cart Table -->
  <div class="container">

    <table class="table align-middle">
      <thead class="text-center">
        <tr>
          <th scope="col" colspan="2">Image</th>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <form action="cekout.php" method="POST">
        <tbody>
          <?php

          $sql = "SELECT `c`.`id_cart`,`b`.`id_barang`,`b`.`foto`, `b`.`nama_barang`, `b`.`harga`, `c`.`qty`,`b`.`stok` FROM cart c JOIN barang b ON `b`.`id_barang` = `c`.`cart_id_barang` WHERE c.`cart_user_id` = {$_SESSION["UserID"]}";
          $result = $db->query($sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
          $total = 0;

          foreach ($rows as $rowsData) :
          ?>
            <tr class="text-center">
              <td>
                <a class="btn-close" href="hapus-cart.php?hapus=<?= $rowsData["id_cart"] ?>"></a>
              </td>
              <td><img src="<?= $rowsData["foto"] ?>" class="rounded" style="width: 150px" /></td>
              <td><?= $rowsData["nama_barang"] ?><br><span class="badge rounded-pill bg-danger"><?= "{$rowsData["stok"]} tersisa" ?></span></td>
              <td><?= getRupiah($rowsData["harga"]) ?></td>
              <td>
                <input type="text" name="stok" value="<?= $rowsData["stok"] ?>" hidden>
                <input type="number" name="qty[]" min="0" max="<?= $rowsData["stok"] ?>" value="<?= $rowsData["qty"]; ?>" style="width: 50px; text-align:center;">
              </td>
              <td><?= getRupiah($rowsData["harga"] * $rowsData["qty"]) ?></td>
            </tr>
            <?php $total = $total + ($rowsData["harga"] * $rowsData["qty"]); ?>
            <input name="id_cart[]" value="<?= $rowsData["id_cart"] ?>" hidden>
            <input name="id_barang[]" value="<?= $rowsData["id_barang"] ?>" hidden>
            <input name="harga[]" value="<?= $rowsData["harga"] ?>" hidden>

          <?php endforeach; ?>
        </tbody>
    </table>
    <div class="p-3 mb-5 d-flex justify-content-sm-end">
      <div class="col-1">
        Total
      </div>
      <div class="col-2 fw-bold">
        <input name="pembelian" type="date" value="<?= date("Y-m-d") ?>" hidden>
        <input name="total" type="text" value="<?= $total ?>" hidden>
        <?= getRupiah($total); ?>
      </div>
    </div>
    <div class="d-flex justify-content-end d-grid gap-2">
      <?php
      ?>

      <a class="btn" style="border-color: #616161; background: #FFFFFF;" href="shop.php">Continue Shopping</a>
      <button type="submit" class="btn" style="background: #FF6B01; color: #FFFFFF;">Proceed Checkout</button>
    </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>

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