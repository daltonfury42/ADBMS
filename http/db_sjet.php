<?php 
$servername = "localhost";
$username = "testuser";
$password = "testpass";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'SJET');
 if(!$conn)echo "hi";
?>
