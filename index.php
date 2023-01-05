<?php
require_once('api/config.php');

$servername = DBHOST;
$username = DBUSER;
$password = DBPWD;
$dbname = DBNAME;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
global $conn;

include('includes/functions_inc.php');

$toDay = date('j');
$toMonth = date('m');
$toYear = date('Y');
$toYearOLD = date('Y')-1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Logochemist Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./assets/css/black-dashboard.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link href="./assets/demo/demo.css" rel="stylesheet" /> -->
    <style>
        /* Made with love by Mutiullah Samim*/

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,
        body {
            background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container {
            height: 100%;
            align-content: center;
        }

        .card {
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.5) !important;
        }

        .card-footer{
            text-transform:uppercase;
            color: white;
        }

        .social_icon span {
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover {
            color: white;
            cursor: pointer;
        }

        .card-header h3 {
            color: white;
        }

        .social_icon {
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group-prepend span {
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: 0 !important;
        }

        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember {
            color: white;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 100px;
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
        }

        .links a {
            margin-left: 4px;
        }
    </style>
</head>

<body class="">
    <div class="container">

        
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>CRM - Sign-In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <img src="assets/img/logo.png" alt="" width="160"> 
                            
                            <!-- <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="uid" id="uid" class="form-control" placeholder="username">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input name="pwd" id="pwd" type="password" class="form-control" placeholder="password">
                            </div>
                            <div class="row align-items-center remember">
                                <input name="chksave" name="chksave" type="checkbox">Remember Me
                            </div>
                            <div class="form-group">
                                <input id="signinForm" type="submit" value="Login" class="float-right login_btn dt-button buttons-copy buttons-html5 red">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center ">
                            Don't have an account? &nbsp; &nbsp; <a href="#"> Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#">Forgot your password?</a>
                        </div>
                        <div class="text-center">
                            © 2018-
                            <script>
                            document.write(new Date().getFullYear())
                            </script> made with <i class="tim-icons icon-heart-2"></i> by
                            <a href="https://logochemist.com" target="_blank">LOGOCHEMIST</a> <br>for a better web.
                        </div>

                    </div>
                </div>
            </div>
        </div>
   
    </div>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>




    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!-- Chart JS -->
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/black-dashboard.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="./assets/demo/demo.js"></script>
    <script>
        //----Login Area--------------------------------------
        $(document).on('click', '#signinForm', function (e) {
            e.preventDefault();
            var uid = $('#uid').val();
            var pwd = $('#pwd').val();
            var chksave = $('#chksave').val();
            // return;
            //alert("lkjlkj");
            console.log("UID: " +uid);
            return;
            //$('#formResult_login').html('UID: '+uid+' \nPWD: '+pwd);
            //$('#formResult_login').show();
            if (uid != "" && pwd != "") {
            $.ajax({
                url: 'includes/login.inc.php',
                type: 'post',
                data: { uid: uid, pwd: pwd },
                success: function (response) {
                var msg = "";
                if (response == '1') {
                    //if (lurl == 'index.php'){
                    //  window.location = lurl;//"index.php";
                    //} else {
                    window.location = "dashboard.php";
                    //}
                    
                } else {
                    msg = response;//"Invalid username and password!";
                }
                $("#formResult_login").html(msg);
                $('#formResult_login').show();
                }
            });
            } else {
            $("#formResult_login").html('Invalid username and password!');
            $('#formResult_login').show();
            }

        });
        //----END Login Area--------------------------------------
    </script>
</body>

</html>