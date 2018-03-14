<?php
require('fpdf/fpdf.php');
require('fpdi/fpdi.php');

$filename='scholarship.pdf';
//$candidate_pic=$_POST[fileToUpload];
$candidate_scholar=$_POST[scholar];
$candidate_name=$_POST[name];
$candidate_rollnumber=$_POST[roll];
$candidate_sem=$_POST[sem];
$candidate_dob=$_POST[dob];
$candidate_branch=$_POST[branch];
$candidate_dep=$_POST[dept];
$candidate_fa=$_POST[fa];
$candidate_fa_email=$_POST[fa_email];
$candidate_address=$_POST[perm_addr];
$candidate_hostel=$_POST[loc_addr];
$candidate_city=$_POST[city];
$candidate_pin=$_POST[pin];
$candidate_mobile=$_POST[contact];
$candidate_state=$_POST[state];
$candidate_email=$_POST[email];
$candidate_ph=$_POST[phn];
$candidate_account_no=$_POST[accno];
$candidate_state_quota=$_POST[state_quo];
$candidate_other_cr=$_POST[other_quo];
$candidate_fname1=$_POST[fname1];
$candidate_fname2=$_POST[fname2];
$candidate_fname3=$_POST[fname3];
$candidate_fname1_rel=$_POST[frel1];
$candidate_fname2_rel=$_POST[frel2];
$candidate_fname3_rel=$_POST[frel3];
$candidate_fname1_age=$_POST[fage1];
$candidate_fname2_age=$_POST[fage2];
$candidate_fname3_age=$_POST[fage3];
$candidate_fname1_occ=$_POST[focc1];
$candidate_fname2_occ=$_POST[focc2];
$candidate_fname3_occ=$_POST[focc3];
$candidate_fname1_sal=$_POST[fsal1];
$candidate_fname2_sal=$_POST[fsal2];
$candidate_fname3_sal=$_POST[fsal3];
$candidate_fname1_other_sal=$_POST[foc1];
$candidate_fname2_other_sal=$_POST[foc2];
$candidate_fname3_other_sal=$_POST[foc3];
$candidate_occ_det=$_POST[emp];

$candidate_finance_details=$_POST[fin];
$candidate_land_details=$_POST[land];
$candidate_expences_details=$_POST[exp];
$candidate_faculty_details=$_POST[fac];
$candidate_official_addr_details=$_POST[offc];

$candidate_physics=$_POST[phy];
$candidate_maths=$_POST[maths];
$candidate_chem=$_POST[chem];
$candidate_rank_all_india=$_POST[air];
$candidate_rank_state=$_POST[sr];
$candidate_admission_other_criteria=$_POST[oth_cri];
$candidate_sem_1_sgpa=$_POST[sg1];
$candidate_sem_2_sgpa=$_POST[sg2];
$candidate_sem_3_sgpa=$_POST[sg3];
$candidate_sem_4_sgpa=$_POST[sg4];
$candidate_sem_5_sgpa=$_POST[sg5];
$candidate_sem_6_sgpa=$_POST[sg6];
$candidate_sem_7_sgpa=$_POST[sg7];
$candidate_sem_8_sgpa=$_POST[sg8];
$candidate_sem_9_sgpa=$_POST[sg9];
$candidate_sem_10_sgpa=$_POST[sg10];

$candidate_sem_1_cgpa=$_POST[cg1];
$candidate_sem_2_cgpa=$_POST[cg2];
$candidate_sem_3_cgpa=$_POST[cg3];
$candidate_sem_4_cgpa=$_POST[cg4];
$candidate_sem_5_cgpa=$_POST[cg5];
$candidate_sem_6_cgpa=$_POST[cg6];
$candidate_sem_7_cgpa=$_POST[cg7];
$candidate_sem_8_cgpa=$_POST[cg8];
$candidate_sem_9_cgpa=$_POST[cg9];
$candidate_sem_10_cgpa=$_POST[cg10];

