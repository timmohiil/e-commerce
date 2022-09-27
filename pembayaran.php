<?php
session_start();
//koneksi ke datebase
include'koneksi.php';

// jika tidak ada sesson pelanggan (blm login)
if (!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"])) 
{
   echo "<script>alert('silahkan login');</script>";
   echo "<script>location='login.php';</script>";
   exit();
}


//mendapatkan id_pembelian dari url
$idpem = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$idpem'");
$detpem = $ambil->fetch_assoc();

// mendapatkan id_pelanggan yang beli
$id_pelanggan_beli = $detpem["id_pelanggan"];
// mendapatkan id_pelanggan yang login
$id_pelanggan_login = $_SESSION["pelanggan"]["id_pelanggan"];

if ($id_pelanggan_login !==$id_pelanggan_beli)
{
   echo "<script>alert('jangan nakal');</script>";
   echo "<script>location='riwayat.php';</script>";
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
    <title>PT. Visi Catur Mitra | Nota Pemesanan</title>
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

       <!--Foto Slide-->
      <section class="bg-dark-30 showcase-page-header module parallax-bg" data-background="assets/images/Riwayat.png">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Powerful. Multipurpose.</div>
            <div class="font-alt mb-40 titan-title-size-4">100+ Layouts</div><a class="section-scroll btn btn-border-w btn-round" href="#demos">See Demos</a>
          </div>
        </div>
      </section>

      <!--iklan Download atas-->
      <div class="main showcase-page">
        <section class="module-extra-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-8 col-lg-9">
                <div class="callout-text font-alt">
                  <h4 style="margin-top: 0px;">Start Creating Beautiful Websites</h4>
                  <p style="margin-bottom: 0px;">Download Titan Free today!</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="callout-btn-box"><a class="btn btn-border-w btn-circle" href="https://themewagon.com/themes/titan/">Downlaod Free</a></div>
              </div>

            </div>
          </div>
        </section>


<section class="konten">
    <div class="container">
        <h2>Konfirmasi Pembayaran</h2>
        <p>kirim bukti pembayaran Anda disini</p>
        <div class="alert alert-info">total tagihan Anda <strong>Rp. <?php echo number_format($detpem["total_pembelian"]) ?></strong></div>


        <form method="post" enctype="multipart/from-data">
            <div class="form-group">
                <label>Nama Penyetor</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label>Bank</label>
                <input type="text" class="form-control" name="bank">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="number" class="form-control" name="jumlah" min="1">
            </div>
            <div class="form-group">
                <label>Foto Bukti</label>
                <input type="file" class="form-control" name="bukti">
                <p class="text-danger">foto bukti harus JPG minimal 2MB</p>
            </div>
            <button class="btn btn-primary" name="kirim">Kirim</button>  </form>
        </div>
<?php
// jk ada tombol kirim
if (isset($_POST["kirim"])) 
{
   // upload dulu foto bukti
   $namabukti = $_FILES["bukti"]["name"];
   $lokasibukti = $_FILES["bukti"]["tmp_name"];
   $namafiks = date("YmdHis").$namabukti;
   move_uploaded_file($lokasibukti, "bukti_pembayaran/$namafiks");

   $nama = $_POST["nama"];
   $bank = $_POST["bank"];
   $jumlah = $_POST["jumlah"];
   $tanggal = date("Y-m-d");


   $koneksi->query("INSERT INTO pembayaran(id_pembelian,nama,bank,jumlah,tanggal,bukti)
    VALUES ('$idpem','$nama','$bank','$jumlah','$tanggal','$namafiks')");

   $koneksi->query("UPDATE pembelian SET status_pembelian='selesai' WHERE id_pembelian='$idpem' ");
      echo "<script>alert('Terimakasih');</script>";
   echo "<script>location='riwayat.php';</script>";

}
?>
  </div>
</section>
 <?php include 'javascript.php'; ?>
  </body>
</html>