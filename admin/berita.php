<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NAMA HMJ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color:#d7dadb;">
  


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap" >
      
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-4">
              <h1 class="my-0 site-logo"><a href="index.html">NAMA <span style="color: #297fb9">HMJ</span> </a></h1>
            </div>
            <div class="col-6 col-md-8">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span> <span class="menu-text">Menu</span>
                  </a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="berita.php" class="nav-link">Berita</a></li>
                    <li><a href="struktur.php" class="nav-link">Struktur Organisasi</a></li>
                    <li><a href="merchandise.php" class="nav-link">Merchandise</a></li>
                    <li><a href="karir.php" class="nav-link">Info Karir</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-navbar-wrap -->
    
    <div class="site-section" id="portfolio-section">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Berita</span>
            <h2 class="title mb-3" style="color: #297fb9">Edit/Hapus berita</h2>
            <a href="berita_tambah.php"><button type="button" class="btn btn-success">Tambah Berita Baru</button></a>
          </div>
        </div>

        <?php
        require_once('db.php');
        $sql = "SELECT * FROM halaman_berita";
        $result = $db->query($sql);
        while($row = $result->fetch_assoc()){
        ?>

        <div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="images/<?php echo $row["foto"];?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3><?php echo $row["judul"];?></h3>
            <p class="mb-4"><?php echo $row["isi"];?></p>
            <p class="mb-4"><a href="berita_edit.php?id=<?php echo $row["id"];?>" class="readmore" style="color: #297fb9" >Edit Berita</a></p>
            <p class="mb-4"><a href="berita_hapus.php?id=<?php echo $row["id"];?>" class="readmore">Hapus Berita</a></p>
          </div>
        </div>

        <?php
        }
        ?>

      </div>

    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>
            </div>
            

            
          </div>
          <div class="col-lg-3 ml-auto">
           
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigation</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php" class="smoothscroll">Home</a></li>
                  <li><a href="berita.php" class="smoothscroll">Berita</a></li>
                  <li><a href="struktur.php" class="smoothscroll">Struktur</a></li>
                  <li><a href="merchandise.php"  class="smoothscroll">Merchandise</a></li>
                  <li><a href="karir.php"  class="smoothscroll">Info Karir</a></li>
                </ul>
                </ul>
              </div>
              
            </div>
            
          </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

     
  </body>
</html>