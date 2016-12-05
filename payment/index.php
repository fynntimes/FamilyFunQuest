<?php

require '../php/database.php';
require '../PHPMailer/PHPMailerAutoload.php';

if (!isset($_POST['orderType']) || empty($_POST['orderType'])) {
    header("Location: /");
    exit;
}

// Set up PHPMailer
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'familyfunquest@gmail.com';
$mail->Password = 'ImranFaizaanAli786';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('familyfunquest@gmail.com', 'Family FunQuest');
$mail->isHTML(true);

// The form on this page has been submitted
if (isset($_POST['submitted'])) {

    $orderType = $_POST['orderType'];
    $seniors = $_POST['seniors'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $ticketDate = $_POST['ticket-date'];
    $partyPlan = $_POST['party-plan'];
    $guests = $_POST['guests'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $cardNumber = $_POST['card_number'];
    $expirationMonth = $_POST['expiration-month'];
    $expirationYear = $_POST['expiration-year'];
    $cvv = $_POST['cvv'];

    $price = ($adults * 10) + (($seniors + $children) * 6);

    if ($orderType == "ticket") {
// Create a new ticket order
        $query = "INSERT INTO `fbla` . `tickets` (`fullName`, `email`, `cardNumber`, `expirationMonth`, `expirationYear`, `cvv`, `date`, `seniors`, `adults`, `children`, `price`) 
                VALUES('" . $fullName . "', '" . $email . "', '" . $cardNumber . "', '" . $expirationMonth . "', '" . $expirationYear . "', '" . $cvv . "', '" . $ticketDate . "', '" . $seniors . "', '" . $adults . "', '" . $children . "', '" . $price . "')";
        mysqli_query($link, $query);

        $query = "SELECT * FROM `tickets` WHERE `date` = '" . $ticketDate . "'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_assoc($result);

        // Send their ticket in an email
        $mail->addAddress($row['email']);
        $mail->Subject = "Your Tickets";
        $mail->Body = "
            Hello " . $row['fullName'] . ",
            <br><br>
            This email will serve as the ticket for your whole group to Family FunQuest.
            Please print this email and present it to us at the door. Keep this ticket throughout your stay, as you will be charged
            for the amount of time spent in the center. Enjoy your visit!
            <br>
            - Family FunQuest Staff
            <hr>
            <h3>Family FunQuest Ticket</h3>
            <b>Ticket ID:</b> " . $row['id'] . "<br>
            <b>Visit Date:</b> " . $row['date'] . "<br>
            <b>Seniors:</b> " . $row['seniors'] . "<br>
            <b>Adults:</b> " . $row['adults'] . "<br>
            <b>Children:</b> " . $row['children'] . "<br>
            <hr>
            ";
        $success = $mail->send();
        if(!$success) {
            die("Email failed. " . $mail->ErrorInfo);
        }

        // Reroute them to the success page
        $id = $row['id'];
        header("Location: /tickets/ticketconf.php?id=" . $id);
        exit;

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF - 8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment | Family FunQuest</title>
    <meta name="description"
          content="An endless quest of fun for you and your family . "/>
    <meta name="author" content="Imran Dharamsi, Faizaan Datoo, Ali Mody"/>

    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href=" ../img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href=" ../img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href=" ../img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href=" ../img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href=" ../img/favicons/manifest.json">
    <link rel="shortcut icon" href=" ../img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="../img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!--Normalize -->
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <!--Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!--Owl -->
    <link rel="stylesheet" type="text/css" href="../css/owl.css">
    <!--Animate.css-->
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <!--Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!--Elegant Icons-->
    <link rel="stylesheet" type="text/css" href="../fonts/eleganticons/et-icons.css">
    <!--Main style-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>

<body>
<div class="preloader">
    <img src="../img/loader.gif" alt="Preloader image">
</div>
<nav class="navbar navbar-fixed-top" style="position: fixed; top: 0px; margin-top: 0px; opacity: 1;">
    <div class="container">
        <!--Brand and toggle get grouped for better mobile display-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"> Toggle navigation </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../img/logo-active.png" data-active-url="../img/logo-active.png"
                                                  alt=""></a>
        </div>
        <!--Collect the nav links, forms, and other content for toggling-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li class=""><a href="/"> Home</a></li>
                <li><a href="/#services"> Services</a></li>
                <li class="active"><a href="/activities"> Activities</a></li>
                <li><a href="/parties"> Parties</a></li>
                <li><a href="/snacks"> Snacks</a></li>
                <li><a href="/account" class="btn btn-blue"> Your Account </a></li>
            </ul>
        </div>
        <!-- /.navbar - collapse-->
    </div>
    <!-- /.container - fluid-->
</nav>

<section class="section section-padded">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <input type="hidden" name="submitted" value="true">
            <input type="text" name="orderType" value="<?php echo $_POST['orderType']; ?>">

            <input type="text" name="seniors" value="<?php echo $_POST['seniors']; ?>">
            <input type="text" name="adults" value="<?php echo $_POST['adults']; ?>">
            <input type="text" name="children" value="<?php echo $_POST['children']; ?>">
            <input type="text" name="ticket-date" value="<?php echo $_POST['ticket-date']; ?>">

            <input type="text" name="party-plan" value="<?php echo $_POST['plan']; ?>">
            <input type="text" name="guests" value="<?php echo $_POST['guests']; ?>">
            <input type="text" name="date" value="<?php echo $_POST['date']; ?>">
            <input type="text" name="time" value="<?php echo $_POST['time']; ?>">

            <h2> Payment Information </h2>
            <br>

            <h3> Cardholder Information </h3>
            <input name="full_name" id="full_name" type="text" class="form-control" placeholder="Name (ex. John Doe)"
                   autofocus>
            <input name="email" id="email" type="text" class="form-control" placeholder="Email">

            <br>
            <h3> Card Details </h3>
            <input name="card_number" id="card_number" type="text" class="form-control"
                   placeholder="Credit Card Number">
            <div>
                <div style="width: 60%; float: left;">
                    <input name="expiration-month" id="expiration-month" type="text" class="form-control"
                           placeholder="Expiration Month">
                </div>
                <div style="width: 40%; float: right;">
                    <input name="expiration-year" id="expiration-year" type="text" class="form-control"
                           placeholder="Year">
                </div>
            </div>
            <input name="cvv" id="cvv" type="text" class="form-control" placeholder="Card CVV Security Code">

            <br>
            <button name="Submit" id="submit" class="btn btn-lg btn-blue btn-block" type="submit"> Complete order
            </button>

        </form>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row bottom-footer text-center-mobile">
            <div class="col-sm-8">
                <p>&copy; <?php echo date("Y"); ?> All Rights Reserved. Theme based on a theme by Luka Cvetinovic,
                    modified with permission by the group.</p>
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
