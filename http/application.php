<?php require("navbar.php");
include("db_sjet.php");?>


<div id="features-sec" class="container set-pad" style="margin-top: 10px;" >
<div class="row text-center">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">SJET APPLICATION FORM</h1>

<?php
$qry = "SELECT * FROM APPLICATION";

$result= mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($result);
if($row['ready'] == 0)
{
	echo "<p style='color:red;font-weight:700'>Applications are currently closed!</p>";
}
else
{
	?>

	<form action="scholarship.php" method ="post" style="padding:10px;" enctype="multipart/form-data">
		<table class="application">
			<tr>
				<td> Scholarship </td>
				<td> <?php
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
				</td>	
	
			</tr>
		</table>
		<h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">A. PERSONAL DETAILS</h1>
		<table class="application">
				<tr>
				    <td> Name</td> <td><input name= "name" type="text" > </td> 
				</tr>
				<tr><td> Roll No.</td> <td><input name= "roll" type="text" > </td>
				</tr>
				<tr>
				    <td> Semester </td> <td> <select name="sem" >	<option value="I">I</option>
		  									<option value="II">II</option>
		  									<option value="III">III</option>
		  									<option value="IV">IV</option>
											<option value="V">V</option>
		  									<option value="VI">VI</option>
		  									<option value="VII">VII</option>
		  									<option value="VIII">VIII</option>
											<option value="IX">IX</option>
											<option value="X">X</option>
									      </select></td>
				</tr>
				<tr>			 
				    <td>Date of Birth</td><td><input name ="dob" type="date" ></td>
				</tr>
				<tr><td>Branch of Study</td>	<td><select name ="branch" > <option value="B.Tech">B.Tech</option>
									<option value="B.Arch">B.Arch</option>
									<option value="M.Tech">M.Tech</option>
									<option value="MCA">MCA</option>
								</select></td>
				</tr>
				<tr>				
				    <td> Department </td> <td> <select name="dept" > <option value="Architecture">Architecture</option>
									<option value="Biotechnology">Biotechnology</option>
									<option value="Chemical Engineering">Chemical Engineering</option>
									<option value="Chemistry">Chemistry</option>
									<option value="Civil Engineering">Civil Engineering</option>
									<option value="Computer Science and Engineering">Computer Science and Engineering</option>
									<option value="Electrical Engineering">Electrical Engineering</option>
									<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
									<option value="Mechanical Engineering">Mechanical Engineering</option>
								</select></td>
				</tr>
				<tr>
				    <td> Name of the faculty advisor</td><td><input type ="text" name="fa" ></td>
				</tr>
				<tr>
					<td> Email id of the faculty advisor</td><td><input type="email" name="fa_email"></td>
				</tr>
				<tr>
				    <td> Permanent Address </td><td><textarea name="perm_addr"  rows='4'></textarea></td>
				</tr>
				<tr>    
				    <td> Hostel/Local Address </td><td><textarea name="loc_addr"  rows='4'></textarea></td>
				</tr>
				<tr>
				    <td>City</td><td><input type = "text" name="city" ></td>
				</tr>
				<tr>    
				    <td>Contact no.</td><td><input type="tel" name="contact" ></td>
				</tr>
				<tr>
				    <td>Pin</td><td><input type = "text" name="pin" ></td>
				</tr>
				<tr>
				    <td>State</td><td><input type = "text" name="state" ></td>
				</tr> 
				<tr>   
				    <td>e-mail id</td><td><input type="email" name="email" ></td>
				</tr>
				<tr>
				    <td>Phone no.<br>(with code)</td><td><input type="tel" name="phn"></td>
				</tr>
				<tr>    
				    <td>Saving Bank Account No.<br>(in SBI- SJET Scholarships<br> are given directly through <br>saving bank account in SBI )</td><td><input type="text" name="accno" ></td>
				</tr>
				<!--<tr>
				    <td></td><td></td><td></td><td>[in State Bank of India(SBI)- SJET Scholarships are<br> given directly through saving bank account in SBI ]</td>
				</tr>-->
				<tr>
					<td colspan="2">Quota against which admitted:</td>
				</tr>
				<tr>
				    <td>a) State  </td>
				   
				    <td><select name="state_quo" > <option value="Yes">Yes</option>
				    		   <option value="No">No</option></select>
				    </td>
				</tr>
				<tr>    
				    <td>
					b) Other Criteria: </td><td><input type="text" name="other_quo" >
				    </td>
				</tr>
		</table>
		<h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">B. FAMILY PARTICULARS and INCOME</h1>
		<table class="application">
			<tr >
				<th rowspan = "2" >Sl no.</th><th rowspan = "2">Name</th><th rowspan = "2">Relationship</th><th rowspan = "2">Age</th><th rowspan = "2"> Occupation</th><th colspan=2 scope="colgroup" >Monthly Income(Rs.)</th>
			</tr>
			<tr>
				<th scope="col">Salary</th><th scope="col">Other Sources</th>
			</tr>
			<tr>
				<td>1</td><td><input type ="text" name="fname1"></td><td><input type ="text" name="frel1"></td><td><input type ="number" name="fage1"></td><td><input type ="text" name="focc1"></td><td><input type ="number" value = 0 name="fsal1"></td><td><input type ="number" value = 0 name="foc1"></td>
			</tr>
			<tr>
				<td>2</td><td><input type ="text" name="fname2"></td><td><input type ="text" name="frel2"></td><td><input type ="number" name="fage2" ></td><td><input type ="text" name="focc2"></td><td><input type ="number" value = 0 name="fsal2" ></td><td><input type ="number" value = 0 name="foc2" ></td>
			</tr>
			<tr>
				<td>3</td><td><input type ="text" name="fname3"></td><td><input type ="text" name="frel3"></td><td><input type ="number" name="fage3" ></td><td><input type ="text" name="focc3"></td><td><input type ="number" value = 0 name="fsal3"></td><td><input type ="number" value = 0 name="foc3" ></td>
			</tr>
			</table>
			<br>
			<table id="familytable" class="application">
			<tr>
				<td >Employment / occupation of parents in detail (Name of the dept. / firm, Job etc.)</td><td><textarea name="emp" rows='3'></textarea></td>
			</tr>
			<tr>
				<td>Details of other Scholarships / financial assistance that you are in receipt or have applied for (name, amount, period etc.)</td><td><textarea name="fin" rows='3'></textarea></td>
			</tr>
			<tr>
				<td>Particulars of landed properties, rental buildings, business etc. of family members</td><td><textarea name="land" rows='3'></textarea></td>
			</tr>
			<tr>
				<td>Give full details on how the expenses of your studies were met during the previous years</td><td><textarea name="exp" rows='3'></textarea></td>
			</tr>
			<tr>
				<td>Details of the staff / faculty of NIT Calicut, who knows your academic & financial background (Name, Dept. / Section & Phone No.)</td><td><textarea name="fac" rows='3'></textarea></td>
			</tr>
			<tr>
				<td>Give name, official address and phone number of one responsible person (like Principal/ Teacher <br> 
				of the school/college in which you have studied, Official of Revenue Dept. /Panchayat etc.) to <br>
				whom we can refer and get your financial and academic background</td><td><textarea name="offc" rows='5'></textarea></td>
			</tr>
			</table>
			<h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">C. DETAILS OF SCHOOL/COLLEGE ATTENDED</h1>

			<table class="application">
				<tr>
					<th rowspan="2">Course studied</th><th rowspan="2">Name & Address<br>of School/College</th><th colspan=2>Period of study</th><th rowspan="2">% of Marks/<br>Grades</th><th rowspan="2"> Class/Distinction</th>
				</tr>
				<tr>
					<th>From</th><th>To</th>
				</tr>
				<tr>
					<td><select name="course1">
						<option value ="Xth Std">Xth Std</option>
						<option value ="XIIth Std">XIIth Std</option>
						<option value ="Diploma">Diploma</option>
						<option value ="Intermediate">Intermediate</option>
						<option value ="B.Tech">B.Tech</option>
						<option value ="B.E">B.E</option>
						<option value ="M.Tech">M.Tech</option>
					    </select>
					</td>	
					<td><input type="text" name="school1" ></td>
					<td><input type="text" name="from1" style="width: 100px;"></td>
					<td><input type="text" name="to1" style="width: 100px;"></td>
					<td><input type="text" name="grade1" ></td>
					<td><select name="class1" >
						<option value = "Distinction">Distinction</option>
						<option value = "First Class">First Class</option>
						<option value = "Second Class">Second Class</option>
						<option value = "Third Class">Third Class</option>
					    </select>
					</td>
				</tr>
				<tr>
					<td><select name="course2">
						<option value ="Xth Std">Xth Std</option>
						<option value ="XIIth Std">XIIth Std</option>
						<option value ="Diploma">Diploma</option>
						<option value ="Intermediate">Intermediate</option>
						<option value ="B.Tech">B.Tech</option>
						<option value ="B.E">B.E</option>
						<option value ="M.Tech">M.Tech</option>
					    </select>
					</td>	
					<td><input type="text" name="school2" ></td>
					<td><input type="text" name="from2" style="width: 100px;"></td>
					<td><input type="text" name="to2" style="width: 100px;"></td>
					<td><input type="text" name="grade2" ></td>
					<td><select name="class2" >
						<option value = "Distinction">Distinction</option>
						<option value = "First Class">First Class</option>
						<option value = "Second Class">Second Class</option>
						<option value = "Third Class">Third Class</option>
					    </select>
					</td>
				</tr>
				<tr>
					<td><select name="course3">
						<option value ="Xth Std">Xth Std</option>
						<option value ="XIIth Std">XIIth Std</option>
						<option value ="Diploma">Diploma</option>
						<option value ="Intermediate">Intermediate</option>
						<option value ="B.Tech">B.Tech</option>
						<option value ="B.E">B.E</option>
						<option value ="M.Tech">M.Tech</option>
					    </select>
					</td>	
					<td><input type="text" name="school3" ></td>
					<td><input type="text" name="from3" style="width: 100px;"></td>
					<td><input type="text" name="to3" style="width: 100px;"></td>
					<td><input type="text" name="grade3" ></td>
					<td><select name="class3" >
						<option value = "Distinction">Distinction</option>
						<option value = "First Class">First Class</option>
						<option value = "Second Class">Second Class</option>
						<option value = "Third Class">Third Class</option>
					    </select>
					</td>
				</tr>	
				</table><br>
				<table class="application">
				<tr>
					<td>Marks/Grades obtained in Mathematics,Physics, Chemistry in +2 exam: </td>
					<td>Mathematics <input type="text" name="maths" ></td>
					<td>Physics&nbsp;&nbsp; <input type="text" name="phy" ></td>
					<td>Chemistry <input type="text" name="chem" ></td>
				</tr>
				<tr>
					<td colspan="2">JEE Mains rank obtained:</td>
					<td>All India Wise <input type="text" name="air" ></td>
					<td>State Wise <input type="text" name="sr" ></td>
				</tr>
				<tr>
					<td colspan="2">Other admission criteria, if any:</td>
					<td colspan=2><input type="text" name="oth_cri"></td>
				</tr>
			</table>
			<h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">D. ACADEMIC PERFORMANCE AT NITC</h1>
			<table class="application">
				<tr>
					<th style="text-align:center;">Semester</th><th style="text-align:center;">SGPA</th><th style="text-align:center;">CGPA</th><th style="text-align:center;">No. of subjects failed (if any)</th>
				</tr>
				<tr>
					<td style="text-align:center;">I</td>
					<td><input type = "text" name="sg1"></td>
					<td><input type = "text" name="cg1"></td>
					<td><input type = "number" name="fail1"></td>
				</tr>
				<tr>
					<td style="text-align:center;">II</td>
					<td><input type = "text" name="sg2"></td>
					<td><input type = "text" name="cg2"></td>
					<td><input type = "number" name="fail2"></td>
				</tr>
				<tr>
					<td style="text-align:center;">III</td>
					<td><input type = "text" name="sg3"></td>
					<td><input type = "text" name="cg3"></td>
					<td><input type = "number" name="fail3"></td>
				</tr>
				<tr>
					<td style="text-align:center;">IV</td>
					<td><input type = "text" name="sg4"></td>
					<td><input type = "text" name="cg4"></td>
					<td><input type = "number" name="fail4"></td>
				</tr>
				<tr>
					<td style="text-align:center;">V</td>
					<td><input type = "text" name="sg5"></td>
					<td><input type = "text" name="cg5"></td>
					<td><input type = "number" name="fail5"></td>
				</tr>
				<tr>
					<td style="text-align:center;">VI</td>
					<td><input type = "text" name="sg6"></td>
					<td><input type = "text" name="cg6"></td>
					<td><input type = "number" name="fail6"></td>
				</tr>
				<tr>
					<td style="text-align:center;">VII</td>
					<td><input type = "text" name="sg7"></td>
					<td><input type = "text" name="cg7"></td>
					<td><input type = "number" name="fail7"></td>
				</tr>
				<tr>
					<td style="text-align:center;">VIII</td>
					<td><input type = "text" name="sg8"></td>
					<td><input type = "text" name="cg8"></td>
					<td><input type = "number" name="fail8"></td>
				</tr>
				<tr>
					<td style="text-align:center;">IX (B.Arch)</td>
					<td><input type = "text" name="sg9"></td>
					<td><input type = "text" name="cg9"></td>
					<td><input type = "number" name="fail9"></td>
				</tr>
				<tr>
					<td style="text-align:center;">X (B.Arch)</td>
					<td><input type = "text" name="sg10"></td>
					<td><input type = "text" name="cg10"></td>
					<td><input type = "number" name="fail10"></td>
				</tr>
		</table>
		<br>
		<table class="application">
			<tr>
				<td>Co-curricular activities: </td><td><textarea name="cocurri" rows='3' cols='50'></textarea></td>
			</tr>	
			<tr>
				<td>Upload your photo here (optional) :&nbsp;</td>
				<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
			</tr>
		</table>
		<br>
		<input type="submit" class="btnapp" name="scholarship" value ="Submit"></center>

	</form>	
<?php
}
?>		