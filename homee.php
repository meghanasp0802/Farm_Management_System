<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width.device=width,initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="app.css">
        
    </head>
    <body>
<?php

include 'connect.php';

if(isset($_POST['Submit'])){
    $username = mysqli_real_escape_string($con, $_POST['fn']);
    $passwords = mysqli_real_escape_string($con, $_POST['psw']);
    $cpasswords = mysqli_real_escape_string($con, $_POST['cpsw']);

    $pass = password_hash($passwords, PASSWORD_BCRYPT);
    $cpass = password_hash($cpasswords, PASSWORD_BCRYPT);

   $usernamequery = " select * from user where username= '$username'";
   $query = mysqli_query($con, $usernamequery);
   $usercount = mysqli_num_rows($query);
    if($usercount>0){
        echo "username already exists";
    }else{
        if($passwords == $cpasswords ){
            $insertquery = "insert into user( username, password, cpassword) values('$username','$pass','$cpass') ";
            $iquery = mysqli_query($con, $insertquery);
            if($iquery){
                ?>
        <script>
            alert("Registered successfully");
            location.replace("login.php");
            </script>
            <?php
   }else{
    ?>
        <script>
            alert("No connection");
            </script>
            <?php
   }

        }

        else{
            ?>
        <script>
            alert("passwords not matching");
            </script>
            <?php
        }
    
}}

?>




        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <div class='container'>
            <h1>Regsiter</h1>
            <p>Please fill in this form to register with us</p>
            <hr/>

            <label for="fn"><b>First Name</b></label>
            <input type="text" placeholder="First Name" name="fn" id="fn" required/>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter password" name="psw" id="psw" required/>

            <label for="cpsw"><b>Password</b></label>
            <input type="password" placeholder="Enter Confirm password" name="cpsw" id="cpsw" required/>
            
            <hr/>
            <button class='registration' type="Submit" name="Submit">Register</button>
        </form>
    </div>
        </body>
    </body>
</html>