<?php 

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$servername = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);



// Create connection
//$conn = mysqli_connect($servername, $username, $password, $db);
$conn = new mysqli($servername, $username, $password, $db);
 if(!$conn)echo "hi";
?>
