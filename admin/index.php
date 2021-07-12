  <?php include('template/header.php'); 

  //for count all record on table user all
  $data_user = mysqli_query($db,"SELECT * FROM user");
  $jumlah_user = mysqli_num_rows($data_user);

  //for count all record on table barang
  $data_barang = mysqli_query($db,"SELECT * FROM barang");
  $jumlah_barang = mysqli_num_rows($data_barang);

  //for count all record on table user role pembeli
  $data_buyer = mysqli_query($db,"SELECT * FROM user where id_role = 2 ");
  $jumlah_buyer = mysqli_num_rows($data_buyer);
  
  ?>

  <title>MyATK | Halaman Admin</title>
  </head>

  <body>
    <div class="d-flex" id="wrapper">
      <?php include('template/sidebar.php'); ?>
      <!-- Page content wrapper-->
      <div id="page-content-wrapper">
        <!-- Top navigation-->
        <?php include('template/top-bar.php'); ?>

        <!-- Page content-->
        <div class="container px-3">
          <div class="row">
            <h1 class="mt-3 my-4">Dashboard</h1>
            <div class="col-lg">
              <div class="row">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user fa-lg fa-fw text-primary"></i> Pengguna</h5>
                    <p class="card-text">Terdapat <b><span class="text-primary"><?php echo $jumlah_user; ?></span></b> Pengguna telah terdaftar</p>
                  </div>
                </div>
                <div class="card" style="width: 18rem; margin-left: 10px">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-cube fa-lg fa-fw text-primary"></i> Barang/Produk</h5>
                    <p class="card-text">Terdapat <b><span class="text-primary"><?php echo $jumlah_barang; ?></span></b> Barang/Produk</p>
                  </div>
                </div>
                <div class="card" style="width: 18rem; margin-left: 10px">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user fa-lg fa-fw text-primary"></i> Pembeli</h5>
                    <p class="card-text">Terdapat <b><span class="text-primary"><?php echo $jumlah_buyer; ?></span></b> User pembeli yang telah terdaftar</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include('template/bottom.php'); ?>
  </body>

  </html>