<?php
session_start();

if(isset($_SESSION['email']) && isset($_SESSION['name'])){

?>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MYPHARM";

//     // Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// //Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful<br>";
// }
// //sql querry to be executed

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Medicine</title>
    <link rel="stylesheet" href="update.css" type="text/css">
</head>

<body>
    <div class="container">
        <h2 class="heading">ADD</h2>
        <form method="post">
            <div class="details">
                <div class="box">
                    <span class="details">Product_ID</span>
                    <input type="text" name="Product_ID" placeholder="Enter Product_ID" required>
                </div>
                <div class="box">
                    <span class="details">Product_Name</span>
                    <input type="text" name="Product_Name" placeholder="Enter Product_Name" required>
                </div>
                <div class="box">
                    <span class="details">MRP (₹)</span>
                    <input type="number" step="0.01" name="MRP_(₹)" placeholder="Enter MRP (₹)" required>
                </div>
                <div class="box">
                    <span class="details">Manufacturer</span>
                    <input type="text" name="Manufacturer" placeholder="Enter Manufacturer" required>
                </div>
                <div class="box">
                    <span class="details">MFG_DATE</span>
                    <input type="date" name="MFG_DATE" placeholder="Enter MFG_DATE" required>
                </div>
                <div class="box">
                    <span class="details">EXP_DATE</span>
                    <input type="date" name="EXP_DATE" placeholder="Enter EXP_DATE" required>
                </div>
                <div class="box">
                    <span class="details">Packaging</span>
                    <input type="text" name="Packaging" placeholder="Enter Packaging" required>
                </div>
                <div class="box">
                    <span class="details">Location_Code</span>
                    <input type="text" name="Location_Code" placeholder="Enter Location_Code" required>
                </div>
                <div class="box">
                    <span class="details">Storage_Requirements</span>
                    <input type="text" name="Storage_Requirements" placeholder="Enter Storage_Requirements" required>
                </div>
                <div class="box">
                    <span class="details">How_To_Use</span>
                    <input type="text" name="How_To_Use" placeholder="Enter How_To_Use" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="SUBMIT">
            </div>
        </form>
    </div>
</body>
</html>
<!-- 
(`name`, `age`, `email`, `gender`, `phone`, `address`, `password`) -->
<?php
if(isset($_POST['Product_ID']))
{
    $Product_ID = $_POST['Product_ID'];
    $Product_Name = $_POST['Product_Name'];
    $MRP = $_POST['MRP_(₹)'];
    $Manufacturer= $_POST['Manufacturer'];
    $MFG_DATE = $_POST['MFG_DATE'];
    $EXP_DATE = $_POST['EXP_DATE'];
    $Packaging = $_POST['Packaging'];
    $Location_Code = $_POST['Location_Code'];
    $Storage_Requirements = $_POST['Storage_Requirements'];
    $How_To_Use = $_POST['How_To_Use'];

    $query = "INSERT INTO `medicines`(`Product_ID`, `Product_Name`, `MRP (₹)`, `Manufacturer`, `MFG_DATE`, `EXP_DATE`, `Packaging`, `Location_Code`, `Storage_Requirements`, `How_To_Use`) VALUES ('$Product_ID','$Product_Name','$MRP','$Manufacturer','$MFG_DATE','$EXP_DATE','$Packaging','$Location_Code','$Storage_Requirements','$How_To_Use')";

    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "Data Insertion was successful";
        header("Location: display.php");
        }
     else
    {
        echo "Failed";
    }
}
?>
<?php
}
else{
	header("Location:login.php");
}

?>