<?php
session_start(); 
include('navbar2.php'); 
include("db_sjet.php");?>
<div style="background-color:#FFF;padding:20px;">
<div id="features-sec" class="container set-pad" style="margin-top: 0px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">ADD DONATORS</h1>

<form style="text-align:center;padding:10px;" method="post" action="" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to add this account?');">
				<div class="section">
				
				<input type="text" name="donator_name" placeholder="Name"	required><br><br>
				<input type="text" name="curr_pos" placeholder="Current Position" ><br><br>
				<input type="email" name="email" placeholder="E-mail" required><br><br>
				<input type="tel" name="phone" placeholder="Phone Number" required><br><br>
				<input type="number" name="amount" placeholder="Amount Donated" required><br><br>
				<input type="number" name="year" placeholder="Year" required><br><br>
			<textarea name="other_info" placeholder="Other Information" cols ='20' rows'8'></textarea><br>
				Select the donator photo to upload
				<input style="margin:0px auto;" type="file" name="fileToUpload" id="fileToUpload"><br>
				<input type="submit" class="btnapp" value="Add Donator" name="register" id="reg_btn">
		</div><br><br>		
		</form>
</div>
</div>
<?php
			if(isset($_POST['register'])){
		$name = $_POST['donator_name'];
		$curr_pos = $_POST['curr_pos'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$amount = $_POST['amount'];
		$year = $_POST['year'];
		$other_info = $_POST['other_info'];
		$target_dir = "uploads/donator/";
		$uploadOk = 1;
		if(basename($_FILES["fileToUpload"]["name"])==''){$target_file = $target_dir . 'profile_pic.jpg';}
		else{
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $fi = new FilesystemIterator($target_dir, FilesystemIterator::SKIP_DOTS);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) {
            $path_parts = pathinfo($target_file);

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
		$qry="INSERT INTO DONATORS (donator_name,donator_email,donator_mobile,donator_amount,donator_year,donator_photo_path,current_position,other_info) VALUES ('$name','$email','$phone',$amount,$year,'$target_file','$curr_pos','$other_info')";

		if($uploadOk!= 0 && mysqli_query($conn,$qry) ){
			echo "DB update successful<br>";
		}
		else{
			echo "DB update failed<br>";
		}
		} //uploading file end
			?>
