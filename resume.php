<html>
<head>
<title>RESUME</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.js">

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if(isset($_SESSION['login'])&&isset($_SESSION['password'])){
    header("location:resume.php");
}else{
    $uname=$_SESSION['uname'];
    $password=$_SESSION['password'];
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $conn = @mysql_connect('localhost','root','');
    if(!$conn){
    die("<p style='color:red'>Sorry Unable to connect</p>".mysql_error());
    }else{
    $db = mysql_select_db('mysql');
        if(!$db){
        die("<p style='color:red'>Unable to connect to Database</p>".mysql_error()); 
        }else{
        $sql = "select * from users where uname='$uname' and password='$password'";
        $query = mysql_query($sql,$conn);
            if(!$query){
                die("Sorry! query wouldnot be executed".mysql_error());
            }else{
                $rows = mysql_num_rows($query);
                if($rows==1){
                    echo "<br><p align='center' style='color:green'>WELCOME $uname!</p>";
					
                   include 'logged.html';
				   echo "<center><form action='logout.php' method='post'><input type='submit' value='Logout'></form></center>";
                    
                }else{
                    echo "<p style='color:red'>User name or Password is wrong</p>";
                    header("location:resume.php");
                }
            }    
        }
    }
    }
/*}else{
    echo "<p style='color:red'>SORRY YOU ARE NOT VALID USER</p>";
}*/
?>

</head>
<body>
<center>
<h1> Enter details  for your Resume</h1>
<form action='db1.php' method='post' >
<h2>General Details</h2>
<table>
 <tr><td>Name: </td><td><p><input type='text' name='name'></p></td></tr>
 <tr><td>Cell: </td><td><p><input type='num' name='cell'></p></td></tr>
 <tr><td>Email: </td><td><p><input type='text' name='email'></p></td></tr>
</table>

<h2>Career Objective</h2>
<table>
 <tr><td> Enter your career objective: </td><td><p><textarea name='cobj'></textarea></p></td></tr>
</table>


<h1>Tenth Details</h1>
<table>
  <tr><td>School Name: </td><td><p><input type='text' name='sname'></p></td></tr>
 <tr><td>Year of passing: </td><td><p><input type='num' name='yop'></p></td></tr>
 <tr><td>GPA: </td><td><p><input type='text' name='gpa'></p></td></tr>
</table>


<h1>Intermediate Details</h1>
<table>
  <tr><td>College name: </td><td><p><input type='text' name='cname'></p></td></tr>
  <tr><td>Year of passing: </td><td><p><input type='number' name='yop2'></p></td></tr>
  <tr><td>Percentage: </td><td><p><input type='text' name='per'></p></td></tr>
</table>


<h1>BTech Details</h1>
<table>
  <tr><td>Year of joining: </td><td><p><input type='number' name='yoj'></p></td></tr>
  <tr><td>College Name: </td><td><p><input type='text' name='cname1'></p></td></tr>
 <tr><td>Year of passing: </td><td><p><input type='number' name='yop3'></p></td></tr>
 <tr><td>Aggregate: </td><td><p><input type='text' name='agg'</p></td></tr>
</table>


<h1>Skills</h1>
<table>
 <tr><td>Programing Languages: </td><td><p><input type='text' name='pl' placeholder='Ex: Java, Python, PHP, etc'></p></td></tr>
 <tr><td>OS: </td><td><p><input type='text' name='os' placeholder='Ex: Mac, Windows, Linux, etc'></p></td></tr>
 <tr><td>Softwares: </td><td><p><input type='text' name='sw' placeholder='Ex: Rational rose, Photoshop, Erwin, etc '></p></td></tr>
 <tr><td>GRE </td><td><p><input type='number' name='gre'></p></td></tr>
 <tr><td>GATE </td><td><p><input type='number' name='gate'></p></td></tr>
</table>



<h1>Achievements</h1>
<table> 
<tr><td>Ach1: </td><td><p><input type='text' name='ach1'></p></td></tr>
<tr><td>Ach2: </td><td><p><input type='text' name='ach2'></p></td></tr>
</table>

<h1>PersonalDetails</h1>
<table>
 <tr><td>Father name: </td><td><p><input type='text' name='fname'></p></td></tr>
 <tr><td>Mother name: </td><td><p><input type='text' name='mname'></p></td></tr>
 <tr><td>DOB: </td><td><p><input type='date' name='dob'></p></td></tr>
 <tr><td>Gender: </td><td><p><input type='radio' name='gen' value="Female">Female&nbsp;&nbsp;<input type='radio' name='gen' value="Male">Male</p></td></tr>
 <tr><td>Nationality: </td><td><p><input type='text' name='nation' placeholder="Your Nationality"></p></td></tr>
<tr><td> Address: </td><td><p><textarea name='addr' placeholder="Permanent Address"></textarea></p></td></tr>
</table>
 
<p><input type='submit' name='submit' value='Preview'>&nbsp;&nbsp;&nbsp;<input type='reset' name='reset' value='Clear'></p>
</form>
</center>
</body>
</html>

<?php 

//echo "<center><form action='logout.php' method='post'><input type='submit' value='Logout'></form></center>";

?>