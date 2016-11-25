
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
        .secondary{
            margin:auto;
            border-radius:10px;
        }
        @media only screen and (min-width:500px) {
            .secondary {
                width:60%;
            }
        }
    </style>
</head>
<body>

<?php include 'nav.php'; ?>
            <br><br>
<div class="callout secondary">
    <h1>Book Your Party</h1>
    <form>
        <div class="row">
            <div class="large-6 medium-12 small-12 columns">
                <label>Party Duration
                       <select>
                           <option value="2hrs">2 hours</option>
                           <option value="3hrs">3 hours</option>
                           <option value="4hrs">4 hours</option>
                       </select>
                </label>
            </div>

            <div class="large-6 medium-12 small-12 columns">
                <label>Number of Guests
                        <input type="number" value="1">
                </label>
            </div>

            <div class="large-6 medium-12 small-12 columns">
                 <label>Party Date
                    <input type="date">
                 </label>
            </div>
            <div class="large-6 medium-12 small-12 columns">
                <label>Party Start Time
                    <input type="time">
                </label>
            </div>

            <div class="large-6 medium-12 small-12 columns">
                <label>Party End Time
                    <input type="time">
                </label>
            </div>

            <div class="large-6 medium-12 small-12 columns">
                <h1>Price</h1>
                <p>Running total here</p>
            </div>
              <a class="button success" href="partybooking2.php">Next
              </a>
        </div>
    </form>
</div>
                  <br><br>
<?php include 'footer.php'; ?>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<!-- ADD ANY SCRIPTS HERE -->
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Imran
 * Date: 11/25/2016
 * Time: 12:42 PM
 */