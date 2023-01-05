<?php 
header('Content-Type: application/json');
$nval = urldecode("mc_gross=100.00&protection_eligibility=Eligible&address_status=unconfirmed&payer_id=ZQ7KQXJ5474FU&address_street=3315+Barker+Avenue&payment_date=15%3A48%3A44+Mar+03%2C+2021+PST&payment_status=Completed&charset=windows-1252&address_zip=10467&first_name=Carolyn+B.&mc_fee=3.20&address_country_code=US&address_name=New+York+Real+Estate+Open+Forum%2C+LLC.&notify_version=3.9&payer_status=unverified&business=accounts%40logochemist.com&address_country=United+States&address_city=Bronx&verify_sign=A3VMvwGMi-OntGMduHqQXOScuMR7AKzGNDqNkpejiemc3o.8QsEHrg4L&payer_email=cwatson1006%40gmail.com&memo=Thank+you%2C+Alex%2C+for+doing+an+excellent+job%21&txn_id=0W743212FG220445R&payment_type=instant&payer_business_name=New+York+Real+Estate+Open+Forum%2C+LLC.&last_name=Watson&address_state=NY&receiver_email=accounts%40logochemist.com&payment_fee=3.20&receiver_id=LCH38TMA5H5TE&txn_type=send_money&mc_currency=USD&residence_country=US&transaction_subject=&payment_gross=100.00&ipn_track_id=c27f10d7db895");

//refund paypal
//$nval = urldecode("txn_type=adjustment&payment_date=00%3A43%3A54+Sep+14%2C+2021+PDT&payment_gross=-225.00&mc_currency=USD&verify_sign=A8ilHWnv7dOdas3cZ5JfRAzLVOX1A8noZ914sb-ywvSevXnrhp8l-L9O&payer_status=verified&payer_email=accounts%40logochemist.com&txn_id=6DH28736V2013000E&parent_txn_id=64069225M7674061K&payer_id=LCH38TMA5H5TE&reason_code=chargeback_settlement&payment_status=Completed&mc_gross=-225.00&custom=9098090224%3D%3D--%7C%7C--%3D%3D9098090224&charset=windows-1252&notify_version=3.9&ipn_track_id=cb080ba6bb24a");

//Parse the url string
parse_str($nval, $args);

//Convert payment description to utf8
$args['mc_gross'] = iconv("windows-1251", "UTF-8", $args['mc_gross']);

 $myjson = json_encode($args, JSON_UNESCAPED_UNICODE);
 $myjson = json_decode($myjson);
print_r ( $myjson );

echo '<h1>'.$myjson->item_name.'</h1>';

//echo http_build_query($nval); // output: foo=bar&baz=boom&cow=milk&php=hypertext+processor

//echo http_build_query(array($nval), '', '&amp;'); // output: foo=bar&amp;baz=boom&amp;cow=milk&amp;php=hypertext+processor

//$newgen = explode("&",$nval);

function array_search_partial($arr, $keyword) {
  foreach($arr as $index => $string) {
      if (strpos($string, $keyword) !== FALSE)
          return $index;
  }
}
// curl https://api.stripe.com/v1/balance_transactions/txn_1032HU2eZvKYlo2CEPtcnUvl \
//   -u sk_test_4eC39HqLyjWDarjtT1zdp7dc:

//print_r($newgen);

//echo array_search_partial($newgen, "payer_email");
//$payer_email = $newgen[array_search_partial($newgen, "payer_email")];
//$payer_email = explode("=",$payer_email);
//echo $payer_email[1];


exit();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="./assets/demo/demo.css" rel="stylesheet" /> -->
</head>

<body class="">
  <div class="wrapper">

    <div class="main-panel">


      <div class="content-login">
        <div class="row justify-content-md-center">    
            <div class="col-md-6">
                <a class="d-flex justify-content-center text-center" href="#" style="">
                    <img class="d-none d-sm-block" src="../img/6.gif" alt="logo" style="margin-top:35px;margin-bottom:35px;">
                    <img class="d-block d-sm-none" src="../img/logo.png" alt="logo" style="margin-top:-35px; margin-left:-20px; width:280px !important;">
                </a>
            </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-6 ">

                    <h2 class="title "><small style="font-size: 18px;">Let’s start the project again</small><br><strong>
                            Login to continue</strong></h2>
                    <div class="" data-aos="fade-up">
                        <div data-form-type="signup_form">

                            <form method="post" action="login.php" name="loginform">

                                <!--hidden required values-->

                                <input type="hidden" attr.id="formType" name="formType">

                                <input type="hidden" id="referer" name="referer">

                                <div class="form-group">

                                    <input type="email" name="email_address" required class="form-control btn-rounded"
                                        id="email_address23" placeholder="Email Address">

                                </div>

                                <div class="form-group">

                                    <input type="password" name="password" required class="form-control btn-rounded"
                                        id="password_login" placeholder="Password">

                                </div>

                                <div id="formResult"></div>

                                <div class="form-group">

                                    <button value="1" name="signupForm" type="submit"
                                        class="btn btn-rounded btn-yellow btn-block">Login</button>

                                </div>
                                <!-- <div class="text-right mb-2">
                                        <a href="#" data-toggle="modal" id="forget_password" class="btn-sm btn-rounded btn-white-outline"
                                            data-target="forgetPassword"><strong>FORGET PASSWORD?</strong></a>
                                    </div> -->

                            </form>

                        </div>
                        <!-- forgot password area -->
                        <div data-form-type="signup_form">
                            <h2 class="title"><small style="font-size: 18px;">Forget Password?</small><br><strong> Lets
                                    Recover It!</strong></h2>
                            <form method="post" action="password_recovery.php" name="forgotform">

                                <!--hidden required values-->

                                <div class="form-group">

                                    <input type="email" name="email_address" required class="form-control btn-rounded"
                                        id="email_addressforgot" placeholder="Email Address">

                                </div>

                                <div id="formResult"></div>

                                <div class="form-group">
                                    <button value="1" name="signupForm" type="submit"
                                        class="btn btn-rounded btn-yellow btn-block">Submit</button>
                                </div>

                            </form>

                        </div>

                        <!-- forgot password area -->

                        <!-- </div> -->

                    </div>
          
        </div>

        
        
        
      </div>
        <div class="row justify-content-md-center mt-5">    
            <div class="col-md-6">
                <div class="copyright text-center">
                    ©
                    <script>
                    document.write(new Date().getFullYear())
                    </script>-2018 made with <i class="tim-icons icon-heart-2"></i><br> by
                    <a href="https://logochemist.com" target="_blank">LOGOCHEMIST</a> for a better web.
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
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      

    });
  </script>
  
</body>

</html>