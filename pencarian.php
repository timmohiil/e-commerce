<?php include'koneksi.php' ?>
<?php
$keyword = $_GET["keyword"];

$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM product WHERE nama_product LIKE '%$keyword%' OR deskripsi_product LIKE '%$keyword%' ");
while ($pecah = $ambil->Fetch_assoc())
{
  $semuadata[] = $pecah;
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
    <title>PT. Visi Catur Mitra | Hasil Pencarian</title>
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

        <!--Menu Bergambar-->
        
        <section class="module-medium" id="demos">
          <div class="container"> 
            <h3>Hasil Pencarian <?php echo $keyword ?></h3>
            <?php if (empty($semuadata)):?>
              <div class="alert alert-danger">Pencarian <strong><?php echo $keyword ?></strong> Tidak Ditemukan</div>
            <?php endif ?>

            <div class="row">
              <?php foreach($semuadata as $key => $value): ?>
              <div class="col-md-3">
                <div class="thumbnail">
                  <img src="foto_product/<?php echo $value['foto_product']; ?>" alt="">
                    <div class="caption">
                        <h3><a href="detail_product.php?id=<?php echo $value["id_product"]; ?>"><?php echo $value['nama_product']; ?></a></h3>
                        <h5>Rp. <?php echo number_format($value['harga_product']); ?></h5>                                  
                  </div>
                </div>
              </div>
            <?php endforeach ?>

            </div>
          </div>
        </section>
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