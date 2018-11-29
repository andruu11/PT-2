<?php
session_start();
$_SESSION["intentos"]=0;
?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIFATA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />


    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
  <!--carousel-->
  <!-- Animate.css -->
  <link rel="stylesheet" href="vista/assets/in/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="vista/assets/in/css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="vista/assets/in/css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="vista/assets/in/css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="vista/assets/in/css/owl.carousel.min.css">
  <link rel="stylesheet" href="vista/assets/in/css/owl.theme.default.min.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="vista/assets/in/css/flexslider.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="vista/assets/in/css/style.css">

  <!-- Modernizr JS -->
  <script src="vista/assets/in/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <!--end carousel-->

   <!-- Font Awesome -->
    <link href="vista/assets/in2/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="vista/assets/in2/assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="vista/assets/in2/assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="vista/assets/in2/assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="vista/assets/in2/assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="vista/assets/in2/assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="vista/assets/in2/style.css" rel="stylesheet">


  </head>
  <body>
  <!-- Start menu area -->
  <div class="nav-area">      
    <a id="menu-btn" href="#"><i class="fa fa-bars"></i></a>
    <nav class="main-nav" id="main-menu">
      <span class="fa fa-remove" id="close"></span>
      <ul> 
        <li> <a href="#header"><i class="fa fa-home"></i><span>Inicio</span></a></li>
        <li><a href="#download-app"><i class="fa fa-users"></i><span>Inicia Sesion</span></a></li>         
      </ul>      
    </nav>
  </div>  
  <!-- End menu area -->

    
  <section id=header>
  <div class="fh5co-loader"></div>
  <div id="page">
  <aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
      <ul class="slides">
        <li style="background-image: url(vista/assets/img/tea1.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                <div class="slider-text-inner">
                  <h1>Misión</h1>
                  <h2>Crear una comunidad virtual para la familia</h2>
                  <h1><a>NO ESTAS SOLO!</a></h1\>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(vista/assets/img/tea2.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                <div class="slider-text-inner">
                  <h1>Visión</h1>
                  
                  <h1> Comunicar a toda aquella familia de la poblacion BOLIVIANA </h1> 
                  <h1>que tenga familiares con  <a>TEA</a></h1>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(vista/assets/img/tea3.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                <div class="slider-text-inner">
                  <h1>Unete!</h1>
                  <h2>Crea tu cuenta familiar</h2>
                  <p><a class="btn btn-primary btn-lg btn-learn" href="registro.php">Registrate</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>       
        </ul>
      </div>
  </aside>
   </section>

   <!-- Start download app -->
  <section id="download-app">
    <div class="download-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area wow fadeInUp">
              <h2 class="title">Si<span>FATA</span></h2>
              <p>La plataforma social para toda la familia </p>
            </div>
          </div>
          <!-- Start download app content -->
          <div class="col-md-12">
            <div class="download-app-content">
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="0.5s" href="registro.php" data-wow-delay="0.5s " >
                <div class="download-icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="download-content">
                  <p>Crea tu cuenta familiar</p>
                  <span>Registrate</span>
                </div>
              </a>
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s" >
                <div class="download-icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="download-content">
                  <p>Llamanos</p>
                  <span>2-438567</span>
                </div>
              </a>
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" href="login.php">
                <div class="download-icon">
                  <i class="fa fa-users"></i>
                </div>
                <div class="download-content">
                  <p>Inicia tu</p>
                  <span>Sesion</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End download app -->


  <!-- Start footer -->
  
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End -->

<!--navbar-->
 <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="vista/assets/in2/assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="vista/assets/in2/assets/js/slick.js"></script>   
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="vista/assets/in2/assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="vista/assets/in2/assets/js/wow.js"></script> 
  <!-- Off-canvas Menu -->   
  <script src="vista/assets/in2/assets/js/classie.js"></script>
 
  <!-- Custom js -->
  <script type="text/javascript" src="vista/assets/in2/assets/js/custom.js"></script>
<!--end-->

<!--carousel-->
<!-- jQuery -->
  <script src="vista/assets/in/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="vista/assets/in/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="vista/assets/in/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="vista/assets/in/js/jquery.waypoints.min.js"></script>
  <!-- Stellar Parallax -->
  <script src="vista/assets/in/js/jquery.stellar.min.js"></script>
  <!-- Carousel -->
  <script src="vista/assets/in/js/owl.carousel.min.js"></script>
  <!-- Flexslider -->
  <script src="vista/assets/in/js/jquery.flexslider-min.js"></script>
  <!-- countTo -->
  <script src="vista/assets/in/js/jquery.countTo.js"></script>
  <!-- Magnific Popup -->
  <script src="vista/assets/in/js/jquery.magnific-popup.min.js"></script>
  <script src="vista/assets/in/js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="vista/assets/in/js/main.js"></script>
  <!--end carousel-->

  </body>
</html>