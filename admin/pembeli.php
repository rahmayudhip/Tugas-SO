<?php include('template/header.php'); ?>

<title>MyATK | Halaman Admin</title>
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <?php include('template/sidebar.php'); ?>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
      <!-- Top navigation-->
      <?php include('template/top-bar.php'); ?>

      <!-- Page content-->
      <div class="container px-3">
        <div class="row">
          <h1 class="mt-3 my-4">Data Akun Pembeli</h1>
          <div class="col-lg">
            <div class="table-responsive">
              <table id="table_id" class="table border border-dark">
                <thead>
                  <tr class="bg-primary bg-gradient text-white align-middle">
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM user WHERE id_role=1";
                  $result = $db->query($sql);
                  $rows = $result->fetch_all(MYSQLI_ASSOC);
                  $no = 0;
                  foreach ($rows as $rowsData) :
                  ?>
                    <tr>
                      <td><?= ++$no ?></td>
                      <td><?= $rowsData["username"]; ?></td>
                      <td><?= $rowsData["email"]; ?></td>
                      <td><?= $rowsData["name"]; ?></td>
                      <td><?= $rowsData["number"]; ?></td>
                      <td><?= $rowsData["address"]; ?></td>
                      <td><?= $rowsData["gender"]; ?></td>
                      <td><?= $rowsData["birth_date"]; ?></td>
                      <td>
                        <div class="d-flex flex-row justify-content-center">
                          <a href="#" class="btn btn-outline-info btn-sm m-1"><i class="fas fa-clipboard-list fa-sm fa-fw"></i></a>
                          <!-- <a class="btn btn-outline-warning btn-sm m-1"><i class="fas fa-pencil-alt fa-sm fa-fw"></i></a>
                          <a class="btn btn-outline-danger btn-sm m-1"><i class="fas fa-trash-alt fa-sm fa-fw"></i></a> -->
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- footer -->
  <?php include('template/bottom.php'); ?>

  <!-- <script src=""></script> -->
  <script>
    $(document).ready(function() {
      $('#table_id').DataTable();
    });
  </script>