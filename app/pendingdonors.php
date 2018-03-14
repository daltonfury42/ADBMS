
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
<?php
if(isset($_POST['reject'])){
		$qry="DELETE FROM  DONOR_APPLICATION WHERE Donor_Id = '$_POST[donor_id]'";
		if( mysqli_query($conn,$qry) ){
			echo "Rejected successful<br>";
		}
		else{
			echo "Rejection failed<br>";
		}
		} 

if(isset($_POST['approve'])){
		$res = "SELECT * FROM DONOR_APPLICATION where Donor_Id='$_POST[donor_id]'";
			$result = mysqli_query($conn,$res);
			$data = mysqli_fetch_assoc($result);
			$curYear = date('Y');
			if ($data[AmountExisting] != NULL){
				$amount_donated = $data[AmountExisting];
			}
			else if($data[AmountNew] != NULL){
				$amount_donated = $data[AmountNew];
			}

		else{
			$amount_donated = $data[AmountOneTime];
		}
		$qry = "INSERT INTO DONATORS(donator_name, donator_email, donator_mobile, donator_amount, donator_year,donator_photo_path, current_position) VALUES ('$data[Name]','$data[Email]','$data[ContactNumber]', '$amount_donated', '$curYear','$data[PhotoPath]','$data[Occupation]')";
if( mysqli_query($conn,$qry) ){
	echo "Approved<br>";
	$qry="DELETE FROM  DONOR_APPLICATION WHERE Donor_Id = '$_POST[donor_id]'";
	if( mysqli_query($conn,$qry) ){
			
		}
		else{
			echo "Approved but not deleted<br>";
		}
		}
		else{
			echo "Approval failed<br>";
		}
	
		} 

	$qry ="SELECT * FROM DONOR_APPLICATION";
	$result = mysqli_query($conn,$qry);
echo " <table class='col-sm-7' class='application'  ><tr>
	<th >  </th>
	<th>Name</th>
	<th>Contact Number </th>
	<th>Email</th>
	<th>Occupation</th>
	<th>Type of Donation</th>
	<th>Amount\(One Time)</th>
	<th>Scholarship Name(Existing)</th>
	<th>Amount\(Existing)</th>
	<th>Scholarship Name\(New)</th>
	<th>Amount\(New)</th>
	<th>Criteria</th>
	<th> Approve</th>
		</tr>";
	if(mysqli_num_rows($result) > 0)
	{

	while($row = mysqli_fetch_assoc($result)){
 echo "<tr>
	<td class='no_border'><div align='left'><img src='$row[PhotoPath]' alt='' width='125' height='125'/> </div></td>
		<td>$row[Name] </td>
		<td>$row[ContactNumber]</td>
        <td><span class='style2'>$row[Email]</span></a></td>
		 <td> $row[Occupation]</td>
		 <td> $row[TypeOfDonation]</td>
	    <td> <span class='style2'>$row[AmountOneTime]</span></td>
	    <td>$row[ScholarshipNameExisting]</td>
	    <td> <span class='style2'>$row[AmountExisting]</span></td>
	    <td>$row[ScholarshipNameNew]</td>
	    <td> <span class='style2'>$row[AmountNew]</span></td>
	    <td> $row[Criteria]</td>
		"; ?>

			<td><form method='post' enctype='multipart/form-data' onsubmit="return confirm('Are you sure you want to delete this account?');">
			<?php echo "<input name='donor_id' type='text' value ='" . $row['Donor_Id'] . " ' hidden>
		  <input type='submit' class='btn btn-info btn-lg' value='Approve' id='references_submit1' name='approve'><br>
		  <input type='submit' class='btn btn-info btn-lg' value='Reject' id='references_submit2' name='reject'><br>		
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

