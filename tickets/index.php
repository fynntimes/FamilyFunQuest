<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tickets | Family FunQuest</title>
    <meta name="description"
          content="An endless quest of fun for you and your family."/>
    <meta name="author" content="Imran Dharamsi, Faizaan Datoo, Ali Mody"/>

    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="../img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../img/favicons/manifest.json">
    <link rel="shortcut icon" href="../img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="../img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="../css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="../fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
      @media(min-width:527px) {
          .container-fluid {
              padding: 10px;
              background-color: gainsboro;
              margin: auto;
              width: 60%;
          }

      }

        p{
            color:black;
        }
        @media (max-width:990px){
            .form{
                position:relative;
                top:200px;
            }
        }

    </style>
</head>

<body>
<div class="preloader">
    <img src="../img/loader.gif" alt="Preloader image">
</div>
<nav class="navbar navbar-fixed-top" style="position: fixed; top: 0px; margin-top: 0px; opacity: 1;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../img/logo-active.png" data-active-url="../img/logo-active.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li class=""><a href="/">Home</a></li>
                <li><a href="/#services">Services</a></li>
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
<!-- <br><br><br><br><br><br><br><br><br> -->

<section class="section section-padded form">

    <div class="container-fluid">
        <form>

            <div class="col-md-6">
                <div class="form-group">

                    <div class="col-xs-4">
                        <label for="expiry" class="control-label">Children</label>
                        <input type="text" class="form-control" placeholder="#">
                    </div>

                    <div class="col-xs-4">
                        <label for="expiry" class="control-label">Seniors</label>
                        <input type="text" class="form-control" placeholder="#">
                    </div>

                    <div class="col-xs-4">
                        <label for="expiry" class="control-label">Adults</label>
                        <input type="text" class="form-control" placeholder="#">
                    </div>
                </div>
            </div>

            <a class="btn btn-default" href="#" role="button">Submit</a>
            </div>
        <!-- /.container -->

</section>


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
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/typewriter.js"></script>
<script src="../js/jquery.onepagenav.js"></script>
<script src="../js/main.js"></script>
</body>

</html>
