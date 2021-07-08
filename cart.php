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
  <title>Cart</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,800&display=swap" rel="stylesheet" />
</head>

<body>
  <?php navbar() ?>

  <!-- Header Content -->
  <div class="p-5 mb-5 " style="background: rgba(238, 220, 157, 0.33); color: rgba(0, 0, 0, 0.73); font-family: Rubik, sans-serif;">
    <div class="container">
      Home / Cart
    </div>
  </div>
  <div class="mb-5 d-flex justify-content-sm-evenly">
    <div>Shopping Cart</div>
    <div>Checkout</div>
  </div>

  <!-- Cart Table -->
  <div class="container">
    <form action="cekout.php">
      <table class="table align-middle">
        <thead class="text-center">
          <tr>
            <th scope="col" colspan="3">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <td><button type="button" class="btn-close" aria-label="Close"></button></td>
            <td><img src="images\watercolour.png" alt="watercolour" class="rounded" style="width: 150px" /></td>
            <td>Winsor & Newton Cotman Watercolours</td>
            <td>Rp 173.200</td>
            <td>1</td>
            <td>Rp 173.200</td>
          </tr>
          <tr class="text-center">
            <td><button type="button" class="btn-close" aria-label="Close"></button></td>
            <td><img src="images\drawingpen.png" alt="watercolour" class="rounded" style="width: 150px" /></td>
            <td>Drawing Pen/Set</td>
            <td>Rp 22.800</td>
            <td>2</td>
            <td>Rp 45.600</td>
          </tr>
        </tbody>
      </table>
      <div class="p-3 mb-5 d-flex justify-content-sm-end">
        <div class="col-2">
          Total
        </div>
        <div class="col-1">
          Rp 218.600
        </div>
      </div>
      <div class="d-flex justify-content-end d-grid gap-2">
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