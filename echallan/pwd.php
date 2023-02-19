<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pwd</title>
    <link rel="stylesheet" href="./recovery.css">
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
<body>
    <div class="topnav1"
        style="background-color:#333 ; color: #ccc; left: 0; top: 0; width: 100%; text-align: center;">
        <h3 style="color:white;">E-Challan System</h3>
    </div>
    
    <main class="container" style="margin-top: 30px;">
        <h1 style="font-size: 4.5rem; ">Set New Password</h1>
    
    
    
        <form method="post" action="#" id="form" class="signup-form">
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" id="password"name="newpassword" required>
                <span class="label">Password</span>
                <input type="checkbox" onclick="myfunction()" style="margin-top: 20px; margin-left: 12px;"> Show Password
            </label>
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" id="Cpassword"name="changepassword" required>
                <span class="label"> Confirm Password</span>
                <input type="checkbox" onclick="myFunction()" style="margin-top: 20px; margin-left: 12px;"> Show Password
            </label>
       
    
    
        <button class="btn"  type="submit" value="Submit" name="submit1" style="width: 29vw;">Submit</button>
    
    </form>
        <?php 
        session_start();
        include_once('connection.php');
        
        if(isset($_POST['submit1'])){
        //loading data from forgot password page
        $dateofbirth=$_SESSION['date'];
        $licensenumber= $_SESSION['license_number'];
        $fullname=$_SESSION['Name'];
        

        //creating a new password and change password variable
        $new_pass = $_POST['newpassword'];
        $change_pass =$_POST['changepassword'];
        
        //selecting particular data from the database 
        $db_select = "SELECT password from driverdata where Name = '$fullname' AND license_number ='$licensenumber' AND Date_of_Birth ='$dateofbirth'";
        $result = $conn ->query($db_select);
        //fetching the data into an array
        $row = mysqli_fetch_array($result);
        if($new_pass == $change_pass){
            //updating data 
            $change_data = "UPDATE driverdata set password='$new_pass' WHERE Name ='$fullname'";
            $result1 = $conn->query($change_data); 
            
            echo'<script>
            alert("Changed password successfully!!")
            window.location.href="driver.php";
            </script>;
                ';
                // header('Location:main.php');
        }
        else{
            echo'<script>
            alert("Err..!")
            </script>';
        }
        }
        ?>
    </main>
    
    <div class="img">
    
        <img src="images/driver.png" alt="" style="height: 450px; ">
    </div>
    
    
    </div>
    
    
    
    
    
    </div>
</body>
</html>