<html>
    <head>
        <?php
        session_start();
        if(isset($_POST['submit'])){
        if(empty($_POST['uname'])||empty($_POST['password'])){
            echo "<p style='color:red'>Fill all the details</p>";
         }else{
            $uname = $_POST['uname'];
            $password = $_POST['password'];      
                if($uname=='system' && $password=='admin'){
                    echo "<center><br><p style='color:green'>Succesfully Loggedin</p></center>";
                    $_SESSION['uname']=$uname;
                    $_SESSION['password']=$password;
                   // header("location:adminlogin.php");
                }else{
                    echo "<center><br><p style='color:red'>Username or password is incorrect</p></center>";
                }
            }
         }

        // put your code here
     if(isset($_SESSION['uname'])&&isset($_SESSION['password'])){
             header("location: adminlogin.php");
            }
        ?>
    </head>
    <body>
    <center>
        <h1> ADMIN LOGIN</h1><br>
        <form action="" method="post">
            USER NAME: <input type="text" name="uname"><br><br>
            PASSWORD: <input type ="password" name =" password"><br><br>
			<!--<p>Forgot your password? <a href='ForgotPassword.php'>Click here!</a></p>-->
            <input type="submit" name="submit" value="Submit">
        </form><br>
    </center>
        
    </body>
</html>