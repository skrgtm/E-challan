<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link rel="stylesheet" href="" />
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
    margin-left: 6150%;

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

  <section id="interface" >
    <div class="navigation" style="width: 100%;">
      <div class="profile">
       <i class="profimg"></i> 
        <img src="images/profile.jpg" alt=""  />  
      </div>
    </div>
  </section>


  <div>
    


    <div class="slideshow-container" style="box-shadow: 5px 10px 10px 10px #888888;">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <img src="images/car-6810885__340 (1).webp" style="height: 700px;">
      </div>

      <!-- <div class="mySlides fade">        
          <img src="/images/driver3.jpg" style="height: 600px;">        
        </div> -->

      <div class="mySlides fade">
        <img src="images/driver1.jpg" style="height: 700px; ">
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center;  padding-bottom: 30px;">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="main-container"
      style=" width:1000px; margin-bottom: 15px; background-color: #6eaed9; border:black solid; margin-left: 200px; margin-right:85px; ">

      <!-- Home contents -->
      <!-- for later -->

      <h1 style="text-align: center;">Some of the traffic rules</h1>
      <p>The apparent chaos of the roads in Nepal might lead you to think that there aren't many road rules, but that's
        not
        strictly true. Many drivers just choose to ignore them much of the time. And because practically everyone is
        ignoring
        the rules, alternative de facto "rules" have arisen. This can be confusing for foreign tourists who are used to
        a
        particular way of driving at home.Here are some road rules customs you need to be aware of:</p>


      <ul style="list-style-type: disc; width: 900px; margin-left: 100px;">
        <li>Driving is on the left in Nepal.</li>
        <li>Left turns are allowed without stopping.</li>
        <li>Vehicles already on a roundabout must give way to vehicles entering the roundabout.</li>
        <li>Use of the horn, except in emergency situations, is prohibited in Kathmandu. (This doesn't mean that drivers
          don't still
          excessively use the horn, but that they can and will be fined for doing so).</li>
        <li>Give way to vehicles larger than you, always. So, trucks and buses give way to no-one; cars give way to
          trucks and
          buses; motorbikes give way to cars; bicycles and pedestrians should give way to everything.</li>
        <li>Driving under the influence of alcohol is prohibited, but Nepali police lack breathalyzers so the most
          common way for
          them to check for alcohol consumption is to sniff the breath of the driver.</li>
      </ul>



    </div>
    <div class="footerhome">
      <h4>©Copyright 2021 E-challan | Terms & Conditions Privacy Policy </h4>
    </div>

  </div>

  
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }

  </script>

  </div>
</body>

</html>