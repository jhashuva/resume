<?php
if(isset($_POST['submit']))
{
echo"<html><head><title>Resume Preview</title><link rel='stylesheet' type='text/css' href='bootstrap.min.css'></head>";
echo "<body><center><h1> Resume Preview</h1></br><table>";
echo "<h2>General Details</h2>";
echo "<table><tr><td>Name:</td>";
echo "<form action='pdfdwn.php' method='post' target='_blank'>";



if(isset($_POST['name']))
{
$name = $_POST['name'];
echo "<td><input type='text' name='name' value='".$name."'>";
echo "</td></tr>";
}
echo "<tr><td>Cell: </td>";
if(isset($_POST['cell']))
{
$cell = $_POST['cell'];
}
echo "<td><input type='text' name='cell' value='".$cell."'>";
echo "</td></tr>";


echo "<tr><td>Email: </td>";
if(isset($_POST['email']))
{
$email = $_POST['email'];
}
echo "<td><input type='text' name='email' value='".$email."'>";
echo "</td></tr>";
echo "</table></br>";


echo "<h2>Career Objective</h2>";
echo "<table>"; 
echo "<tr>";
if(isset($_POST['cobj']))
{
$cobj = $_POST['cobj'];
}
echo "<td><textarea name='cobj'> $cobj </textarea>";
echo "</td></tr></table></br>";


echo "<h2>Schooling Details</h2>";
echo "<table>"; 
echo "<tr><td>School Name</td>";
if(isset($_POST['sname']))
{
$sname = $_POST['sname'];
}
echo "<td><input type='text' name='sname' value='".$sname."'>";
echo "</td></tr>";

echo "<tr><td>Year Of Passing</td>";
if(isset($_POST['yop']))
{
$yop = $_POST['yop'];
echo "<td><input type='number' name='yop' value=$yop>";
echo "</td></tr>";
}
echo "<tr><td>GPA</td>";
if(isset($_POST['gpa']))
{
$gpa = $_POST['gpa'];
}
echo "<td><input type='number' name='gpa' value=$gpa>";
echo "</td></tr></table></br>";

echo "<h2>Intermediate Details</h2>";
echo "<table>"; 
echo "<tr><td>College Name</td>";
if(isset($_POST['cname']))
{
$cname = $_POST['cname'];
echo "<td><input type='text' name='cname' value='".$cname."'>";
echo "</td></tr>";
}

echo "<tr><td>Year Of Passing</td>";
if(isset($_POST['yop2']))
{
$yop2 = $_POST['yop2'];
}
echo "<td><input type='number' name='yop2' value=$yop2>";
echo "</td></tr>";


echo "<tr><td>Percentage</td>";
if(isset($_POST['per']))
{
$per = $_POST['per'];
}
echo "<td><input type='number' name='per' value=$per>";
echo "</td></tr></table></br>";


echo "<h2>Graduation Details</h2>";
echo "<table>"; 
echo "<tr><td>Year Of Joining</td>";
if(isset($_POST['yoj']))
{
$yoj = $_POST['yoj'];
}
echo "<td><input type='number' name='yoj' value=$yoj>";
echo "</td></tr>";

echo "<tr><td>Btech College Name</td>";
if(isset($_POST['cname1']))
{
$cname1 = $_POST['cname1'];
}
echo "<td><input type='text' name='cname1' value='".$cname1."'>";
echo "</td></tr>";

echo "<tr><td>Year Of Passing</td>";
if(isset($_POST['yop3']))
{
$yop3 = $_POST['yop3'];
}
echo "<td><input type='number' name='yop3' value=$yop3>";
echo "</td></tr>";

echo "<tr><td>Aggregate</td>";
if(isset($_POST['agg']))
{
$agg = $_POST['agg'];
}
echo "<td><input type='number' name='agg' value=$agg>";
echo "</td></tr></table></br>";


echo "<h2> Skills </h2>";
echo "<table>"; 

echo"<tr><td>Programing Languages</td>";
if(isset($_POST['pl']))
{
$pl = $_POST['pl'];
}
echo "<td><input type='text' name='pl' value='".$pl."'>";
echo "</td></tr>";


echo"<tr><td>OS</td>";
if(isset($_POST['os']))
{
$os = $_POST['os'];
}
echo "<td><input type='text' name='os' value='".$os."'>";
echo "</td></tr>";

echo"<tr><td>Softwares</td>";
if(isset($_POST['sw']))
{
$sw = $_POST['sw'];
}
echo "<td><input type='text' name='sw' value='".$sw."'>";
echo "</td></tr>";



echo "<tr><td>GRE/GMAT/IELTS</td>";
if(isset($_POST['gre']))
{
$gre = $_POST['gre'];

echo "<td><input type='number' name='gre' value='$gre'>";
echo "</td></tr>";
}

echo "<tr><td>GATE/CAT</td>";
if(isset($_POST['gate']))
{
$gate = $_POST['gate'];
}
echo "<td><input type='number' name='gate' value=$gate>";
echo "</td></tr></table></br>";

echo "<h2> Achievements </h2>";
echo "<table>"; 

echo "<tr><td>Achievement 1</td>";
if(isset($_POST['ach1']))
{
$ach1 =$_POST['ach1'];
}
echo "<td><input type='text' name='ach1' value='".$ach1."'>";
echo "</td></tr>";


echo "<tr><td>Achievement 2</td>";
if(isset($_POST['ach2']))
{
$ach2 = $_POST['ach2'];
}
echo "<td><input type='text' name='ach2' value='".$ach2."'>";
echo "</td></tr></table></br>";

echo "<h2> Personal Information </h2>";
echo "<table>"; 

echo "<tr><td>Father Name</td>";
if(isset($_POST['fname']))
{
$fname = $_POST['fname'];
}
echo "<td><input type='text' name='fname' value='".$fname."'>";
echo "</td></tr>";


echo "<tr><td>Mother Name</td>";
if(isset($_POST['mname']))
{
$mname = $_POST['mname'];
}
echo "<td><input type='text' name='mname' value='".$mname."'>";
echo "</td></tr>";


echo "<tr><td>Date Of Birth</td>";
if(isset($_POST['dob']))
{
$dob = $_POST['dob'];
}
echo "<td><input type='date' name='dob' value=$dob>";
echo "</td></tr>";






echo "<tr><td>Gender</td>";
if(isset($_POST['gen']))
{
$gen = $_POST['gen'];
}
echo "<td><input type='text' name='gen' value='".$gen."'>";
echo "</td></tr>";




/*if(isset($_POST['submit'])){
$selected_val = $_POST['Color'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
*/




echo "<tr><td>Nationality</td>";
if(isset($_POST['nation']))
{
$nation = $_POST['nation'];
}
echo "<td><input type='text' name='nation' value='".$nation."'>";
echo "</td></tr>";



echo "<tr><td>Address</td>";
if(isset($_POST['addr']))
{
$addr = $_POST['addr'];
}
echo "<td><textarea name='addr'> $addr </textarea>";
echo "</td></tr>";
echo "</table></br></center></body></html>";
}
echo "<center><input type='submit' name='submit' value='Submit'></center></form><br>";
echo "<center><form action='logout.php' method='post'><input type='submit' value='Logout'></form></center>";


?>