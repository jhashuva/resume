<?php
if(isset($_POST['submit'])){
    if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['uname'])||empty($_POST['password'])||empty($_POST['sq'])){
        echo "<p style='color:red;'>Please fill all the details</p>";
    }else{
        $conn= @mysql_connect('localhost','root','');
        if(!$conn){
            die("<p style='color:red'>Sorry Unable to connect</p>".mysql_error());
        }else{
            mysql_select_db("resumeBuilder");
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $uname = $_POST['uname'];
            $password = $_POST['password'];
            $sq = $_POST['sq'];
            $sql1 = "select uname from users where uname='$uname'";
            $q1 = mysql_query($sql1,$conn);            
            if(!$q1){
                die("<p style='color:red'>Sorry Unable to connect</p>".mysql_error());
                header("location:register.php");
            }else{
            $row= mysql_num_rows($q1);
            if($row==1){
                echo "<p style='color:red;'>Sorry Username already exists. Please try with other username</p>";
                //header("location:register.php");
            }else{
            $sql = "insert into users (fname,lname,uname,password,sq) values('$fname','$lname','$uname','$password','$sq')";
            $q = mysql_query($sql,$conn);
            if(!$q){
                echo "<p style='color:red;'>Unable to connect to database</p>";
               // header("location:register.php");
            }else{
                echo "<p style='color:green;'>Successfully Registered</p>";
                header("location:index.php");
                //include 'index.php';
            }
        }
    }
        }
}
}else{
    //echo "<p style='color:red;'>Unable to register</p>";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.js">
</head>
    <body>
	<center><br>
	<h1> Register with Resume Builder </h1><br>
        <form action="#" method="post">
            First Name: <input name ='fname'><br><br>
            Last Name: <input name='lname'><br><br>
            User Name: <input name='uname'><br><br>
            Password : <input type='password' name='password'><br><br>
            Security Question: <select name='hq'>
                <option>What is your pet name?</option>
                <option>What is your faviourte book?</option>
                <option>Which website you rarely visit?</option>
            </select><br><br>
            Answer: <input name='sq'><br><br>
           <input type='submit' name='submit'><br>
        </form>
		</center>
    </body>
</html>