<?php 

$url = parse_url(getenv("mysql://b74ef41375c36d:ab7530c1@us-cdbr-iron-east-05.cleardb.net/heroku_69067170d65c976?reconnect=true"));

$servername = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);



// Create connection
//$conn = mysqli_connect($servername, $username, $password, $db);
$conn = new mysqli($servername, $username, $password, $db);
 if(!$conn)echo "hi";
?>
