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
$ID=$_GET['Product_ID'];

$query = "DELETE FROM `medicines` WHERE `medicines`.`Product_ID` = '$ID'";

$data = mysqli_query($conn,$query);

if($data){

?>

<script type ="text/javascript">
    alert("Record Deleted Successfully")
</script>

<?php
header("Location: display.php");
}
else{
?>

<script type ="text/javascript">
    alert("Please Try Again")
</script>

<?php
}
?>
<?php
}
else{
	header("Location:login.php");
}

?>


