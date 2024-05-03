<?php
session_start();

if(isset($_SESSION['email']) && isset($_SESSION['name'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Display medicines</title>
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            background-image:url('8.jpg'); 
            background-size: 100%;
            background-position: 1px 0px;
        }
        h1{
            text-align: center;
            font-style: italic;
        }
        table{
            border-collapse: collapse;
            background-color: #bdcfcc;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
            border-radius: 20px 20px 20px 20px;
            overflow: hidden;
            margin: auto;
        }
        th,td{
            border: 1px solid #041e31;
            padding: 8px 30px;
            text-align: center;
            color: rgb(0,0,0);
        }
        td{
            font-size: 13px;
            color: rgb(0,0,0);
        } 
        .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
             border: 1px solid #787878;
            background: #033627;
            /* font-weight: normal; */
            color: #f2ebeb;
        }
        .dataTables_wrapper .dataTables_filter input {
            border: 2px solid #000;
            border-radius: 3px;
            padding: 5px;
            background-color: transparent;
            margin-left: 3px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg " style="background-color: #aff2cb;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MYPHARM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="display.php">Medicine Details</a>
              </li>
            </ul>
            <a class="nav-link" aria-current="page" href="logout.php">logout</a>
          </div>
        </div>
      </nav>
    <div class = "main-div">
        <h1>List Of Medicines</h1>
        <div class = "center-div">
            <div class = "table-responsive">
                <table id="Mytable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Product_ID</th>
                            <th>Product_Name</th>
                            <th>MRP (₹)</th>
                            <th>Manufacturer</th>
                            <th>MFG_DATE</th>
                            <th>EXP_DATE</th>
                            <th>Packaging</th>
                            <th>Location_Code</th>
                            <th>Storage_Requirements</th>
                            <th>How_To_Use</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "MYPHARM";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);


                        $selectquery = "SELECT * FROM `medicines`";
                        $query = mysqli_query($conn,$selectquery);
                        $num = mysqli_num_rows($query);

                        while($med = mysqli_fetch_array($query))
                        {
                    ?>       
                            <tr>
                                <td><?php echo $med['Product_ID']; ?></td>
                                <td><?php echo $med['Product_Name']; ?></td>
                                <td><?php echo $med['MRP (₹)']; ?></td>
                                <td><?php echo $med['Manufacturer']; ?></td>
                                <td><?php echo $med['MFG_DATE']; ?></td>
                                <td><?php echo $med['EXP_DATE']; ?></td>
                                <td><?php echo $med['Packaging']; ?></td>
                                <td><?php echo $med['Location_Code']; ?></td>
                                <td><?php echo $med['Storage_Requirements']; ?></td>
                                <td><?php echo $med['How_To_Use']; ?></td>
                                <td>
                                    <a href="add.php">ADD</a>
                                    <br><br>
                                    <a href="update.php?ID=<?php echo $med['Product_ID']?>">UPDATE</a>
                                    <br><br>
                                    <a onclick="return confirm('Are Your Sure, You Want To Delete The Record ??')" href="delete.php?Product_ID=<?php echo $med['Product_ID']?>">DELETE</a>
                                </td>  
                            </tr>
                    <?php            
                        } 
                    ?>

                    </tbody>
                </table>
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.1/js/dataTables.jqueryui.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#Mytable').DataTable();
                    });
                </script>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
else{
	header("Location:login.php");
}

?>