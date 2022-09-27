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

        <section class="module-small">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest in Blog</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-11 ">
                <div class="form-group">
                  <form action="pencarian.php" method="get" class="navbar-form navbar-right">
                      <input type="text" class="form-control" name="keyword" required placeholder="pencarian blog"/>
                      <button class="btn btn-round btn-g" type="submit">cari</button>
                  </form>
                </div>
              </div>
            </div>
              <div class="container">
                  <div class="row multi-columns-row">

                      <?php $ambil = $koneksi->query("SELECT * FROM blog"); ?>
                      <?php while ($perblog = $ambil->Fetch_assoc()) { ?>
                          
                      <div class="col-sm-6 col-md-3 col-lg-3" >
                          <div class="shop-item">
                            <div class="shop-item-image"><img src="foto_blog/<?php echo $perblog['foto_blog']; ?>" alt="">
                              <div class="shop-item-detail"><a href="detail_blog.php?id=<?php echo $perblog["id_blog"]; ?>" class="btn btn-round btn-b"><span class="icon-book-open">Lihat Post</span></a></div>
                            </div>
                              
                              <div class="caption">
                                  <h3><a href="detail_blog.php?id=<?php echo $perblog["id_blog"]; ?>"><?php echo $perblog['judul_blog']; ?></a></h3>
                                  <div class="post-meta">By&nbsp;<a href="#">PT. Visi Catur Mitra</a>| <?php echo $tanggal = date("Y-m-d"); ?>
                                </div>
                              </div>
                          </div>
                      </div>
                     <?php } ?>

                  </div>
              </div>
          </section>
        
         <?php include 'javascript.php'; ?>
  </body>
</html>