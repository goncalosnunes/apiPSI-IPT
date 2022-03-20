<?php
header("Access-Control-Allow-Origin: *");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "numeros";
// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  //die("Connection failed: " . $conn->connect_error);
}
else{
   echo "Connected successfully";

}      
mysqli_set_charset($conn,"utf8");
?>