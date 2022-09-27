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
    <title>PT. Visi Catur Mitra | Product</title>
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
      
      <div class="main">
        
          <section class="module-small">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest in clothing</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-11 ">
                <div class="form-group">
                  <form action="pencarian.php" method="get" class="navbar-form navbar-right">
                      <input type="text" class="form-control" name="keyword" required placeholder="pencarian product"/>
                      <button class="btn btn-round btn-g" type="submit">cari</button>
                  </form>
                </div>
              </div>
            </div>
              <div class="container">
                  <div class="row multi-columns-row">

                      <?php $ambil = $koneksi->query("SELECT * FROM product"); ?>
                      <?php while ($perproduct = $ambil->Fetch_assoc()) { ?>
                          
                      <div class="col-sm-6 col-md-3 col-lg-3" >
                          <div class="shop-item">
                            <div class="shop-item-image"><img src="foto_product/<?php echo $perproduct['foto_product']; ?>" alt="">
                              <div class="shop-item-detail"><a href="beli.php?id=<?php echo $perproduct['id_product']; ?>" class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                              
                              <div class="caption">
                                  <h3><a href="detail_product.php?id=<?php echo $perproduct["id_product"]; ?>"><?php echo $perproduct['nama_product']; ?></a></h3>
                                  <h5>Rp. <?php echo number_format($perproduct['harga_product']); ?></h5>
                                  
                              </div>
                          </div>
                      </div>
                     <?php } ?>

                  </div>
              </div>
          </section>

        

        <section class="module module-video bg-dark-30" data-background="">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt mb-0">Be inspired. Get ahead of trends.</h2>
              </div>
            </div>
          </div>
          <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Exclusive products</h2>
                <div class="module-subtitle font-serif">The languages only differ in their grammar, their pronunciation and their most common words.</div>
              </div>
            </div>
            <div class="row">
              
              <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
              <?php $ambil = $koneksi->query("SELECT * FROM product"); ?>
              <?php while ($perproduct = $ambil->Fetch_assoc()) { ?>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="ex-product"><a href="#"><img src="foto_product/<?php echo $perproduct['foto_product']; ?>" alt=""></a>
                      <h4 class="shop-item-title font-alt"><a href="detail_product.php?id=<?php echo $perproduct["id_product"]; ?>"><?php echo $perproduct['nama_product']; ?></a></h4>Rp. <?php echo number_format($perproduct['harga_product']); ?>
                    </div>
                  </div>
                </div>
                
                <?php } ?>
              </div>
            </div>
          </div>
        </section>
      
        <hr class="divider-w">
        <?php include 'sosial_media.php'; ?>
        <?php include 'javascript.php'; ?>
  </body>
</html>