$candidate_sem_1_no_fails=$_POST[fail1];
$candidate_sem_2_no_fails=$_POST[fail2];
$candidate_sem_3_no_fails=$_POST[fail3];
$candidate_sem_4_no_fails=$_POST[fail4];
$candidate_sem_5_no_fails=$_POST[fail5];
$candidate_sem_6_no_fails=$_POST[fail6];
$candidate_sem_7_no_fails=$_POST[fail7];
$candidate_sem_8_no_fails=$_POST[fail8];
$candidate_sem_9_no_fails=$_POST[fail9];
$candidate_sem_10_no_fails=$_POST[fail10];

$candidate_co_curricular_activities=$_POST[cocurri];

$candidate_course1=$_POST[course1];
$candidate_course2=$_POST[course2];
$candidate_course3=$_POST[course3];

$candidate_course1_clg=$_POST[school1];
$candidate_course2_clg=$_POST[school2];
$candidate_course3_clg=$_POST[school3];

$candidate_course1_from=$_POST[from1];
$candidate_course2_from=$_POST[from2];
$candidate_course3_from=$_POST[from3];

$candidate_course1_to=$_POST[to1];
$candidate_course2_to=$_POST[to2];
$candidate_course3_to=$_POST[to3];

$candidate_course1_marks=$_POST[grade1];
$candidate_course2_marks=$_POST[grade2];
$candidate_course3_marks=$_POST[grade3];

$candidate_course1_class=$_POST[class1];
$candidate_course2_class=$_POST[class2];
$candidate_course3_class=$_POST[class3];


include('db_sjet.php');
$qry = "INSERT INTO APPLICATION_STATUS(RollNo,Scholarship,Status) VALUES ('$candidate_rollnumber', '$candidate_scholar', 'pending' )";
$result= mysqli_query($conn,$qry);
// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
//$mail->Host = "mail.example.com";  // specify main and backup server


$pdf = new FPDI();

$pageCount = $pdf->setSourceFile($filename);
$tplIdx = $pdf->importPage(1);

$pdf->addPage();
$pdf->useTemplate($tplIdx, 0, 0, 0);

$target_dir = "uploads/";
		$uploadOk = 1;
		if(basename($_FILES["fileToUpload"]["name"])==''){}
		else{
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.<br>";
		    $uploadOk = 0;
		}
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.<br>";
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $pdf->Image($target_file,154.3,41,31,38);
			} 
		    else {
			$uploadOk = 0;
			echo "Sorry, there was an error uploading your file.";
 
		    }
		}

		}




/*if(file_exists($candidate_pic))
{

}*/
$pdf->SetFont('Arial','B'); 
$pdf->SetXY(50, 80);
$pdf->Cell(0,6,$candidate_name,0,1,'L');

$pdf->SetXY(50,87);
$pdf->Cell(0,6,$candidate_rollnumber,0,1,'L');
$pdf->SetXY(115,87);
$pdf->Cell(0,6,$candidate_sem,0,1,'L');
$pdf->SetXY(153,87);
$pdf->Cell(0,6,$candidate_dob,0,1,'L');
$pdf->SetXY(61,94.5);
$pdf->Cell(0,6,$candidate_branch,0,1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(118,94.5);
$pdf->Cell(0,6,$candidate_dep,0,1,'L');
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(95,101.6);
$pdf->Cell(0,6,$candidate_fa,0,1,'L');


$pdf->SetFont('Arial','B',11);
$pdf->SetXY(35,111.5);
$str=str_repeat('a',30);
$strsize=$pdf->GetStringWidth($str);
$candidate_address = str_replace(array("\r", "\n"), ' ', $candidate_address);
$pdf->MultiCell($strsize,5,$candidate_address,0,1);

$pdf->SetXY(112,111.5);
$str=str_repeat('a',30);
$strsize=$pdf->GetStringWidth($str);
$candidate_hostel = str_replace(array("\r", "\n"), ' ', $candidate_hostel);
$pdf->MultiCell($strsize,5,$candidate_hostel,0,1);

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(43.5,133.5);
$pdf->Cell(0,6,$candidate_city,0,1,'L');
$pdf->SetXY(80.5,133.5);
$pdf->Cell(0,6,$candidate_pin,0,1,'L');
$pdf->SetXY(138,132.5);
$pdf->Cell(0,6,$candidate_mobile,0,1,'L');
$pdf->SetXY(45,142);
$pdf->Cell(0,6,$candidate_state,0,1,'L');
$pdf->SetXY(123.5,140);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,6,$candidate_email,0,1,'L');
$pdf->SetXY(63,154);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,6,$candidate_ph,0,1,'L');
$pdf->SetXY(147,146.8);
$pdf->Cell(0,6,$candidate_account_no,0,1,'L');
if($candidate_state_quota=='Yes'){
$pdf->SetXY(59.5,164.4);
$pdf->Cell(0,6,'__',0,1,'L');
}
else{
$pdf->SetXY(49,164.4);
$pdf->Cell(0,6,'___',0,1,'L');
}
$pdf->SetXY(113,166.3);
$pdf->Cell(0,6,$candidate_other_cr,0,1,'L');


