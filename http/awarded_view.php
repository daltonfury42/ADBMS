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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Section</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}
th{
padding:10px;
}

td{

text-align:center;
padding:10px;
}
tr{

margin-top:10px;
}
</style>

<?php 
include ('navbar2.php');
include ('db_sjet.php');
?>
<div style="background-color:#FFF;padding:30px;min-height:410px;" align="center">
<div id="features-sec" class="container set-pad" style="margin-top: 0px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">MODIFY AWARDEES</h1>

<table style="width:100%;">
<tr><th>Year of awarding the scholarship</th><th>Document of the awardees</th><th></th></tr>
<?php

if(isset($_POST['delete'])){
		$qry="select doc_path from DOCUMENTS where doc_id='$_POST[doc_id]'";	
		$result=mysqli_query($conn,$qry);
	        $row = mysqli_fetch_assoc($result);
		unlink($row['doc_path']);
		$qry="DELETE FROM DOCUMENTS WHERE doc_id = '$_POST[doc_id]'";
		if( mysqli_query($conn,$qry) ){
			echo "DB delete_update successful<br>";
		}
		else{
			echo "DB delete_update failed<br>";
		}
		}  

	
	$qry ="SELECT * FROM DOCUMENTS where doc_type = 'awarded' order by year DESC";
	$result = mysqli_query($conn,$qry);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>$row[year]</td><td><a href ='$row[doc_path]'>View Awardees</a></td>";
			echo "<td style='padding-left:20px;'>  ";  ?>	
			<form method='post' enctype='multipart/form-data' onsubmit="return confirm('Are you sure you want to delete this list?');">
			<?php  echo "<input name='doc_id' type='text' value ='" . $row['doc_id'] . " 'hidden>
		  <input type='submit' class='btn btn-info btn-lg' value='Delete' id='references_submit' name='delete'><br>		
			</form>
			</td></tr>";
		}
		
	}
?>
</ul>
</div>
