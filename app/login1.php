<?php
session_start();
$_SESSION[CHECK]=1;
header("Location: admin_home.php");
?>
