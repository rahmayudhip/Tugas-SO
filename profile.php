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
  <title>Profile</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,800&display=swap" rel="stylesheet" />


</head>

<body>
  <?php navbar() ?>

  <!-- Content -->
  <div class="p-5 mb-5" style="background: rgba(238, 220, 157, 0.33); color: rgba(0, 0, 0, 0.73); font-family: Rubik, sans-serif;">
    <div class="container">
      Profile
    </div>
  </div>
  <!-- Form Profile -->
  <br>
  <br>
  <?php
  if (isset($_SESSION["Name"])) {
    $db = dbConnect();
    $name = $db->escape_string($_SESSION["Name"]);
    if ($dataPengguna = getDataPengguna($name)) {

  ?>
      <div class="container">
        <form action="">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" name="username" class="form-control" value="<?php echo $dataPengguna["username"]; ?>" readonly>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" value="<?php echo $dataPengguna["name"]; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" name="email" class="form-control" value="<?php echo $dataPengguna["email"]; ?>" readonly>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">No. Telp</label>
            <div class="col-sm-10">
              <input type="text" name="number" class="form-control" value="<?php echo $dataPengguna["number"]; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Alamat Lengkap</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="address" rows="3"><?php echo $dataPengguna["address"]; ?></textarea>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="L" <?php if ($dataPengguna["gender"] == 'L') echo " checked"; ?>>
                <label class="form-check-label">
                  Pria
                </label>
              </div>
              <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="P" <?php if ($dataPengguna["gender"] == 'P') echo " checked"; ?>>
                <label class="form-check-label">
                  Wanita
                </label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-2">
              <input type="text" name="birth_date" class="form-control" value="<?php echo $dataPengguna["birth_date"]; ?>">
            </div>
            <label class="col-sm-2 col-form-label" style="color: #A2A2A2;">DD/MM/YYYY</label>
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary" style="background: #FF6B01;">Submit</button>
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