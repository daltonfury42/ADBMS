<?php
session_start();  
include("navbar2.php");
	include("db_sjet.php");?>
<div style="background-color:#FFF;padding:20px;min-height:430px;text-align:center;">
<h3 style="text-align:center;"> Add New Trustee</h3>
<form style="text-align:center;padding:10px;" method="post" action="" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to add this account?');">
				<div class="application" style="width:50%" class="section">
	
				<input type="text" name="name" placeholder="Name"	required><br><br>
				<select name="position_trust">
				<option value="Chairman">Chairman</option>
				<option value="Secretary">Secretary</option>
				<option value="Joint Secretary">Joint Secretary</option>
				<option value="Treasurer">Treasurer</option>
				<option value="Member">Member</option>
				</select><br><br>
				<input type="text" name="position_college" id="check_pass" placeholder="Position in College" required><br><br>
				<input type="tel" name="phone" placeholder="Phone Number"><br><br>
				<input type="email" name="email" placeholder="E-mail" required><br><br>
				<input type="text" name="website" placeholder="Website"><br><br>
				<textarea name="address" placeholder="Address" cols ='20' rows'8'></textarea><br>
				Select photo to upload
				<input style="margin:0px auto;" type="file" name="fileToUpload" id="fileToUpload"><br>
				<input type="submit" value="Add Trustee" name="register" id="reg_btn">
		</div><br><br>		
		</form>
</div>


<?php 		
		if(isset($_POST['register'])){
		$name = $_POST["name"];
		$position_trust = $_POST["position_trust"];
		$position_college = $_POST["position_college"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$website = $_POST["website"];
		$address = $_POST["address"];
		$target_dir = "assets/img/trustees/";
		$uploadOk = 1;
        $fi = new FilesystemIterator($target_dir, FilesystemIterator::SKIP_DOTS);
        if(basename($_FILES["fileToUpload"]["name"])==''){$target_file = $target_dir . 'profile_pic.jpg';}
		else{
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		
          $fi = new FilesystemIterator($target_dir, FilesystemIterator::SKIP_DOTS);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) {
            $target_file = $path_parts['dirname']. "/" . $path_parts['filename'] . iterator_count($fi) . "." . $path_parts['extension'];
		    
		    $uploadOk = 1;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.<br>";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
			} 
		    else {
			$uploadOk = 0;
			echo "Sorry, there was an error uploading your file.";
 
		    }
		}
		}
		$filename = $_FILES["fileToUpload"]["name"];
		//$target_file = "assets/img/default.jpg";
		$qry="INSERT INTO TRUSTEE (name,position_trust,position_college,photo_path,phone_num,email,webpage,address) VALUES ('$name','$position_trust','$position_college','$target_file','$phone','$email','$website','$address')";

		if($uploadOk!= 0 && mysqli_query($conn,$qry) ){
			echo "DB update successful<br>";
		}
		else{
			echo "DB update failed<br>";
		}
		} //uploading file end
?>

