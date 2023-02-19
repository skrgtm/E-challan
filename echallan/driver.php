
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver-login</title>
    <link rel="stylesheet" href="driver.css">
    <script src="driver.js"></script>
     
</head>

<body>
    
        <div class="topnav1" style="background-color:#333 ; color: #ccc; left: 0; top: 0; width: 100%; text-align: center;">
            <h3 style="color:white;">E-Challan System</h3>
            
        </div>
        
        <main class="container" style="margin-top: 30px;">
            <h1 style="font-size: 4.5rem; ">Driver Login</h1>
            
            
    
            <form action ="#" class="signup-form" method = "post">
                <label class="inp">
                    <input class="input-text" placeholder="" type="number" name="licensenumber" required>
                    <span class="label">Lisence number</span>
                    
                </label>
                <label class="inp">
                    <input type="password" class="input-text" placeholder=""   name="password1"required>
                    <span class="label" >Password</span>
                    <!-- <input type="checkbox" onclick="myFunction()" style="margin-top: 20px; margin-left: 12px;">   Show Password  -->
                </label>
                <a href="./recovery.php" style="margin-left: 320px;"><u>Forgot Password</u></a>
                <input type="submit" class="btn" value="Login" name="login" > 
              </form>
              <!-- <button class="btn" name="login" style="width: 29vw;" >Login</button> -->
              
<?php 
include('connection.php');
                //for employee login
                if(isset($_POST['login'])){   
                $u_name = $_POST["licensenumber"];     //defining a variable   
                $pass = $_POST["password1"];   //defining a variable 
                //echo $pass;
$sql_query = "select * from driverdata ";
// $result =$conn->query($sql_query);
// var_dump($result);

$result1 = $conn -> query($sql_query);
if($result1->num_rows>0){
  while($row=$result1->fetch_assoc()){
    $passw =$row['password'];
    $num =$row['license_number'];
    // 
    if($u_name == $num and $pass==$passw){
      header('Location:driver-home.php');
    }
    else {
            echo '<script>
      alert("You have entered wrong license number or password!!!")</script>';    
    }
  }
}
}

                
                // }
                
                ?>
                
              
            <p>Not a Member?<span><a href="sign-up.php">Sign up</a> </span></p>
        </main>
        <div class="img" >

             <a href="user.php"><img src="./images/driver.png" alt="" style="height: 450px; "></a>
          </div>
       
           <!-- <div class="img" >

             <img src="images/driver.png" alt="" style="height: 450px; ">
            </div>
            <a href="./user.html" style="margin-left: 85%;">

              <img style="height: 40px; width: 40px;" src="https://img.icons8.com/officel/80/000000/change-user-male.png" />
            </a> -->
        
        
    

   
     
     
    
</body>
</html>