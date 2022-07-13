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
$COMM=$_POST["answer_ID"];
$sql = "DELETE FROM tbl_answer WHERE answer_answer = $COMM";
mysqli_query($conn, $sql);
  
mysqli_close($conn);
header('location: forum.php');
?>