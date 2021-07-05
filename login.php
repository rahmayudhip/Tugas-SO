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
                <h1>MY ATK</h1>
                <strong>YOUR HOME STATIONERY PARTNER</strong>
              </center>
              <br>
              <div class="card" style="width:450px;">
                <div class="card-body">
                  <form method="POST" action="login_process.php">
                    <label>Username :</label>
                    <input type="text" name="i_username" class="form-control" placeholder="Masukkan Username"><br>
                    <label>Passsword :</label>
                    <input type="password" name="i_password" class="form-control" placeholder="Masukkan Password">
                    <hr>
                    <input type="submit" name="btn_login" class="btn btn-warning" value="Login">
                    <a href="register.html" class="btn btn-warning">Daftar</a>
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
</body>

</html>