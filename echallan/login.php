<?php 
include('connection.php');

if(isset($_POST['login-btn'])){
    $username= $_POST['username'];
    $password = $_POST['password'];

    $select_db = "SELECT * from user where user_name='$username' and user_password='$password'";
    $result = $conn -> query($select_db);   
    // var_dump($result); 
    if($row =$result-> fetch_assoc()){
        echo "<script>window.open('home.php','_self');</script>";
    }
    else{
        // header("Location: challan.php");
        echo "You have enter a wrong username or passsword";
    }
}

?>
<!-- Driver login page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic-login</title>

    <!-- linking driver-login css  -->
    <link rel="stylesheet" href="traffic-login.css">

    <!-- link script -->
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
            x.type = "text";
            } else {
            x.type = "password";
            }
        }
   
    </script>


</head>

<body>
    <!-- Header -->
    <div class="topnav1">
        <a href="./index.html">
            <h3 style="color:white;">E-Challan System</h3>
        </a>

    </div>

    <!-- Sub-heading  -->
    <main class="container" style="margin-top: 30px;">
        <h1 style="font-size: 4.5rem; ">Traffic Login</h1>


        <!-- form to fill information -->
        <form class="signup-form" method="post" action="#">
            <label class="inp">
                <input class="input-text" placeholder="&nbsp;" name="username">
                <span class="label">Username</span>

            </label>
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" name="password" id="password">
                <span class="label">Password</span>

                <!-- show password checkbox -->
                <input type="checkbox" onclick="myFunction()" style="margin-top: 20px; margin-left: 12px;"> Show
                Password
            </label>
            

            <button class="btn" name="login-btn" style="width: 29vw;" >Login</button>
        </form>

        <!-- button to login -->

        
    <!-- driver image  -->
    <div class="img">

        <a href="user.php"><img src="./images/traffic.png" alt="" style="height: 450px; margin-top: 150px; "></a>
    </div>
</body>

</html>


