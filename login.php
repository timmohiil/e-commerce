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

      <?php include 'navbar.php'; ?>
      
        <section class="module">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-body">
                            <div class="col-md-offset-5">
                              <h4 class="font-alt">Login Pelanggan</h4>  
                            </div>
                            <hr class="divider-w mb-10">
                              <form method="post">
                                  <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" class="form-control" name="email" required placeholder="E-mail">
                                  </div>
                                  <div class="form-group">
                                      <label>Password</label>
                                      <input type="password" class="form-control" name="password" required placeholder="Password">
                                  </div>
                                  <button class="btn btn-primary" name="simpan">Login</button>
                              </form>
                              <?php if (isset($_POST["simpan"]))
                              {
                                  $email= $_POST["email"];;
                                  $password= $_POST["password"];
                                  $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

                                  $akunyangcocok = $ambil->num_rows;

                                  if ($akunyangcocok==1)
                                  {
                                      //anda sukses login

                                      $akun=$ambil->Fetch_assoc();
                                      $_SESSION["pelanggan"] = $akun;
                                      echo "<script> alert('Login Berhasil');</script>";

                                      if (isset($_SESSION["keranjang"]) OR !empty($_SESSION["keranjang"]))
                                      {
                                          echo "<script> location='keranjang.php';</script>";
                                      }
                                      else
                                      {
                                          echo "<script> location='riwayat.php';</script>";
                                      }
                                     
                                  }
                                  else
                                  {        
                                      echo "<script> alert('Anda gagal login periksa akun anda');</script>";
                                      echo "<script> location='login.php';</script>";
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