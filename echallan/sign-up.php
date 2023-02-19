<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="./sign-up.css">
    <script>
        function myfunction() {

            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";

            } else {
                x.type = "password";
            }
        }
        function myFunction() {

            var x = document.getElementById("Cpassword");
            if (x.type === "password") {
                x.type = "text";

            } else {
                x.type = "password";
            }
        }
    </script>
    

</head>

<body style="margin: 0%;">

    <div class="topnav1"
        style="background-color:#333 ; color: #ccc; left: 0; top: 0; text-align: center; position: ; ">
        <h3 style="color:white;">E-Challan System</h3>
    </div>
<div class="container">

    <main >
        <h1 style="font-size: 4.5rem; margin-left: 27%; margin-bottom: 10px ; ">Create a Account as Driver user</h1>
        
        
        
        <form class="signup-form" action="./sign-up.php" method= "post">
            <label class="inp">
                <input class="input-text" placeholder="&nbsp;"required="required" name ="Name">
                <span class="label">Name</span>
                
            </label>
            <label class="inp">
                <input class="input-text" placeholder="&nbsp;"required="required" name ="Address">
                <span class="label">Address</span>
                
            </label>
            <label class="inp">
                <input class="input-text" type="date" placeholder="&nbsp;"required="required"name =Date_of_Birth>
                <span class="label">Date of Birth</span>
                
            </label>
            <label class="inp">
                <input class="input-text" placeholder="&nbsp;"required="required"name ="LicenseNumber">
                <span class="label">License number</span>
                
                
            </label>
            
            <label class="inp">
                <input class="input-text" placeholder="&nbsp;" type='text' name ="PhoneNumber">
                <span class="label">Phone number</span>
                
            </label>
            
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" id="password" name ="Password">
                <span class="label">Password</span>
                <input type="checkbox" onclick="myfunction()" style="margin-top: 20px; margin-left: 12px;"> Show
                Password
            </label>
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" id="Cpassword">
                <span class="label">Confirm Password</span>
                <input type="checkbox" onclick="myFunction()" style="margin-top: 20px; margin-left: 12px;"> Show
                Password
            </label>
            <button class="btn" name="Issue" type="submit" style="width: 29vw;" >Sign up</button> 
        </form>
        

        <p>Already have a account? <span><a href="./driver.php"><u>Login</u></a> </span></p>
    </main>
</div>
    
    <div class="img">

        <img src="images/driver.png" alt="" style="height: 450px; ">
    </div>


    </div>
    <?php
         include('connection.php');
    //   $conn = mysqli_connect("localhost","root", "","wave");//connect_database
    if (isset($_POST['Issue'])){ //if you click this issue button your data will be save in database.
      if(!empty('Name') && !empty('Address') && !empty('Date_of_Birth') && !empty('LicenseNumber') && !empty('PhoneNumber') && !empty('Password')){
    //     if (mysqli_connect_errno()){
    //   echo "connection fail";
    // }else{
    //    echo "connection OK";
    //   these are the column which stores the data that you entered.
      
      $Name = $_POST['Name'];
      $Address = $_POST['Address'];
      $Date_of_Birth = $_POST['Date_of_Birth'];
      $LicenseNumber = $_POST['LicenseNumber'];
    //   echo $LicenseNumber;
      $PhoneNumber = $_POST['PhoneNumber']; 
      $Password = $_POST['Password']; 
      echo $Password;
        // It is the insert data queries....
      $insert = "INSERT INTO `driverdata`(`Name`, `Address`, `Date_of_Birth`, `license_number`, `PhoneNumber`, `password`) 
      VALUES ('$Name','$Address','$Date_of_Birth','$LicenseNumber','$PhoneNumber','$Password')";
    
      $run_insert = mysqli_query($conn,$insert);//its help to fire...
  if ($run_insert === true){
      echo "<script>
          alert('Successfully inserted!');
          window.location.href='driver.php';
        </script>";
      
  }else{
      echo "Failed, Try again";

  }
    }  
      }
         
?>


    
</body>

</html>