$pdf->SetXY(33,198.5);
$pdf->Cell(0,6,'1',0,1,'L');
$pdf->SetXY(33,207);
$pdf->Cell(0,6,'2',0,1,'L');
$pdf->SetXY(33,216);
$pdf->Cell(0,6,'3',0,1,'L');


$pdf->SetFont('Arial','B',10);
$pdf->SetXY(41,198.5);
$pdf->Cell(0,6,$candidate_fname1,0,1,'L');
$pdf->SetXY(87,198.5);
$pdf->Cell(0,6,$candidate_fname1_rel,0,1,'L');
$pdf->SetXY(110.5,198.5);
$pdf->Cell(0,6,$candidate_fname1_age,0,1,'L');
$pdf->SetXY(122,198.5);
$pdf->Cell(0,6,$candidate_fname1_occ,0,1,'L');
$pdf->SetXY(149,198.5);
$pdf->Cell(0,6,$candidate_fname1_sal,0,1,'L');
$pdf->SetXY(170,198.5);
$pdf->Cell(0,6,$candidate_fname1_other_sal,0,1,'L');

$pdf->SetXY(41,207);
$pdf->Cell(0,6,$candidate_fname2,0,1,'L');
$pdf->SetXY(87,207);
$pdf->Cell(0,6,$candidate_fname2_rel,0,1,'L');
$pdf->SetXY(110.5,207);
$pdf->Cell(0,6,$candidate_fname2_age,0,1,'L');
$pdf->SetXY(122,207);
$pdf->Cell(0,6,$candidate_fname2_occ,0,1,'L');
$pdf->SetXY(149,207);
$pdf->Cell(0,6,$candidate_fname2_sal,0,1,'L');
$pdf->SetXY(170,207);
$pdf->Cell(0,6,$candidate_fname2_other_sal,0,1,'L');

$pdf->SetXY(41,216);
$pdf->Cell(0,6,$candidate_fname3,0,1,'L');
$pdf->SetXY(87,216);
$pdf->Cell(0,6,$candidate_fname3_rel,0,1,'L');
$pdf->SetXY(110.5,216);
$pdf->Cell(0,6,$candidate_fname3_age,0,1,'L');
$pdf->SetXY(122,216);
$pdf->Cell(0,6,$candidate_fname3_occ,0,1,'L');
$pdf->SetXY(149,216);
$pdf->Cell(0,6,$candidate_fname3_sal,0,1,'L');
$pdf->SetXY(170,216);
$pdf->Cell(0,6,$candidate_fname3_other_sal,0,1,'L');

$total=$candidate_fname3_other_sal+$candidate_fname2_other_sal+$candidate_fname1_other_sal+$candidate_fname3_sal+$candidate_fname2_sal+$candidate_fname1_sal;
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(156,225);
$pdf->Cell(0,6,$total,0,1,'L');


