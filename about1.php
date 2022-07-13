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
<title> About </title>
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


<head>
	
	<meta charset="UTF-8">
	<meta name="description" content="Photographer html template">
	<meta name="keywords" content="photographer, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	

	<!-- About section  -->
	<section class="about-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<div class="about-bg set-bg" data-setbg="image/skillsbg2.png"></div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="about-text">
						<h2>About me. </h2>
						<p>Hi! I’m a portrait photographer in the town of Leeds, but I shoot portraits all over the country. I’ve been a photographer for 5 years and I can’t imagine doing anything else. My photography style is about architecture, and I just love capturing fascinating buildings or sculptures. The best thing about being a portrait photographer is that I get to meet wonderful new people and work for myself. <p/>
						<h4>My Clients</h4>
						<p>Company INC, Management INc, Photo album INC, Fachion Gala, , </p>
						<h4>Editorials</h4>
						<p>Vougue, Elle, Company INC, Management INc, Photo album INC, Fashion Week, Fachion Gala, Vanity Fair, Vougue IT</p>
						<a href="contact1.php" class="site-btn">contact me</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About section end  -->
	
	<br>
	<br>
	
	<!-- Skills section  -->
	<div class="skill-section set-bg" data-setbg="image/skillsbg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress text-white" data-cptitle="Passion" data-cpid="id-1" data-cpvalue="100" data-cpcolor="#ffffff"></div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress text-white" data-cptitle="Models" data-cpid="id-2" data-cpvalue="75" data-cpcolor="#ffffff"></div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress text-white" data-cptitle="Studio" data-cpid="id-3" data-cpvalue="25" data-cpcolor="#ffffff"></div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress text-white" data-cptitle="Nature" data-cpid="id-4" data-cpvalue="50" data-cpcolor="#ffffff"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Skills section end  -->


<br>
<br>

<style>
h2{
font-family: Bahnschrift SemiBold;
color: black;
font-size: 35px;
text-align:center;
}
</style>
<h2>Our Location!</h2>

<br>
<br>




<html>

<head>
	<meta charset="utf-8">
	<title>Customize the scroll-bar</title>


<center>


<div>
<!-- Google Map Copied Code -->
<iframe src=
"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75394.15842161656!2d-1.6057715692661316!3d53.80608347055451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48793e4ada64bd99%3A0x51adbafd0213dca9!2sLeeds!5e0!3m2!1sen!2suk!4v1637189254100!5m2!1sen!2suk"
width="600"
height="500"
frameborder="0"
style="border:0;"
allowfullscreen=""
aria-hidden="false"
tabindex="0">
</iframe>
</div>
</center>


</html>

<br>
<br>
<br>
<br>




<style>
h2{
font-family: Bahnschrift SemiBold;
color: black;
font-size: 32px;
text-align:center;
}
</style>
<h2>Our Services!</h2>




	<!-- Services section  -->
	<section class="services-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="image//1.png" alt="">
						<h4>Studio Photography</h4>
						<p>Studio photography is used to shoot a wide variety of subjects, including people, animals and wide variety of products, from automobiles to jewellery.  </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="image/2.png" alt="">
						<h4>Wedding Editing</h4>
						<p>Our role as a photographer covers so much more than just taking images.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="image/3.png" alt="">
						<h4>Photo on tape</h4>
						<p> Turn you own photos into stickers using packing tape. Use them to decorate mugs, bottles, storage jars, and so much more!</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="image/4.png" alt="">
						<h4>Modern Editing</h4>
						<p>Our role as a photographer covers so much more than just taking images by using applications such as After Effects. </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="image/5.png" alt="">
						<h4>Video Recording</h4>
						<p>We make content with impact - from promos, to documentaries, animations, event films and more! </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-item">
						<img src="image/6.png" alt="">
						<h4>Video Editing</h4>
						<p>Our role as a photographer covers so much more than just taking images by using applications such as Premiere Pro and Sony Vegas.</p>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- Services section end  -->
	
	
	<!-- XML List-->


<style>

table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
   padding: 15px;
  text-align: left;
  margin-left: auto;
  margin-right: auto;
  
  tr:hover {background-color: yellow;}
}
}
</style>
<body>

<button  onclick="loadXMLDoc()">View Artists</button>
<br><br>
<table id="demo"></table>

<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      myFunction(xmlhttp);
    }
  };
  xmlhttp.open("GET", "artist.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Artist</th><th>Country</th></tr>";
  var x = xmlDoc.getElementsByTagName("PHOTO");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

</body>
	
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

<!-- Stylesheets -->
	<link rel="stylesheet" href="css2/bootstrap.min.css"/>
	<link rel="stylesheet" href="css2/font-awesome.min.css"/>
	<link rel="stylesheet" href="css2/magnific-popup.css"/>
	<link rel="stylesheet" href="css2/slicknav.min.css"/>
	<link rel="stylesheet" href="css2/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css2/style2.css"/>
	
	

	<!--====== Javascripts & Jquery ======-->
	<script src="JS/jquery-3.2.1.min.js"></script>
	<script src="JS/bootstrap.min.js"></script>
	<script src="JS/jquery.slicknav.min.js"></script>
	<script src="JS/owl.carousel.min.js"></script>
	<script src="JS/jquery.magnific-popup.min.js"></script>
	<script src="JS/circle-progress.min.js"></script>
	<script src="JS/mixitup.min.js"></script>
	<script src="JS/instafeed.min.js"></script>
	<script src="JS/masonry.pkgd.min.js"></script>
	<script src="JS/main.js"></script>

	</body>
</html>



