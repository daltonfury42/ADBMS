<?php 
include ('navbar.php');
include ('db_sjet.php');
?>
<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}
th{
padding:10px;
}

td{

text-align:center;
padding:10px;
}
tr{

margin-top:10px;
}
</style>
<div id="features-sec" class="container set-pad" style="margin-top: 20px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">LIST OF AWARDEES</h1>

<div style="background-color:#FFF;padding:30px;min-height:410px;margin-top: 50px;" align="center">
<table>
<tr><th>Year of awarding the scholarship</th><th>Document of the awardees</th></tr>
<?php

	$qry ="SELECT * FROM DOCUMENTS where doc_type = 'awarded' order by year DESC";
	$result = mysqli_query($conn,$qry);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>$row[year]</td><td><a href ='$row[doc_path]'>View Awardees</a></td></tr>";
		}
		
	}
?>
</table>
</div>
</div>
</div>
</div>
