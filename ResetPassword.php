<?php
if(isset($_POST['submit'])){
     //$pass = $_POST['pass'];
       // $pass1 = $_POST['pass1'];
       // echo $pass1;
    if(empty($_POST['pass'])||empty($_POST['pass1'])){
        echo "<p style='color:red;'>Please fill all the details</p>";
    }else{
        $password = $_POST['pass'];
        $password1 = $_POST['pass1'];
        $uname = $_POST['uname'];
        $sq = $_POST['sq'];
        if($password!=$password1){
            echo "<p style='color:red;'>Password should be match</p>";
        }else{
            echo "<p style='color:green;'>Password reset</p>";
            $conn=mysql_connect('localhost','root','');
            if(!$conn){
                die("<p style='color:red;'>Could not connect</p>".mysql_error());
            }else{
            mysql_select_db('mysql');
            $sql = "update users set password='$password' where  sq= '$sq' and uname='$uname'";
            $query = mysql_query($sql,$conn);
            if(!$query){
                die("Sorry! query wouldnot be executed".mysql_error());
            }else{
                $rows = mysql_num_rows($query);
                if($rows==1){
                    header("location:index.php");
                   // echo "Enter new Password:<input type='text' name='password'>";
                   // echo "Reenter new Password:<input type='text' name='password'>";
                    
            }
}

    }
}
}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <body>
        <form action='#' method='post'>
            Enter New Password :<input type='password' name="pass"><br><br>
            Reenter New Password :<input type='password' name="pass1"><br><br>
            <input type='submit' name='submit' value="Reset Password">
        </form>
    </body>
</html>
