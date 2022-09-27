<?php
session_start();
$id_product = $_GET["id"];
unset($_SESSION["keranjang"][$id_product]);

echo "<script> alert('Produk Telah di hapus dari  Keranjang');</script>";
echo "<script> location='keranjang.php';</script>";  
?>