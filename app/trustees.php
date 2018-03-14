<style>
img{max-width:200px;}
td{
padding:5px;
}
tr{
padding:5px;
}
</style>
<?php include("navbar.php");
	include("db_sjet.php");?>


		<h1 id="trustees_list" data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">MEMBERS </h1>
    	 

<?php 
	//MEMBERS
	$sql4="SELECT * FROM TRUSTEE WHERE position_trust<>'Chairman' ";
	$result4 = mysqli_query($conn,$sql4);
	echo "<table id='trustees_table' width='65%'  border='0' align='center'>";
	while($row4 = mysqli_fetch_assoc($result4))
	{	

		$row5 = mysqli_fetch_assoc($result4);

		$row6 = mysqli_fetch_assoc($result4);		
	
	echo "<tr>";
		echo "<td> <div align='left'><img src=".$row4['photo_path'] ." alt='' width='auto' height='150' /> </div></td>";		
		if($row5)
		{echo "<td> <div align='left'><img src=".$row5['photo_path'] ." alt='' width='auto' height='150' /> </div></td>";}
		else{echo "<td></td>";}
		if($row6)
		{echo "<td> <div align='left'><img src=".$row6['photo_path'] ." alt='' width='auto' height='150' /> </div></td>";}
		else{echo "<td></td>";}		
		echo "</tr>";

		echo "<tr>";
		echo "<td><p><a href = '$row4[webpage]'>". $row4['name'] . "</a></td>";
		if($row5)
		{echo "<td><p><a href = '$row5[webpage]'>". $row5['name'] . "</a></td>";}
		if($row6)
		{echo "<td><p><a href = '$row6[webpage]'>". $row6['name'] . "</a></td>";}
		echo "</tr>";
              	
        echo "<tr>";
		echo "<td>". $row4['position_trust']. "</td>";
		if($row5)
		{echo "<td>". $row5['position_trust']. "</td>";}
		if($row6)	             	
		{echo "<td>". $row6['position_trust']. "</td>";}
		echo "</tr>";
		      	
		echo "<tr>";
		echo "<td>". $row4['position_college']. "</td>";
		if($row5)
		{echo "<td>". $row5['position_college']. "</td>";}
		if($row6)	             	
		{echo "<td>". $row6['position_college']. "</td>";}
		echo "</tr>";

		echo "<tr>";		
		echo "<td>Phone: " . $row4['phone_num'] ."</td>";
		if($row5)
		{echo "<td>Phone: " . $row5['phone_num'] ."</td>";}
		if($row6)
		{echo "<td>Phone: " . $row6['phone_num'] ."</td>";}
             	echo "</tr>";

		echo "<tr>";
		echo "<td>Email: <a href='mailto:". $row4['email'] . " class='style2'>". $row4['email']."</a> </p></td>";
		if($row5)
		{echo "<td>Email: <a href='mailto:". $row5['email'] . " class='style2'>". $row5['email']."</a> </p></td>";}
		if($row6)
		{echo "<td>Email: <a href='mailto:". $row6['email'] . " class='style2'>". $row6['email']."</a> </p></td>";}
		echo "</tr>";	
	}
 	echo "</table>";



?>
