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
    background-image: url("iimg.jpg");
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
    $id = mysqli_real_escape_string($con, $_POST['fid']);
    $tid = mysqli_real_escape_string($con, $_POST['tid']);
   

    //$pass = password_hash($passwords, PASSWORD_BCRYPT);
    //$cpass = password_hash($cpasswords, PASSWORD_BCRYPT);

   $usernamequery = "select * from custlogin where name='$name'";
   $idquery="select * from crop where cropid='$id'";
   $query1=mysqli_query($con, $idquery);
   $query = mysqli_query($con, $usernamequery);
   if($query){
    if($query1){
        $insertquery = "insert into ftransaction(name, fid, tid)values('$name','$id','$tid')";
        $iquery=mysqli_query($con, $insertquery);
        if($iquery){
            ?>
            <script>
                alert("Submitted successfully");
                location.replace("shopping.php");
                </script>
                <?php
       }else{
        ?>
            <script>
                alert("No connection");
                </script>
                <?php
       }
        }else{
            echo "No crop available with this id";
        }
    }
    else{
        echo "No cutomer logged in with this name";
    }
   }
   

?>




        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <div class='container'>
            <h1>Happy Shopping</h1>
            <p>Please fill the details</p>
            <hr/>
            
            <label for="name"><b>Your name</b></label>
            <input type="text" placeholder="Enter customer name" name="name" id="name" required/>

            <label for="fid"><b>Fertilizer ID</b></label>
            <input type="text" placeholder="Enter crop id" name="fid" id="fid" required/>

            <label for="tid"><b>Transaction ID</b></label>
            <input type="text" placeholder="Enter transaction ID" name="tid" id="tid" required/>
            
            
            <hr/>
            <button class='registration' type="Submit" name="Submit">Submit</button>
        </form>
    </div>
        </body>
    </body>
</html>