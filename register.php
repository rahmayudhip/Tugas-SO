<?php include_once("functions.php"); ?>

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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

  <script>
    function validasiData() {
      // validasi nama
      var name = document.form.name.value.trim();
      if (name.length == 0) {
        alert('Nama belum diisi.');
        document.form.name.focus();
        return false;
      }
      // validasi username
      var username = document.form.username.value.trim();
      if (username.length == 0) {
        alert('Username belum diisi.');
        document.form.username.focus();
        return false;
      }
      // validasi password
      var password = document.form.password.value.trim();
      if (password.length == 0) {
        alert('Password belum diisi.');
        document.form.password.focus();
        return false;
      }
      // validasi email
      var email = document.form.email.value.trim();
      if (email.length == 0) {
        alert('Email belum diisi.');
        document.form.email.focus();
        return false;
      }
    }
  </script>

  <title>MyATK | Register</title>
</head>

<body>
  <section>
    <div class="login">
      <div class="container">
        <div class="row">
          <div class="login-text">
            <img src="images/Onboarding-pana.png" style="width: 55%;" />
            <div style="float: right">
              <center>
                <a href="index.php" class="tittle">
                  <h1>MY ATK</h1>
                </a>
                <strong>REGISTER YOUR ACCOUNT FOR BUY SOME ITEMS</strong>
              </center>
              <br />
              <div class="card" style="width: 450px">
                <div class="card-body">
                  <form method="POST" name="form" action="register_process.php" onsubmit="return validasiData()">
                    <label>Nama Lengkap :</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap" /><br />
                    <label>Username :</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" /><br />
                    <label>Passsword :</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" /><br />
                    <label>Email :</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email" /><br />
                    <hr />
                    <input type="submit" name="TblRegister" class="btn btn-warning" value="Daftar" />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br /><br /><br />

  <!--Footer Start-->
  <section class="news py-5" style="margin-top: 150px;">
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