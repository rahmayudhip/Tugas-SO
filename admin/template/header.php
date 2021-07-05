<?php
include("../functions.php");
session_start();
if (!isset($_SESSION["UserID"]) && ($_SESSION["RoleID"] != 1)) {
    header("Location: ../index.php");
}
$db = dbConnect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Nur Sasongko">

    <!-- Template Sidebar Layout -->
    <link rel="stylesheet" href="css/simple-navbar.css">

    <!-- Nur Sasongko Style-->
    <link rel="stylesheet" href="css/admin-style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;1,800&display=swap" rel="stylesheet" />

    <!-- font awesome -->
    <link href="../vendor/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">

    <!-- data tables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">