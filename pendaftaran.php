
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
    <title>PT. Visi Catur Mitra | Pendaftaran Pelanggan</title>
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
        
        <section class="module">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-body">
                            <div class="col-md-offset-6">
                              <h4 class="font-alt">Daftar Pelanggan</h4>  
                            </div>
                            <hr class="divider-w mb-10">
                              <form method="post" class="form-horizontal">
                                  <div class="form-group">
                                      <label class="control-label col-md-3"> Nama</label>
                                      <div class="col-md-7">
                                        <input type="text" class="form-control" name="nama" required placeholder="Name">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="control-label col-md-3"> E-mail</label>
                                      <div class="col-md-7">
                                        <input type="text" class="form-control" name="email" required placeholder="E-mail">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-md-3"> Password</label>
                                      <div class="col-md-7">
                                        <input type="text" class="form-control" name="password" placeholder="password">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-md-3"> Alamat</label>
                                      <div class="col-md-7">
                                        <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Beserta Kode pos" required></textarea>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-md-3"> Telp/HP</label>
                                      <div class="col-md-7">
                                        <input type="text" class="form-control" name="telepon" placeholder="Phone" >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-7 col-md-offset-3">
                                        <button class="btn btn-primary" name="daftar">Daftar</button>
                                      </div>
                                  </div>

                              </form>
                              <?php
                              if (isset($_POST["daftar"])) 
                              {
                                $nama = $_POST["nama"];
                                $email = $_POST["email"];
                                $password = $_POST["password"];
                                $alamat = $_POST["alamat"];
                                $telepon = $_POST["telepon"];

                                $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
                                $yangcocok=$ambil->num_rows;

                                if ($yangcocok==1) 
                                {
                                  echo "<script> alert('Pendaftaran Gagal, email Sudah di gunakan');</script>";
                                  echo "<script> location='daftar.php'</script>";
                                }
                                else
                                {
                                  $koneksi->query("INSERT INTO pelanggan(nama_pelanggan,email_pelanggan,password_pelanggan,alamat_pelanggan,telepon_pelanggan) VALUES ('$nama','$email','$password','$alamat','$telepon')");

                                  echo "<script> alert('Pendaftaran Sukses, Silahkan Login');</script>";
                                  echo "<script> location='login.php'</script>";
                                }
                              }
                              ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
         <?php include 'javascript.php'; ?>
  </body>
</html>