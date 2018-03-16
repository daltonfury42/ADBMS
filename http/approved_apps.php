<html>
<body>
<?php
include('navbar.php');
include('db_sjet.php');
?>
<div id="features-sec" class="container set-pad" style="margin-top: 50px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">LIST OF APPROVED APPLICATIONS</h1>

<div style="background-color:#FFF;min-height:450px;">
<br>
<?php
	$qry ="SELECT * FROM APPLICATION_STATUS WHERE Status='approved'";
	$result = mysqli_query($conn,$qry);
	echo "<table id='approved_apps_list'><tr>
	<th>RollNo</th>
	<th>Scholarship Name</th>
	</tr>";
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
 			echo "<tr> <td> $row[RollNo] </td> <td> $row[Scholarship] </td> </tr>";
		}
		echo "</table>";
	}
	else{
		echo "No document available";
	}

?>
</div>
</div>
</div>
</div>
</body>
</html>
