<?php

$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["userEmail"];
$number = $_POST["contactnumber"];
$occupation = $_POST["occupation"];
$donation_type = $_POST["donation"];
$sco_name =NULL;
$amount= NULL;
$criteria= NULL;
$sco_name_exist = NULL;
$amount_exist = NULL;
$amount_onetime=NULL;
if($donation_type == "onetime")
{
	$amount_onetime=$_POST["amount_onetime"];
}

else if($donation_type == "existing")
{
	$sco_name_exist = $_POST["sco_name_exist"];
	$amount_exist = $_POST["amount_exist"];
}

else if($donation_type == "new")
{
	$sco_name = $_POST["sco_name"];
	$amount = $_POST["$amount"];
	$criteria = $_POST["$criteria"];
}

$target_dir = "assets/img";
		$uploadOk = 1;
		if(basename($_FILES["fileToUpload"]["name"])==''){$photo_path = "assets/img/default.jpg";}
		else{
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$photo_path = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.<br>";
		    $uploadOk = 0;
		}
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.<br>";
		    $photo_path = "assets/img/default.jpg";
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $pdf->Image($target_file,154.3,41,31,38);
			} 
		    else {
			$uploadOk = 0;
			echo "Sorry, there was an error uploading your file.";
 
		    }
		}

		}
$Status = 0;
include('db_sjet.php');
$qry = "INSERT INTO DONOR_APPLICATION(Name,Address,Email,ContactNumber,Occupation,TypeOfDonation,AmountOneTime,ScholarshipNameExisting, AmountExisting,ScholarshipNameNew,AmountNew,Criteria,Status,PhotoPath) VALUES ('$name','$address','$email','$number','$occupation','$donation_type','$amount_onetime','$sco_name_exist','$amount_exist','$sco_name','$amount','$criteria','$Status','$photo_path')";
$result= mysqli_query($conn,$qry);

include("details.php");

?>