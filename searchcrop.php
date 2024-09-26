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
        <style>

           table{
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    margin:auto;

} 
th,td{
    border: 1px solid #f2f2f2;
    padding: 8px 30px;
    text-align: center;
    color: grey;
}
th{
    text-transform: uppercase;
    font-weight: 500;
}
td{
    font-size:13px;
}
.right-side{
    width:100%;
    height:500px;
    color:white;
    text-align: center;
    margin-top: 25px;
    
    padding: 40px;
}
button{
    
    background-color: DodgerBlue; /* Blue background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 16px 20px; /* Some padding */
    font-size: 20px; /* Set a font size */
    cursor: pointer;
    

}
</style>
    </head>
    <body>




        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <div class='container'>
            <label for ="type">Enter the type of crop you want to buy</label>
            <input type="text" placeholder="Type" name="type" id="type" required/>
            <hr/>
            <button class='registration' type="Submit" name="Submit">Submit</button>
        </form>

        <table>
            <tr>
                <th>Cropname</th>
                <th>CropID</th>
                <th>CropPrice</th>
</tr>
<tbody>
<?php

include 'connect.php';

if(isset($_POST['Submit'])){
    
    $type = mysqli_real_escape_string($con, $_POST['type']);

    //$pass = password_hash($passwords, PASSWORD_BCRYPT);
    //$cpass = password_hash($cpasswords, PASSWORD_BCRYPT);

   $usernamequery = " select * from crop where type= '$type'";
   $query = mysqli_query($con, $usernamequery);
   while($row = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td>
            <?php echo $row['name'];?></td>
            <td><?php echo $row['cropid'];?>
        </td>
        <td><?php echo $row['price'];?></td>

   </tr>
   <?php
   }
}  
?>
</tbody>


        </table>
</div>
<div class="right-side">
<button type="submit"><a href="custtransaction.php">BUY</a></button>
</div>
        </body>
    </body>
</html>