<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Chalan</title>

     
    <link rel="stylesheet" href="hello.css"> 
    <!-- <link rel="stylesheet" href="challan.css">  -->
    <!-- <link rel="stylesheet" href="challan.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body style ="margin:0px;">
    

    <div class="topnav1">
        <a href="./home.php">Home</a>
        <a class="active" href="./challan.php">Issue Challan</a>
        <a href="./viewdata.php">View Challan</a>
        <a href="./about.php">About Us</a>
        <div class="topnav-right">
         <a href="./home.php">E-Challan System</a>
        </div>
    </div>
  
   
      
        
        <img style="position: absolute; margin-left:200px;" src="346-3465558_police-officer-cartoon-painted-police-traffic-cartoon-png-removebg-preview.png" alt=""> 
        <div class="form-chalan">
        <form action="" method= "post" class="lists" >
            <label for="">Chalan Number:</label><br>
            <input type="text"name ="ChallanNumber" required><br>
            <label for="">Name: </label><br>
            <input type="text" name = "Name" required><br>
            <label for="">License Number: </label><br>
            <input type="text"name = "LicenseNumber" required><br>          
            <label for="">Place: </label><br>
            <input type="text"name = "Place" required> <br>       
            <label for="">Time: </label><br>
            <input type="time"name = "Time" required><br>    
            <label for="">Number Plate: </label><br>
            <input type="text"name = "NumberPlate" required><br>        
            <label for="">Date: </label><br>
            <input type="Date"name = "Date" required><br>       
            <label for="">Amount: </label><br>
            <input type="text"name = "Amount" required><br>          
            <label for="">Rule Broken: </label><br>
            <input list="Rules"name = "RuleBroken" required>
            <datalist id="Rules">
                <option value="Driving a public vehicle without route permit"></option>
                <option value="Driving on the wrong lane"></option>
                <option value="Driving without license"></option>
                <option value="Involvement in accident or fleeing after accident"></option>
                <option value="Carrying load beyond capacity"></option>
            </datalist><br>
            <label for="">Vehicle Category: </label><br>
            <input list="Category" name ="Category" required>
            <datalist id="Category">
                <option value="Two Wheeler"></option>
                <option value="Four Wheeler"></option>
               
            </datalist>
            
            <button  name="Issue" type="submit" value="HTML" class="btn">Issue</button>
            
            <br>          
        </form>
</div>
        <?php
         include('connection.php');
      $conn = mysqli_connect("localhost","root", "","wave");//connect_database
    if (isset($_POST['Issue'])){ //if you click this issue button your data will be save in database.
      if(!empty('ChallanNumber') && !empty('LicenseNumber') && !empty('Category') && !empty('Place') && !empty('Time') && !empty('NumberPlate') && !empty('Date') && !empty('Amount')&& !empty('RuleBroken')){
        //if (mysqli_connect_errno()){
      // echo "connection fail";
    //}else{
      //  echo "connection OK";
      //these are the column which stores the data that you entered.
      $ChallanNumber = $_POST['ChallanNumber'];
      $Name = $_POST['Name'];
      $LicenseNumber = $_POST['LicenseNumber'];
      $Category = $_POST['Category'];
      $Place = $_POST['Place'];
      $Time = $_POST['Time'];
      $NumberPlate = $_POST['NumberPlate'];
      $Date = $_POST['Date'];
      $Amount = $_POST['Amount'];
      $RuleBroken = $_POST['RuleBroken'];  
        //It is the insert data queries....
        $insert = "insert into `challanissue`(`ChallanNumber`, `Name`, `LicenseNumber`,`Category`, `Place`, `Time`, `NumberPlate`, `Date`, `Amount`, `RuleBroken`)
        VALUES ('$ChallanNumber','$Name','$LicenseNumber','$Category','$Place','$Time','$NumberPlate','$Date','$Amount','$RuleBroken')";
    
      $run_insert = mysqli_query($conn,$insert);//its help to fire...
  if ($run_insert === true){
      echo "<script>
          alert('Successfully inserted!');
          window.location.href='viewdata.php';
        </script>";
      
  }else{
      echo "Failed, Try again";

  }
    }  
      }
         
?>

</body>
<!-- <div id="footerhome">
    <h5>©Copyright 2021 E-challan | Terms & Conditions Privacy Policy </h5>      
   </footer> -->
        </div>
</html>