<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MYPHARM";

    // Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful<br>";
// }
//sql querry to be executed

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="main">
        <div class="register">
            <h2>Sign-Up</h2>
            <form id="register" method="post">
                <label>Name : </label>
                <br>
                <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                <br><br>
                <label>Your Age : </label>
                <br>
                <input type="number" name="age" id="name" placeholder="Enter Your Age" required>
                <br><br>
                <label>Email : </label>
                <br>
                <input type="email" name="email" id="name" placeholder="Enter Your Valid Email" required>
                <br><br>
                <label>Gender : </label>
                <br>
                <div class="custom_select">
                    <select name="gender" id="name" required>
                        <option value="Not Selected">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>+
                    </select>
                </div>
                <br><br>
                <label>Phone No. : </label>
                <br>
                <input type="number" name="phone" id="name" placeholder="Enter Your Phone number" required>
                <br><br>
                <label>Address : </label>
                <br>
                <textarea name="address" id="name" cols="38" rows="5" placeholder="Enter Your Address" required></textarea>
                <br><br>
                <label>Password : </label>
                <br>
                <input type="password" name="password" id="name" placeholder="Enter New Password" required>
                <br><br>
                <input type="submit" value="Sign-Up" name="Sign-Up" id="submit">
                &nbsp;&nbsp;
                <a href="login.php">
                    <input type="button" value="Log-in" name="Log-in" id="submit">
                </a>
            </form>
        </div>
    </div>
    
</body>
</html>
<?php
if(isset($_POST['email']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $query = "INSERT INTO `employee` (`name`, `age`, `email`, `gender`, `phone`, `address`, `password`)
                VALUES ('$name', '$age', '$email', '$gender', '$phone', '$address', '$password')";
    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "Data Insertion was successful";
        }
     else
    {
        echo "Failed";
    }
}
?>