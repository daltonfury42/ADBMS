<?php
session_start();  
include("navbar2.php");
	include("db_sjet.php");?>
<div style="background-color:#FFF;padding:20px;min-height:430px;">

<?php
	if(isset($_POST['faq_del'])){
		
		$qry="DELETE FROM FAQ WHERE faq_id = '$_POST[faq_del]'";
		if( mysqli_query($conn,$qry) ){
			echo "DB delete_update successful<br>";
		}
		else{
			echo "DB delete_update failed<br>";
		}
		}  
	$sql="SELECT * FROM FAQ ";
	$result = mysqli_query($conn,$sql);
echo "<table>";
	while($row = mysqli_fetch_assoc($result))
	{	

		echo "<tr><td style='padding:10px;'> <abbr title='" . $row['faq_ans'] ."'>".$row['faq_que']."</abbr> </td>"; ?>
        	<form method='post' enctype='multipart/form-data' onsubmit="return confirm('Are you sure you want to delete this question?');">
		<?php echo "	<td><input type='submit' value ='Delete Faq'>
			<input type='hidden' name='faq_del' value='".$row['faq_id']."'>
		    </td></tr></form> <br>";
		
	}
	
echo "</table>";	
?>


