<?php
session_start();
    $uname = $_SESSION['uname'];
    $password = $_SESSION['password'];
     if($uname=='system' && $password=='admin'){
                    echo "<br><p align='center' style='color:green'>WELCOME $uname!</p><br>";			
                   include 'adminre.html';
                echo "<center><form action='adminlogout.php' method='post'><input type='submit' value='Logout'></form></center>";
                    
                }else{
                    echo "<p style='color:red'>User name or Password is wrong</p>";
                    header("location:admin.php");
                }

?>