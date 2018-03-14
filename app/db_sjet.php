<?php 
$servername = "localhost";
$username = "root";
$password = "strangehat";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'SJET');
 if(!$conn)echo "hi";
?>
