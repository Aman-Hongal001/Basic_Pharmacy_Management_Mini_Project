<?php

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MYPHARM";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['email'])){
    $user_email=$_POST['email'];
    $user_password=$_POST['Password'];

    $sql="SELECT * FROM `employee` WHERE email='".$user_email."' AND password='".$user_password."'";
     $result=mysqli_query($conn,$sql);

    //  if(mysqli_num_rows($result)==1){
    //     echo "You have successfully logged in";
    //     header("Location:home.php");
    //     die();
    //  }
    //  else{
    //     echo "Incorrect user email or password";
        
      
    //  }
    if(mysqli_num_rows($result) === 1)
    {
        $row = mysqli_fetch_assoc($result);
        if($row['email'] === $user_email && $row['password'] === $user_password)
        {
            //print_r($row);
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['emp_id'];
            header("Location: home.php");
        }
    }
    else{
        echo " Incorrect user_email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="main">
        <div class="register">
            <h2>Log-in</h2>
            <form id="register" method="post" name="form">
                <label>Email : </label>
                <br>
                <input type="email" name="email" id="name" placeholder="Enter Your Valid Email" required>
                <br><br>
                <label>Password : </label>
                <br>
                <input type="password" name="Password" id="name" placeholder="Enter New Password" required>    
                <br><br>
                <!-- &nbsp adds space  -->
                <input type="submit" value="Log-in" name="submit" id="submit">
                &nbsp;&nbsp;
                <a href="signup.php">
                    <input type="button" value="Sign-Up" name="submit" id="submit">
                </a>
            </form>
        </div>
    </div>
    
</body>
</html>
