<?php
session_start();

if (isset($_SESSION['username'])) {
    session_start();
    session_destroy();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">

    <style>
        @media (min-width: 527px) {
            .container-fluid {
                padding: 10px;
                background-color: gainsboro;
                margin: auto;
                width: 60%;
            }

        }

        p {
            color: black;
        }
    </style>
</head>

<body>

<div class="container">

    <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <h2 class="form-signup-heading">Register</h2>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="full_name" id="full_name" type="text" class="form-control" placeholder="Name (ex. John Doe)">
        <input name="email" id="email" type="text" class="form-control" placeholder="Email">

        <br>
        <input name="card_number" id="card_number" type="text" class="form-control" placeholder="Credit Card Number">
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
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">

        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>

        <div id="message"></div>
    </form>

</div> <!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>

<script src="js/signup.js"></script>


<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

    $("#usersignup").validate({
        rules: {
            email: {
                email: true,
                required: true
            },
            password1: {
                required: true,
                minlength: 4
            },
            password2: {
                equalTo: "#password1"
            }
        }
    });
</script>

</body>
</html>