$pdf->SetXY(36,235.8);
$str=str_repeat('a',62);
$strsize=$pdf->GetStringWidth($str);
$candidate_occ_det = str_replace(array("\r", "\n"), ' ', $candidate_occ_det);
$pdf->MultiCell($strsize,5.7,$candidate_occ_det,0,1);




$tplIdx = $pdf->importPage(2);
$pdf->addPage();
$pdf->SetFont('Arial','B',10);
$pdf->useTemplate($tplIdx, 0, 0, 0);
$str=str_repeat('a',37);
$pdf->SetXY(110,15);
$strsize=$pdf->GetStringWidth($str);
$candidate_finance_details= str_replace(array("\r", "\n"), ' ', $candidate_finance_details);
$pdf->MultiCell($strsize,5.7,$candidate_finance_details,0,1);
$pdf->SetXY(110,32.5);
$candidate_land_details= str_replace(array("\r", "\n"), ' ', $candidate_land_details);
$pdf->MultiCell($strsize,5,$candidate_land_details,0,1);
$pdf->SetXY(110,47.5);
$candidate_expences_details= str_replace(array("\r", "\n"), ' ', $candidate_expences_details);
$pdf->MultiCell($strsize,5,$candidate_expences_details,0,1);
$pdf->SetXY(110,62.5);
$candidate_faculty_details= str_replace(array("\r", "\n"), ' ', $candidate_faculty_details);
$pdf->MultiCell($strsize,5,$candidate_faculty_details,0,1);

$pdf->SetXY(110,82);
$candidate_official_addr_details= str_replace(array("\r", "\n"), ' ', $candidate_official_addr_details);
$pdf->MultiCell($strsize,5,$candidate_official_addr_details,0,1);

$pdf->SetFont('Arial','B',10);
$pdf->SetXY(136.5,168.8);
$temp='M- ' . $candidate_maths . '  ' . 'P- ' . $candidate_maths . '  ' . 'C- ' . $candidate_chem; 
$pdf->Cell(0,6,$temp,0,1,'L');

$pdf->SetFont('Arial','B',12);

$pdf->SetXY(94,176.5);
$pdf->Cell(0,6,$candidate_rank_all_india,0,1,'L');

$pdf->SetXY(144,176.5);
$pdf->Cell(0,6,$candidate_rank_state,0,1,'L');

$pdf->SetFont('Arial','B',10);
$pdf->SetXY(77,184);
$pdf->Cell(0,6,$candidate_admission_other_criteria,0,1,'L');

$pdf->SetFont('Arial','B',11);
$pdf->SetXY(52,211);
$pdf->Cell(0,6,$candidate_sem_1_sgpa,0,1,'L');
$pdf->SetXY(52,218);
$pdf->Cell(0,6,$candidate_sem_2_sgpa,0,1,'L');
$pdf->SetXY(52,225.5);
$pdf->Cell(0,6,$candidate_sem_3_sgpa,0,1,'L');
$pdf->SetXY(52,233);
$pdf->Cell(0,6,$candidate_sem_4_sgpa,0,1,'L');
$pdf->SetXY(52,240.5);
$pdf->Cell(0,6,$candidate_sem_5_sgpa,0,1,'L');
$pdf->SetXY(136.5,211);
$pdf->Cell(0,6,$candidate_sem_6_sgpa,0,1,'L');
$pdf->SetXY(136.5,218);
$pdf->Cell(0,6,$candidate_sem_7_sgpa,0,1,'L');
$pdf->SetXY(136.5,225.5);
$pdf->Cell(0,6,$candidate_sem_8_sgpa,0,1,'L');
$pdf->SetXY(136.5,233);
$pdf->Cell(0,6,$candidate_sem_9_sgpa,0,1,'L');
$pdf->SetXY(136.5,240.5);
$pdf->Cell(0,6,$candidate_sem_10_sgpa,0,1,'L');


