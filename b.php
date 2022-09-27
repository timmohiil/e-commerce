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

      <hr class="divider-w">
        <section class="module-small">
          <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest in Product</h2>
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

                      <?php $ambil = $koneksi->query("SELECT * FROM product WHERE kategori_product='Book Certificate'"); ?>
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
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
                    </div>
                  </div>
              </div>
        </section>
        <hr class="divider-w">
       <?php include 'bussines.php'; ?>
        
 <?php include 'javascript.php'; ?>
  </body>
</html>