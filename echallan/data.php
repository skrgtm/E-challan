<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challan details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";

        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";

        }
        
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function pri() {
      window.print()
      
    }
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
    <style>
         * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
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
  position: absolute;
  top: 0%;
  left: 0%;
  display: block;
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

/* #lgout{
  margin-top: 200px;
} */

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

/* #menu .items li:nth-child(1) { */
  /* border-left: 4px solid #fff; */
/* } */

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
    margin-left: 50%;

}

.slideshow-container{
display: block;
margin-left: 200px;
margin-top:100px;
margin-right: 125px;
}

.footerhome{
text-align: center;
}

.navigation{
  background-color: white;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #333;
    overflow-x: hidden;
    transition: 0.1s;
    padding-top: 60px;
}

.sidenav a {

    padding-top: 20px;
    padding-left: 5px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}


.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: -5px;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;

}

.logo {

    align-items: center;
    color: #fff;

}

table {

    border-collapse: collapse;
    width: 100%;
}

th,
td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #DDD;
}

tr:hover {
    background-color: #D6EEEE;
}

.footerhome {
    margin-top: 15%;
    width: 100%;
    height: 15vh;
    text-align: center;
    background: rgb(235, 240, 236);
    color: rgb(31, 25, 25);
    opacity: 5;

}
.data-table{
    border: black solid;
     height: auto;
     width: 60%;
     margin-left: 30%;
     font-size: larger;
     box-shadow: 5px 10px 8px 10px #888888;
}
    </style>
</head>
<body style="background-color: #d5e6ec;">
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

    <!-- <div class="lgout">
      <button type="logout">Logout<button>
    </div> -->

  </section>

  <section id="interface">


    <div class="navigation" style="width: 100%;">
      <div class="profile">
        <i class="profimg"></i>
        <img src="images/profile.jpg" alt="" />
      </div>
    </div>
    <div>
<h1 style="margin-left: 47%; padding-bottom: 75px;padding-left: 30px; margin-top: 30px;">Challan details</h1>
      <div class="data-table" style="width:700px; height: 450px;">
            <table> 
                         
                <tr>
                    <td>Full Name</td>
                    <td><?php  $Name=$_SESSION['Name'];
                    echo $Name?></td>
                </tr>            
                
                <tr>
                    <td>Challan-Number</td>
                    <td><?php  $passw=$_SESSION['ChallanNumber'];
                    echo $passw?></td>
                </tr>
                <tr>
                    <td>License-number</td>
                    <td><?php  $num=$_SESSION['LicenseNumber'];
                    echo $num?></td>
                </tr>
                <tr>
                    <td>Date and Time</td>
                    <td><?php  $Date=$_SESSION['Date'];
                    echo $Date?></td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td><?php  $Place=$_SESSION['Place'];
                    echo $Place?></td>
                </tr>
                <tr>
                    
                
                    <td>Vehicle number</td>
                    <td><?php  $NumberPlate=$_SESSION['NumberPlate'];
                    echo $NumberPlate?></td>
                    
                </tr>
                <tr>
                    <td>Rule Broken </td>
                    <td><?php  $RuleBroken=$_SESSION['RuleBroken'];
                    echo $RuleBroken?></td>
                </tr>
                </tr>
                <tr>
                    <td>Amount </td>
                    <td><?php  $Amount=$_SESSION['Amount'];
                    echo $Amount?></td>
                </tr>

                <td>Vehicle Type  </td>
                    <td><?php  $Category=$_SESSION['Category'];
                    echo $Category?></td>
                </table>
        <button class="btn-data" style="margin-left:75%; margin-top:10px; width:55px; height: 30px; " onclick="pri()">Print</button>
        
        <button class="btn-data" style="width:55px; height: 30px; "
          onclick="window.location.href='payment.php';">Pay</button>
      </div>

      <div class="footerhome">
        <h5>©Copyright 2021 E-challan | Terms & Conditions Privacy Policy </h5>

      </div>
        

    
</body>
</html>