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
$IDS=$_GET['ID'];

$select = "SELECT * FROM `medicines` WHERE `medicines`.`Product_ID`='$IDS'";
$data = mysqli_query($conn,$select);
$row = mysqli_fetch_array($data);

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="update.css" type="text/css">
</head>

<body>
    <div class="container">
        <h2 class="heading">UPDATE</h2>
        <form action="#" method="post">
            <div class="details">
                <div class="box">
                    <span class="details">Product_ID</span>
                    <input type="text" value="<?php echo $row['Product_ID']; ?>" name="Product_ID" required>
                </div>
                <div class="box">
                    <span class="details">Product_Name</span>
                    <input type="text" value="<?php echo $row['Product_Name']; ?>" name="Product_Name" required>
                </div>
                <div class="box">
                    <span class="details">MRP (₹)</span>
                    <input type="number" step="0.01" name="MRP_(₹)" value="<?php echo $row['MRP (₹)']; ?>" name="MRP_(₹)" required>
                </div>
                <div class="box">
                    <span class="details">Manufacturer</span>
                    <input type="text" value="<?php echo $row['Manufacturer']; ?>" name="Manufacturer" required>
                </div>
                <div class="box">
                    <span class="details">MFG_DATE</span>
                    <input type="date" value="<?php echo $row['MFG_DATE']; ?>" name="MFG_DATE" required>
                </div>
                <div class="box">
                    <span class="details">EXP_DATE</span>
                    <input type="date" value="<?php echo $row['EXP_DATE']; ?>" name="EXP_DATE" required>
                </div>
                <div class="box">
                    <span class="details">Packaging</span>
                    <input type="text" value="<?php echo $row['Packaging']; ?>" name="Packaging" required>
                </div>
                <div class="box">
                    <span class="details">Location_Code</span>
                    <input type="text" value="<?php echo $row['Location_Code']; ?>" name="Location_Code" required>
                </div>
                <div class="box">
                    <span class="details">Storage_Requirements</span>
                    <input type="text" value="<?php echo $row['Storage_Requirements']; ?>" name="Storage_Requirements" required>
                </div>
                <div class="box">
                    <span class="details">How_To_Use</span>
                    <input type="text" value="<?php echo $row['How_To_Use']; ?>" name="How_To_Use" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="UPDATE" name="update">
            </div>
        </form>
    </div>
</body>
</html>

<?php


if(isset($_POST['update']))
{
    $IDU=$_GET['ID'];
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


    // $query = "INSERT INTO `medicines`(`Product_ID`, `Product_Name`, `MRP (₹)`, `Manufacturer`, `MFG_DATE`, `EXP_DATE`, `Packaging`, `Location_Code`, `Storage_Requirements`, `How_To_Use`) VALUES ('$Product_ID','$Product_Name','$MRP','$Manufacturer','$MFG_DATE','$EXP_DATE','$Packaging','$Location_Code','$Storage_Requirements','$How_To_Use')";


    $update = "UPDATE `medicines` SET `Product_ID` = '$Product_ID', `Product_Name` = '$Product_Name', `MRP (₹)` = '$MRP', `Manufacturer` = '$Manufacturer', `MFG_DATE` = '$MFG_DATE', `EXP_DATE` = '$EXP_DATE', `Packaging` = '$Packaging', `Location_Code` = '$Location_Code', `Storage_Requirements` = '$Storage_Requirements', `How_To_Use` = '$How_To_Use' WHERE `medicines`.`Product_ID` = '$IDU'";
    
    
    $result = mysqli_query($conn,$update);


    if($result)
    {
        echo "Data Updated successful";
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