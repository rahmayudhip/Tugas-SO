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
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Lunas</h5>
                        </div>
                        <div class="modal-body" align="center">
                            <?php
                            if (isset($_POST["TblLunas"])) {
                                $id_transaksi = $db->escape_string($_POST["id_transaksi"]);
                                $db = dbConnect();
                                date_default_timezone_set('Asia/Jakarta');
                                $date = date('Y-m-d h:i:s', time());
                                if ($db->connect_errno == 0) {
                                    // query update data
                                    $sql = "UPDATE `transaksi` SET `tgl_bayar` = '$date', `lunas` = '1' WHERE `transaksi`.`id_transaksi` = '$id_transaksi';";
                                    // eksekusi query update
                                    $res = $db->query($sql);
                                    if ($res) {
                                        if ($db->affected_rows > 0) {
                            ?>
                                            <h4>Konfirmasi Lunas Berhasil</h4>
                                            <br>
                                            <div class="modal-footer">
                                                <a href="transaksi.php"><button class="btn btn-primary">Ok</button></a>
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <h4>Konfirmasi Lunas Gagal</h4>
                                        <div class="modal-footer">
                                            <a href="javascript:history.back()"><button class="btn btn-outline-secondary">Edit Kembali</button></a>
                                        </div>
                            <?php
                                    }
                                } else
                                    echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
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