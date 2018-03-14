<?php
session_start();
$_SESSION[CHECK]=0;
session_unset();
session_destroy();
header("Location: index.php");
?>