$pdf->SetXY(68.5,211);
$pdf->Cell(0,6,$candidate_sem_1_sgpa,0,1,'L');
$pdf->SetXY(68.5,218);
$pdf->Cell(0,6,$candidate_sem_2_sgpa,0,1,'L');
$pdf->SetXY(68.5,225.5);
$pdf->Cell(0,6,$candidate_sem_3_sgpa,0,1,'L');
$pdf->SetXY(68.5,233);
$pdf->Cell(0,6,$candidate_sem_4_sgpa,0,1,'L');
$pdf->SetXY(68.5,240.5);
$pdf->Cell(0,6,$candidate_sem_5_sgpa,0,1,'L');
$pdf->SetXY(154,211);
$pdf->Cell(0,6,$candidate_sem_6_sgpa,0,1,'L');
$pdf->SetXY(154,218);
$pdf->Cell(0,6,$candidate_sem_7_sgpa,0,1,'L');
$pdf->SetXY(154,225.5);
$pdf->Cell(0,6,$candidate_sem_8_sgpa,0,1,'L');
$pdf->SetXY(154,233);
$pdf->Cell(0,6,$candidate_sem_9_sgpa,0,1,'L');
$pdf->SetXY(154,240.5);
$pdf->Cell(0,6,$candidate_sem_10_sgpa,0,1,'L');

$pdf->SetXY(91.7,211);
$pdf->Cell(0,6,$candidate_sem_1_no_fails,0,1,'L');
$pdf->SetXY(91.7,218);
$pdf->Cell(0,6,$candidate_sem_2_no_fails,0,1,'L');
$pdf->SetXY(91.7,225.5);
$pdf->Cell(0,6,$candidate_sem_3_no_fails,0,1,'L');
$pdf->SetXY(91.7,233);
$pdf->Cell(0,6,$candidate_sem_4_no_fails,0,1,'L');
$pdf->SetXY(91.7,240.5);
$pdf->Cell(0,6,$candidate_sem_5_no_fails,0,1,'L');
$pdf->SetXY(174.6,211);
$pdf->Cell(0,6,$candidate_sem_6_no_fails,0,1,'L');
$pdf->SetXY(174.6,218);
$pdf->Cell(0,6,$candidate_sem_7_no_fails,0,1,'L');
$pdf->SetXY(174.6,225.5);
$pdf->Cell(0,6,$candidate_sem_8_no_fails,0,1,'L');
$pdf->SetXY(174.6,233);
$pdf->Cell(0,6,$candidate_sem_9_no_fails,0,1,'L');
$pdf->SetXY(174.6,240.5);
$pdf->Cell(0,6,$candidate_sem_10_no_fails,0,1,'L');

$pdf->SetFont('Arial','B',10);
$pdf->SetXY(68,247.8);
$str=str_repeat('a',53);
$strsize=$pdf->GetStringWidth($str);
$candidate_co_curricular_activities = str_replace(array("\r", "\n"), ' ', $candidate_co_curricular_activities);
$pdf->MultiCell($strsize,4.5,$candidate_co_curricular_activities ,0,1);

$pdf->SetFont('Arial','B',11);
$pdf->SetXY(29.5,131);
$str=str_repeat('a',9);
$strsize=$pdf->GetStringWidth($str);
$candidate_course1 = str_replace(array("\r", "\n"), ' ', $candidate_course1);
$pdf->MultiCell($strsize,4.5,$candidate_course1 ,0,1);

$pdf->SetXY(52,131);
$str=str_repeat('a',22);
$strsize=$pdf->GetStringWidth($str);
$pdf->SetFont('Arial','B',10);
$candidate_course1_clg = str_replace(array("\r", "\n"), ' ', $candidate_course1_clg);
$pdf->SetFont('Arial','B',11);
$pdf->MultiCell($strsize,4.5,$candidate_course1_clg,0,1);

$pdf->SetXY(106.8,133);
$pdf->Cell(0,6,$candidate_course1_from . ' - ' .$candidate_course1_to ,0,1,'L');

