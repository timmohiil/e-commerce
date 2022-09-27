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

<?php
$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah = $ambil->Fetch_assoc();

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
    <title>PT. Visi Catur Mitra | Multipurpose HTML5 Template</title>
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
<section class="riwayat">
	<div class="container">
		<h3>Edit Profil <?php echo $_SESSION["pelanggan"] ["nama_pelanggan"] ?></h3>
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label> E-mail</label>
					<input type="text" name="email" class="form-control" value="<?php echo $pecah['email_pelanggan']; ?>" required>
				</div>
				<div class="form-group">
					<label> Nama</label>
					<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_pelanggan']; ?>">
				</div>
				<div class="form-group">
					<label> Password</label>
					<input type="password" class="form-control" name="password" value="<?php echo $pecah['password_pelanggan']; ?>">
				</div>
				<div class="form-group">
					<label>Telepon</label>
					<input type="text" class="form-control" name="telepon" value="<?php echo $pecah['telepon_pelanggan']; ?>">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat_pelanggan']; ?>">
				</div>
				
				<button class="btn btn-primary" name="ubah"> Ubah</button>
			</form>
			<?php
			if (isset($_POST['ubah']))

			 	{
					$koneksi->query("UPDATE pelanggan SET email_pelanggan = '$_POST[email]',nama_pelanggan='$_POST[nama]',
					password_pelanggan='$_POST[password]',telepon_pelanggan='$_POST[telepon]',alamat_pelanggan='$_POST[alamat]'WHERE id_pelanggan ='$_GET[id]'");
					
					echo "<script> alert('Profil Telah Di Ubah');</script>";
					echo "<script> location='profil.php'; </script>"; 

				}

			?>

	</div>
</section>
<?php include 'javascript.php'; ?>
  </body>
</html>
