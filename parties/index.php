<?php

function listPartyTimes($package)
{
    $ret = array();

    if ($package == "bronze") {
        $duration = 2;
    } elseif ($package == "silver") {
        $duration = 3;
    } else {
        $duration = 4;
    }

    $dayOfWeek = jddayofweek(cal_to_jd(CAL_GREGORIAN, date("m"), date("d"), date("Y")), 1);
    switch ($dayOfWeek) {
        case "Sunday":
            $startTime = 12;
            $endTime = 17;
            break;
        case "Monday":
            $startTime = 13;
            $endTime = 20;
            break;
        case "Tuesday":
            $startTime = 13;
            $endTime = 20;
            break;
        case "Wednesday":
            $startTime = 13;
            $endTime = 20;
            break;
        case "Thursday":
            $startTime = 13;
            $endTime = 20;
            break;
        case "Friday":
            $startTime = 13;
            $endTime = 20;
            break;
        case "Saturday":
            $startTime = 12;
            $endTime = 22;
            break;
        default:
            $startTime = 13;
            $endTime = 20;
            break;
    }

    for ($x = 0; true; $x++) {
        $y = $duration * $x + $startTime;
        if ($y > $endTime) {
            break;
        }

        $ret[] = "<li class=\"animated lightSpeedIn\"><a href=\"#\" onclick=\"setTimeValue('12p');\">" . $y . ", . " . $duration . "h</a></li>";
    }

    return implode("\n", $ret);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parties | Family FunQuest</title>
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
    <!-- Datepicker -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
        .logo {
            width: 50px;
            height: 50px;
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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../img/compass_rose_bw_144247.png" class="logo"
                                                  data-active-url="../img/compass_rose_bw_1442472.png" alt=""></a> 

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li class=""><a href="/">Home</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="/activities">Activities</a></li>
                <li class="active"><a href="/parties">Parties</a></li>
                <li><a href="/snacks">Snacks</a></li>
                <li><a href="/account" class="btn btn-blue">Your Account</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<section id="parties" class="section gray-bg">
    <div class="container">
        <div class="row title text-center">
            <h2 class="margin-top">Celebrate with us!</h2>
            <h4 class="light muted">Our flexible and affordable party packages are a great fit for everyone.</h4>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover" style="background:url('http://bigblast.com.au/wp-content/uploads/2014/06/vc_img1-400x300.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">$5.00 per guest</h3>
                            <h5 class="light light-white">2 hours</h5>
                        </div>
                    </div>
                    <div class="title">
                        <h4>Bronze Package</h4>
                        <h5 class="muted regular">Our most affordable plan. With 2 hours of party time, enjoy a brief
                            but enjoyable celebration on your child's special day.</h5>
                    </div>
                    <button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Book now</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover" style="background:url('http://images.agoramedia.com/wte3.0/gcms/pg-birthday-party-themes-children-at-party-full.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">$10.00 per guest</h3>
                            <h5 class="light light-white">3 hours</h5>
                        </div>
                    </div>
                    <div class="title">
                        <h4>Silver Package</h4>
                        <h5 class="muted regular">Enjoy a free personalized birthday cake along with three hours of
                            activity-filled fun for the whole group.</h5>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Book now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover" style="background:url('http://www.happychildhoods.org/Lima/Lima_Oct04/136_3695_group.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">$15.00 per guest</h3>
                            <h5 class="light light-white">4 hours</h5>
                        </div>
                    </div>
                    <div class="title">
                        <h4>Gold Package</h4>
                        <h5 class="muted regular">Enjoy the ultimate party experience with two personalized cakes and
                            pizza for everyone! We'll provide the food, and the fun!</h5>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Book now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <h3 class="white">Book Party</h3>
            <form action="/payment/index.php" method="post" class="popup-form" id="form">

                <input type="hidden" name="orderType" value="party">

                <div class="form-group dropdown">
                    <button id="plan" name="plan" class="form-control form-white dropdown" type="button"
                            data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Bronze Package ($5 per guest)
                    </button>
                    <ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="plan">
                        <li class="animated lightSpeedIn"><a href="#" onclick="setPlanValue('bronze');">Bronze Package
                                ($5 per guest)</a></li>
                        <li class="animated lightSpeedIn"><a href="#" onclick="setPlanValue('silver');">Silver Package
                                ($10 per guest)</a></li>
                        <li class="animated lightSpeedIn"><a href="#" onclick="setPlanValue('gold');">Gold Package ($15
                                per guest)</a></li>
                    </ul>
                    <input id="plan_hidden" type="hidden" name="plan" value="bronze" data-parsley-required="true">
                </div>

                <div class="form-group">
                    <input type="number" name="guests" class="form-control form-white"
                           placeholder="Number of Guests (up to 30)" min="1"
                           max="30" data-parsley-type="number" data-parsley-required="true">
                </div>

                <div class="form-group">
                    <input id="partydate" name="date" type="text" class="form-control form-white"
                           placeholder="Choose a date" data-parsley-required="true">
                </div>

                <div class="form-group dropdown" id="partytime-container" style="display:none;">
                    <button id="partytime" name="time" class="form-control form-white dropdown" type="button"
                            data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Choose a time
                    </button>
                    <ul id="time-dropdown" class="dropdown-menu animated fadeIn" role="menu"
                        aria-labelledby="partytime">
                    </ul>
                    <input id="time_hidden" type="hidden" name="time" value="" data-parsley-required="true">
                </div>

                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>

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
<script src="../js/parsley.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.en-GB.min.js"></script>


<script src="../js/main.js"></script>
<script type="text/javascript">

    var plan = "bronze";
    var date = new Date();

    $('#partydate').datepicker({
        format: "mm/dd/yyyy",
        weekStart: 0,
        startDate: "-1d"
    }).on('changeDate', function (e) {
        date = e.date;
        $('#partytime-container').css('display', 'inherit');
        $('#partytime').text("Choose a time");
        $('#time-dropdown').html(calculateTimes(plan, date));
    });

    $('#form').parsley({
        trigger: 'change',
        successClass: "has-success",
        errorClass: "has-error",
        classHandler: function (el) {
            return el.$element.closest('.form-group'); //working
        },
        errorsWrapper: '<div class="invalid-message"></div>',
        errorTemplate: '<span class="help-block"></span>',
        excluded: 'input[type=button], input[type=submit], input[type=reset]',
        inputs: 'input, textarea, select, input[type=hidden], :hidden'
    });

    function setPlanValue(s) {
        $('#plan_hidden').attr('value', s);
        $('#time-dropdown').html(calculateTimes(plan, date));
        $('#time_hidden').attr('value', "");
        $('#partytime').text("Choose a time");
        plan = s;

        $('#plan_hidden').attr('value', s);
        $('#time-dropdown').html(calculateTimes(plan, date));
        $('#time_hidden').attr('value', "");
        $('#partytime').text("Choose a time");
        plan = s;
    }

    function setTimeValue(y) {
        $('#time_hidden').attr('value', y);

        y = parseInt(y);
//        console.log("Timeval: " + y);
        var suffix = y >= 12 ? ":00p" : ":00a";
        var hours = ((y + 11) % 12 + 1) + suffix;
        $('#partytime').text(hours);
    }

    function calculateTimes(plan, date) {
        var ret = [];

        var dayOfWeek = date.getDay();
        var startTime = 0;
        var endTime = 0;
        switch (dayOfWeek) {
            case 0:
                startTime = 12;
                endTime = 17;
                break;
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                startTime = 13;
                endTime = 20;
                break;
            case 6:
                startTime = 12;
                endTime = 22;
                break;
            default:
                startTime = 13;
                endTime = 20;
                break;
        }

        var duration = 0;
        if (plan == "bronze") {
            duration = 2;
        } else if (plan == "silver") {
            duration = 3;
        } else {
            duration = 4;
        }
//        console.log("duration: " + duration);

        for (var x = 0; true; x++) {
            var y = duration * x + startTime;
            if (y > endTime - duration) {
                break;
            }

//            console.log("Calc: " + y);
            var suffix = y >= 12 ? ":00p" : ":00a";
            var hours = ((y + 11) % 12 + 1) + suffix;

            ret.push("<li class=\"animated lightSpeedIn\"><a href=\"#\" onclick=\"setTimeValue('" + y + "');\">" + hours + ", " + duration + "h</a></li>");
        }

        return ret.join("\n");
    }

</script>

<?php if ($_GET['show'] == "1"): ?>
    <script type="text/javascript">
        $(window).load(function () {
            $('#modal1').modal('show');
        });
    </script>
<?php endif; ?>
</body>

</html>
