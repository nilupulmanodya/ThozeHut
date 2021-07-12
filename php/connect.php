 <?php


$dbServername = "localhost";
$dbUsername = "userthut";
$dbPassword = "thut";
$dbName = "thozehut";


// Create connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); 


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



?> 

