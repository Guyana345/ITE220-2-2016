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
     <style media="screen">
	    .bann {
	        min-height: 780px;
	        background: url(./images/bg-lg.jpg)no-repeat center 0px;
	        background-size: cover;
	        position: relative;
	        margin-bottom: 35px;
	        -webkit-filter: brightness(80%);
        	filter: brightness(80%);
	        color: white;

    }
    </style>
</head>

<body>

  <!-- banner -->
  <div class="bann">
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
                      <h1><a  href="index.html">Mustang</a></h1>
                  </div>
                  <!-- navbar-header -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.php">Home</a></li>
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


              <ul class="slides">
                  <li>
                      <h2 class="agile-title">Member Login</h2>
                      <div class="container">
						<div class="row">
							<div class="wrap-login col-md-4 col-md-offset-4">
									<h1 class="text-center" style="margin-bottom:30px;"></h1>

									<form action="loginAction.php" method="POST">

										<div class="form-group">
											<label for="Username">Username</label>
											<input type="text" class="form-control" id="Username" placeholder="Username" name="username"/>
										</div>

											  <div class="form-group">
											    <label for="Password">Password</label>
											    <input type="password" class="form-control" id="Password" placeholder="Password" name="password"/>
											  </div>

										<div class="checkbox">
											<label>
										  		<input type="checkbox"> Remember me
										  	</label>
										</div>

				 						<button type="submit" class="btn-login btn btn-block btn-primary">Login</button>
									</form>
									<button type="submit" class="btn-login btn btn-block btn-warning" id="btn2" onClick=location.href="signup.php'" style='margin-top:10px;'>Sign up</button>
							</div>
						</div>
						</div>
                  </li>

              </ul>

      </div>
      <!-- //banner-text -->
  </div>
  </body>
  </html>
