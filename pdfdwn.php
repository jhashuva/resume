<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resumeBuilder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO resume (name, email, cell, cobj, sname, yop, gpa, cname, yop2, per, yoj, addr, cname1, yop3, agg, pl, os, sw, gre, gate, ach1, ach2, fname, mname, nation, gen, dob)
VALUES ('$_POST[name]',
'$_POST[email]',
'$_POST[cell]',
'$_POST[cobj]',
'$_POST[sname]',
'$_POST[yop]',
'$_POST[gpa]',
'$_POST[cname]',
'$_POST[yop2]',
'$_POST[per]',
'$_POST[yoj]',
'$_POST[addr]',
'$_POST[cname1]',
'$_POST[yop3]',
'$_POST[agg]',
'$_POST[pl]',
'$_POST[os]',
'$_POST[sw]',
'$_POST[gre]',
'$_POST[gate]',
'$_POST[ach1]',
'$_POST[ach2]',
'$_POST[fname]',
'$_POST[mname]',
'$_POST[nation]',
'$_POST[gen]',
'$_POST[dob]')";

$conn->query($sql);
/*if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$conn->close();


$sname=$_POST['sname'];
$email=$_POST['email'];
$name=$_POST['name'];
$cobj=$_POST['cobj'];
$cell=$_POST['cell'];
$yop=$_POST['yop'];
$yop2=$_POST['yop2'];
$yop3=$_POST['yop3'];
$per=$_POST['per'];
$pl=$_POST['pl'];
$os=$_POST['os'];
$sw=$_POST['sw'];
$gre=$_POST['gre'];
$gate=$_POST['gate'];
$ach1=$_POST['ach1'];
$ach2=$_POST['ach2'];
$cname1=$_POST['cname1'];
$agg=$_POST['agg'];
$gpa=$_POST['gpa'];
$cname=$_POST['cname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$gen=$_POST['gen'];
$nation=$_POST['nation'];
$addr=$_POST['addr'];


require('fpdf181/fpdf.php');

class PDF extends FPDF
{
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-10);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(30,10,'Resume',1,0,'C');
	// Line break
    $pdf->Ln(20);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(30,10,$name,0,0,'L');
    // Line break
    $pdf->Ln(5);
	$pdf->Cell(30,10,$cell,0,0,'L');
	$pdf->Ln(5);
    $pdf->Cell(30,10,$email,0,0,'L');	
    $pdf->Ln(15);
	
	
	$pdf->SetFont('Arial','B',12);
	$pdf->SetFillColor(200,220,255);
	$pdf->Cell(0,8,"CAREER OBJECTIVE",0,1,'L',true);
	$pdf->Ln(5);
    $pdf->SetFont('Arial','',12);
	$pdf->Cell(34,10,$cobj,0,0,'L');
	$pdf->Ln(15);
	
	$pdf->SetFont('Arial','B',12);
	$pdf->SetFillColor(200,220,255);
	$pdf->Cell(0,8,"ACADEMIC DETAILS",0,1,'L',true);
	$pdf->Ln(5);

	$pdf->SetFillColor(255,0,0);
    $pdf->SetTextColor(255);
    $pdf->SetDrawColor(128,0,0);
    $pdf->SetLineWidth(.3);
    $pdf->SetFont('Arial','',12);
	
     $pdf->Cell(30,7,"Degree/ \nClass",1,0,'C',true);
	//$pdf->Cell(30,7,"Degree/Class",1,0,'C',true);
	$pdf->Cell(70,7,"School Name/ \nCollege Name",1,0,'C',true);
	//$pdf->Cell(37,7,"Board/\nUniversity",1,0,'C',true);
	$pdf->Cell(34,7,"Year of Passing",1,0,'C',true);
	$pdf->Cell(38,7,"CGPA/\nPerecntage",1,0,'C',true);
	$pdf->Ln();

	// Color and font restoration
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('Arial','',12);

	// Data
    $fill = false; 

	$pdf->Cell(30,6,"SSC",'LR',0,'L',false);
	$pdf->Cell(70,6, $sname,'LR',0,'L',false);
	//$pdf->Cell(37,6,"APS Secondary Board",'LR',0,'L',false);
	$pdf->Cell(34,6, $yop ,'LR',0,'L',false);
	$pdf->Cell(38,6, $gpa ,'LR',0,'L',false);
	$pdf->Ln();

	$pdf->Cell(30,6,"INTER",'LR',0,'L',true);
	$pdf->Cell(70,6, $cname ,'LR',0,'L',true);
	//$pdf->Cell(37,6,"APS Intermediate Board",'LR',0,'L',true);
	$pdf->Cell(34,6, $yop2 ,'LR',0,'L',true);
	$pdf->Cell(38,6, $per ,'LR',0,'L',true);
	$pdf->Ln();

	$pdf->Cell(30,6,"B Tech",'LR',0,'L',false);
	$pdf->Cell(70,6, $cname1 ,'LR',0,'L',false);
	//$pdf->Cell(37,6,"JNTUK",'LR',0,'L',false);
	$pdf->Cell(34,6, $yop3,'LR',0,'L',false);
	$pdf->Cell(38,6, $agg ,'LR',0,'L',false);
	$pdf->Ln();

	/*$pdf->Cell(30,6,"M Tech",'LR',0,'L',true);
	$pdf->Cell(58,6,"UCEV-JNTUK",'LR',0,'L',true);
	$pdf->Cell(37,6,"JNTUK",'LR',0,'L',true);
	$pdf->Cell(34,6,"2015",'LR',0,'L',true);
	$pdf->Cell(38,6,"68.9",'LR',0,'L',true);
*/
	//$pdf->Ln();
    $pdf->Cell(172,0,'','T');
    $pdf->Ln(10);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetFillColor(200,220,255);
	$pdf->Cell(0,8,"SKILLS ",0,1,'L',true);
	

	$pdf->Ln(4);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(55,10,'Programming Languages: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(56,10,$pl,0,0,'L');   


	$pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(55,10,'Operating Systems: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(56,10,$os,0,0,'L');   


	$pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(55,10,'Softwares: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(56,10,$sw,0,0,'L');


	$pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(55,10,'IELTS/GMAT/GRE Score: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(56,10,$gre,0,0,'L');


	$pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(55,10,'GATE/CAT Score: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(56,10,$gate,0,0,'L');


	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetFillColor(200,220,255);
	$pdf->Cell(0,8,"ACHIVEMENTS ",0,1,'L',true);


	$pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(33,10,'Achivement 1: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(34,10,$ach1,0,0,'L');


	$pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(33,10,'Achivement 2: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(34,10,$ach2 ,0,0,'L');



	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',12);
	$pdf->SetFillColor(200,220,255);
	$pdf->Cell(0,8,"PERSONAL DETAILS ",0,1,'L',true);

    $pdf->Ln(3);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(33,10,'Father Name: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(34,10, $fname,0,0,'L');


	$pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(33,10,'Mother Name: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(34,10,$mname,0,0,'L');

    $pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(33,10,'Date Of Birth: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(34,10,$dob,0,0,'L');


	$pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(33,10,'Gender: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(34,10,$gen,0,0,'L');


	$pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(33,10,'Nationality: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(34,10,$nation,0,0,'L');


	$pdf->Ln(9);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(33,10,'Address: ',0,0,'L'); 
	$pdf->SetFont('Arial','',12);
    $pdf->Cell(34,10, $addr ,0,0,'L');

	
	$pdf->Output();
?>
