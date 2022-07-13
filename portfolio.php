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
<title> Portfolio</title>
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


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>



<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="w3-opacity">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i ></i></span> 
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <h1><b>PORTFOLIO</b></h1>
  <form method="post" action="uploadform.php">
			<input type="submit" name = "submit" value="Upload your own Images"/>
		</form>
  
  <p class="w3-padding-16"><button class="w3-button w3-black" onclick="myFunction()">Toggle Grid Padding</button></p>
</header>
</div>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img src="image/build7.png"  style="width:100%">
    <img src="image/build8.png" style="width:100%">
    <img src="image/build9.png" style="width:100%">
    <img src="image/build10.png" style="width:100%">
    <img src="image/build11.png" style="width:100%">
    <img src="image/build12.png"style="width:100%">
  </div>

  <div class="w3-third">
    <img src="image/build13.png"style="width:100%">
    <img src="image/build14.png" style="width:100%">
    <img src="image/build15.png" style="width:100%">
    <img src="image/build16.png" style="width:100%">
    <img src="image/build17.png" style="width:100%">
    <img src="image/build18.png" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="image/build19.png" style="width:100%">
    <img src="image/build20.png" style="width:100%">
    <img src="image/build21.png" style="width:100%">
    <img src="image/build22.png" style="width:100%">
    <img src="image/build23.png" style="width:100%">
    <img src="image/build24.png" style="width:100%">
  </div>
</div>

<!-- End Page Content -->
</div>


 
<script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>


<br>






<BR>
<BR>
<BR>


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








