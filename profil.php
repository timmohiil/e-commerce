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
    <title>PT. Visi Catur Mitra | Profile Pelanggan</title>
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

<section class="module">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-body">
                            <div class="col-md-offset-4">
                              <h4 class="font-alt">Profil Pelanggan</h4>  
                            </div>
                            <hr class="divider-w mb-10">
                            <form method="post" class="form-horizontal">
                              <?php
                              $id_pelanggan=$_SESSION["pelanggan"]['id_pelanggan'];

                              $ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
                              while ($pecah=$ambil->Fetch_assoc()){
                              ?>

                                
                                <div class="form-group">
                                  <label class="control-label col-md-3"> Nama :</label>
                                  <div class="col-md-7">
                                    <a ><?php echo $pecah['nama_pelanggan']; ?></a>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3"> E-mail :</label>
                                  <div class="col-md-7">
                                    <a ><?php echo $pecah['email_pelanggan']; ?></a>
                                  </div>
                                </div>                        
                                <div class="form-group">
                                  <label class="control-label col-md-3"> Alamat :</label>
                                  <div class="col-md-7">
                                    <a ><?php echo $pecah['alamat_pelanggan']; ?></a>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3"> Telp/HP :</label>
                                  <div class="col-md-7">
                                    <a ><?php echo $pecah['telepon_pelanggan']; ?></a>
                                  </div>
                                </div>
                              
                              <hr>
                              <a href="edit_profil.php?id=<?php echo $pecah['id_pelanggan']; ?>" class="col-md-offset-3 col-md-6 btn btn-border-d">Edit</a>
                            <?php } ?>
                              </form>
	                       </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
<?php include 'javascript.php'; ?>
  </body>
</html>