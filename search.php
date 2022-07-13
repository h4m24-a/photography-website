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






 
<?php 
 
$result= $_POST['search'];
$result= strtolower($result);

if (strpos($result, "about") == "true")
header ('Location: http://csucl.com/csucl.com/stu9/about1.php');

if (strpos($result, "home") == "true")
header ('Location: http://csucl.com/csucl.com/stu9/index1.php');

if (strpos($result, "contact") == "true")
header ('Location: http://csucl.com/csucl.com/stu9/contact1.php');

if (strpos($result, "portfolio") == "true")
header ('Location: http://csucl.com/csucl.com/stu9/portfolio.php');


echo "No results found for this search";
?> 
 