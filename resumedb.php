<?php
if(isset($_POST['submit']))
{
//$con=mysql_connect("localhost","root","");
$con=mysql_connect('localhost','root','');
if(!$con)
{
echo 'could not connect to mysql';
exit;
}
mysql_select_db("mysql");
$val = mysql_query('select resume from `TABLE`');

if($val!== FALSE)
{
$tname=$_POST['name'];
$tcell=$_POST['cell'];
$temail=$_POST['email'];
$tsnam=$_POST['sname'];
$tyop=$_POST['yop'];
$tgpa=$_POST['gpa'];
$tcname=$_POST['cname'];
$tyop2=$_POST['yop2'];
$tper=$_POST['per'];
$tcname1=$_POST['cname1'];
$tyoj=$_POST['yoj'];
$tyop3=$_POST['yop3'];
$tagg=$_POST['agg'];
$tlang=$_POST['lang'];
$tgre=$_POST['gre'];
$tgate=$_POST['gate'];
$tach1=$_POST['ach1'];
$tach2=$_POST['ach2'];
$tfname=$_POST['fname'];
$tmname=$_POST['mname'];
$tdob=$_POST['dob'];
$tadd=$_POST['add'];
$sql="INSERT INTO resume(name, cell, email, schoolname, yearofpass, gpa, collegename, yearofpass1, percentage, yearofjoining, yearofpass2, aggregate, plang, gre, gate, ach1, ach2, fname, mname, dob, address) VALUES
($tname,$tcell,$temail,$tsname,$tyop,$tgpa,$tcname,$tyop2,$tper,$tcname1,$tyoj,$tyop3,$tagg,$tlang,$tgre,$tgate,$tach1,$tach2,$tfname,$tmname,$tdob,$tadd)";
$result = mysql_query($sql, $con);
if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;}
}
}
else{
$sql="create table resume (name varchar(30),cell varchar(30), email varchar(30),schoolname varchar(30),yearofpass varchar(30),gpa varchar(30),collegename varchar(30), yearofpass1 varchar(30),percentage varchar(30),yearofjoining varchar(30),yearofpass2 varchar(30),aggregate varchar(30),plang varchar(30),gre varchar(30),gate varchar(30),ach1 varchar(30),ach2 varchar(30),fname varchar(30),mname varchar(30),dob varchar(10),address varchar(50))";

$con=mysql_connect("localhost","root","");
mysql_select_db("mysql");
$result = mysql_query($sql,$con);
if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;}
$sql1="INSERT INTO resume(name, cell, email, schoolname, yearofpass, gpa, collegename, yearofpass1, percentage, yearofjoining, yearofpass2, aggregate, plang, gre, gate, ach1, ach2, fname, mname, dob, address) VALUES
($tname,$tcell,$temail,$tsname,$tyop,$tgpa,$tcname,$tyop2,$tper,$tcname1,$tyoj,$tyop3,$tagg,$tlang,$tgre,$tgate,$tach1,$tach2,$tfname,$tmname,$tdob,$tadd)";
$result1 = mysql_query($sql1, $con);
if (!$result1) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;}
}
?>
