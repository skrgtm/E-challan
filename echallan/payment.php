<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="script1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // for logging out 
  function logout() {
    Swal.fire({
      title: "Are you sure?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Log Out"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          window.location.href = "./driver.php"
        )
      }
    })
  }
  
  </script>
    <title>Search-Challan</title>
    <!-- <link rel="stylesheet" href="/css/search-challan.css"> -->
    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Times New Roman", Times, serif;
        }

        body {
            width: 100%;
            background: #e5e7eb;
            position: relative;
            display: flex;
        }

        #menu {
            background: #111827;
            width: 300px;
            height: 100%;
            position: fixed;
            top: 0%;
            left: 0%;
        }

        #menu .logo {
            display: flex;
            align-items: center;
            color: #fff;
            padding: 30px 0 0 30px;
        }

        #menu .logo img {
            width: 80px;
            margin-right: 15px;
        }

        #menu .lgout a i {
            position: absolute;
            bottom: 0;
            width: 100%;
            color: #fff;

        }

        #menu .items {
            margin-top: 40px;
        }

        #menu .items li {
            list-style: none;
            padding: 15px 0;
            transition: 0.3s ease;
            margin-left: 15px;
        }

        #menu .items li:hover {
            background: #253047;
            cursor: pointer;
        }

        #menu .items li:hover a {
            color: #f3f4f6;
        }

        /* #menu .items li:nth-child(1) {
            border-left: 4px solid #fff;
        } */

        #menu .items li a {
            text-decoration: none;
            color: greenyellow;
            font-weight: 300px;
            transition: 0.3s ease;
            margin-left: 10px;
        }

        #interface {

            width: 100%;
        }


        #interface .navigation {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #fff;
            padding: 15px 30px;
            border-bottom: 3px solid #594ef7;
        


        }

        #interface .navigation .profile {
            display: flex;
            justify-content: flex-start;
            align-items: center;

        }



        #interface .navigation .profile img {
            width: 30px;
            height: 30px;
            object-fit: cover;
            border-radius: 50%;
        

        }
        /*  for main container */

        .container,
        .input-container {
            display: flex;
            flex-direction: column;
            gap: 1.3rem;
            
        }



        .input-container {
            max-width: 30rem;

            width: 100%;
        }


        .input-text {
            font-family: inherit;
            font-size: 1.5rem;
            padding: 2rem 1.5rem 1.25rem 1rem;
            border: none;
            border-radius: 2rem;
            background: #eee;
            width: 100%;
            justify-content:center;
        }

        .input-text:focus {
            outline-color: #2196f3;
        }

        .btn {
            padding: 1.25rem 1.25rem;
            border: none;
            background: #2196f3;
            color: #fff;
            border-radius: 1rem;
            cursor: pointer;
            font-family: inherit;
            font-weight: 800;
            font-size: 1.7rem;
        }

        .btn:active {
            box-shadow: none;
        }

        .btn:hover {
            background: #2180f9;
        }

        .inp {
            position: relative;
        }

        .label {
            pointer-events: none;

            position: absolute;
            top: 1.5rem;
            left: 2rem;
            color: #00000070;
            font-weight: 500;
            font-size: 1.25rem;

            transition: all 0.2s;
            transform-origin: left;
        }

        .input-text:not(:placeholder-shown)+.label,
        .input-text:focus+.label {
            top: 0.7rem;
            transform: scale(0.75);
        }

        .input-text:focus+.label {
            color: #2196f3;
        }

        /* .topnav1 {
            padding: 16px;
            text-decoration: none;
            font-size: 22px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bolder;
            background-color: #333;


        } */
        .footerhome {
            margin-top: 13%;
            width: 100%;
            height: 15vh;
            text-align: center;
            background: rgb(235, 240, 236);
            color: rgb(31, 25, 25);
            opacity: 5;


        }
    </style>
</head>
<body>
    <section id="menu">
        <div class="logo">
            <img src="images/clogo.png" alt="" />
            <h2>Cyber Space</h2>
        </div>
    
    
        <div class="items">
      <li><a href="driver-home.php">Home</a></li>
      <li><a href="search-challan.php">Search Challan</a></li>
      <li><a href="driver-about.php">About Us</a></li>
      <li><a  onclick="logout()" >Sign-Out</a></li>
    </div>

    </section>   
    <section id="interface">
     
        <div class="navigation">
            <div class="profile" style="margin-left: 98%;">
                <i class="profimg" ></i>
                <img src="images/profile.jpg" alt=""  >
            </div>
        </div>
        <div class="container"
            style=" margin-top: 75px; ; box-shadow: 5px 10px 8px 10px #888888; margin-left: 42%; margin-right: 29%; border-radius: 15px; ">
            
           
            
            <h1 style="margin-left: 13%; padding-bottom: 25px; margin-top: 15px; padding-left: 100px;"> Challan Payment</h1> 
            <div style="margin-left: 13%; padding-bottom: 25px; margin-top: 15px;" class="form">
           <form action="paymentsuccessfull.php" method="post">   
            <div style="text-align: center;"class="form">
        <input style="color:blue;text-align:center; height: 40px; width: 50%;" type="text"value ="<?= $_SESSION['Amount'] ?>" class="id" name="button" 
         placeholder="payment"/> <tr>
                  
        <button name="payment" style="background-color:rgb(54, 54, 230); color: rgb(238, 238, 238);  text-align:center; height: 40px; width: 20%;" type="submit"name="payment" onclick="payment()">  Pay</button>
        
        </div>       
    </form> 
            </div>
        
            <script>
                function payment(){
                  alert("Deleted Successfully!");
                  window.location.href="paymentsuccessfull.php";
                }
            </script>
    </section>
   
    
    
    </div>
    
    
</body>
</html>