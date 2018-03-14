
<?php
session_start(); 
include("navbar2.php");
include("db_sjet.php");?>

<div style="background-color:#FFF;min-height:450px;">
<div id="features-sec" class="container set-pad" style="margin-top: 0px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">ADD SCHLARSHIP</h1>

		<form method="post" enctype="multipart/form-data" style="padding:20px;" onsubmit="return confirm('Are you sure you want to add this scholarship?');">
			<h5>Select Scholarship File to upload </h5>
		    		<center><input type="file" name="fileToUpload" id="fileToUpload"><br><br>
				</center>
				<input style="width:60%" type="text" name="sco_name"  placeholder="Name of the Scholarship" ><br><br>
				<input style="width:60%" type="number" name="position"  placeholder="Position" ><br><br>
				<input type="submit" class="btnapp" value="Upload" id="references_submit" name="uploadReference"><br><br>
			
			</form>
</div>




<?php 
		if(isset($_POST['uploadReference'])){
		$sco_name = $_POST[sco_name];
		$position = $_POST[position];
		$target_dir = "assets/scholarship/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.<br>";
		    $uploadOk = 0;
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
		$filename = $_FILES["fileToUpload"]["name"];
		$qry="INSERT INTO SCHOLARSHIPS (sco_name,sco_doc_name,sco_doc_path,position) VALUES ('$sco_name','$filename','$target_file',$position)";

		if( mysqli_query($conn,$qry) ){
			echo "DB update successful<br>";
		}
		else{
			echo "DB update failed<br>";
		}
		} //uploading file end

?>
