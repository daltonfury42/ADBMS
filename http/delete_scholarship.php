
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
session_start();
include('navbar2.php');
include('db_sjet.php');
?>
<div style="background-color:#FFF;padding:30px;min-height:410px;" align="center">

<?php
if(isset($_POST['delete'])){
		$qry="select sco_doc_path from SCHOLARSHIPS where sco_id=$_POST[sco_id]";	
		$result=mysqli_query($conn,$qry);
	        $row = mysqli_fetch_assoc($result);
		unlink($row["sco_doc_path"]);
		$qry="DELETE FROM SCHOLARSHIPS WHERE sco_id = $_POST[sco_id]";
		if( mysqli_query($conn,$qry) ){
			echo "DB delete_update successful<br>";
		}
		else{
			echo "DB delete_update failed<br>";
		}
		}  

if(isset($_POST['uploadReference'])){
		$sco_name = $_POST["sco_name"];
		$sco_id = $_POST["sco_id"];

		$position=$_POST["position"];
$qry="update SCHOLARSHIPS set sco_name='$sco_name', position=$position where sco_id='$sco_id'";

		if( mysqli_query($conn,$qry) ){
			echo "DB update successful<br>";
		}
		else{
			echo "DB update failed<br>";
		}
}
echo "<div style='background-color:#FFF;padding:30px;min-height:410px;'>";
			$sql="SELECT * FROM SCHOLARSHIPS order by position,sco_id";
			$result = mysqli_query($conn,$sql);
			echo $sco_id;
			if (mysqli_num_rows($result) > 0) {
				echo "<table><tr><th>Position</th><th>Scholarship</th><th>Update</th><th>Delete</th></tr>";
				$i=0;
				while($row = mysqli_fetch_assoc($result)) {
			        
			        echo  "<tr> <td> $row[position]</td><td> $row[sco_name]</td> 
						<td style='padding-left:20px;'>
              
					
			  		<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal" . $i . "'>Update</button>

			 		 <div class='modal fade' id='myModal" . $i . "' role='dialog'>
			 		   <div class='modal-dialog'>
			     			 <div class='modal-content'>
			        			<div class='modal-header'>
			          				<button type='button' class='close' data-dismiss='modal'>&times;</button>
			          					<h4 class='modal-title'> Modify Scholarship</h4>
			       				 </div>
			        		<div class='modal-body'>
						 <form method='post' enctype='multipart/form-data'>
						<input name='sco_id' type='text' value ='" . $row['sco_id'] . " 'hidden>
						Scholarship Name: <input name='sco_name'  type='text' value ='" . $row['sco_name'] . "'></br></br>
						Position: <input name='position' type='text' value ='" . $row['position'] . " '>
					<center><input type='submit' value='Submit' id='references_submit' name='uploadReference'></center><br>		
						</form>
						
			        			</div>
			        		<div class='modal-footer'>
			          		<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
			       			 </div>
			      		</div>
			    		</div>

			  	</div> 	

			                 	</td> 

						<td style='padding-left:20px;'>   "; ?> 
							
						<form method='post' enctype='multipart/form-data' onsubmit="return confirm('Are you sure you want to delete this scholarship?');">
					<?php echo 	"<input name='sco_id' type='text' value ='" . $row['sco_id'] . " 'hidden>
					  <input type='submit' class='btn btn-info btn-lg' value='Delete' id='references_submit' name='delete'><br>		
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




