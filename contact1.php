<?php
$servername = "localhost";
$username = "csuclcom_sdb9";
$password = "pass_385!";
$dbname = "csuclcom_sdb9";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}
?>

<head>
<title> Contact Us</title>
</head>


<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">




<!-- Logo -->
<img src="image/capture.png"" alt="Capture" >
</div>
</div>
</div>

<div class="container-fluid px-md-5">
<div class="row justify-content-between">
<div class="col-md-8 order-md-last">
<div class="row">
<div class="col-md-6 text-center">
<a class="navbar-brand" href="index.html">Photography <span></span></a>
</div>
<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
<form action="#" class="searchform order-lg-last">
<div class="form-group d-flex">
<input type="text" class="form-control pl-3" placeholder="Search">
<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
</div>
</form>
</div>
</div>
</div>
<div class="col-md-4 d-flex">
<div class="social-media">
<p class="mb-0 d-flex">
<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

</p>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="index1.html" class="nav-link">Home</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="portfolio.php">Portfolio</a>
                <a class="dropdown-item" href="sidebyside2.php">View your Images</a>
                
              </div>
            </li>
	        	<li class="nav-item"><a href="about1.php" class="nav-link">About</a></li>
				<li class="nav-item"><a href="forum.php" class="nav-link">Forum</a></li>
				<li class="nav-item"><a href="contact1.php" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="loginform1.php" class="nav-link">Log In</a></li>
				<li class="nav-item"><a href="regform1.php" class="nav-link">Register</a></li>
				<li class="nav-item"><a href="a.php" class="nav-link">Profile</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>


<br>
<br>
<br>

















<html lang="en">
<head>
<title>Contact Form 10</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style2.css">

</head>
<body>
<section class="ftco-section img bg-hero" style="background-image: url(image/bg_1.jpg);">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">


</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-11">
<div class="wrapper">
<div class="row no-gutters justify-content-between">
<div class="col-lg-6 d-flex align-items-stretch">
<div class="info-wrap w-100 p-5">
<h3 class="mb-4">Contact us</h3>
<div class="dbox w-100 d-flex align-items-start">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-map-marker"></span>
</div>
<div class="text pl-4">
<p><span>Address:</span> 200, Green lane, Kings street, Leeds</p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-start">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-phone"></span>
</div>
<div class="text pl-4">
<p><span>Phone:</span> <a href="tel://123456">+ 01924 123 456</a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-start">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-paper-plane"></span>
</div>
<div class="text pl-4">
<p><span>Email:</span> <a href="mailto:info@creativecaptures.com">info@creativecaptures.com</a></p>
</div>
</div>
<div class="dbox w-100 d-flex align-items-start">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-globe"></span>
</div>
<div class="text pl-4">
<p><span>Website</span> <a href="http://csucl.com/csucl.com/stu9/index1.html">Creative Captures</a></p>
</div>
</div>
</div>
</div>
<div class="col-lg-5">
<div class="contact-wrap w-100 p-md-5 p-4">
<h3 class="mb-4">Get in touch</h3>
<div id="form-message-warning" class="mb-4"></div> 
<div id="form-message-success" class="mb-4">
Your message was sent, thank you!
</div>
<form method="POST" id="contactForm" name="contactForm">   
<div class="row">
<div class="col-md-12">
	<div class="form-group">
		<input type="text" class="form-control" name="name" id="name" placeholder="Name">
	</div>
</div>
<div class="col-md-12"> 
	<div class="form-group">
		<input type="email" class="form-control" name="email" id="email" placeholder="Email">
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
	
		<input type="submit" value="Send Message" class="btn btn-primary">
		<div class="submitting"></div>
	</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper1.js"></script>
<script src="js/bootstrap2.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/main2.js"></script>

</body>
</html>

<br>
<br>
<br>

<!-- Site footer -->
 <link rel="stylesheet" href="css/footer.css">
 
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Creative Captures is a company specialising in photography, involving wedding and event photography, sports photography, architecture and interior photography, wildlife and landscape photography and portrait photography including baby, family and pet photography.</p>
          </div>

         

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="index1.htmlphp">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="portfolio.php">Portfolio</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Forum</a></li>
              
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">Creative Captures</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

