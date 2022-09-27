<?php
session_start();
//koneksi ke datebase
include'koneksi.php';

//jika tidak ada session pelanggan(belum login ) maka di larikan ke login.php
if (!isset($_SESSION["pelanggan"]))
{
  echo "<script> alert('Silahkan Login');</script>";
    echo "<script> location='Login.php';</script>";
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
    <title>PT. Visi Catur Mitra | Pesan Product</title>
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
      <?php include 'foto_slide.php'; ?>

      <!--iklan Download atas-->
      <?php include 'iklan.php'; ?>
      
      <div class="main">
        <section class="konten">
          <div class="container">
              <h1>Pesan Produk</h1>
              <hr>
              <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Product</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>Sub Harga</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $nomor=1; ?>
                  <?php $totalbelanja=0;?>
                  <?php foreach ($_SESSION['keranjang'] as $id_product => $jumlah): ?>
                  <?php 
                      $ambil = $koneksi->query("SELECT * FROM product WHERE id_product='$id_product'");
                      $pecah = $ambil->Fetch_assoc();
                      $subharga =$pecah["harga_product"]*$jumlah;
                  ?>
                  <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $pecah["nama_product"]; ?></td>
                      <td>Rp. <?php echo number_format($pecah["harga_product"]); ?></td>
                      <td><?php echo $jumlah ?></td>
                      <td>Rp. <?php echo number_format($subharga) ?></td>
                     
                  </tr>
                  <?php $nomor++; ?>
                  <?php $totalbelanja+=$subharga;?>
                  <?php endforeach ?>
              </tbody>
              <tfoot>
                  <tr>
                      <th colspan="4">Total Belanja</th>
                      <th>Rp. <?php echo number_format($totalbelanja);?></th>
                  </tr>
              </tfoot>
              </table>

              <form method="post">
                  <div class="col-md-4">
                      <div class="form-group">
                          <input type="text" readonly value="<?php echo $_SESSION["pelanggan"] ['nama_pelanggan'] ?>" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <input type="text" readonly value="<?php echo $_SESSION["pelanggan"] ['telepon_pelanggan'] ?>" class="form-control">
                      </div>
                  </div>                      
                  
                  <div class="col-sm-12 col-md-offset-0">
                    <div class="form-group">
                        <label>Alamat Pengiriman</label>
                        <textarea class="form-control" name="alamat_pengiriman" placeholder="Masukan Alamat Beserta Kode pos"></textarea>
                    </div>
                        <button class="btn btn-primary" name="pesan"> pesan</button>
                  </div>
                </div>
              </form>

              <?php
              if (isset($_POST["pesan"]))
              {
                  $id_pelanggan = $_SESSION["pelanggan"] ["id_pelanggan"];
                  $id_ongkir = $_POST['id_ongkir'];
                  $tanggal_pembelian = date("y-m-d");
                  $alamat_pengiriman = $_POST['alamat_pengiriman'];

                  $ambil= $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir = '$id_ongkir'");
                  $arrayongkir = $ambil->Fetch_assoc();
                  $nama_kota = $arrayongkir['nama_kota'];
                  $tarif = $arrayongkir['tarif'];

                  $total_pembelian = $totalbelanja + $tarif;

                  $koneksi->query("INSERT INTO pembelian(id_pelanggan,id_ongkir,tanggal_pembelian,total_pembelian,nama_kota,tarif,alamat_pengiriman) VALUES ('$id_pelanggan','$id_ongkir','$tanggal_pembelian','$total_pembelian','$nama_kota','$tarif','$alamat_pengiriman')");

                  $id_pembelian_barusan = $koneksi->insert_id;

                  foreach($_SESSION["keranjang"] as $id_product=>$jumlah_pembelian)
                  {
                      //mendapatkan data product berdasarkan id product
                      $ambil=$koneksi->query("SELECT * FROM product WHERE id_product='$id_product'");
                      $perproduct=$ambil->Fetch_assoc();

                      $nama = $perproduct['nama_product'];
                      $harga = $perproduct['harga_product'];
                      $berat = $perproduct['berat_product'];
                      $sub_berat = $perproduct['berat_product']*$jumlah;
                      $sub_harga = $perproduct['harga_product']*$jumlah;

                      $koneksi->query("INSERT INTO pembelian_product(id_pembelian,id_product,nama,harga,berat,sub_berat,sub_harga,jumlah_pembelian) VALUES ('$id_pembelian_barusan','$id_product','$nama','$harga','$berat','$sub_berat','$sub_harga','$jumlah_pembelian')");
                  }

                  unset($_SESSION['keranjang']);

                  echo "<script> alert('Pemesanan Sukses');</script>";
                  echo "<script> location='nota.php?id=$id_pembelian_barusan';</script>";
               } 
              ?>
        </div>  
      </section>
      <hr>
     <?php include 'javascript.php'; ?>
  </body>
</html>