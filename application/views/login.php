﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 1.4.2
Purchase: http://wrapbootstrap.com
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<!-- Mirrored from beyondadmin-v1.4.2.s3-website-us-east-1.amazonaws.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Oct 2015 19:39:22 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>
    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="<?php echo site_url();?>application/assests/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="<?php echo site_url();?>application/assests/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="#" rel="stylesheet" />
    <link href="<?php echo site_url();?>application/assests/assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link href="<?php echo site_url();?>application/assests/assets/css/beyond.min.css" rel="stylesheet" />
    <link href="<?php echo site_url();?>application/assests/assets/css/demo.min.css" rel="stylesheet" />
    <link href="<?php echo site_url();?>application/assests/assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="<?php echo site_url();?>application/assests/assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <form method="post" action="<?php echo site_url('WashControl/user_login');?>" >
            <div class="loginbox-title">Washbox Employee Login</div>
          <!-- <div class="loginbox-social">
              <div class="social-buttons">
                    <a href="#" class="button-facebook">
                        <i class="social-icon fa fa-facebook"></i>
                    </a>
                    <a href="#" class="button-twitter">
                        <i class="social-icon fa fa-twitter"></i>
                    </a>
                    <a href="#" class="button-google">
                        <i class="social-icon fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
            <div class="loginbox-or">
                <div class="or-line"></div>
                <div class="or">OR</div>
            </div>-->
            <div class="loginbox-textbox">
                <input type="text" class="form-control" name="name" placeholder="Username" />
            </div>
            <div class="loginbox-textbox">
                <input type="password" class="form-control" name="password" placeholder="Password" />
            </div>
            <div class="loginbox-forgot">
                <a href="#">Forgot Password?</a>
            </div>
            <div class="loginbox-submit">
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">
            </div>
          <!--  <div class="loginbox-signup">
                <a href="register.html">Sign Up With Email</a>
            </div>-->
            </form>
        </div>
        <div class="logobox">
        </div>
        
    </div>

    <!--Basic Scripts-->
    <script src="<?php echo site_url();?>application/assests/assets/js/jquery.min.js"></script>
    <script src="<?php echo site_url();?>application/assests/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo site_url();?>application/assests/assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="<?php echo site_url();?>application/assests/assets/js/beyond.js"></script>

    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-60412744-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
<!--Body Ends-->

<!-- Mirrored from beyondadmin-v1.4.2.s3-website-us-east-1.amazonaws.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Oct 2015 19:39:22 GMT -->
</html>
