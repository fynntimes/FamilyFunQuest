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
      </style>
  </head>

  <body>
  <section class="section section-padded">
  <div class="container-fluid">
      <form>
          <div class="col-md-6">
              <div class="form-group">
                  <label for="name" class="control-label">Full Name</label>
                  <input type="text" class="form-control" placeholder="Full name">

              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group"> <!-- Email field !-->
                  <label for="email_id" class="control-label">Email</label>
                  <input type="email" class="form-control" id="email_id" name="email_name"
                         placeholder="name@domain.com">
              </div>
          </div>

          <div class="col-md-6">
              <p>Do you want to receive promotional emails?</p>
              <div class="radio">
                  <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Yes
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      No
                  </label>
              </div>
          </div>


          <div class="col-md-6">
              <div class="form-group">
                  <label for="phone" class="control-label">Phone Number</label>
                  <input type="text" class="form-control" placeholder="(123) 456-789">
              </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                  <label for="creditcard" class="control-label">Credit Card Number</label>
                  <input type="text" class="form-control" placeholder="Last 4 Digits">
              </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                  <label for="expiry" class="control-label">Expiration Date</label>
                  <input type="text" class="form-control" placeholder="mm/dd/yyyy">
              </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                  <label for="password" class="control-label">Create a Password</label>
                  <input type="text" class="form-control" placeholder="Password">
              </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                  <label for="password" class="control-label">Repeat Password</label>
                  <input type="text" class="form-control" placeholder="Password">
              </div>
          </div>



  </div>
  </section>
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <h2 class="form-signup-heading">Register</h2>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="email" id="email" type="text" class="form-control" placeholder="Email">
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

$( "#usersignup" ).validate({
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
