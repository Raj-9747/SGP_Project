<?php
session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700"
        rel="stylesheet">
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="bg">
        <!-- <div class="img">
            <img src="../SGP/main.jpeg" alt="">
        </div> -->
        <div class="wlc">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <p class="welcome">Welcome to Travellies !</p>
            <div class="textMain">
                <div class="text">
                    <p> <h1>Life is short, and the world is wide.</h1></p>
                </div>

                <div class="text"></div>
            </div>

        </div>
        <div class="btn">
            <a href="#sec3"><input type="button" value="Explore Now!"></a>
        </div>
        <div class="swipe">
        </div>
    </div>


    <!-- Main Part starts -->

    <div class="main" id="sec2">
        <div class="one">

            <div class="text1">
                <div class="head">
                    <p class="welcome1">Family Trip</p>
                </div>
                <div class="info">
                    <p> Plan a family trip with us where your whole family can enjoy the trip and take back cherishing memories
                        with you back home. </p>
                    <div class="button">
                        <a href="..//hotel/kol.html"><input class="btn1" type="button" value="Explore Now!"></a>
                    </div>
                </div>
            </div>
            <div class="text1">
                <img class="image" src="../SGP/square.webp" alt="">
            </div>
        </div>

        <div class="two">
            <div class="text1">
                <img class="image" src="../SGP/square1.cms" alt="">
            </div>
            <div class="text1">
                <div class="head" style="padding-top: 80px;">
                    <p class="welcome1">Out</p>
                    <p class="welcome2">Of Country</p>
                </div>
                <div class="info">
                    <p>Want to Explore the foreign Land. You can do it easily and can reach to your dream destination. </p>
                    <div class="button">
                        <a href="../hotel/amd.html"><input class="btn1" type="button" value="Explore Now!"></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="three">

            <div class="text1">
                <div class="head" style="padding-top: 80px;">
                    <p class="welcome1">Nature View</p>
                    <p class="welcome2">Trip</p>
                </div>
                <div class="info">
                    <p> Spend some of your holidays in the lap of our mother earth and refresh your soul and mind in the nature view destinantions.</p>
                    <div class="button">
                        <a href="../hotel/manali.html"><input class="btn1" type="button" value="Explore Now!"></a>
                    </div>
                </div>
            </div>
            <div class="text1">
                <img class="image" src="../SGP/square2.jpeg" alt="">
            </div>
        </div>
        <div class="four">
            <div class="text1">
                <img class="image" src="../SGP/square3.jpeg" alt="">
            </div>
            <div class="text1">
                <div class="head" style="padding-top: 80px;">
                    <p class="welcome1">Solo Tracking</p>
                    <p class="welcome2"> Trip</p>
                </div>
                <div class="info">
                    <p> Explore yourselves and the environment around you by taking a solo trip to many beautiful places around the world.</p>
                    <div class="button">
                        <a href="../hotel/goa.html"><input class="btn1" type="button" value="Explore Now!"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="main2">
        <h1 class="videos">Short Video of Tours</h1>
        <div class="carousel" data-flickity='{ "wrapAround": true }'>
            <div class="carousel-cell"><video src="video4.mp4" autoplay loop></video></div>
            <div class="carousel-cell"><video src="video.mp4" autoplay loop></video></div>
            <div class="carousel-cell"><video src="video1.mp4" autoplay loop></video></div>
            <div class="carousel-cell"><video src="video2.mp4" autoplay loop></video></div>
            <div class="carousel-cell"><video src="video3.mp4" autoplay loop></video></div>
            <div class="carousel-cell"><video src="video5.mp4" autoplay loop></video></div>
        </div>
        <br><br>
    </div>

    <div class="main3">
        <br><br>
        <div class="Container" id="sec3">
            <h1 class="facility">Services</h1>
            <div class="services">
                <div class="first">
                    <a href="../hotel/hotel.html" style="text-decoration: none;">
                        <div class="One">
                            <div class="image1">
                                <img src="../SGP/Hotel.png" alt="">
                            </div>
                            <div class="text2">
                                Hotels
                            </div>
                        </div>
                    </a>
                    <a href="../transport/transport.html" style="text-decoration: none;">
                        <div class="One">
                            <div class="image1">
                                <img src="../SGP/transport.png" alt="">
                            </div>
                            <div class="text2">
                                Transpotation
                            </div>
                        </div>
                    </a>
                    
                    <div class="One">
                        <div class="image1">
                            <img src="../SGP/guide.png" alt="">
                        </div>
                        <div class="text2">
                            Guide
                        </div>
                    </div>
                    <a href="../SGP/shopping.html" style="text-decoration: none;">
                    <div class="One">
                        <div class="image1">
                            <img src="../SGP/Packages.png" alt="">
                        </div>
                        <div class="text2">
                            Shopping
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="second">
                    <a href="../SGP/login.php">
                        <div class="Two">
                            <div class="image1">
                                <img src="../SGP/act.png" alt="">
                            </div>
                            <div class="text2">
                                Login | SignUp
                            </div>
                        </div>
                    </a>
                    <a href="../SGP/weather.html" style="text-decoration: none;">
                        <div class="Two">
                            <div class="image1">
                                <img src="../SGP/Weather1.png" alt="">
                            </div>
                            <div class="text2">
                                Weather Forecast
                            </div>
                        </div>
                    </a>
                    <a href="../SGP/contact.html" style="text-decoration: none;">
                    <div class="Two">
                        <div class="image1">
                            <!-- <a href="../SGP/contact.html"></a> -->
                            <img src="../SGP/24_7.jpeg" alt="">
                        </div>
                        <div class="text2">
                            24x7 Help & Support
                        </div>
                    </div>
                </div>
                <br><br><br><br><br>
            </div>
        </div>
    </div>
    <br><br>

    <div class="main4">
        <br><br>
        <h1 class="facility">Our Team</h1>
        <div class="carousel" data-flickity='{ "wrapAround": true }'>
            <div class="carousel-cell">
                <img src="../SGP/jyot.jpg" alt="">
                <div class="team">
                    <ul class="team1">
                        <li> Name : Jyot Delvadiya</li>
                        <li>Front-end Developer</li>
                        <li> HTML | CSS | JavaScript</li><br>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </ul>
                </div>
            </div>
            <div class="carousel-cell">
                <img src="../SGP/khushi1.jpg" alt="">
                <div class="team">
                    <ul class="team1">
                        <li> Name : Khushi Goriya</li>
                        <li>Front-end Developer</li>
                        <li>  CSS | Bootstrap</li><br>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </ul>
                </div>
            </div>
            <div class="carousel-cell">
                <img src="../SGP/krunal.jpg" alt="">
                <div class="team">
                    <ul class="team1">
                        <li> Name : Krunal Jodhani</li>
                        <li>Back-end Developer</li>
                        <li> PHP | JavaScript</li><br>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </ul>
                </div>
            </div>
            <div class="carousel-cell">
                <img src="../SGP/raj.jpeg" alt="">
                <div class="team">
                    <ul class="team1">
                        <li> Name : Raj Fachara</li>
                        <li>Front-end Developer</li>
                        <li> HTML | CSS | JavaScript</li><br>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </ul>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
    </div>
    <footer>
        <div class="cont">
            <br><br><br>
            <div class="head1">
                <p>

                </p>
            </div>
            <div class="foot">
                <div class="f1">
                    <div class="foot1">
                        About Us
                    </div>
                    <div class="foot1">
                        Terms & Conditions
                    </div>
                    <div class="foot1">
                        Privacy Policy
                    </div>
                    <div class="foot1">
                        Help
                    </div>
                    <div class="foot1">
                        Rooms
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.4580990791655!2d72.81827265054056!3d22.599362437610324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e50c43cdea6c7%3A0x5074fe9e0c1c8bd!2sCharotar%20University%20of%20Science%20and%20Technology%20(CHARUSAT)!5e0!3m2!1sen!2sin!4v1668074635531!5m2!1sen!2sin" width="270" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="f2">
                    <div class="foot2">
                        Our Location
                        </div>
                    <div class="foot2">
                        The Hosts
                    </div>
                    <div class="foot2">
                        About
                    </div>
                    <div class="foot2">
                        Contact
                    </div>
                    
                </div>
                <i>
                    <div class="f3">
                        <div class="foot3">
                            Address:
                        </div>
                        <div class="foot3">
                            <p>
                                CHARUSAT University ,Changa,
                            </p>
                            <p>
                                Anand ,Gujarat ,388 421
                            </p>
                        </div>
                        <div class="foot3">
                            Phone:
                        </div>
                        <div class="foot3">
                            <p>
                                (+91) 79992 23830
                            </p>
                        </div>
                        <div class="foot3">
                            Email:
                        </div>
                        <div class="foot3">
                            <p>
                                <h2></h2>21CE023@charusat.edu.in
                                21CE027@charusat.edu.in
                                21CE035@charusat.edu.in
                                21CE045@charusat.edu.in
                                <p>
                                travellies.com
                            </p>
                            </p>
                            
                        </div>
                    </div>
                </i>
                <div class="f4">
                    <div class="foot4">
                        SignUp for more:
                    </div>
                    <div class="foot4">
                        <input type="email" class="form-control" placeholder="Your E-mail...">
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="class-name"></div>
                <p>
                    Copyright ©2022 All rights reserved | Travellies
                </p>
            </div>
            <br><br><br><br><br><br><br>
        </div>

    </footer>

</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</html>