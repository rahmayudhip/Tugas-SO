<?php include('template/header.php');
include_once("../functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Edit barang</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <?php include('template/sidebar.php'); ?>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <?php include('template/top-bar.php'); ?>

            <!-- Page content-->
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Pembaruan Barang</h5>
                        </div>
                        <div class="modal-body" align="center">
                            <?php
                            if (isset($_GET["id_barang"])) {
                                $db = dbConnect();
                                $id_barang = $db->escape_string($_GET["id_barang"]);
                                //
                                if ($dataBarang = getDataBarang($id_barang)) {
                            ?>
                                    <form method="post" name="form" action="barang-update.php">
                                        <div class="modal-body">
                                            <div class="">
                                                <input type="hidden" name="id_barang" value="<?php echo $dataBarang["id_barang"]; ?>">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fas fa-cube fa-fw"></i></span>
                                                    <input type="text" name="nama_barang" class="form-control" aria-describedby="basic-addon1" value="<?php echo $dataBarang["nama_barang"]; ?>">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-cubes fa-fw"></i></label>
                                                    <select class="form-select" name="kode_jenis_barang">
                                                        <option hidden disabled selected>Pilih Jenis ATK</option>
                                                        <?php
                                                        // Ambil jenis barang
                                                        $sql = "SELECT * FROM `jenis_barang`";
                                                        $result = $db->query($sql);
                                                        $rows = $result->fetch_all(MYSQLI_ASSOC);
                                                        foreach ($rows as $rowsData) : ?>
                                                            <?php echo "<option value=\"" . $rowsData['kode_jenis_barang'] . "\"";
                                                            if ($rowsData["nama_jenis_barang"] == $dataBarang["nama_jenis_barang"])
                                                                echo " selected";
                                                            echo ">" . $rowsData['nama_jenis_barang'] . "</option>";
                                                            ?>
                                                        <?php endforeach;  ?>
                                                    </select>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fas fa-box-open fa-fw"></i></span>
                                                    <input type="number" min="0" max="1000" name="stok" class="form-control" aria-label="barang-stok" aria-describedby="basic-addon1" value="<?php echo $dataBarang["stok"]; ?>">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="fas fa-tag fa-fw"></i></span>
                                                    <input type="number" min="0" max="99999999" name="harga" class="form-control" aria-label="barang-stok" aria-describedby="basic-addon1" value="<?php echo $dataBarang["harga"]; ?>">
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-sticky-note fa-fw"></i></span>
                                                    <textarea class="form-control" aria-label="With textarea" rows="5" name="keterangan">value="<?php echo $dataBarang["keterangan"]; ?>"</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="barang.php"><button type="button" class="btn btn-outline-secondary">Kembali</button></a>
                                            <button type="submit" name="TblUpdate" class="btn btn-primary">Simpan Barang</button>
                                        </div>
                                    </form>
                            <?php
                                } else
                                    echo "Barang tidak ada";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(window).on('load', function() {
                    $('#staticBackdrop').modal('show');
                });
            </script>
        </div>
    </div>

</body>

</html>