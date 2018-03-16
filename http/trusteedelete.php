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
session_start();  
include("navbar2.php");
	include("db_sjet.php");?>
<div style="background-color:#FFF;padding:20px;min-height:430px;">

<?php
	if(isset($_POST['uploadReference'])){
		$trus_id = $_POST["trus_id"];
		$trus_name = $_POST["trus_name"];
		$trus_pos_col = $_POST["trus_pos_col"];
		$trus_phone = $_POST["trus_phone"];
		$trus_email = $_POST["trus_email"];
		
$qry="update TRUSTEE set name='$trus_name',position_college='$trus_pos_col',phone_num ='$trus_phone' where email='$trus_email'";

		if( mysqli_query($conn,$qry) ){
			echo "";
		}
		else{
			echo "";
		}
		}

	if(isset($_POST['doc_path_remove'])){
		
		unlink($_POST["doc_path"]);
		$qry="DELETE FROM TRUSTEE WHERE trustee_id = '$_POST[doc_path_remove]'";
		if( mysqli_query($conn,$qry) ){
			echo "DB delete_update successful<br>";
		//header("Refresh:0"); //check_here1
		}
		else{
			echo "DB delete_update failed<br>";
		}
		}  
	$sql4="SELECT * FROM TRUSTEE  ";
	$result4 = mysqli_query($conn,$sql4);
	echo "<table>";
	$i=0;
	while($row4 = mysqli_fetch_assoc($result4))
	{		
		echo "<tr>";
		echo "<td>";
		echo " <div align='left'><img src=".$row4['photo_path'] ." alt='' width='117' height='153' /> </div>";
            	echo "<p>".$row4['name']."<br />";
              	echo $row4['position_college']. "<br />";
              	echo "Phone: ". $row4['phone_num'] ."<br />";
              	echo "Email: <a href='mailto:". $row4['email'] . " class='style2'>". $row4['email']."</a> </p></td>"; ?>
		<td><form method='post' enctype='multipart/form-data' onsubmit="return confirm('Are you sure you want to delete this form?');">
		<?php echo "	<input type='submit' class='btn btn-info btn-lg' value ='Delete Trustee'><input type='hidden' name='doc_path_remove' value='".$row4['trustee_id']."'><input type='hidden' name='doc_path' value='".$row4['photo_path']."'></form></td>";

		
        echo "<td style='padding-left:20px;'>

		
  	<button type='button' id='vals' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal" . $i . "' >Update</button>
<div class='modal fade' id='myModal" . $i . "' role='dialog'>
 		   <div class='modal-dialog'>
     			 <div class='modal-content'>
        			<div class='modal-header'>
          				<button type='button' class='close' data-dismiss='modal'>&times;</button>
          					<h4 class='modal-title'> Modify Trustee</h4>
       				 </div>
        		<div class='modal-body'>
			<script> var = </script>
			<form method='post' enctype='multipart/form-data'>
			<table style='margin-top:10px;'>
			<tr>
			<input name='trus_id' type='text' value ='$row4[trustee_id]'hidden>
			<td>Name: </td><td></td><td><input name='trus_name'  type='text' value ='$row4[name]'></td></tr>
			<tr><td>Position in College : </td><td></td><td><input name='trus_pos_col'  type='text' value ='$row4[position_college]'></td></tr>
			<tr><td>Phone : </td><td></td><td><input name='trus_phone'  type='text' value ='$row4[phone_num]'></td></tr>
			<tr><td>Email : </td><td></td><td><input name='trus_email'  type='text' value ='$row4[email]'></td></tr>
			<tr><td></td>	
			<td>
			<input type='submit' value='Submit' class='btn btn-info btn-lg' id='references_submit' name='uploadReference'>		
			</td><td></td>			
			</tr>			
			</table>			
			</form>
			
        			</div>
        		<div class='modal-footer'>
          		<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
       			 </div>
      		</div>
    		</div>

  	</div>
 		  	

                 	</td>";


$i++;
		echo "</tr>";
	}
?>


