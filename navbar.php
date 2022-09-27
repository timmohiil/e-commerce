<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">
              <img src="assets/images/Logo.png" alt="logo" width="75" height="150">
            </a>
          </div>

          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="detail_blog.php?id=11" >Profile Company</a></li>

              <li class="dropdown"><a class="dropdown-toggle" href="product.php" data-toggle="dropdown">Product</a>
                <ul class="dropdown-menu" role="menu">
                  <li ><a  href="a.php" >a</a></li>
                  <li ><a  href="b.php" >b</a></li>
                  <li ><a  href="c.php" >c</a></li>
                  <li ><a  href="d.php" >d</a></li>
                   </ul> 
                  </li>
              </li>
              
              <li ><a href="blog.php" >Blog</a></li>

              <li ><a href="contact.php?id=16" >Contact</a></li>

              <?php if (isset($_SESSION["pelanggan"])): ?>
                  <li><a href="riwayat.php">Riwayat Belanja</a></li>
                  <li ><a  href="logout.php">Logout</a></li>
                  <li ><a  href="keranjang.php"><i class="fa fa-shopping-cart fa-3x"></i></a></li>
                  <li><a href="profil.php"><i class="fa fa-user fa-3x"></i></a></li>

              <!-- jika belum login (tidak ada session pelanggan) -->
              <?php else: ?>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="pendaftaran.php">Daftar</a></li>
              <?php endif ?>
            </ul>
          </div>
        </div>
      </nav>