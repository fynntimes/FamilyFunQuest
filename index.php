<?php

require "php/hours.php";

?>

<!-- For modals: data-toggle="modal" data-target="#modal1" -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family FunQuest</title>
    <meta name="description"
          content="An endless quest of fun for you and your family."/>
    <meta name="author" content="Imran Dharamsi, Faizaan Datoo, Ali Mody"/>

    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
<style>
    iframe{
        width:90%;
    }
    .mission{
        background-color:deepskyblue;
        padding:80px;
    }

</style>
</head>

<body>
<div class="preloader">
    <img src="img/loader.gif" alt="Preloader image">
</div>
<nav class="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="#top">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="/activities">Activities</a></li>
                <li><a href="/parties">Parties</a></li>
                <li><a href="/snacks">Snacks</a></li>
                <li><a href="/account" class="btn btn-blue">Your Account</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header id="top">
    <div class="container">
        <div class="table">
            <div class="header-text">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="light white">Fun for you and your family.</h3>
                        <h1 class="white typed">Your quest begins here.</h1>
                        <span class="typed-cursor">|</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="cut cut-top"></div>
    <div class="container">
        <div class="row intro-tables">
            <div class="col-md-4">
                <div class="intro-table intro-table-first">
                    <h5 class="white heading">Our Hours</h5>
                    <div class="owl-carousel owl-schedule bottom">
                        <div class="item">
                            <h5 class="white heading soft_heading">Today's Hours (<?php echo day_of_week() ?>)</h5>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Activities</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php echo activity_hours(); ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Parties</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php echo party_hours(); ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Snack Bar</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php echo snack_bar_hours(); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <h5 class="white heading soft_heading">Activity Hours</h5>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Monday-Friday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $activity_hours;
                                        echo $activity_hours['Monday']; ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Saturday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $activity_hours;
                                        echo $activity_hours['Saturday']; ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Sunday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $activity_hours;
                                        echo $activity_hours['Sunday']; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <h5 class="white heading soft_heading">Party Hours</h5>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Monday-Friday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $party_hours;
                                        echo $party_hours['Monday']; ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Saturday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $party_hours;
                                        echo $party_hours['Saturday']; ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Sunday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $party_hours;
                                        echo $party_hours['Sunday']; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <h5 class="white heading soft_heading">Snack Bar Hours</h5>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Monday-Friday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $snack_bar_hours;
                                        echo $snack_bar_hours['Monday']; ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Saturday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $snack_bar_hours;
                                        echo $snack_bar_hours['Saturday']; ?></h5>
                                </div>
                            </div>
                            <div class="schedule-row row">
                                <div class="col-xs-6">
                                    <h5 class="regular white">Sunday</h5>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <h5 class="white"><?php global $snack_bar_hours;
                                        echo $snack_bar_hours['Sunday']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-table intro-table-hover">
                    <h5 class="white heading hide-hover">Tickets</h5>
                    <div class="bottom">
                        <h4 class="white heading small-heading no-margin regular">Book your ticket</h4>
                        <h4 class="white heading small-pt">Pay as you explore</h4>
                        <a href="/tickets" class="btn btn-white-fill expand">Book now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-table intro-table-third">
                    <h5 class="white heading">Testimonials</h5>
                    <div class="owl-testimonials bottom">
                        <div class="item">
                            <h4 class="white heading content">My son looked at me after his party and said: "Best. Birthday. Ever."</h4>
                            <h5 class="white heading light author">John Doe</h5>
                        </div>
                        <div class="item">
                            <h4 class="white heading content">My family enjoyed the affordable activities and incredible snacks.</h4>
                            <h5 class="white heading light author">Greg Johnson</h5>
                        </div>
                        <div class="item">
                            <h4 class="white heading content">We had so much fun that we can't stop coming back for more.</h4>
                            <h5 class="white heading light author">Amar Ansari</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
<section class="section section-padded mission">

    <center><h4 class="white">We strive to provide endless fun for kids and parents alike, and offer something new with every visit.
            From our exciting adventure-themed activities to our flexible party packages, Family FunQuest is the place to be when
            you're looking for a good time and a great adventure!</h4>
    </center>
    <center><h4 class="light-white light">#fun #party #excitement</h4></center>
</section>
<section id="services" class="section section-padded">
    <div class="container">
        <div class="row text-center title">
            <h2>Services</h2>
            <h4 class="light muted">Our various offerings will provide fun for the entire family!</h4>
        </div>
        <div class="row services">
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="img/icons/heart-blue.png" alt="" class="icon">
                    </div>
                    <h4 class="heading">Activities</h4>
                    <p class="description">From our International Arcade to our Everest Mountain Climbing, we provide
                        fun and engaging activties for
                        all ages!
                        <br><br>
                        <a href="/activities">Explore our activities.</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="img/icons/guru-blue.png" alt="" class="icon">
                    </div>
                    <h4 class="heading">Parties</h4>
                    <p class="description">Get discounted admission and a pizza party for your guests on your child's
                        special day.
                        <br><br>
                        <a href="/parties">Book a party.</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <div class="icon-holder">
                        <img src="img/icons/weight-blue.png" alt="" class="icon">
                    </div>
                    <h4 class="heading">Snack Bar</h4>
                    <p class="description">Stomach growling? Satisfy your appetite with food from our tasty snack bar.
                        <br><br>
                        <a href="/snacks">View our menu.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="section section-padded">
    <center><h2>Location</h2></center>
    <center><h4 class="light muted">Stop by for a great time!</h4></center>
    <center><h5 class="light muted">645 Hamilton St<br>
        Allentown, PA 18101 </h5></center>
    <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1217.582821388065!2d-75.47264245311501!3d40.60303181078872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x45cac2f94d2c60a1!2sCity+Center+Lehigh+Valley!5e0!3m2!1sen!2sus!4v1480813806326"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>

