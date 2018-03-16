
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-theme.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="font/css/font-awesome.css">	
	<link rel="stylesheet" href="css/form.css" />
	<link rel="stylesheet" href="css/examples1.css" />
	<script src="js/jquery-2.2.2.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
</head>


<?php 
include ('navbar2.php');
include ('db_sjet.php');
if(isset($_POST['descr'])){
		$qry="delete from home_desc";
		mysqli_query($conn,$qry);
		$qry = "insert into home_desc values ('$_POST[description]')";
		if( mysqli_query($conn,$qry) ){
	    			echo("<script type='text/javascript'> alert('Home page description changed successfully'); </script>");
		}
		else{
	    			echo("<script type='text/javascript'> alert('Home page description failed to change.'); </script>");
		}
}
?>
<div style="background-color:#FFF;padding:20px;min-height:410px;">
<div id="features-sec" class="container set-pad" style="margin-top: 0px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">Modify Home Page Decription</h1>

<form method = 'post'>
<?php
		$qry="Select description FROM  home_desc";
		$result = mysqli_query($conn,$qry);
		$row = mysqli_fetch_assoc($result);
		echo "<textarea cols='112' rows='20' name='description'>$row[description]</textarea><br><center><input type='submit' class='btnapp' value='Change Description' name='descr'></center>";
		
?>
</form>
</div>
