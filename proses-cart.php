<?php include_once("functions.php"); ?>
<?php
$db = dbConnect();



if (isset($_POST["barang_id"]) && isset($_POST["calon_pembeli"])) {
    $barang = $_POST["barang_id"];
    $pembeli = $_POST["calon_pembeli"];

    // $sql = "SELECT id_barang, foto, nama_barang, harga FROM barang WHERE id_barang = $barang";
    // $res = $db->query($sql)->fetch_all(MYSQLI_ASSOC);

    // banyaknya barang yang tersedia
    $sql = "SELECT stok FROM barang WHERE `id_barang` = $barang";
    $res = $db->query($sql)->fetch_assoc();
    $stok = $res["stok"];
    // var_dump($stok);

    // cek jika pembeli pernah memasukan barang yang sama kedalam cart
    $sql = "SELECT * FROM cart WHERE `cart_id_barang` = $barang AND `cart_user_id` = $pembeli";
    $resCart = ($db->query($sql)->fetch_assoc());
    $qty = $resCart["qty"];
    // var_dump(++$qty);
    // die();

    // jika pembeli sudah pernah memasukan barang yang sama kedalam cart
    if ($resCart) {
        ++$qty;
        // jika stok masih ada
        if ($stok > $qty) {
            $db->query("UPDATE `cart` SET `qty` = $qty WHERE `cart`.`id_cart` = 1");
        }
        header("location: cart.php?error=1");
    }
    // jika belom
    else {
        $sql = "INSERT INTO `cart` (`id_cart`, `cart_id_barang`, `cart_user_id`, `qty`) VALUES (NULL, '$barang', '$pembeli', '1')";
        $res = $db->query($sql);
        var_dump($res);
    }
    header("location: cart.php");
}
?>