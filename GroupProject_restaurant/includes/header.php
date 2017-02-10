<!DOCTYPE html>
<html>

<head>
    <title>Mustang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grilling Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Custom CSS files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/main.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/swipebox.css">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <!-- //Custom CSS files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- //web-fonts -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
</head>

<body>

  <!-- banner -->
  <div class="banner">
      <div class="header">
          <!-- header -->
          <div class="container">
              <nav class="navbar navbar-default">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                      <h1><a  href="index.php">Mustang</a></h1>
                  </div>
                  <!-- navbar-header -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.php" class="active">Home</a></li>
                          <li><a href="about.php">About</a></li>
                          <li><a href="contact.php">Contact Us</a></li>
                          <li><a href="Login1.php">Login</a></li>
                      </ul>
                      <div class="clearfix"> </div>
                  </div>
              </nav>
          </div>
      </div>
      <!-- //header -->
      <!-- banner-text -->
      <div class="banner-text">
          <div class="flexslider">
              <ul class="slides">
                  <li>
                      <h2>AMAZING  </h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
                      <a href="#contact" class="more scroll">Book a Table</a>
                  </li>
                  <li>
                      <h3>GRILLING</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
                      <a href="#contact" class="more scroll">Book a Table</a>
                  </li>
                  <li>
                      <h3>RECIPES </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
                      <a href="#contact" class="more scroll">Book a Table</a>
                  </li>
              </ul>
          </div>
          <!-- FlexSlider -->
          <script defer src="js/jquery.flexslider.js"></script>
          <script type="text/javascript">
              $(window).load(function() {
                  $('.flexslider').flexslider({
                      animation: "slide",
                      controlsContainer: $(".custom-controls-container"),
                      customDirectionNav: $(".custom-navigation a")
                  });
              });
          </script>
          <!-- //FlexSlider -->
      </div>
      <!-- //banner-text -->
  </div>
  <!-- //banner -->
