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
                        <h1 class="">Halaman Barang</h1>
                        <div class="">
                            <button type="button" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#barang-tambah">
                                Tambah Barang <i class="fas fa-plus fa-md fa-fw"></i>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="barang-tambah" tabindex="-1" aria-labelledby="barang-tambah" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="barang-tambah">Tambah Barang Baru</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fas fa-cube fa-fw"></i></span>
                                                <input type="text" name="barang-nama" class="form-control" placeholder="Barang Baru" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-cubes fa-fw"></i></label>
                                                <select class="form-select" name="barang-jenis">
                                                    <option hidden disabled selected>Pilih Jenis ATK</option>
                                                    <?php
                                                    // Ambil jenis barang
                                                    $sql = "SELECT * FROM `jenis_barang`";
                                                    $result = $db->query($sql);
                                                    $rows = $result->fetch_all(MYSQLI_ASSOC);
                                                    foreach ($rows as $rowsData) : ?>
                                                        <option value="<?= $rowsData['kode_jenis_barang']; ?>"><?= $rowsData['nama_jenis_barang']; ?></option>
                                                    <?php endforeach;  ?>
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fas fa-box-open fa-fw"></i></span>
                                                <input type="number" min="0" max="100" name="barang-stok" class="form-control" placeholder="Banyaknya stok barang" aria-label="barang-stok" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="fas fa-file-image fa-fw"></i></span>
                                                <input type="file" class="form-control" name="barang-foto">
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-sticky-note fa-fw"></i></span>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit Barang</button>
                                    </div>
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
                                        <th>Nama Barang</th>
                                        <th>Jenis Barang</th>
                                        <th>Rating</th>
                                        <th>Foto</th>
                                        <th>Stok</th>
                                        <th>Terjual</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `barang` `b` INNER JOIN `jenis_barang` `jb` ON `b`.`kode_jenis_barang` = `jb`.`kode_jenis_barang`";
                                    $result = $db->query($sql);
                                    $rows = $result->fetch_all(MYSQLI_ASSOC);
                                    $no = 0;
                                    foreach ($rows as $rowsData) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= ++$no ?></td>
                                            <td><?= $rowsData["nama_barang"]; ?></td>
                                            <td><?= $rowsData["nama_jenis_barang"]; ?></td>
                                            <td><?= $rowsData["rating"]; ?></td>
                                            <td><?= $rowsData["foto"]; ?></td>
                                            <td><?= $rowsData["stok"]; ?></td>
                                            <td><?= $rowsData["terjual"]; ?></td>
                                            <td><?= $rowsData["keterangan"]; ?></td>
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

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>