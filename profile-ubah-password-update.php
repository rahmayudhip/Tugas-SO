<?php include_once("functions.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,800&display=swap" rel="stylesheet" />

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Profile | Ubah Password</title>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Pembaruan Password</h5>
                </div>
                <div class="modal-body" align="center">
                    <?php
                    if (isset($_POST["TblUpdate"])) {
                        $db = dbConnect();
                        if ($db->connect_errno == 0) {
                            // Bersihkan Data
                            $user_id = $db->escape_string($_POST["user_id"]);
                            $password    = $db->escape_string($_POST["password"]);
                            // query update data
                            $sql = "UPDATE `user` SET `password` = md5('$password') WHERE `user`.`user_id` = $user_id;";
                            // eksekusi query update
                            $res = $db->query($sql);
                            if ($res) {
                                if ($db->affected_rows > 0) {
                    ?>
                                    <h4>Data berhasil diupdate</h4>
                                    <br>
                                    <div class="modal-footer">
                                        <a href="profile.php"><button class="btn btn-primary">Ok</button></a>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <h4>Data berhasil diupdate tetapi tanpa ada perubahan data</h4>
                                    <div class="modal-footer">
                                        <a href="javascript:history.back()"><button class="btn btn-outline-secondary">Edit Kembali</button></a>
                                        <a href="profile.php"><button class="btn btn-primary">Ok</button></a>
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <h4>Data gagal diupdate</h4>
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
</body>

</html>