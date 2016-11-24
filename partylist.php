
 <?php

require 'backend/bootstrap.php';

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parties | Family FunQuest</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f8f8;
            font-family: 'Raleway', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }

        /* Footer */
        .full-width {
            max-width: 1400px;
        }

        .footer {
            background-color: #2980b9;
            padding: 2rem 4rem;
            text-align: center;
            color: #fff;
        }
        .footer i {
            font-size: 100px;
        }

        .footer h4 {
            color: #fff;
            font-size: 1em;
            font-weight: 400;
            text-transform: uppercase;
            margin-top: 2.5rem;
            margin-bottom: 10px;
        }
        .footer p, .footer a {
            font-weight: 300;
            font-size: .8em;
            color: #fff;
        }

        @media only screen and (min-width: 40.063em) {
            .footer .columns:nth-child(n+2) {
                border-left: 1px solid #b3b3b3;
                min-height: 280px;
            }
        }
        .footer-links {
            list-style-type: none;
        }
        .footer-links li {
            margin-top: .5em;
        }
        body{
            padding:10px;
        }
        img{
            padding:10px;
        }
        #intro{
            font-size:20px;
        }
    </style>
</head>
<body>

<?php include 'nav.php'; ?>

<h1>Celebrate with Us!</h1>
<p id="intro"><i>Our flexible and affordable party packages are a great fit for everyone. Read about our packages, mix and match activities, and
    book a party all from this page. </i></p>

<div class="row">
    <div class="small-12 medium-4 large-4 columns">
        <center><h2>Bronze Package</h2></center>
        <center><img src="http://placehold.it/350x150"></center>
        <p>Enjoy yourself and save money with our bronze party package. With this plan, you can mix and match
        activities to get as much partying done as possible in the two hour time limit. </p>

        <p><b>Overview-<br></b></p>
        <ul>
            <li>2 hours of party time</li>
            <li>Mix and match from 9 activities</li>
            <li>Enjoy the low price of $5 per guest</li>
        </ul>
        <center><button href="#" type="button" class="success button">BOOK PARTY!</button></center>
    </div>
    <div class="small-12 medium-4 large-4 columns">
        <center><h2>Silver Package</h2></center>
        <center><img src="http://placehold.it/350x150"></center>
        <p>Upgrade to a silver package for a free personalized birthday cake and an entire hour of extra party time. Mix and match activities
            without worrying about time, and enjoy the superior experience.
        </p>

        <p><b>Overview-<br></b></p>
        <ul>
            <li>3 hours of party time</li>
            <li>Mix and match from 9 activities</li>
            <li>A free personalized birthday cake</li>
            <li>Better value for the money at only $10 per guest</li>
        </ul>
        <center><button href="#" type="button" class="success button">BOOK PARTY!</button></center>

    </div>
    <div class="small-12 medium-4 large-4 columns">
        <center><h2>Gold Package</h2></center>
        <center><img src="http://placehold.it/350x150"></center>
        <p>With the gold plan, say yes to superior! Enjoy the ultimate party experience with two free personalized cakes
            and free pizza for all your guests. Moreover, with the four hour party time you and your guests can enjoy all nine of
            our premium activities!
        </p>

        <p><b>Overview-<br></b></p>
        <ul>
            <li>4 hours of party time</li>
            <li>Enjoy all 9 activities</li>
            <li>Two free personalized birthday cakes</li>
            <li>Free pizza for all your guests</li>
            <li>Superior value for the money at only $15 per guest</li>
        </ul>
        <center><button href="#" type="button" class="success button">BOOK PARTY!</button></center>


    </div>
</div>

<?php include 'footer.php'; ?>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<!-- ADD ANY SCRIPTS HERE -->
</body>
</html>
