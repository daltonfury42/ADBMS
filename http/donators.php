<style>
table {
    border-collapse: collapse;
    margin: auto;
    float: center;
}

table, td, th {
    border: 1px solid black;
    padding: 10px;

}
th{
padding:10px;
}

td{

text-align:center;
padding: 5px 10px 5px 10px;
}
tr{

margin-top:10px;;
}
</style>
<?php 
include ('navbar.php');
include ('db_sjet.php');
?>
<div style="background-color:#FFF;padding:20px;min-height:410px;">
<div id="features-sec" class="container set-pad" style="margin-top: 50px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">LIST OF DONATORS</h1>
</div>
</div>
</div>

<?php
	$qry ="SELECT * FROM DONATORS ORDER BY donator_id DESC";
	$result = mysqli_query($conn,$qry);
echo "<table ><tr>
	<th >  </th>
	<th>Name</th>
	<th>Current Position </th>
	<th>Email</th>
	<th>Other Information</th>
	<th>Amount Donated(Rs)</th>
	<th> Year</th>
		</tr>";
	if(mysqli_num_rows($result) > 0)
	{

	while($row = mysqli_fetch_assoc($result)){
 echo "<tr>
	<td class='no_border'><div align='left'><img src='$row[donator_photo_path]' alt='' width='125' height='125'  /> </div></td>
		<td>$row[donator_name] </td>
		<td>$row[current_position]</td>
                <td><a href='mailto: $row[donator_email]'>$row[donator_email]</a></td>
		 <td> $row[other_info]</td>
	      <td> <span class='style2'>$row[donator_amount]</span></td>
		<td> $row[donator_year]</td>


 </tr>";
 

}
echo "</table";
	}
	else
	{
	echo "";
	}
?>