<?php include_once("functions.php"); ?>
<?php
$db = dbConnect();
if ($db->connect_errno == 0) {
    if (isset($_POST["btn_login"])) {
        $username = $db->escape_string($_POST["i_username"]);
        $password = $db->escape_string($_POST["i_password"]);
        $sql = "SELECT * FROM user WHERE username='$username' and password=md5('$password')";
        $res = $db->query($sql);
        if ($res) {
            if ($res->num_rows == 1) {
                $data = $res->fetch_assoc();
                session_start();
                $_SESSION["UserID"] = $data["user_id"];
                $_SESSION["Username"] = $data["username"];
                $_SESSION["Name"] = $data["name"];
                $_SESSION["RoleID"] = $data["id_role"];
                if ($data["id_role"] == 1) {
                    header("Location: Admin/index.php");
                } else {
                    header("Location: index.php");
                }
            } else
                header("Location: login.php?error=1");
        }
    } else
        header("Location: login.php?error=2");
} else
    header("Location: login.php?error=3");
?>