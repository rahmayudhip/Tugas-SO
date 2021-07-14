<?php
if (!isset($_POST['qty'])) {
  header("location: cart.php?error=2");
} else {
  if ($_POST['qty'] > $_POST['stok']) {
    header("location: cart.php?error=3");
  }
}
