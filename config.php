<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "quiz";
 $cookie_name = 'siteAuth';
 $cookie_time = (0); //30 giay

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname) or die("Failed to connect to MySQL: " . mysql_error());
mysqli_set_charset($conn,'utf8');

?>
