<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    
    
    <link rel="stylesheet" href="hello.css">
</head>
<body style="margin:0px;"> 
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
    <div class="topnav1">
        <a class="active" href="./home.php">Home</a>
        <a href="./challan.php">Issue Challan</a>
        <a href="./viewdata.php">View Challan</a>
        <a href="./about.php">About Us</a>
        <div class="topnav-right">
         
          <a href="./home.php">E-Challan System</a>
        </div>
      </div>
  

    <br><br>
    <div class="header">
        <h1>Update Records</h1>
    </div>
    <div class="main">
        
        <?php
        
    $conn = mysqli_connect("localhost","root", "","wave");
    if(isset($_GET['update'])){
        $update_ChallanNumber = $_GET ['update'];

        $select = "SELECT * FROM challanissue WHERE ChallanNumber ='$update_ChallanNumber'";
        $run = mysqli_query($conn,$select);
        $row_challanissue = mysqli_fetch_array($run);

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
            
             }    
    ?>


        <form action="" method= "post" >
        <div class="form-group">
            <label for="">Challan Number:</label><br>
            <input type="text" class="form-control" value="<?php echo $ChallanNumber;?>"name="ChallanNumber" required><br>
            <label for="">Name: </label><br>
            <input type="text" name = "Name"value="<?php echo $Name;?>" required><br>
            <label for="">License Number: </label><br>
            <input type="text"name = "LicenseNumber"value="<?php echo $LicenseNumber;?>" required><br> 
            <label for="">Vehicle Category: </label><br>
            <input list="Category" name ="Category" value="<?php echo $Category?> "required>
            <datalist id="Category">
                <option value="Two Wheeler"></option>
                <option value="Four Wheeler"></option>
               
            </datalist><br>
            <label for="">Place: </label><br>
            <input type="text"name = "Place"value="<?php echo $Place;?>" required> <br>       
            <label for="">Time: </label><br>
            <input type="time"name = "Time"value="<?php echo $Time;?>" required><br>    
            <label for="">Number Plate: </label><br>
            <input type="text"name = "NumberPlate"value="<?php echo $NumberPlate;?>" required><br>        
            <label for="">Date: </label><br>
            <input type="Date"name = "Date"value="<?php echo $Date;?>" required><br>       
            <label for="">Amount: </label><br>
            <input type="text"name = "Amount"value="<?php echo $Amount;?>" required><br>          
            <label for="">Rule Broken: </label><br>
            <input list="Rules"name = "RuleBroken"value="<?php echo $RuleBroken;?>" >
            <datalist id="Rules">
                <option value="Driving a public vehicle without route permit"></option>
                <option value="Driving on the wrong lane"></option>
                <option value="Driving without license"></option>
                <option value="Involvement in accident or fleeing after accident"></option>
                <option value="Carrying load beyond capacity"></option>
            </datalist><br><br>
            
            <input type="submit" name="insert-btn" class="btn btn-primary" value="Save"/>
            <!-- <button class="btns" onclick="pri()">
        Print
    </button> -->
            
        </form>
        

    <?php
    $conn = mysqli_connect("localhost","root", "","wave");//connect_database
    if (isset($_POST['insert-btn'])){ //if you click this issue button your data will be save in database.
    //if (mysqli_connect_errno()){
      //echo "connection fail";
    //}else{
      // echo "connection OK";
    //}
    
      $eChallanNumber = $_POST['ChallanNumber'];
      $eName = $_POST['Name'];
      $eLicenseNumber = $_POST['LicenseNumber'];
      $Category = $_POST['Category'];
      $ePlace = $_POST['Place'];
      $eTime = $_POST['Time'];
      $eNumberPlate = $_POST['NumberPlate'];
      $eDate = $_POST['Date'];
      $eAmount = $_POST['Amount'];
      $eRuleBroken = $_POST['RuleBroken'];  
       
      $update = "UPDATE challanissue SET ChallanNumber='$eChallanNumber', Name='$eName',LicenseNumber='$eLicenseNumber',Category='$Category',Place='$Place',
      Time='$eTime', NumberPlate='$eNumberPlate', Date='$eDate', Amount='$eAmount', RuleBroken='$eRuleBroken' WHERE ChallanNumber='$update_ChallanNumber'";
      
      $run_update = mysqli_query($conn,$update);//its help to fire...
  if ($run_update === true){
    echo "<script>
    alert('Successfully inserted!');
    window.location.href='viewdata.php';
  </script>";
      
  }else{
      echo "Failed, Try again";

  }
        
}   

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
<script>
  function pri(){
      window.print()
  }
</script>
</body>
</html>