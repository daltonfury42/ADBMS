<html>
<body>
<?php
session_start();
include('navbar.php');
include('db_sjet.php');
?>

<div id="features-sec" class="container set-pad" style="margin-top: 50px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">LIST OF SCHOLARSHIPS</h1>
<a href="application.php"><button class="btnapp" id="btnapp">APPLY </button> </a>                         
<?php
echo "<div style='background-color:#FFF; padding:30px;min-height:410px;'>";
			$sql="SELECT sco_name,sco_doc_path FROM SCHOLARSHIPS order by position,sco_id";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0) {
echo "<ol>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	if($row["sco_doc_path"] == "assets/scholarship/")
	{
		echo "<li><strong><a href='application.php'>$row[sco_name]</a></strong></li>";
	}
	else
	{
        	echo "<li><strong><a href='$row[sco_doc_path]'>$row[sco_name]</a></strong></li>";
	}    
}
echo "</ol>";
} else {
    echo "0 results";
}
					
?>
</div>
</div>
</div>
</body>
</html>





