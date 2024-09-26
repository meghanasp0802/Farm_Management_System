
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width.device=width,initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="table.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        

</head>
<body>
    


<!--<div class="abc">
    <h3><button><a href="afterlogin.html">Home</a></button></h3>
</div>-->
<div class="main-div">
<div class="w3-button w3-xlarge">
    <button class="btn"><a href="afterlogin.php"><i class="fa fa-home">Home</i></a></button>
</div>
    <h1>List of users and their details</h1>
    <div class="centre-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>name</th>
                        <th>userid</th>
                        <th>email</th>
                        <th>contact.no</th>

</tr>
</thead>
<tbody>
<?php

include 'connect.php';
$selectquery = " select * from users";
$query = mysqli_query($con, $selectquery );
$num = mysqli_num_rows($query);
$res = mysqli_fetch_array($query);
while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['userid']; ?></td>
        <td><span class="email-style"><?php echo $res['email']; ?></span></td>
        <td><?php echo $res['contact']; ?></td>

        </tr>


<?php

}



?>

   
        </tbody>
</table>
</div>
</div>
</div>

</body>
</html>
