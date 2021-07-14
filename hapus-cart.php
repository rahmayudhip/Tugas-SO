<?php
include_once('functions.php');
session_start();
$db = dbConnect();
$db->query("DELETE FROM `cart` WHERE `id_cart`= {$_GET["hapus"]}");
header("Location: cart.php?sucess=3");