$pdf->SetXY(142,133);
$pdf->Cell(0,6,$candidate_course1_marks ,0,1,'L');

$pdf->SetXY(158.8,133);
$pdf->Cell(0,6,$candidate_course1_class ,0,1,'L');

$pdf->SetXY(29.5,142.5);
$str=str_repeat('a',9);
$strsize=$pdf->GetStringWidth($str);
$candidate_course2 = str_replace(array("\r", "\n"), ' ', $candidate_course2);
$pdf->MultiCell($strsize,4.5,$candidate_course2 ,0,1);

$pdf->SetXY(52,142.5);
$str=str_repeat('a',22);
$strsize=$pdf->GetStringWidth($str);
$pdf->SetFont('Arial','B',10);
$candidate_course2_clg = str_replace(array("\r", "\n"), ' ', $candidate_course2_clg);
$pdf->SetFont('Arial','B',11);
$pdf->MultiCell($strsize,4.5,$candidate_course2_clg,0,1);

$pdf->SetXY(106.8,144.5);
$pdf->Cell(0,6,$candidate_course2_from . ' - ' .$candidate_course2_to ,0,1,'L');

$pdf->SetXY(142,144.5);
$pdf->Cell(0,6,$candidate_course2_marks ,0,1,'L');

$pdf->SetXY(158.8,144.5);
$pdf->Cell(0,6,$candidate_course2_class ,0,1,'L');



$pdf->SetXY(29.5,154);
$str=str_repeat('a',9);
$strsize=$pdf->GetStringWidth($str);
$candidate_course3 = str_replace(array("\r", "\n"), ' ', $candidate_course3);
$pdf->MultiCell($strsize,4.5,$candidate_course3 ,0,1);

$pdf->SetXY(52,154);
$str=str_repeat('a',22);
$strsize=$pdf->GetStringWidth($str);
$pdf->SetFont('Arial','B',10);
$candidate_course3_clg = str_replace(array("\r", "\n"), ' ', $candidate_course3_clg);
$pdf->SetFont('Arial','B',11);
$pdf->MultiCell($strsize,4.5,$candidate_course3_clg,0,1);

$pdf->SetXY(106.8,156);
$pdf->Cell(0,6,$candidate_course3_from . ' - ' .$candidate_course3_to ,0,1,'L');

$pdf->SetXY(142,156);
$pdf->Cell(0,6,$candidate_course3_marks ,0,1,'L');

$pdf->SetXY(158.8,156);
$pdf->Cell(0,6,$candidate_course3_class ,0,1,'L');

$tplIdx = $pdf->importPage(3);
$pdf->addPage();
$pdf->useTemplate($tplIdx, 0, 0, 0);

unlink($target_file);

$pdf->Output('F','scho.pdf');
$pdf->Output();

require("PHPMailer/class.phpmailer.php");
$mail = new PHPMailer();
$email = "raimazach@gmail.com";
$message = "scholarship application";
// set mailer to use SMTP
$mail->IsSMTP();

// set mailer to use SMTP
$mail->IsSMTP();

// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
//$mail->Host = "mail.example.com";  // specify main and backup server
$mail->SMTPSecure = "tls";
$mail->Host = 'smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth = true;     // turn on SMTP authentication

// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_PHPMailer@bradm.inmotiontesting.com
// pass: password
$mail->Username = "webmaster@nitc.ac.in";  // SMTP username
$mail->Password = "***"; // SMTP password

// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->From = $email;

// below we want to set the email address we will be sending our email to.
$mail->AddAddress($candidate_fa_email, $candidate_fa);

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "You have received a copy of the scholarship application form.";

// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->Body    = $message;
$mail->AltBody = $message;
$file_to_attach = "scho.pdf";

$mail->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );
//echo("<script type='text/javascript'> alert('A copy of your application form is sent to the FA for aproval.'); </script>");
if(!$mail->Send())
{
   echo "Message could not be sent. ";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}




?>
