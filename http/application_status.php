



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
session_start();
include('navbar2.php');
include('db_sjet.php');
?>
<div style="background-color:#FFF;padding:30px;min-height:410px;" align="center">
<div id="features-sec" class="container set-pad" style="margin-top: 0px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">APPLICATION STATUS</h1>

		
<?php
if(isset($_POST['reject'])){
		$app_id = $_POST["app_id"];
		$qry="update APPLICATION_STATUS set Status='rejected' where app_id='$app_id'";

		if( mysqli_query($conn,$qry) ){
			echo "DB update successful<br>";
		}
		else{
			echo "DB update failed<br>";
		}
		}  

if(isset($_POST['accept'])){
		$app_id = $_POST["app_id"];
		
$qry="update APPLICATION_STATUS set Status='approved' where app_id='$app_id'";

		if( mysqli_query($conn,$qry) ){
			echo "DB update successful<br>";
		}
		else{
			echo "DB update failed<br>";
		}
		}
echo "<div style='background-color:#FFF;padding:30px;min-height:410px;'>";
			$sql="SELECT * FROM APPLICATION_STATUS ";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0) {
echo "<table><tr><th>RollNo</th><th>Scholarship Name</th><th>Status</th><th>Update</th><th>Reject</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        $i=1;
        echo "<tr> <td> $row[RollNo]</td><td> $row[Scholarship]</td> <td> $row[Status]</td>
			<td style='padding-left:20px;'>";
			?>

			<form method='post' enctype='multipart/form-data' onsubmit="return confirm('Are you sure you want to accept this scholarship?');">
		<?php echo 	"<input name='app_id' type='text' value ='" . $row['app_id'] . " 'hidden>
		  <input type='submit' class='btn btn-info btn-lg' value='accept' id='references_submit' name='accept'><br>		
			</form>
			
        	
                 	</td> 

			<td style='padding-left:20px;'>   "; ?> 

			<form method='post' enctype='multipart/form-data' onsubmit="return confirm('Are you sure you want to reject this scholarship?');">
		<?php echo 	"<input name='app_id' type='text' value ='" . $row['app_id'] . " 'hidden>
		  <input type='submit' class='btn btn-info btn-lg' value='reject' id='references_submit' name='reject'><br>		
			</form>
			</td></tr>";
$i++;  
}





echo "</table>";

} else {
    echo "0 results";
}
					
?>
</div>








