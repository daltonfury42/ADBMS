
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
th{
padding:10px;
}
.no_border
{
border:none;
}
td{
border:solid #000 1px;
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
<div style="background-color:#FFF;padding:20px;min-height:410px;">
<div id="features-sec" class="container set-pad" style="margin-top: 0px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">MODIFY DONATORS</h1>
</div>
</div>
</div>

<?php
if(isset($_POST['delete'])){
		$qry="DELETE FROM  DONATORS WHERE donator_id = '$_POST[donator_id]'";
		if( mysqli_query($conn,$qry) ){
			echo "DB delete_update successful<br>";
		}
		else{
			echo "DB delete_update failed<br>";
		}
		} 
	$qry ="SELECT * FROM DONATORS ORDER BY donator_year DESC,donator_amount DESC";
	$result = mysqli_query($conn,$qry);
echo " <table class='col-sm-7' style='width:100%;' ><tr>
	<th >  </th>
	<th>Name</th>
	<th>Current Position </th>
	<th>Email</th>
	<th>Other Information</th>
	<th>Amount Donated(Rs)</th>
	<th> Year</th>
	<th> Delete</th>
		</tr>";
	if(mysqli_num_rows($result) > 0)
	{

	while($row = mysqli_fetch_assoc($result)){
 echo "<tr>
	<td class='no_border'><div align='left'><img src='$row[donator_photo_path]' alt='' width='125' height='125'  /> </div></td>
		<td>$row[donator_name] </td>
		<td>$row[current_position]</td>
                <td><a href='mailto: $row[donator_email]'><span class='style2'>$row[donator_email]</span></a></td>
		 <td> $row[other_info]</td>
	      <td> <span class='style2'>$row[donator_amount]</span></td>
		<td> $row[donator_year]</td>"; ?>
			<td><form method='post' enctype='multipart/form-data' onsubmit="return confirm('Are you sure you want to delete this account?');">
			<?php echo "<input name='donator_id' type='text' value ='" . $row['donator_id'] . " ' hidden>
		  <input type='submit' class='btn btn-info btn-lg' value='Delete' id='references_submit' name='delete'><br>		
			</form>
			</td></tr>";
}
echo "</table>";
	}
	else
	{
	echo "No document available!";
	}
?>
</div>