</section>


<!--<section id="team" class="section gray-bg">-->
<!--    <div class="container">-->
<!--        <div class="row title text-center">-->
<!--            <h2 class="margin-top">Team</h2>-->
<!--            <h4 class="light muted">We're a dream team!</h4>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-4">-->
<!--                <div class="team text-center">-->
<!--                    <div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">-->
<!--                        <div class="overlay text-center">-->
<!--                            <h3 class="white">$69.00</h3>-->
<!--                            <h5 class="light light-white">1 - 5 sessions / month</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/team/team3.jpg" alt="Team Image" class="avatar">-->
<!--                    <div class="title">-->
<!--                        <h4>Ben Adamson</h4>-->
<!--                        <h5 class="muted regular">Fitness Instructor</h5>-->
<!--                    </div>-->
<!--                    <button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="team text-center">-->
<!--                    <div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">-->
<!--                        <div class="overlay text-center">-->
<!--                            <h3 class="white">$69.00</h3>-->
<!--                            <h5 class="light light-white">1 - 5 sessions / month</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/team/team1.jpg" alt="Team Image" class="avatar">-->
<!--                    <div class="title">-->
<!--                        <h4>Eva Williams</h4>-->
<!--                        <h5 class="muted regular">Personal Trainer</h5>-->
<!--                    </div>-->
<!--                    <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up-->
<!--                        Now</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="team text-center">-->
<!--                    <div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">-->
<!--                        <div class="overlay text-center">-->
<!--                            <h3 class="white">$69.00</h3>-->
<!--                            <h5 class="light light-white">1 - 5 sessions / month</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <img src="img/team/team2.jpg" alt="Team Image" class="avatar">-->
<!--                    <div class="title">-->
<!--                        <h4>John Phillips</h4>-->
<!--                        <h5 class="muted regular">Personal Trainer</h5>-->
<!--                    </div>-->
<!--                    <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up-->
<!--                        Now</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section id="pricing" class="section">-->
<!--    <div class="container">-->
<!--        <div class="row title text-center">-->
<!--            <h2 class="margin-top white">Pricing</h2>-->
<!--            <h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>-->
<!--        </div>-->
<!--        <div class="row no-margin">-->
<!--            <div class="col-md-7 no-padding col-md-offset-5 pricings text-center">-->
<!--                <div class="pricing">-->
<!--                    <div class="box-main active" data-img="img/pricing1.jpg">-->
<!--                        <h4 class="white">Yoga Pilates</h4>-->
<!--                        <h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>-->
<!--                        <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>-->
<!--                        <i class="info-icon icon_question"></i>-->
<!--                    </div>-->
<!--                    <div class="box-second active">-->
<!--                        <ul class="white-list text-left">-->
<!--                            <li>One Personal Trainer</li>-->
<!--                            <li>Big gym space for training</li>-->
<!--                            <li>Free tools &amp; props</li>-->
<!--                            <li>Free locker</li>-->
<!--                            <li>Free before / after shower</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="pricing">-->
<!--                    <div class="box-main" data-img="img/pricing2.jpg">-->
<!--                        <h4 class="white">Cardio Training</h4>-->
<!--                        <h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>-->
<!--                        <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>-->
<!--                        <i class="info-icon icon_question"></i>-->
<!--                    </div>-->
<!--                    <div class="box-second">-->
<!--                        <ul class="white-list text-left">-->
<!--                            <li>One Personal Trainer</li>-->
<!--                            <li>Big gym space for training</li>-->
<!--                            <li>Free tools &amp; props</li>-->
<!--                            <li>Free locker</li>-->
<!--                            <li>Free before / after shower</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <h3 class="white">Sign Up</h3>
            <form action="" class="popup-form">
                <input type="text" class="form-control form-white" placeholder="Full Name">
                <input type="text" class="form-control form-white" placeholder="Email Address">
                <div class="dropdown">
                    <button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Pricing Plan
                    </button>
                    <ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
                        <li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
                        <li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
                        <li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
                        <li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
                    </ul>
                </div>
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="None" id="squaredOne" name="check"/>
                        <label
                            for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>


</div>
<footer>
    <div class="container">
        <div class="row bottom-footer text-center-mobile">
            <div class="col-sm-8">
                <p>&copy; <?php echo date("Y"); ?> All Rights Reserved. Theme based on a theme by Luka Cvetinovic, modified with permission by the group.</p>
            </div>
            <div class="col-sm-4 text-right text-center-mobile">
                <ul class="social-footer">
                    <li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Holder for mobile navigation -->
<div class="mobile-nav">
    <ul>
    </ul>
    <a href="#" class="close-link"><i class="arrow_up"></i></a>
</div>
<!-- Scripts -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/typewriter.js"></script>
<script src="js/jquery.onepagenav.js"></script>
<script src="js/main.js"></script>
<script src="js/scrollnav.js"></script>
</body>

</html>
