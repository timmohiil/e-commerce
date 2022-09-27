<?php 
session_start();
	$id_product = $_GET['id'];

	if (isset($_SESSION['keranjang'][$id_product]))
	{
		$_SESSION['keranjang'] [$id_product]+=1;
	}
	else
	{
		$_SESSION['keranjang'] [$id_product] =1;
	}

	//echo "<pre>";
	//print_r($_SESSION);
	//echo "</pre>";

	echo "<script> alert('Produk Telah Masuk Ke Keranjang');</script>";
	echo "<script> location='product.php';</script>";
?>