
<!-- First page of system -->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-challan System</title>
                            <!-- link favicon -->

    <!-- linking index.css -->
    <style>
        /* importing font style */

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');



        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #1D212B;
        }


        .info .img1 {
            margin-top: 10px;
            margin-left: 185px;
            height: 305px;
            width: 310px;
        }

        .img-slider {
            position: relative;
            width: 800px;
            height: 500px;
            margin: 10px;
            background: #1D212B;
        }

        .img-slider .slide {
            z-index: 1;
            position: absolute;
            width: 100%;
            clip-path: circle(0% at 0 50%);
        }

        .img-slider .slide.active {
            clip-path: circle(150% at 0 50%);
            transition: 2.5s;
            transition-property: clip-path;
        }

        .img-slider .slide img {
            z-index: 1;

            border-radius: 5px;
        }

        .img-slider .slide .info {
            position: absolute;
            top: 0;
            padding: 15px 30px;
        }

        .img-slider .slide .info h2 {
            color: #fff;
            font-size: 45px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .img-slider .slide .info p {
            color: #fff;
            background: rgba(0, 0, 0, 0.1);
            font-size: 16px;
            width: 60%;
            padding: 10px;
            border-radius: 4px;
        }

        .img-slider .navigation {
            z-index: 2;
            position: absolute;
            display: flex;
            bottom: -85px;
            left: 46%;
            transform: translateX(-50%);
        }

        .img-slider .navigation .btn {
            background: rgba(255, 255, 255, 0.5);
            width: 12px;
            height: 12px;
            margin: 10px;
            border-radius: 50%;
            cursor: pointer;
        }

        .img-slider .navigation .btn.active {
            background: #2696E9;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 820px) {
            .img-slider {
                width: 600px;
                height: 375px;
            }

            .img-slider .slide .info {
                padding: 10px 25px;
            }

            .img-slider .slide .info h2 {
                font-size: 35px;
            }

            .img-slider .slide .info p {
                width: 70%;
                font-size: 15px;
            }

            .img-slider .navigation {
                bottom: 25px;
            }

            .img-slider .navigation .btn {
                width: 10px;
                height: 10px;
                margin: 8px;
            }
        }

        @media (max-width: 620px) {
            .img-slider {
                width: 400px;
                height: 250px;
            }

            .img-slider .slide .info {
                padding: 10px 20px;
            }

            .img-slider .slide .info h2 {
                font-size: 30px;
            }

            .img-slider .slide .info p {
                width: 80%;
                font-size: 13px;
            }

            .img-slider .navigation {
                bottom: 15px;
            }

            .img-slider .navigation .btn {
                width: 8px;
                height: 8px;
                margin: 10px;
            }
        }

        @media (max-width: 420px) {
            .img-slider {
                width: 320px;
                height: 200px;
            }

            .img-slider .slide .info {
                padding: 5px 10px;
            }

            .img-slider .slide .info h2 {
                font-size: 25px;
            }

            .img-slider .slide .info p {
                width: 90%;
                font-size: 11px;
            }

            .img-slider .navigation {
                bottom: 10px;
            }
        }

        .info h2 p {
            margin-bottom: 900px;
        }

        .info .proceed-btn .btn1 {
            text-decoration: none;
            font-weight: 800;
            font-size: 22px;
            text-align: center;
            padding: 10px 23px;
            cursor: pointer;
            text-transform: uppercase;
            border-radius: 5px;
            display: inline-block;
            margin-left: 260px;
            margin-top: 15px;
        }

        .info .proceed-btn .btn1 {
            color: #fff;
            letter-spacing: 0;
            background-image: linear-gradient(to right, #4458dc 0%, #854fee 100%);
            border: double 2px transparent;
            box-shadow: 0 10px 30px rgba(118, 85, 225, .3);
            margin-right: 150px;
        }



        .info .proceed-btn .btn1:hover {
            border: 2px solid #4458dc;
            color: #222;
            background-color: #fff;
            box-shadow: none;
            background-image: none;
        }
    </style>

   
    
    
</head>

<body>
                    <!-- Responsive img slider with information of E-challan System -->

    <div class="img-slider">
                                    <!-- first slide -->

        <div class="slide active">

            <img src="1.jpg" alt="">
            <div class="info">
                <h2> E-challan system</h2>
                <p>Digitalize challan system
                    </p>
                <img src="./images/iiii.webp" alt="" class="img1">

                            <!-- proceed-btn to direct to driver or traffic login page        -->

                <div class="proceed-btn">
                    <a href="user.php" class="btn1">Proceed</a>
                </div>
            </div>
        </div><div class="slide">
            <img src="2.jpg" alt="">
            <div class="info">
                <h2>What is E-challan system? </h2>
                <p>System that maintains track of challans given by traffic to drivers who break the traffic rules.</p>
                <img src="./images/traffic.jpg " alt="" class="img1">
                <div class="proceed-btn">
                    <a href="user.php"class="btn1">Proceed</a>
                </div>
            </div>
        </div>

                            <!-- Third slide -->

        <div class="slide">
            <img src="3.jpg" alt="">
            <div class="info">
                <h2>Why E-Challan???</h2>
                <p>The Challan generated to make an offline payment cannot be used for making online payment.</p>
                <img src="./images/jhyapp.webp" alt="" class="img1">

                <div class="proceed-btn">
                    <a href="user.php" class="btn1">Proceed</a>
                </div>
                </div>
        </div>

                            <!-- fourth slide -->
        <div class="slide">
            <div class="info">
                <h2> Traffic Lights!!!!</h2>
                <p>Normally, traffic lights are divided into three colors: red, yellow, and green.</p>
                <img src="./images/rajgandha.jpg" alt="" class="img1">
                <div class="proceed-btn">
                    <a href="user.php" class="btn1">Proceed</a>
                </div>
            </div>
        </div>
                            <!-- buttons to slide  -->
        
        <div class="navigation">
            <div class="btn active"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            
        </div>
    </div>
<!-- javascript for index-page -->
    <script type="text/javascript">
        // craeting variables
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;

        // Javascript for image slider manual navigation
        var manualNav = function (manual) {
            slides.forEach((slide) => {
                slide.classList.remove('active');

                btns.forEach((btn) => {
                    btn.classList.remove('active');
                });
            });

            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
        }
        // click on btns to slide pages
        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                manualNav(i);
                currentSlide = i;
            });
        });

        // Javascript for image slider autoplay navigation
        var repeat = function (activeClass) {
            let active = document.getElementsByClassName('active');
            let i = 1;

            var repeater = () => {
                setTimeout(function () {
                    [...active].forEach((activeSlide) => {
                        activeSlide.classList.remove('active');
                    });

                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    if (slides.length == i) {
                        i = 0;
                    }
                    if (i >= slides.length) {
                        return;
                    }
                    repeater();
                }, 10000);
            }
            repeater();
        }
        repeat();
    </script>

    

</body>

</html>