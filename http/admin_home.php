
<?php
session_start();
include("navbar2.php");
include("db_sjet.php");
?>

<div style="background-color:#FFF;min-height:450px;padding:10px 50px;">
<?php 
if(isset($_POST["appl_btn"]))
{
	if($_POST["appl_btn"]=='Enable applications')
	{
		$qry = "UPDATE APPLICATION SET ready = 1 where ready = 0";
		mysqli_query($conn,$qry);
	}
	else
	{
		$qry = "UPDATE APPLICATION SET ready = 0 where ready = 1";
		mysqli_query($conn,$qry);
	}
}

?>
<div style="float:right;">
<form method="post" onsubmit="return confirm('Are you sure you want to continue?');">
<?php
$qry = "SELECT * FROM APPLICATION";
$result= mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($result);
if($row["ready"] == 0)
{
echo '<input style="background:#88FF88;padding:5px;" type="submit" name="appl_btn" value="Enable applications">';
}
else  
{
echo '<input style="background:#FF8888;padding:5px;" type="submit" name="appl_btn" value="Disable applications">';
}

?>
</form>
</div>
    <br>
    <div id="features-sec" class="container set-pad" style="margin-top: 0px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">ADD NEWS ARTICLE</h1>
       
		<form method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to add this news?');">
            <ul style="margin:20px 0px;">
                <center><input type="file" name="fileToUpload" id="fileToUpload" accept=".pdf">
                </center>
                OR
				<br>
                <input style="width:82%" type="text" placeholder="URL to link" name='web'><br>
                <br>
				<textarea style="width:82%" name="description" rows="4" cols="70" placeholder="Title" required></textarea><br>
                <input class="btnapp" type="submit" value="Upload / Make Changes" id="references_submit" name="uploadReference"><br><br>
            </ul>		
        </form>      
<?php    
		if(isset($_POST["delete"])){
		unlink($_POST["doc_path_remove"]);
		$sql = "DELETE from NEWS where news_id = '$_POST[doc_id]'";
		mysqli_query($conn,$sql);  
		}

		if(isset($_POST['uploadReference'])){
			$description = $_POST["description"];
			if($_POST["web"]=='')
			{
				$target_dir = "uploads/news/";
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
		
				$qry="INSERT INTO NEWS (news_doc_name,description,news_doc_path) VALUES ('$filename','$description','$target_file')";

				if( mysqli_query($conn,$qry) ){
					echo "<script>alert('DB update successful')</script>";
				}
				else{
					echo "DB update failed<br>";
				}
				} 
			else{
				$target = $_POST['web'];
				$qry="INSERT INTO NEWS (news_doc_name,description,news_doc_path) VALUES ('$target','$description','$target')";

				if( mysqli_query($conn,$qry) ){
					echo "DB update successful<br>";
				}
				else{
					echo "DB update failed<br>";
				}
				
			}
			}
		
echo "<div class='row text-center'>
<div class='col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2'>
                     <h1 data-scroll-reveal='enter from the bottom after 0.2s'  class='header-line'>EDIT NEWS ARTICLE</h1>
    ";
			$sql="SELECT * from NEWS" ;
			$result = mysqli_query($conn,$sql);
			echo "<table>";
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result)){
	echo "<tr><td style='padding:15px 15px 15px 0px;'><span class='style8'> <a href= '$row[news_doc_path]'>  $row[description] </a></span> </td>";?>
	<td><form method='post' enctype='multipart/form-data' onsubmit="return confirm('Are you sure you want to delete?');">
		<?php echo"	<input type='hidden' name='doc_path_remove' value='".$row["news_doc_path"]."'>
				<input type='hidden' name='doc_id' value='$row[news_id]'>
				<input type='submit' class='btnapp' name='delete' value ='Delete News'></form></tr>";
				}
	echo "</table></ul>";
		}
?> 

</div>
