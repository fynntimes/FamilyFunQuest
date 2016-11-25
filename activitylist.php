<?php

require 'backend/bootstrap.php';

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities List</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <!-- ADD CSS HERE -->
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
        img{
            padding:15px;
        }
    </style>
</head>
<body>

<?php include 'nav.php'; ?>

<!-- Add your stuff here -->

<div class="row" >
    <div class="columns large-4 medium-4 small-12" >
        <center><img src="http://placehold.it/350x150"></center>
        <center><p>Activity 1</p></center>

    </div>

    <div class="columns large-4 medium-4 small-12">
        <center><img src="http://placehold.it/350x150"></center>
        <center><p>Activity 2</p></center>
    </div>
    <div class="columns large-4 medium-4 small-12">
        <center><img src="http://placehold.it/350x150"></center>
        <center><p>Activity 3</p></center>
    </div>
    </div>
    <div class="row" >
        <div class="columns large-4 medium-4 small-12" >
            <center><img src="http://placehold.it/350x150"></center>
            <center><p>Activity 4</p></center>
        </div>

        <div class="columns large-4 medium-4 small-12">
            <center><img src="http://placehold.it/350x150"></center>
            <center><p>Activity 5</p></center>
        </div>
        <div class="columns large-4 medium-4 small-12">
            <center><img src="http://placehold.it/350x150"></center>
            <center><p>Activity 6</p></center>
        </div>

            </div>
        <div class="row" >
            <div class="columns large-4 medium-4 small-12" >
                <center><img src="http://placehold.it/350x150"></center>
                <center><p>Activity 7</p></center>
            </div>

            <div class="columns large-4 medium-4 small-12">
                <center><img src="http://placehold.it/350x150"></center>
                <center><p>Activity 8</p></center>
            </div>
            <div class="columns large-4 medium-4 small-12">
                <center><img src="http://placehold.it/350x150"></center>
                <center><p>Activity 9</p></center>
            </div>
            </div>
<!-- ADD ANY SCRIPTS HERE -->
</body>
</html>
