
<?php
session_start();
//koneksi ke datebase
include'koneksi.php';
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
    <title>PT. Visi Catur Mitra</title>
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
        
        <section class="konten">
          <div class="container">
            

        <h2> Konfirmasi Pemesanan </h2>

        <?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
        $detail = $ambil->Fetch_assoc();
        ?>


        <?php
        $idpelangganyangbeli=$detail["id_pelanggan"];
        $idpelangganyanglogin=$_SESSION["pelanggan"]["id_pelanggan"];
        if ($idpelangganyangbeli!==$idpelangganyanglogin)
        {
          echo "<script> alert('Tidak Bisa masuk Kehalaman');</script>";
          echo "<script> location='riwayat.php';</script>";
            exit();
        }
        ?>


        <div class="row">
          <div class="col-md-4">
            <h3>Pembelian</h3>
            <strong>No. Pembelian: <?php echo $detail['id_pembelian']; ?></strong><br>
            Pembelian Pada  Tgl. <?php echo $detail['tanggal_pembelian']; ?> <br>
            Total Pembelian Rp. <?php echo number_format($detail['total_pembelian']); ?>
          </div>
          <div class="col-md-4">
            <h3>Pelanggan</h3>
            <strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
            <p>
              <?php echo $detail['telepon_pelanggan']; ?><br>
              <?php echo $detail['email_pelanggan']; ?><br>
            </p>
          </div>
          <div class="col-md-4">
            <h3>Pengiriman</h3>
            Alamat: <?php echo $detail['alamat_pengiriman']; ?>
          </div>
        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama product</th>
              <th>Harga</th>
              <th>Berat</th>
              <th>Jumlah</th>
              <th>Sub Berat</th>
              <th>Sub Total</th>  
            </tr>
          </thead>
          <tbody>
            <?php $nomor=1; ?>
            <?php $ambil=$koneksi->query("SELECT * FROM pembelian_product WHERE id_pembelian='$_GET[id]'") ?>
            <?php while($pecah=$ambil->Fetch_assoc()){ ?>
            <tr>
              <td><?php echo $nomor; ?>.</td>
              <td><?php echo $pecah['nama']; ?></td>
              <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
              <td><?php echo number_format($pecah['berat']); ?> gr</td>
              <td><?php echo $pecah['jumlah_pembelian']; ?></td>
              <td><?php echo number_format($pecah['sub_berat']*$pecah['jumlah_pembelian']); ?> gr</td>
              <td>Rp. <?php echo number_format($pecah['sub_harga']*$pecah['jumlah_pembelian']); ?></td>
              
            </tr>
            <?php $nomor++; ?>
            <?php } ?>
          </tbody>
        </table>

        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-info">
              <p>
                Silahkan Melakukan Konfirmasi Pemesanan Anda Dengan mengirimkan data pembelian anda:<br>
                <strong>No. Pembelian      : </strong> <?php echo $detail['id_pembelian']; ?> <br>
                <strong>Identitas pelanggan: </strong><br>
                  <p>
                  <?php echo $detail['nama_pelanggan']; ?><br>
                  <?php echo $detail['telepon_pelanggan']; ?><br>
                  <?php echo $detail['email_pelanggan']; ?><br>
                </p>

                <strong>Alamat Pengiriman: </strong> <?php echo $detail['alamat_pengiriman']; ?><br>
                <hr>

                <strong class="col-md-offset-5"><a> Ke Nomer WhastApp Dibawah</a> </strong><br>
                <p class="col-md-offset">
                  <a href="https://api.whatsapp.com/send?phone=6281295054540&text=Saya%20ingin%20mengkonfirmasi%20pemesanan%20saya%20yang%20melalui%20website%20.%0A%0ADengan :%0A=> No. Pembelian : <?php echo $detail['id_pembelian']; ?>%0A=> Nama pelanggan : <?php echo $detail['nama_pelanggan']; ?>%0A=> Email : <?php echo $detail['email_pelanggan']; ?>%0A=> Alamat Pengiriman : <?php echo $detail['alamat_pengiriman']; ?>" class=" col-sm-4 btn btn-d">Admin 1 +6281295054540</a>
                  <a href="https://api.whatsapp.com/send?phone=6289653368495&text=Saya%20ingin%20mengkonfirmasi%20pemesanan%20saya%20yang%20melalui%20website%20.%0A%0ADengan :%0A=> No. Pembelian : <?php echo $detail['id_pembelian']; ?>%0A=> Nama pelanggan : <?php echo $detail['nama_pelanggan']; ?>%0A=> Email : <?php echo $detail['email_pelanggan']; ?>%0A=> Alamat Pengiriman : <?php echo $detail['alamat_pengiriman']; ?>" class=" col-sm-4 btn btn-danger">Admin 2 +6289653368495 </a>
                  <a href="https://api.whatsapp.com/send?phone=6282126141025&text=Saya%20ingin%20mengkonfirmasi%20pemesanan%20saya%20yang%20melalui%20website%20.%0A%0ADengan :%0A=> No. Pembelian : <?php echo $detail['id_pembelian']; ?>%0A=> Nama pelanggan : <?php echo $detail['nama_pelanggan']; ?>%0A=> Email : <?php echo $detail['email_pelanggan']; ?>%0A=> Alamat Pengiriman : <?php echo $detail['alamat_pengiriman']; ?>" class=" col-sm-4 btn btn-d">Admin 3 +6282126141025</a>
                  <hr>
                </p>
              </p>
            </div>
          </div>
        </div>

          </div>
        </section>
         <?php include 'javascript.php'; ?>
  </body>
</html>