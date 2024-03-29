<?php

require '../php/database.php';

if (!isset($_POST['orderType']) || empty($_POST['orderType'])) {
    header("Location: /");
    exit;
}

// Set up mail
$from = "booking@familyfunquest.com";

$headers = "From: <Family FunQuest> " . $from. "\r\n";
$headers .= "Reply-To: <Family FunQuest>". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Prices


$orderType = $_POST['orderType'];
$seniors = $_POST['seniors'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$partyPlan = $_POST['plan'];
$guests = $_POST['guests'];

if ($orderType == "ticket") {
    $price = ($adults * 10) + (($seniors + $children) * 6);
} else {
    // Calculate the price of the party
    if ($partyPlan == "bronze") {
        $price = 5 * $guests;
        $duration = 2;
    } elseif ($partyPlan == "silver") {
        $price = 10 * $guests;
        $duration = 3;
    } else {
        $price = 15 * $guests;
        $duration = 4;
    }
}

// The form on this page has been submitted
if (isset($_POST['submitted'])) {

    $ticketDate = $_POST['ticket-date'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $cardNumber = $_POST['card_number'];
    $expirationMonth = $_POST['expiration-month'];
    $expirationYear = $_POST['expiration-year'];
    $cvv = $_POST['cvv'];

    if ($orderType == "ticket") {
// Create a new ticket order

        $query = "INSERT INTO `tickets` (`fullName`, `email`, `cardNumber`, `expirationMonth`, `expirationYear`, `cvv`, `date`, `seniors`, `adults`, `children`, `price`) 
                VALUES('" . $fullName . "', '" . $email . "', '" . $cardNumber . "', '" . $expirationMonth . "', '" . $expirationYear . "', '" . $cvv . "', '" . $ticketDate . "', '" . $seniors . "', '" . $adults . "', '" . $children . "', '" . $price . "')";
        mysqli_query($link, $query);

        $query = "SELECT * FROM `tickets` WHERE `date` = '" . $ticketDate . "'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_assoc($result);

        // Send their ticket in an email
        $subject = "Your Tickets";
        $message = "
            Hello " . $row['fullName'] . ",
            <br><br>
            This email will serve as the ticket for your whole group to Family FunQuest.
            Please print this email and present it to us at the door. Keep this ticket throughout your stay, as you will be charged
            for the amount of time spent in the center. Enjoy your visit!
            <br><br>
            - Family FunQuest Staff
            <hr>
            <h3>Family FunQuest Ticket</h3>
            <b>Ticket ID:</b> " . $row['id'] . "<br>
            <b>Visit Date:</b> " . $row['date'] . "<br>
            <b>Seniors:</b> " . $row['seniors'] . "<br>
            <b>Adults:</b> " . $row['adults'] . "<br>
            <b>Children:</b> " . $row['children'] . "<br>
            <b>Price:</b> $" . $row['price'] . ".00<br>
            <hr>
            ";
        mail($row['email'], $subject, $message, $headers);

        // Reroute them to the success page
        $id = $row['id'];
        header("Location: /tickets/ticketconf.php?id=" . $id);
        exit;

    } else if ($orderType == "party") {

        // Create a new party order
        $query = "INSERT INTO `parties` (`fullName`, `email`, `cardNumber`, `expirationMonth`, `expirationYear`, `cvv`, `plan`, `guests`, `date`, `time`, `price`) 
                  VALUES ('" . $fullName . "', '" . $email . "', '" . $cardNumber . "', '" . $expirationMonth . "', '" . $expirationYear . "', '" . $cvv . "', '" . $partyPlan . "', '" . $guests . "', '" . $date . "', '" . $time . "', '" . $price . "')";
        mysqli_query($link, $query);

        // Get the data
        $query = "SELECT * FROM `parties` WHERE `date` = '" . $date . "' AND `time` = '" . $time . "'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_assoc($result);

        // Make time human-readable
        $suffix = intval($row['time']) >= 12 ? ":00p" : ":00a";
        $hours = ((intval($row['time']) + 11) % 12 + 1) . $suffix;

        // Send their party details to their email
        $to = $row['email'];
        $subject = "Your Party";
        $message = "
        Hello " . $row['fullName'] . ",
        <br><br>
        Your party has been successfully booked. In order for your guests to be allowed to the party, please tell them your party ID which they will present to us at the door.<br><br>
        <b>Your party ID is #" . $row['id'] . ".</b><br><br>
        
        If you are the party organizer, <b>print this email</b> and show it to us at the door. Please arrive 15 minutes early so that we may set up your party.<br>
        Thank you for choosing Family FunQuest.
        <br><br>
        Have fun!<br>
        - Family FunQuest
        <hr>
        <b>Party ID:</b> #" . $row['id'] . "<br>
        <b>Guests #:</b> " . $row['guests'] . "<br>
        <b>Date:</b> " . $row['date'] . "<br>
        <b>Time:</b> " . $hours . "<br>
        <b>Duration:</b> " . $duration . " hours<br>
        <b>Price:</b> $" . $row['price'] . ".00<br>
        <hr>
        ";
        mail($to, $subject, $message, $headers);

        // Reroute them to the success page
        $id = $row['id'];
        header("Location: /parties/partyconf.php?id=" . $id);
        exit;

    } else {
        die("Invalid order type. Malformed form :(");
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
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../img/logo.png" data-active-url="../img/logo.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li class=""><a href="/">Home</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="/activities">Activities</a></li>
                <li><a href="/parties">Parties</a></li>
                <li><a href="/snacks">Snacks</a></li>
                <li><a href="/tickets" class="btn btn-blue">Buy Tickets</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<section class="section section-padded">
    <div class="container">

        <form id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <input type="hidden" name="submitted" value="true">
            <input type="hidden" name="orderType" value="<?php echo $_POST['orderType']; ?>">

            <input type="hidden" name="seniors" value="<?php echo $_POST['seniors']; ?>">
            <input type="hidden" name="adults" value="<?php echo $_POST['adults']; ?>">
            <input type="hidden" name="children" value="<?php echo $_POST['children']; ?>">
            <input type="hidden" name="ticket-date" value="<?php echo $_POST['ticket-date']; ?>">

            <input type="hidden" name="plan" value="<?php echo $_POST['plan']; ?>">
            <input type="hidden" name="guests" value="<?php echo $_POST['guests']; ?>">
            <input type="hidden" name="date" value="<?php echo $_POST['date']; ?>">
            <input type="hidden" name="time" value="<?php echo $_POST['time']; ?>">

            <h2> Payment Information </h2>
            <h3>Fill out the following form to complete your transaction of $<?php echo $price; ?>.00 dollars.</h3>
            <br>

            <h3> Cardholder Information </h3>
            <input name="full_name" id="full_name" type="text" class="form-control" placeholder="Name (ex. John Doe)"
                   data-parsley-required="true" autofocus>
            <input name="email" id="email" type="text" class="form-control" placeholder="Email" data-parsley-required="true">

            <br>
            <h3> Card Details </h3>
            <input name="card_number" id="card_number" type="text" class="form-control"
                   placeholder="Credit Card Number" data-parsley-required="true">
            <div>
                <div style="width: 60%; float: left;">
                    <input name="expiration-month" id="expiration-month" type="text" class="form-control"
                           placeholder="Expiration Month" data-parsley-required="true">
                </div>
                <div style="width: 40%; float: right;">
                    <input name="expiration-year" id="expiration-year" type="text" class="form-control"
                           placeholder="Year" data-parsley-required="true">
                </div>
            </div>
            <input name="cvv" id="cvv" type="text" class="form-control" placeholder="Card CVV Security Code" data-parsley-required="true">

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
                <p>&copy; <?php echo date("Y"); ?> Family FunQuest. This business is imaginary and made for the <a
                        href="http://pafbla.org">FBLA</a> competition.</p>
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
<script src="../js/parsley.min.js"></script>
<script src="../js/main.js"></script>

<script>
    $('#form').parsley({
        trigger: 'change',
        successClass: "has-success",
        errorClass: "has-error",
        classHandler: function (el) {
            return el.$element.closest('.form-group'); //working
        },
        errorsWrapper: '<div class="invalid-message"></div>',
        errorTemplate: '<span class="help-block"></span>'
    });
</script>
</body>

</html>
