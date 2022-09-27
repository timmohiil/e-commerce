<?php   session_start();?>

<?php include'koneksi.php'; ?>
<?php
$id_blog = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM blog WHERE id_blog ='$id_blog'");
$detail=$ambil->Fetch_assoc();

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
    <title>PT. Visi Catur Mitra | Blog <?php echo $detail['judul_blog']; ?></title>
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
              <div class="col-sm-8">
                <div class="post">
                  <div class="post-thumbnail"><a href="foto_blog/<?php echo $detail['foto_blog']; ?>"><img src="foto_blog/<?php echo $detail['foto_blog']; ?>" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><?php echo $detail['judul_blog']; ?></a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">PT. Visi Catur Mitra</a>| <?php echo $tanggal = date("Y-m-d"); ?>
                    </div>
                  </div>
                  <div class="post-entry">
                    <p><?php echo $detail['artikel_blog']; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                <div class="widget">
                  <form role="form">
                    <div class="search-box">
                      <input class="form-control" type="text" placeholder="Search..."/>
                      <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
         <?php include 'javascript.php'; ?>
  </body>
</html>