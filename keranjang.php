<?php 
	session_start();

	include'koneksi.php';
	if (!isset($_SESSION["pelanggan"]) or empty($_SESSION["pelanggan"]))
	{
		echo "<script> alert('Silahkan Login Terlebih Dahulu');</script>";
	    echo "<script> location='login.php';</script>";
		exit();
	}

	if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
	{
		echo "<script> alert('Keranjang Anda Kosong, Silahkan belanja Terlebih dahulu');</script>";
		echo "<script> location='product.php';</script>";
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
    <title>PT. Visi Catur Mitra | Keranjang pesanan</title>
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

      <?php include 'menu.php'; ?>
      
      <div class="main">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt">Keranjang</h1>
              </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-striped table-border checkout-table">
                  <tbody>
                    <tr>
          						<th>No</th>
          						<th>Foto</th>
          						<th>product</th>
          						<th>Harga</th>
          						<th>Jumlah</th>
          						<th>Sub Harga</th>
          						<th>Aksi</th>
          					</tr>
                    <?php $nomor=1; ?>
          					<?php foreach ($_SESSION['keranjang'] as $id_product => $jumlah): ?>
          					<?php 
          						$ambil = $koneksi->query("SELECT * FROM product WHERE id_product='$id_product'");
          						$pecah = $ambil->Fetch_assoc();
          						$subharga =$pecah["harga_product"]*$jumlah;
          						//echo "<pre>";
          						//print_r($pecah);
          						//echo "</pre>";
          					?>
          					<tr>
          						<td><?php echo $nomor; ?></td>
          						<td>
          							<img src="foto_product/<?php echo $pecah['foto_product']; ?>" width="100">
          						</td>
          						<td><?php echo $pecah["nama_product"]; ?></td>
          						<td>Rp. <?php echo number_format($pecah["harga_product"]); ?></td>
          						<td><?php echo $jumlah ?></td>
          						<td>Rp. <?php echo number_format($subharga) ?></td>
          						<td>
          							<a href="hapuskeranjang.php?id=<?php echo $id_product ?>" class="btn btn-d btn-round btn-block  ">HAPUS</a>
          						</td>
          					</tr>
          					<?php $nomor++; ?>
          					<?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">              
              <div class="col-sm-3 col-sm-offset-9">
                <div class="form-group">
                  <a href="product.php"class="btn btn-block btn-round btn-g" type="submit">Lanjut Belanja</a>
                </div>
              </div>
            </div>
            <div class="row">              
              <div class="col-sm-3 col-sm-offset-9">
                <div class="form-group">
                  <a href="pesan.php"class="btn btn-block btn-round btn-d pull-right" type="submit">Lanjut Pesan</a>
                </div>
              </div>
            </div>
            <hr class="divider-w">
          </div>
        </section>
         <?php include 'javascript.php'; ?>
  </body>
</html>