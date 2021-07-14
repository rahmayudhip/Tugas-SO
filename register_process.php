<?php include_once("functions.php"); ?>
<?php
if (isset($_POST["TblRegister"])) {
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        // Bersihkan Data
        $name        = $db->escape_string($_POST["name"]);
        $username    = $db->escape_string($_POST["username"]);
        $password    = $db->escape_string($_POST["password"]);
        $email       = $db->escape_string($_POST["email"]);
        // query update data
        $sql = "INSERT INTO `user` (`username`, `name`, `password`, `email`, `id_role`)
        VALUES ('$username', '$name', md5('$password'), '$email', 2)";
        // eksekusi query update
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
?>
                <script>
                    alert("Register Berhasil!");
                    window.location = 'login.php';
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Register Gagal!");
                window.location = 'javascript:history.back()';
            </script>
<?php
        }
    } else
        echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
}
