
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login page</title>
   

</head>
<style>

body
{
  font-family:sans-serif;
  background: -webkit-linear-gradient(to right, #155799, #159957);  
  background: linear-gradient(to right, #155799, #159957);
  color:whitesmoke;
  
}


h1{
    text-align: center;
}


form{
    width:35rem;
    margin: auto;
    color:whitesmoke;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(11, 15, 13, 0.582);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px;
}

input[type=text], input[type=password]{
    width: 100%;
    margin: 10px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
  }

button {
    background-color: #030804;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 100%;
    font-size: 18px;
  }

button:hover {
    opacity: 0.6;
    cursor: pointer;
}

.headingsContainer{
    text-align: center;
}

.headingsContainer p{
    color: gray;
}
.mainContainer{
    padding: 16px;
}


.subcontainer{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.subcontainer a{
    font-size: 16px;
    margin-bottom: 12px;
}

span.forgotpsd a {
    float: right;
    color: whitesmoke;
    padding-top: 16px;
  }

.forgotpsd a{
    color: rgb(74, 146, 235);
  }
 
.forgotpsd a:link{
    text-decoration: none;
  }

  .register{
    color: white;
    text-align: center;
  }
 
  .register a{
    color: rgb(74, 146, 235);
  }
 
  .register a:link{
    text-decoration: none;
  }

  /* Media queries for the responsiveness of the page */
  @media screen and (max-width: 600px) {
    form{
      width: 25rem;
    }
  }
 
  @media screen and (max-width: 400px) {
    form{
      width: 20rem;
    }
  }


</style>
<body>
  <?php 
include 'connect.php';
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $password = $_POST['password'];

  $name_search = "select * from custlogin where name='$name'";
  $query =  mysqli_query($con, $name_search);
  $user_count = mysqli_num_rows($query);

  if($user_count){
    $user_pass = mysqli_fetch_assoc($query);

    $db_pass = $user_pass['password'];

    //$_SESSION['username'] =$user_pass['username'];

    $pass_decode = password_verify($password, $db_pass);
    if($pass_decode){
      //echo "login successful";
      

      ?>
      <script>
        alert("Logged in successfully");
        location.replace("custafterlogin.php");
        </script>

      <?php

    }else{
      echo "password Incorrect";
    }
  }else{
    echo "invalid username";
  }
}

  ?>

	
    <h1><b>FARM MANAGEMENT SYSTEM</b></h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <h3>Sign in</h3>
            <p>Cutomer Login</p>
            <p>Sign in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- Username -->
            <label for="name">Your username</label>
            <input type="text" placeholder="Enter Username" name="name" required>

            <br><br>

            <!-- Password -->
            <label for="password">Your password</label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <!-- sub container for the checkbox and forgot password link -->
            
            
              <button type="submit" name= "submit">Login</button>
            
            

            <!-- Sign up link -->
            <p class="register">Not a member?  <a href="custregister.php">Register here!</a></p>

        </div>

    </form>
</body>
</html>