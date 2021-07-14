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
                    <h1 class="mt-3 my-4">Data Transaksi</h1>
                    <div class="col-lg">
                        <div class="table-responsive">
                            <table id="table_id" class="table table-striped table-hover" style="border: 0px">
                                <thead>
                                    <tr class="bg-primary bg-gradient text-white align-middle">
                                        <th>No</th>
                                        <th>Id Transaksi</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Total Harga</th>
                                        <th>Username</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Lunas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT t.id_transaksi, 
                                                    t.tgl_transaksi,
                                                    t.total_harga,
                                                    t.tgl_bayar,
                                                    u.username,
                                                    t.lunas
                                            FROM transaksi t
                                            INNER JOIN user u
                                            ON t.user_id = u.user_id";
                                    $result = $db->query($sql);
                                    $rows = $result->fetch_all(MYSQLI_ASSOC);
                                    $no = 0;
                                    foreach ($rows as $rowsData) :
                                    ?>
                                        <tr>
                                            <td><?= ++$no ?></td>
                                            <td><?= $rowsData["id_transaksi"]; ?></td>
                                            <td><?= date('d-m-Y', strtotime($rowsData["tgl_transaksi"])) ?></td>
                                            <td><?= getRupiah($rowsData["total_harga"], 0)  ?></td>
                                            <td><?= $rowsData["username"]; ?></td>
                                            <td><?= ($rowsData["tgl_bayar"] == NULL ? "" : date('d-m-Y h:i:s', strtotime($rowsData["tgl_bayar"]))) ?></td>
                                            <td><?php if (($rowsData["lunas"]) == 1)
                                                    echo "Lunas";
                                                else
                                                    echo "Belum Lunas";

                                                ?></td>
                                            <td>
                                                <div class="d-flex flex-row justify-content-center">
                                                    <a href="transaksi-detail.php?id_transaksi=<?php echo $rowsData["id_transaksi"]; ?>" class="btn btn-outline-info btn-sm m-1"><i class="fas fa-clipboard-list fa-sm fa-fw"></i></a>
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
</body>

</html>