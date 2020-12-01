<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>CarForYou - Responsive Car Dealer HTML5 Template</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style2.css" type="text/css">
    <link rel="stylesheet" href="assets/css/mover.css" type="text/css">
    <link rel="stylesheet" href="assets/css/receipt.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all"
        data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }
    </style>
</head>

<body>

    <!--Header-->
    <?php include('includes/header.php');?>
    <!-- /Header -->
    <div class="rcpt">
        <div class="rcpt-container">
            <button style='position: absolute;' onclick='closeReceipt()'>X</button>
            <div class="rcpt-header">
                <div>
                    <h4>MADI MOVER</h4>
                </div>
                <div>
                    <h5>e-RECEIPT</h5>
                </div>
            </div>
            <hr>
            <div class="info-wrapper">
                <div class="vehicle-info-wrapper">
                    <ul>
                        <li>
                            <h6>Vehicle ID</h6>
                        </li>
                        <li>
                            <h6>C001</h6>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h6>Vehicle No.</h6>
                        </li>
                        <li>
                            <h6>DL A5 7964</h6>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h6>Vehicle Name</h6>
                        </li>
                        <li>
                            <h6>Hyundai SX4</h6>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h6>Fare/Km (INR)</h6>
                        </li>
                        <li>
                            <h6>200</h6>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h6>Booking ID</h6>
                        </li>
                        <li>
                            <h6>C001D0011234</h6>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h6>Vehicle Location</h6>
                        </li>
                        <li>
                            <h6>sector 42, Noida, 201012</h6>
                        </li>
                    </ul>
                </div>
                <div class="owner-info-wrapper">
                    <ul>
                        <li>
                            <h6>Driver ID</h6>
                        </li>
                        <li>
                            <h6>D001</h6>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h6>Driver Name</h6>
                        </li>
                        <li>
                            <h6>Yashwant Singh</h6>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h6>Contact No.</h6>
                        </li>
                        <li>
                            <h6>9876543210</h6>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="rcpt-footer">
                <div class="rcpt-desc">
                    <h6>This is a computer generated receipt no signature required.</h6>
                    <h6>You may contact us for any query.</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="cl-supercontainer">
        <div class="cl-wrapper">
            <div class="cl-frame">
                <div class="vehi-img-wrapper"><img src="assets/images/suzuki_PNG12267.png"></div>
                <p class="vehi-info">ID: <span>C001</span></p>
                <p class="vehi-info">Locality: <span>near gj hostel,dasana</span></p>
                <p class="vehi-info">Fare/km(INR): <span>200</span></p>
                <button class="check-aval" onclick="checkAval('C001')">CHECK AVAILABILITY</button>
                <p class="status C001"></p>
            </div>
            <div class="cl-frame">
                <div class="vehi-img-wrapper"><img src="assets/images/suzuki_PNG12309.png"></div>
                <p class="vehi-info">ID: <span>C002</span></p>
                <p class="vehi-info">Locality: <span>sector 48, Noida</span></p>
                <p class="vehi-info">Fare/km(INR): <span>250</span></p>
                <button class="check-aval" onclick="checkAval('C002')">CHECK AVAILABILITY</button>
                <p class="status C002"></p>
            </div>
            <div class="cl-frame">
                <div class="vehi-img-wrapper"><img src="assets/images/suzuki_PNG12296.png"></div>
                <p class="vehi-info">ID: <span>C003</span></p>
                <p class="vehi-info">Locality: <span>vasundhara sector 62,ghaziabad</span></p>
                <p class="vehi-info">Fare/km(INR): <span>100</span></p>
                <button class="check-aval" onclick="checkAval('C003')">CHECK AVAILABILITY</button>
                <p class="status C003"></p>
            </div>
            <div class="cl-frame">
                <div class="vehi-img-wrapper"><img src="assets/images/suzuki_PNG12277.png"></div>
                <p class="vehi-info">ID: <span>C004</span></p>
                <p class="vehi-info">Locality: <span>shahi market, near petrol pump</span></p>
                <p class="vehi-info">Fare/km(INR): <span>300</span></p>
                <button class="check-aval" onclick="checkAval('C004')">CHECK AVAILABILITY</button>
                <p class="status C004"></p>
            </div>
            <div class="cl-frame">
                <div class="vehi-img-wrapper"><img src="assets/images/suzuki_PNG12296.png"></div>
                <p class="vehi-info">ID: <span>C005</span></p>
                <p class="vehi-info">Locality: <span>sector 13, near expo center, noida</span></p>
                <p class="vehi-info">Fare/km(INR): <span>200</span></p>
                <button class="check-aval" onclick="checkAval('C005')">CHECK AVAILABILITY</button>
                <p class="status C005"></p>
            </div>
        </div>
    </div>
    <!--Footer -->
    <?php include('includes/footer.php');?>
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->

    <!--Login-Form -->
    <?php include('includes/login.php');?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php');?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php');?>
    <!--/Forgot-password-Form -->

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <!--Switcher-->
    <script src="assets/switcher/js/switcher.js"></script>
    <!--bootstrap-slider-JS-->
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/mover.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->

</html>