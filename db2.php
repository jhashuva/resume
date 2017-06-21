<?php
if(isset($_POST['submit']))
{
/*$con=mysql_connect('localhost','root',' ');
if(!$con)
{
echo 'could not connect to mysql';
exit;
}
mysql_select_db('formdata','$con');
$sql="INSERT INTO resume(name, cell, email, schoolname, yearofpass, gpa, collegename, yearofpass1, percentage, yearofjoining, yearofpass2, aggregate, plang, gre, gate, ach1, ach2, fname, mname, dob, address) VALUES
($_POST['name'],$_POST['cell'],$_POST['email'],$_POST['sname'],$_POST['yop'],$_POST['gpa'],$_POST['cname'],$_POST['yop2'],$_POST['per'],$_POST['cname1'],$_POST['yoj'],$_POST['yop3'],$_POST['agg'],$_POST['lang'],$_POST['gre'],$_POST['gate'],$_POST['ach1'],$_POST['ach2'],$_POST['fname'],$_POST['mname'],$_POST['dob'],$_POST['add'])";
*/
echo "<head><link rel='stylesheet' type='text/css' href='bootstrap.min.css'></head><center><h1> RESUME </h1></center>";
echo "<br><table><tr><td><b>&nbsp;&nbsp;&nbsp;Name: </b></td><td>".$_POST['name']."</td><tr><td><b>&nbsp;&nbsp;&nbsp;Cell no: </b></td><td>".$_POST['cell']."<tr><td><b>&nbsp;&nbsp;&nbsp;Email: </b></td><td>".$_POST["email"]."</td></table>";
echo "<hr>";
echo "<h2>&nbsp;&nbsp;Academic Details</h2>";

echo "<table border='1px'><th>&nbsp;COLNO&nbsp;</th><th>&nbsp;COURSE&nbsp;</th><th>&nbsp;NAME Of Institution&nbsp;</th><th>&nbsp;YEAR OF PASS&nbsp;</th><th>&nbsp;PERCENTAGE&nbsp;</th>";
echo "<tr><td>&nbsp;1&nbsp;</td><td>&nbsp;Btech&nbsp;</td><td>".$_POST['cname1']."</td><td>".$_POST['yop3']."</td><td>".$_POST['agg']."</td></tr>";
echo "<tr><td>&nbsp;2&nbsp;</td><td>&nbsp;Inter&nbsp;</td><td>".$_POST['cname']."</td><td>".$_POST['yop2']."</td><td>".$_POST['per']."</td></tr>";
echo "<tr><td>&nbsp;3&nbsp;</td><td>&nbsp;Schooling&nbsp;</td><td>".$_POST['sname']."</td><td>".$_POST['yop']. "</td><td>".
$_POST['gpa']."</td></tr>";
echo "</table>";
echo "<hr>";
echo "<h2>Skills and Achievements</h2>";
echo "<h5>Skills:</h5>";
//echo "<br>".$_POST['lang'];
echo "<p>GRE/GMAT/IELTS: ".$_POST['gre']."<br>";
echo "GATE/CAT: ".$_POST['gate']."</p>";
echo "<h5>Achievements:</h5>";
echo  $_POST['ach1'];
echo  "<br>".$_POST['ach2'];

echo "<hr>";
echo "<h2>Personal Details:</h2>";
echo "<p>Father's Name: ".$_POST['fname']."</p>";
echo "<p>Mother's Name: ".$_POST['mname']."</p>";
echo "<p>Date Of Birth: ".$_POST['dob']."</p>";
echo "<p>Address: ".$_POST['add']."</p>";

echo "<a href='pdfdwn.php'> Download </a><br>";
echo "<center><form action='logout.php' method='post'><input type='submit' value='Logout'></form></center>";

}
?>