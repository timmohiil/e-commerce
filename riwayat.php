<?php
session_start();
//koneksi ke datebase
include'koneksi.php';

if (!isset($_SESSION["pelanggan"]) or empty($_SESSION["pelanggan"]))
{
	echo "<script> alert('Silahkan Login Terlebih Dahulu');</script>";
    echo "<script> location='login.php';</script>";
	exit();
}
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>PT. Visi Catur Mitra | Riwayat Belanja</title>
    <!--  
    Favicons
    =============================================
    -->
    <?php include 'favicons.php'; ?>

    <!--  
    Stylesheets
    =============================================
    -->
    <?php include 'stylesheets.php'; ?>
  </head>



  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>

      <?php include 'navbar.php'; ?>

<section class="riwayat">
	<div class="container">
		<h3>Riwayat Belanja <?php echo $_SESSION["pelanggan"] ["nama_pelanggan"] ?></h3>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Total</th>
					<th>status pembelian</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
				$nomor=1;
				$id_pelanggan=$_SESSION["pelanggan"]['id_pelanggan'];

				$ambil=$koneksi->query("SELECT * FROM pembelian WHERE id_pelanggan='$id_pelanggan'");
				while ($pecah=$ambil->Fetch_assoc()){
				?>
				<tr>
					<td><?php echo $nomor; ?>.</td>
					<td><?php echo $pecah['tanggal_pembelian']; ?></td>
					<td>Rp. <?php echo number_format($pecah['total_pembelian']); ?></td>
					<td><?php echo ($pecah['status_pembelian']);  ?></td>
					<td>
						<a href="nota.php?id=<?php echo $pecah['id_pembelian'] ?>" class="btn btn-info ">Nota</a>
						<a href="konfirmasi.php?id=<?php echo $pecah['id_pembelian'] ?>" class="btn btn-success">Konfirmasi Pemesanan</a>
					</td>
					
				</tr>
				<?php $nomor++; ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</section>
<?php include 'javascript.php'; ?>
  </body>
</html>