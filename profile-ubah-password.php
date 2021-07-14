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
  <title>Profile | Ubah Password</title>

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
      Ubah Password
    </div>
  </div>
  <!-- Form Profile -->
  <br>
  <br>
  <?php
  if (isset($_SESSION["Username"])) {
    $db = dbConnect();
    $username = $db->escape_string($_SESSION["Username"]);
    if ($dataPengguna = getDataPengguna($username)) {

  ?>
      <div class="container">
        <form method="post" name="from" action="profile-ubah-password-update.php">
          <input type="hidden" name="user_id" value="<?php echo $dataPengguna["user_id"]; ?>">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Password Baru</label>
            <div class="col-sm-2">
              <input type="password" name="password" id="password" placeholder="Masukkan Password Baru" class="form-control" style="width:300px;">
            </div>
          </div>
               <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Ulangi Password</label>
            <div class="col-sm-2">
              <input type="password" placeholder="Ulangi Password" class="form-control" style="width:300px;">
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" name="TblUpdate" class="btn btn-primary" style="background: #FF6B01;">Ubah</button>
          </div>
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
    <?php
    } else echo "a";
  } else echo "b";
    ?>
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