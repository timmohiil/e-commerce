<?php   session_start();?>

<?php include'koneksi.php'; ?>
<?php
$id_product = $_GET["id"];

$ambil = $koneksi->query("SELECT * FROM product WHERE id_product ='$id_product'");
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
    <title>Ibro Art | Product <?php echo $detail['nama_product']; ?></title>
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
      
      <div class="main">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 mb-sm-40"><a class="gallery" href="foto_product/<?php echo $detail['foto_product']; ?>"><img src="foto_product/<?php echo $detail['foto_product']; ?>" alt="" class="img-responsive"></a>
              </div>

                <div class="col-md-6">
                  <h2><?php echo $detail['nama_product']; ?></h2>
                  <div class="row mb-20">
                    <div class="col-sm-12">
                      <span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><a class="open-tab section-scroll" href="#reviews">-2rb customer reviews</a>
                  </div>
                    <h4>Rp. <?php echo number_format($detail['harga_product']); ?></h4>

                    <form method="post">
                      <div class="form-group">
                        <div class="input-group">
                          <input type="number" min="1" class="form-control" name="jumlah">
                          <div class="input-group-btn">
                            <button class="btn btn-primary" name="beli">BELI</button>
                          </div>
                        </div>
                      </div>
                    </form> 
                    <?php
                    if (isset($_POST["beli"]))
                    {
                      $jumlah = $_POST['jumlah'];
                      $_SESSION['keranjang'] [$id_product] = $jumlah;

                      echo "<script> alert('Produk Telah Masuk Ke Keranjang');</script>";
                      echo "<script> location='keranjang.php';</script>";
                     } 
                    ?>
                     
                </div>

                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="product_meta">Categories:<a href="undangan.php"> Undangan, </a><a href="stiker.php">Stiker, </a><a href="banner.php">Banner</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-70">
              <div class="col-sm-12">
                <ul class="nav nav-tabs font-alt" role="tablist">
                  <li class="active"><a href="#description" data-toggle="tab"><span class="icon-tools-2"></span>Description</a></li>
                  <li><a href="#data-sheet" data-toggle="tab"><span class="icon-tools-2"></span>Data sheet</a></li>
                  <li><a href="#reviews" data-toggle="tab"><span class="icon-tools-2"></span>Reviews (2)</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <p><?php echo $detail['deskripsi_product']; ?></p>
                  </div>
                  <div class="tab-pane" id="data-sheet">
                    <table class="table table-striped ds-table table-responsive">
                      <tbody>
                        <tr>
                          <th>Title</th>
                          <th>Info</th>
                        </tr>
                        <tr>
                          <td>Compositions</td>
                          <td><?php echo $detail['kategori_product']; ?></td>
                        </tr>
                        <tr>
                          <td>Size</td>
                          <td><?php echo $detail['ukuran_product']; ?></td>
                        </tr>
                        <tr>
                          <td>Brand</td>
                          <td><?php echo $detail['jenis_bahan']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="reviews">
                    <div class="comments reviews">
                      <div class="comment clearfix">
                        <div class="comment-avatar"><img src="assets/images/client-logo-2.png" alt="avatar"/></div>
                        <div class="comment-content clearfix">
                          <div class="comment-author font-alt"><a href="#">Gatot Subroto</a></div>
                          <div class="comment-body">
                            <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                          </div>
                          <div class="comment-meta font-alt">Today, 14:55 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="comment clearfix">
                        <div class="comment-avatar"><img src="assets/images/client-logo-1.png" alt="avatar"/></div>
                        <div class="comment-content clearfix">
                          <div class="comment-author font-alt"><a href="#">Agus Supriyono</a></div>
                          <div class="comment-body">
                            <p>Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                          </div>
                          <div class="comment-meta font-alt">Today, 14:59 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="comment-form mt-30">
                      <h4 class="comment-form-title font-alt">Add review</h4>
                      <form method="post">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label class="sr-only" for="name">Name</label>
                              <input class="form-control" id="name" type="text" name="name" placeholder="Name"/>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label class="sr-only" for="email">Name</label>
                              <input class="form-control" id="email" type="text" name="email" placeholder="E-mail"/>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <select class="form-control">
                                <option selected="true" disabled="">Rating</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <textarea class="form-control" id="" name="" rows="4" placeholder="Review"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <button class="btn btn-round btn-d" type="submit">Submit Review</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        
        <hr class="divider-w">
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
        <?php include 'bussines.php'; ?>

         <?php include 'javascript.php'; ?>
  </body>
</html>