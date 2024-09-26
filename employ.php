<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width.device=width,initial-scale=1.0">
        <title>Document</title>
        
        <style>
        body {
    font-family:sans-serif;
    background: -webkit-linear-gradient(to right, #155799, #159957);  
    background: linear-gradient(to right, #155799, #159957);
    color:black;
}
*{
    box-sizing: border-box;
}
.container {
    margin: auto;
    width: 50%;
    padding: 16px;
    background-image: url("employee.webp");
    background-repeat: no-repeat;
		background-size: cover;
    
    box-shadow: 20px 20px 20px 0px rgba(0, 0, 0, 0.7);
    position:relative;
    isolation:isolate;
}
.container::after{
    content: '';
            position: absolute;
            z-index:-1;
            background: white;
            inset:0;
            opacity:.4;
}
input[type= 'text'],
input[type='password'] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: whitesmoke;
}
input[type= 'text']:focus,
input[type='password']:focus{
    background-color: #ddd;
    outline: none;
}
.registration{
    background-color: teal;
    color: white;
    padding: 16px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin: auto;
    opacity: 0.8;
}
.registration:hover{
    opacity: 1;
}
        </style>
    </head>

    <body>
<?php

include 'connect.php';

if(isset($_POST['Submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $employeeid = mysqli_real_escape_string($con, $_POST['employeeid']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    

    //$pass = password_hash($passwords, PASSWORD_BCRYPT);
    //$cpass = password_hash($cpasswords, PASSWORD_BCRYPT);

   $usernamequery = " select * from employee where employeeid='$employeeid'";
   $query = mysqli_query($con, $usernamequery);
   $usercount = mysqli_num_rows($query);
    if($usercount>0){
        echo "username already exists";
    }else{
        //if($passwords == $cpasswords ){
            $insertquery = "insert into employee( name, employeeid, mobile, email) values('$name','$employeeid','$mobile','$email') ";
            $iquery = mysqli_query($con, $insertquery);
            if($iquery){
                ?>
        <script>
            alert("Submitted successfully");
            location.replace("afterlogin.php");
            </script>
            <?php
   }else{
    ?>
        <script>
            alert("No connection");
            </script>
            <?php
   }

        //}

        
    
}}

?>




        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <div class='container'>
            <h1>EMPLOYEE DETAILS</h1>
            <p>Please fill the details</p>
            <hr/>
            <a href="display2.php">View employee </a></br>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter your name" name="name" id="name" required/>

            <label for="employeeid"><b>EmployeeID</b></label>
            <input type="text" placeholder="Enter your employeeid" name="employeeid" id="employeeid" required/>

            <label for="mobile"><b>Mobile.No</b></label>
            <input type="text" placeholder="Enter employee's role" name="mobile" id="mobile" required/>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter your email" name="email" id="email" required/>
            <hr/>
            <button class='registration' type="Submit" name="Submit">Register</button>
        </form>
    </div>
        </body>
    </body>
</html>