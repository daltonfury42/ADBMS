<?php require("navbar.php");
include("db_sjet.php");?>
<html>
<head>

 <script language="JavaScript" >
 function showone()
{
document.getElementById("showexisting").style.display="none";
document.getElementById("shownew").style.display="none";
document.getElementById("showone").style.display="inline";
}

function shownew()
{

document.getElementById("showone").style.display="none";
document.getElementById("showexisting").style.display="none";
document.getElementById("shownew").style.display="inline";
}

function showexisting()
{
document.getElementById("showone").style.display="none";
document.getElementById("shownew").style.display="none";
document.getElementById("showexisting").style.display="inline";
}
 </script>

 <style>
 ul {
  list-style-type: none;
}


.show-new {
		display: none;
	}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 10px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
.fontfamily {
	font-family: 'Alike';font-size: 19px;
	font-weight: normal;
}

.slider {
	overflow-y: hidden;
	max-height: 500px; /* approximate max height */

	transition-property: all;
	transition-duration: .5s;
	transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
}

.slider.closed {
	max-height: 0;
}

</style>
</head>
<body>
 <div class="row text-center" style="margin:150px; background-color:#FFF;min-height:0px;">
		<h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">Instructions</h1>

<p align="centre">
	Please send a letter addressed to the Director or Secretary SJET  with the following details:
	<br>
 </p>
 <p align="justify" style="margin-left: 20%; margin-right: 20%">
	1. Name of the scholarship <br>
	2. Eligibility- whom it should be given ( student of any specific branch,  only for female students, NSS workers alone, lowest income among the first year students etc.)</li>
 
 <br>
To start a new scholarship minimum Rupees 2 Lakhs needs to be contributed ( one time).
There can be scholarships which are instituted for just one year alone also.
</p>

 <div class="row text-center" style="margin:100px; background-color:#FFF;min-height:10px;">
		<h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">Donor Application Form</h1>
<form name="frmRegistration" method="post" action="donation.php">
	<table border="0" width="200" align="center" class="demo-table">
		
		<tr>
			<td class="fontfamily">Name</td>
			<td><input type="text" class="demoInputBox" name="name" required></td>
		</tr>
		
			<td class="fontfamily">Occupation</td>
			<td><input type="text" class="demoInputBox" name="occupation"></td>
		</tr>
		<tr>
			<td class="fontfamily">Contact Number</td>
			<td><input type="text" class="demoInputBox" name="contactnumber" value=""></td>
		</tr>
		<tr>
			<td class="fontfamily">Email</td>
			<td><input type="text" class="demoInputBox" name="userEmail" ></td>
		</tr>
		<tr>
			<td class="fontfamily">Address</td>
			  <td><textarea id="element_200" name="address" class="demoInputBox"></textarea> </td>
			
		<tr>
		<tr>
			<td class="fontfamily">Type of Donation</td>
			<td class="fontfamily"><input type="radio" name="donation" value="onetime" onClick="showone()">One Time Donation
			<input type="radio" name="donation" value="existing"  onClick="showexisting()"> Donate to an Existing Scholarship
			<input type="radio" name="donation" value="new"  onClick="shownew()"> Start a new Scholarship
			</td>
		</tr>
	<table border="0" width="500" align="center" class="demo-table">
<tr class="show-new slider" id="shownew">
<td></td>
<td>
		<label class="description fontfamily" for="element_100">Scholarship Name </label>
		<div>
			<input id="element_100" name="sco_name" class="element text medium demoInputBox" type="text" maxlength="255" value=""/> 
		</div> 
		<label class="description fontfamily" for="element_100">Amount </label>
		<div>
			<input id="element_100" name="amount" class="element number medium demoInputBox" type="text" maxlength="255" value=""/> 
		</div> 
		<label class="description fontfamily" for="element_200">Criteria </label>
		<div>
			<textarea id="element_200" name="criteria" class="element textarea medium demoInputBox"></textarea> 
		</div> 
		</td>
</tr>

<tr class=" show-new slider" id="showexisting">
		<td>
		<label class="fontfamily" name="sco_name_exist">Scholarship Name </label><br>
	<?php
		$sql= "SELECT sco_name FROM SCHOLARSHIPS";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)){
			$select= '<select name="scholar">';
			while($rs=mysqli_fetch_array($result)){
      			$select.='<option value="'.$rs['sco_name'].'">'.$rs['sco_name'].'</option>';
  			}
		}
		$select.='</select>';
		echo $select;

	?>
	<br>
		<label class="description fontfamily" for="element_100">Amount </label>
		<div>
			<input id="element_100" name="amount_exist" class="element number medium demoInputBox" type="text" maxlength="255" value=""/> 
		</div> 
		</td>
</tr>

<tr class="show-new slider" id="showone">
<td></td>
<td>
		<label class="description fontfamily" for="element_100">Amount </label>
		<div>
			<input id="element_100" name="amount_onetime" class="element number medium demoInputBox" type="text" maxlength="255" value=""/> 
		</div> 
		
		</td>
</tr>
</table>	
<table border="0" width="500" align="center" class="demo-table">
		<tr>
		<td class="fontfamily">
		Upload your photo here (optional) :&nbsp;
		<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
		</td>
		</tr>
		<tr>
			<td colspan=2>
			 <input type="submit" name="register-user" value="Submit" class="btnRegister"></td>
		</tr>
		</table>
	</table>
</form>

</div>
  
</body>
</html>

