<?php
session_start(); 
include("navbar2.php"); 
include("db_sjet.php");?>
<div style="background-color:#FFF;padding:20px;">
<form method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to add this list?');">
<div id="features-sec" class="container set-pad" style="margin-top: 0px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">ADD AWARDEES</h1>
                     <h5>Upload the pdf file containing the students awarded the scholarship</h5>
                     <br>	
		
		    			<div class="button-section">
		    				<center><input type="file" name="fileToUpload" id="fileToUpload"><br> <br>
		    				</center>
		    				<input type="number" name="year" placeholder="Year" width=6>&nbsp;&nbsp;<br><br>
		    				<input type="submit" class="btnapp" value="Upload" id="course_submit" name="upload">
		   			</div>
	
				</form>
</div>
<?php
			if(isset($_POST['upload'])){
			$year = $_POST['year'];
			$target_dir = "uploads/awarded/";
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
			    } else {
				$uploadOk = 0;
				echo 'Sorry, there was an error uploading your file.';
			    }
			}
			
			$filename = $_FILES["fileToUpload"]["name"];
			$qry="INSERT INTO DOCUMENTS (doc_type,doc_name,doc_path,description,year) VALUES ('awarded','$filename','$target_file','',$year)";

			if($uploadOk != 0 && mysqli_query($conn,$qry)){
			
				echo "DB update successful<br>";
			}
			else{
				echo mysqli_error();
			}
			}
			?>
