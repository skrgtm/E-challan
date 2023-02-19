<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <!-- linking bootstrap bundle -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 
 <!-- linking js -->
 
 
 <!-- linking sweetalert js  -->
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
 
 <!-- link for icons in nav bar -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <!-- linking css -->
 <!-- <link rel="stylesheet" href="/html/aboutus.css"> -->
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
        .footerhome {
        
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
            <img src="./images/clogo.png" alt="" />
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
            <div class="profile"style="margin-left: 98%;" >
                <i class="profimg" ></i>
                <img src="./images/profile.jpg" alt="" />
            </div>
        </div>
         <div class="container1" style="margin-left: 300px ;  ">

             <!-- First content -->
             <div class="bg-light">
                 <div class="container py-5">
                     <div class="row h-100 align-items-center py-5">
                         <div class="col-lg-6">
                             <h1 class="display-4">About us</h1>
                        <p class="lead text-muted mb-0">An example of a challan would be a spot traffic ticket issued by the
                            traffic police for a violation.</p>
                        </p>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block"><img
                        src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt=""
                        class="img-fluid"></div>
                    </div>
                </div>
            </div>
            <!-- second Content -->
            <div class="bg-white py-5">
                <div class="container py-5">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                            <h2 class="font-weight-light">E-challan</h2>
                            <p class="font-italic text-muted mb-4">It is an electronic format of the challan mostly used in the
                                Asian countries.
                                It means a receipt for payment or delivery a specific format used for depositing, remitting
                                the contribution statutory payment at bank treasury.</p><a href="#"
                                class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                            </div>
                            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img
                    src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt=""
                    class="img-fluid mb-4 mb-lg-0"></div>
                </div>
            </div>
    </div>
    
    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5">
                    <h2 class="display-4 font-weight-light">Our team</h2>
                    
                </div>
            </div>
            
            <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img
                        src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt=""
                        width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Sakar Gautam</h5><span class="small text-uppercase text-muted">P.M</span>
                    </div>
                </div>
                
                
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img
                        src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt=""
                        width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Hridaya Bhattarai</h5><span class="small text-uppercase text-muted">B.A</span>
                    </div>
                </div>
                
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img
                        src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-2_f8dowd.png" alt=""
                        width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Samir Chaulagain</h5><span class="small text-uppercase text-muted">Front-end
                            Developer</span>
                        </div>
                    </div>
                    
                    <!-- Team item-->
                    <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img
                            src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-1_s02nlg.png" alt=""
                            width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Sanjog Basnet</h5><span class="small text-uppercase text-muted">Back-end
                                Developer</span>
                            </div>
                    </div>
                    
                    
                    <!-- Team item-->
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4"><img
                            src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-1_s02nlg.png" alt=""
                            width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Kusal Suwal</h5><span class="small text-uppercase text-muted">Back-end
                                Developer</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
            
            
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    </div>
    
        <!-- FOOTER -->
        <div class="footerhome">
            <h4>©Copyright 2021 E-challan | Terms & Conditions Privacy Policy </h4>
            
        </div>
    </section>
</body>
</html>