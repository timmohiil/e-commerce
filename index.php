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

      <!--Foto Slide-->
      <?php include 'slide_show.php'; ?>

        <!--Menu Bergambar-->
        
        <section class="module-medium" id="demos">
          <div class="container">
            <div class="row multi-columns-row">

              <div class="col-lg-3 col-sm-6">
                <a href="a.php">
                  <div class="serv2">
                    <img src="assets/images/border/a.png" alt="Stopmap Kartu Nama Id Card">
                  </div>
                  <h3 class="content-box-title font-serif">a</h3>
                </a>
              </div>

              <div class="col-lg-3 col-sm-6">
                <a href="b.php">
                  <div class="content-box-image">
                    <img src="assets/images/border/b.png" alt="Book Certificate">
                  </div>
                  <h3 class="content-box-title font-serif">b</h3>
                </a>
              </div>

              <div class="col-lg-3 col-sm-6">
                <a href="c.php">
                  <div class="content-box-image">
                    <img src="assets/images/border/c.png" alt="Famleat Leaflet / Flayer Brosur">
                  </div>
                  <h3 class="content-box-title font-serif">c</h3>
                </a>
              </div>

              <div class="col-lg-3 col-sm-6">
                <a class="content-box" href="d.php">
                  <div class="content-box-image">
                    <img src="assets/images/border/d.png" alt="sticker">
                  </div>
                  <h3 class="content-box-title font-serif">d</h3>
                </a>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">
        <?php include 'bussines.php'; ?>

        <?php include 'javascript.php'; ?>
        
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>