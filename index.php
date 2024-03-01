<?php

if(isset($_SESSION['UserName']) == null){
    header("location:signin.php");
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spacex</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,600;0,700;1,400&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <!-- css Styling -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flicard.css">
</head>

<body>

    <!-- Navbar  -->
    <nav class="navbarr">

        <ul class="nav-list">
            <div class="logo">
                <img src="images/logo.png" alt="logo-img">
            </div>

            <li> <a href="#home"> Home </a> </li>
            <li> <a href="#services"> Services </a> </li>
            <li> <a href="#about"> About Us</a> </li>
            <li> <a href="#contact"> Contact Us </a> </li>
        </ul>

        <div class="rightnav">
            <a href="appointment.php">Book a Consulation</a>
            <!-- <input type="text" name="search" id="search">
            <button class="button search-btn"> Search </button> -->
        </div>
    </nav>

    <!-- Home Page  -->
    <section id="home" class="section1 background">
        <div class="company-name">
            <h1>SPACE<span style="color: #553e4e;">X</span></h1>

            <h2>Home interiors from start to finish.</h2>

            <div class="description">
                <div style="font-size: 20px; color: #553e4e;"> <strong> Your Favourite Home </strong> </div>
                <div style="font-size: 18px; color: #614a5a;"><em> Get Home Decor Services from Professional</em></div>
            </div>
        </div>

        <div class="right-main-box">
            <div class="steps-to-book">
                <div class="steps-to-book-title">
                    <h3 style="color: #553e4e; font-family: Montserrat; text-align: center;">
                        Just a Step Away from
                    </h3>
                    <p style="color: #947a94; font-size:18px; text-align: center;">
                        getting your dream home
                    </p>
                </div>

                <div class="steps-to-book-1 zoom" style="padding: 20px;">
                    <img src="images/form.png" alt="form-icon" width="10%" style="margin-left: 30px;">
                    <span style="padding-left: 15px; ">
                        Register and submit your details.
                    </span>
                </div>

                <div class="steps-to-book-2 zoom" style="padding: 20px;">
                    <img src="images/chat.png" alt="form-icon" width="10%" style="margin-left: 30px;">
                    <span style="padding-left: 15px;"> Our team will contact you. </span>
                </div>

                <div class="steps-to-book-3 zoom" style="padding: 20px;">
                    <img src="images/choose.png" alt="form-icon" width="10%" style="margin-left: 30px;">
                    <span style="padding-left: 15px;"> Choose your elements and design. </span>
                </div>

                <div class="steps-to-book-4 zoom" style="padding: 20px;">
                    <img src="images/home.png" alt="form-icon" width="10%" style="margin-left: 30px;">
                    <span style="padding-left: 15px;"> See your dream design turn to reality. </span>
                </div>
            </div>
        </div>

    </section>

    <!-- services -->
    <section id="services" class="section2">
        <div class="services-title">
            <h2> <strong>
                    WHAT WE DESIGN </strong>
            </h2>
        </div>

        <div class="flip-card" style="margin-left: 400px; margin-bottom: 20px; ">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/bedroom.jpg" alt="Avatar" style="width:100%;">
                </div>
                <div class="flip-card-back">
                    <h3 style="margin-top: 100px;">Personalized Bedrooms<h3>
                </div>
            </div>
        </div>

        <div class="flip-card" style="margin-left: 400px; margin-bottom: 40px; ">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/living room.jpg" alt="Avatar" style="width:100%;">
                </div>
                <div class="flip-card-back">
                    <h3 style="margin-top: 100px;">Personalized Living Rooms<h3>
                </div>
            </div>
        </div>

        <div class="flip-card" style="margin-left: 400px; margin-bottom: 20px; ">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/wardrobe.png" alt="Avatar" style="width:100%;">
                </div>
                <div class="flip-card-back">
                    <h3 style="margin-top: 100px;">Personalized Modular Wardrobe<h3>
                </div>
            </div>
        </div>

        <div class="flip-card" style="margin-left: 400px; margin-bottom: 20px; ">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/bathrooms.jpg" alt="Avatar" style="width:80%;">
                </div>
                <div class="flip-card-back">
                    <h3 style="margin-top: 100px;">Personalized Bathrooms<h3>
                </div>
            </div>
        </div>

    </section>

    <!-- features -->
    <section id="feature" style="background-color: #e4d8d8; height: 50vh;">
        <h3>
            Why Choose Us
        </h3>
        <div class="row">
            <div class="feature-box col-lg-4">
                <img src="images/heart.png" alt="icon1" width="25%">
                <h3> <strong> A love of creativity </strong></h3>
            </div>

            <div class="feature-box col-lg-4">
                <img src="images/target.png" alt="icon2" width="25%">
                <h3> <strong> A quality of service </strong></h3>
            </div>

            <div class="feature-box col-lg-4">
                <img src="images/checked.png" alt="icon3" width="25%">
                <h3> <strong> Understanding client needs </strong> </h3>
            </div>
        </div>
    </section>

    <!-- about -->
    <section class="section3" id="about">
        <div class="how-it-started" style="text-align: center; padding: 30px;">
            <h3>
                How it started
            </h3>
        </div>

        <div class="how-it-started-description" style="text-align: center; padding-left:7%; padding-right: 7%;
         padding-bottom: 10px;">
            <p>
                It all started when college friends set upon their journeys to design their dream homes. It didn’t take
                them long to realise how fragmented the industry was and how factors like identifying the right
                professionals, coordination of tasks, and ensuring fair price and quality were pain points faced by
                many.
                Determined to fix this and offer a happier experience to homeowners, they built a much needed bridge for
                the industry. SpaceX was founded in 2014. It is now the trusted brand for complete home interior design
                and renovation for thousands of homeowners.
            </p>
        </div>
        <div class="row" style="padding-bottom: 40px;">
            <div class="card col-lg-4">
                <img src="images/woman.png" alt="John" style="width:30%; margin-left: auto; margin-right: auto;
                margin-top: 10px;">
                <h2> Palak</h2>
                <p class="title">Founder of SpaceX</p>
                <p>Keshav Mahavidyalaya</p>
            </div>

            <div class="card col-lg-4">
                <img src="images/woman (1).png" alt="John" style="width:30%; margin-left: auto; margin-right: auto; 
                margin-top: 10px;">
                <h2>Shreyashi</h2>
                <p class="title">Founder of SpaceX</p>
                <p>Keshav Mahavidyalaya</p>
            </div>

            <div class="card col-lg-4">
                <img src="images/female-student.png" alt="John" style="width:30%; margin-left: auto; margin-right: auto; 
                margin-top: 10px;">
                <h2>Priyanshi</h2>
                <p class="title">Founder of SpaceX</p>
                <p>Keshav Mahavidyalaya</p>
            </div>

        </div>

    </section>

    <!-- contact -->
    <section id="contact" class="section4">
        <div style="color: white; padding: 4%;">
            <p>Contact Us : </p>
            <p>0532-8564- 0532-2489 0532-7160</p>
            <p>Whapsapp No : 0987654321</p>

            <p>Email Us : spacex543@gmail.com</p>
            <span>Follow us on: </span>
            <a href="#"> <img src="images/instagram.png" alt="insta" width="3% " style="margin:10px;"></a>
            <a href="#"> <img src="images/facebook.png" alt="fb" width="3% " style="margin:10px;"></a>
            <a href="#"> <img src="images/twitter.png" alt="twitter" width="3% " style="margin:10px;"></a>
            <a href="#"> <img src="images/pinterest.png" alt="pinterest" width="3% " style="margin:10px;"></a>
        </div>

    </section>

</body>

</html>