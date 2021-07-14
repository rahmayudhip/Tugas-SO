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

  <style>
    .tittle {
      color: #000;
      text-decoration: none;
    }

    .tittle:hover {
      color: #000;
    }
  </style>

  <title>MyATK | Stationary Store</title>
</head>

<body>
  <section>
    <div class="login">
      <div class="container">
        <div class="row">
          <div class="login-text">
            <img src="images/Secure login-pana.png" style="width:590px; height:590px;">
            <div style="float:right">
              <center>
                <a href="index.php" class="tittle">
                  <h1>MY ATK</h1>
                </a>
                <strong>YOUR HOME STATIONERY PARTNER</strong>
              </center>
              <br>
              <div class="card" style="width:450px;">
                <?php
                if (isset($_GET['error'])) {
                  if ($_GET['error'] == "1") {
                    echo "<div class='alert alert-danger' role='alert'>
                                    Login GAGAL! | Username atau password salah!
                                  </div>";
                  } else if ($_GET['error'] == "2") {
                    echo "<div class='alert alert-danger' role='alert'>
                                    Login GAGAL! | Mungkin Database tidak terkoneksi
                                  </div>";
                  } else if ($_GET['error'] == "3") {
                    echo "<div class='alert alert-danger' role='alert'>
                                    Login GAGAL! | terdapat kesalahan yang tidak terduga
                                  </div>";
                  }
                }
                ?>
                <div class="card-body">
                  <form method="POST" action="login_process.php">
                    <label>Username :</label>
                    <input type="text" name="i_username" class="form-control" placeholder="Masukkan Username"><br>
                    <label>Passsword :</label>
                    <input type="password" name="i_password" class="form-control" placeholder="Masukkan Password">
                    <hr>
                    <input type="submit" name="btn_login" class="btn btn-warning" value="Login">
                    <a href="register.php" class="btn btn-warning">Daftar</a>
                  </form>
                </div>
              </div>
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