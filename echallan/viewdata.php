<!DOCTYPE html>
<html lang="en">
<head>
  <title>Echallan Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <link rel="stylesheet" href="style.css"> -->
    
    <link rel="stylesheet" href="hello.css">
</head>
<body>
    <!-- <nav class="mheader">
        <div class="header">
            <h2>E-Challan System</h2>
        </div>
      </nav> -->
    <!-- <div class="nav">
        <H2>E-chalan System</H2>
        <nav>
            <ul>
                <li><a href="./home.html">Home</a></li>
                <li><a href="./issue chalan.html">Issue challan</a></li>
                <li><a href="./veiw-challan.html">View challan</a></li>
                <li><a href="./about.html">About Us</a></li>
    
            </ul>
        </nav>
    </div> -->
    <div class="topnav">
        <a href="./home.php">Home</a>
        <a href="./challan.php">Issue Challan</a>
        <a class="active" href="./viewdata.php">View Challan</a>
        <a href="./about.php">About Us</a>
        <div class="topnav-right">
         
          <a href="./home.php">E-Challan System</a>
        </div>
      </div>
  

    <br><br>

<div class="container" style="margin-left:2px" >
  <h2>View Records</h2>
  <br><br>
  <?php
  include('connection.php');
    // $conn = mysqli_connect("localhost","root", "","wave");
    if(isset($_GET['del'])){
        $del_id = $_GET ['del'];
    $Delete = "Delete from challanissue where ChallanNumber = '$del_id'";
    $run_Delete = mysqli_query($conn,$Delete);
        if ($run_Delete === true){
            echo "<script>
            alert('Successfully Deleted');
            </script>";
        }else{
            echo "Failed,Try Again";
        }
            }   
    ?>

  
  <p>Registered Details</p>            
  <table class="table table-bordered"  >
    <thead>
      <tr>
        <th>ChallanNumber</th>
        <th>Name</th>
        <th>LicenseNumber</th>
        <th>Category</th>
        <th>Place</th>
        <th>Time</th>
        <th>NumberPlate</th>
        <th>Date</th>
        <th>Amount</th>
        <th>RuleBroken</th>
        <th>Delete</th>
        <th>Update</th>
        <th>Print</th>

        
      </tr>
    </thead>
    <tbody>

    <?php
     include('connection.php');
    // $conn = mysqli_connect("localhost","root", "","wave");
    $select = "SELECT * FROM challanissue";

    $run = mysqli_query($conn,$select);
    while( $row_challanissue = mysqli_fetch_array($run)){ 
            $ChallanNumber = $row_challanissue['ChallanNumber'];
            $Name = $row_challanissue['Name'];
            $LicenseNumber = $row_challanissue['LicenseNumber'];
            $Category = $row_challanissue['Category'];

            $Place = $row_challanissue['Place'];
            $Time = $row_challanissue['Time'];
            $NumberPlate = $row_challanissue['NumberPlate'];
            $Date = $row_challanissue['Date'];
            $Amount = $row_challanissue['Amount'];
            $RuleBroken = $row_challanissue['RuleBroken']; 
            $select = "SELECT * FROM challanissue";
   }
   $run = mysqli_query($conn,$select);
   while( $row_challanissue = mysqli_fetch_array($run)){ 
    $ChallanNumber = $row_challanissue['ChallanNumber'];
    $Name = $row_challanissue['Name'];
    $LicenseNumber = $row_challanissue['LicenseNumber'];
    $Category = $row_challanissue['Category'];
    $Place = $row_challanissue['Place'];
    $Time = $row_challanissue['Time'];
    $NumberPlate = $row_challanissue['NumberPlate'];
    $Date = $row_challanissue['Date'];
    $Amount = $row_challanissue['Amount'];
    $RuleBroken = $row_challanissue['RuleBroken'];
    
    
    
    ?>
      <tr>
        <td><?php echo $ChallanNumber;?></td>
        <td><?php echo $Name;?></td>
        <td><?php echo $LicenseNumber;?></td>
        <td><?php echo $Category;?></td>
        <td><?php echo $Place;?></td>
        <td><?php echo $Time;?></td>
        <td><?php echo $NumberPlate;?></td>
        <td><?php echo $Date;?></td>
        <td><?php echo $Amount;?></td>
        <td><?php echo $RuleBroken;?></td>
        <td><a class = "btn btn-danger" href = "viewdata.php?del=<?php echo $ChallanNumber;?>">Delete</a></td>
        <td><a class = "btn btn-success" href = "update.php?update=<?php echo $ChallanNumber;?>">Update</a></td>
        <td><a class = "btn btn-success" onclick="print1()">Print</a></td>


        
       
      </tr>
      <?php 
      }
      
      ?>
     
       
    </tbody>
  </table>
</div>
<script src="script1.js"></script>
</body>
</html>
