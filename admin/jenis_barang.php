<?php include('template/header.php'); ?>

<title>MyATK | Halaman Barang</title>
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
                    <div class="d-flex justify-content-between align-items-center my-4 p-2">
                        <h1 class="">Halaman Jenis Barang</h1>
                        <div class="">
                            <button type="button" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#barang-tambah">
                                Tambah Jenis Barang <i class="fas fa-plus fa-md fa-fw"></i>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="barang-tambah" tabindex="-1" aria-labelledby="barang-tambah" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="barang-tambah">Tambah Jenis Barang Baru</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" name="form" action="jenis-barang-simpan.php">
                                        <div class="modal-body">
                                            <div class="">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fas fa-cube fa-fw"></i></span>
                                                    <input type="text" name="kode_jenis_barang" class="form-control" placeholder="Kode Barang" aria-label="jenisbarang-kode" aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-cubes fa-fw"></i></label>
                                                    <input type="text" name="nama_jenis_barang" class="form-control" placeholder="Nama Jenis Barang" aria-label="namaJenisBarang" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="Submit" name="TblSimpan" class="btn btn-primary">Submit Jenis Barang</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive">
                            <table id="table_id" class="table table-striped table-hover pt-3" style="border: 0px">
                                <thead>
                                    <tr class="bg-primary bg-gradient text-white align-middle">
                                        <th>No</th>
                                        <th>Kode Jenis Barang</th>
                                        <th>Nama Jenis Barang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `jenis_barang`";
                                    $result = $db->query($sql);
                                    $rows = $result->fetch_all(MYSQLI_ASSOC);
                                    $no = 0;
                                    foreach ($rows as $rowsData) :
                                    ?>
                                        <tr>
                                            <td style="width: 2%" class="text-center"><?= ++$no ?></td>
                                            <td><?= $rowsData["kode_jenis_barang"]; ?></td>
                                            <td><?= $rowsData["nama_jenis_barang"]; ?></td>
                                            <td>
                                                <div class="d-flex flex-row justify-content-center">
                                                    <a href="jenis-barang-hapus.php?kode_jenis_barang=<?php echo $rowsData["kode_jenis_barang"]; ?>" onclick="return confirm('anda yakin ingin menghapus?')" class="btn btn-outline-danger btn-sm m-1"><i class="fas fa-trash-alt fa-sm fa-fw"></i></a>
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

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>