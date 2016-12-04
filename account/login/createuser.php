<?php
require 'includes/functions.php';
include_once 'config.php';

//Pull username, generate new ID and hash password
$newid = uniqid(rand(), false);
$newuser = $_POST['newuser'];
$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];

$full_name = $_POST['full_name'];

$credit_card_number = $_POST['card_number'];
$expire_month = $_POST['expiration_month'];
$expire_year = $_POST['expiration_year'];
$cvv = $_POST['cvv'];

//Enables moderator verification (overrides user self-verification emails)
if (isset($admin_email)) {

    $newemail = $admin_email;

} else {

    $newemail = $_POST['email'];

}
//Validation rules
if ($pw1 != $pw2) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password fields must match</div><div id="returnVal" style="display:none;">false</div>';

} elseif (strlen($pw1) < 4) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password must be at least 4 characters</div><div id="returnVal" style="display:none;">false</div>';

} elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Must provide a valid email address</div><div id="returnVal" style="display:none;">false</div>';

} else {
    //Validation passed
    if (isset($_POST['newuser']) && !empty(str_replace(' ', '', $_POST['newuser'])) && isset($_POST['password1']) && !empty(str_replace(' ', '', $_POST['password1'])) &&
        isset($_POST['card_number']) && !empty($_POST['card_number']) && isset($_POST['full_name']) && !empty($_POST['full_name']) && isset($_POST['expiration_month']) && !empty($_POST['expiration_month']) &&
        isset($_POST['expiration_year']) && !empty($_POST['expiration_year']) && isset($_POST['cvv']) && !empty($_POST['cvv'])
    ) {

        //Tries inserting into database and add response to variable

        $a = new NewUserForm;

        $response = $a->createUser($newuser, $newid, $newemail, $newpw, $full_name, $credit_card_number, $expire_month, $expire_year, $cvv);

        //Success
        if ($response == 'true') {

            echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $signupthanks . '</div><div id="returnVal" style="display:none;">true</div>';

            //Send verification email
            $m = new MailSender;
            $m->sendMail($newemail, $newuser, $newid, 'Verify');

        } else {
            //Failure
            mySqlErrors($response);

        }
    } else {
        //Validation error from empty form variables
        echo 'An error occurred on the form... try again';
    }
};
