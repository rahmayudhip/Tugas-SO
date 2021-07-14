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
    <script>
        function validasiData() {
            // validasi nama_barang
            var nama_barang = document.form.nama_barang.value.trim();
            if (nama_barang.length == 0) {
                alert('Nama barang belum diisi.');
                document.form.nama_barang.focus();
                return false;
            }
            // validasi jenis barang
            if (document.form.kode_jenis_barang.selectedIndex == 0) {
                alert("Jenis barang belum dipilih.");
                document.form.kode_jenis_barang.focus();
                return false;
            }
            // validasi stok
            var stok = document.form.stok.value.trim();
            if (stok.length == 0) {
                alert('Stok belum diisi.');
                document.form.stok.focus();
                return false;
            }
            // validasi harga
            var harga = document.form.harga.value.trim();
            if (harga.length == 0) {
                alert('Harga belum diisi.');
                document.form.harga.focus();
                return false;
            }
            // validasi keterangan
            var keterangan = document.form.keterangan.value.trim();
            if (keterangan.length == 0) {
                alert('Keterangan belum diisi.');
                document.form.keterangan.focus();
                return false;
            }
        }
    </script>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Detail Transaksi</h5>
                        </div>
                        <div class="modal-body" align="center">
                            <?php
                            if (isset($_GET["id_transaksi"])) {
                                $db = dbConnect();
                                $id_transaksi = $db->escape_string($_GET["id_transaksi"]);
                                //
                                $sql = "SELECT dt.id_detail_transaksi,
                                        dt.id_detail_barang, 
                                        dt.qty,
                                        b.nama_barang, 
                                        b.kode_jenis_barang, 
                                        b.harga, 
                                        b.foto 
                                        FROM detail_transaksi dt 
                                        INNER JOIN barang b 
                                        ON dt.id_detail_barang = b.id_barang
                                        WHERE dt.id_detail_transaksi = '$id_transaksi'";
                                $result = $db->query($sql);
                                $rows = $result->fetch_all(MYSQLI_ASSOC);

                                foreach ($rows as $rowsData) :
                            ?>
                                    <form method="post" name="form" action="transaksi-lunas.php">
                                        <div class="modal-body">
                                            <div class="">
                                                <input type="hidden" name="id_transaksi" value="<?php echo $id_transaksi ?>">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Id Transaksi</span>
                                                    <input type="text" name="id_detail_transaksi" class="form-control" aria-describedby="basic-addon1" value="<?php echo $rowsData["id_detail_transaksi"]; ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Id Barang</span>
                                                    <input type="text" name="id_detail_transaksi" class="form-control" aria-describedby="basic-addon1" value="<?php echo $rowsData["id_detail_barang"]; ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Qty</span>
                                                    <input type="text" name="id_detail_transaksi" class="form-control" aria-describedby="basic-addon1" value="<?php echo $rowsData["qty"]; ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Nama Barang</span>
                                                    <input type="text" name="id_detail_transaksi" class="form-control" aria-describedby="basic-addon1" value="<?php echo $rowsData["nama_barang"]; ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Kode Jenis Barang</span>
                                                    <input type="text" name="id_detail_transaksi" class="form-control" aria-describedby="basic-addon1" value="<?php echo $rowsData["kode_jenis_barang"]; ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Harga Barang</span>
                                                    <input type="text" name="id_detail_transaksi" class="form-control" aria-describedby="basic-addon1" value="<?php echo getRupiah($rowsData["harga"], 0) ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Gambar</span>
                                                    <input type="text" name="id_detail_transaksi" class="form-control" aria-describedby="basic-addon1" value="<?php echo $rowsData["foto"]; ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Total Harga</span>
                                                    <input type="text" name="id_detail_transaksi" class="form-control" aria-describedby="basic-addon1" value="<?php echo getRupiah($rowsData["harga"] * $rowsData["qty"], 0) ?>">
                                                </div>

                                            </div>
                                        </div>
                                <?php
                                endforeach;
                            }
                                ?>
                                <div class="modal-footer">
                                    <a href="transaksi.php"><button type="button" class="btn btn-outline-secondary">Kembali</button></a>
                                    <button type="submit" name="TblLunas" class="btn btn-primary">Lunas</button>
                                </div>
                                    </form>
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