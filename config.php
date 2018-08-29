<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "quiz";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname) or die("Failed to connect to MySQL: " . mysql_error());
mysqli_set_charset($conn,'utf8');

?>