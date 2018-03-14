
<?php
session_start(); 
include("navbar2.php");
include("db_sjet.php");?>

<div style="background-color:#FFF;min-height:450px;">
		<form method="post" enctype="multipart/form-data" style="padding:20px;" onsubmit="return confirm('Are you sure you want to add this question?');">
			<div id="features-sec" class="container set-pad" style="margin-top: 0px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">ADD FAQ</h1>
    	<textarea name="question" rows="2" cols="70" placeholder="Question" required></textarea><br><br>
				<textarea name="answer" rows="4" cols="70" placeholder="Answer" required></textarea><br>
				<input class="btnapp" type="submit" value="Submit" id="references_submit" name="uploadFaq"><br><br>
			
			</form>
</div>




<?php 
		if(isset($_POST['uploadFaq'])){
		$question = $_POST[question];
		$answer = $_POST[answer];
		$qry="INSERT INTO FAQ (faq_que,faq_ans) VALUES ('$question','$answer')";

		if(mysqli_query($conn,$qry) ){
			echo "DB update successful<br>";
		}
		else{
			echo "DB update failed <br>". mysqli_error(); ;
		}
		} //uploading file end

?>
