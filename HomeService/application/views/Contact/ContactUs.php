<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <style>
        .dismissButton {
            background-color: #fff;
            border: 1px solid #dadce0;
            color: #1a73e8;
            border-radius: 4px;
            font-family: Roboto, sans-serif;
            font-size: 14px;
            height: 36px;
            cursor: pointer;
            padding: 0 24px
        }

        .dismissButton:hover {
            background-color: rgba(66, 133, 244, 0.04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:focus {
            background-color: rgba(66, 133, 244, 0.12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:hover:focus {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:active {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
        }

        .dismissButton:disabled {
            background-color: #fff;
            border: 1px solid #f1f3f4;
            color: #3c4043
        }
    </style>
    <style>
        .gm-control-active>img {
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .gm-control-active>img:nth-child(1) {
            display: block
        }

        .gm-control-active:hover>img:nth-child(1),
        .gm-control-active:active>img:nth-child(1) {
            display: none
        }

        .gm-control-active:hover>img:nth-child(2),
        .gm-control-active:active>img:nth-child(3) {
            display: block
        }
    </style>

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>Assets/css/Contact/css.css">

    <style>
        .gm-ui-hover-effect {
            opacity: .6
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }
    </style>

    <style>
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px;
            box-sizing: border-box
        }
    </style>

    <style>
        @media print {

            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {

            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>

    <style>
        .gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }

        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }
    </style>

    <style>
        .gm-style img {
            max-width: none;
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
    </style>
    <title>Contact</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="icon" type="image/png" href="https://colorlib.com/etc/cf/ContactFrom_v6/images/icons/favicon.ico"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/icon-font.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/animate.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/hamburgers.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/animsition.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/select2.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Contact/main.css">

    </script>

</head>

<body ng-app="myapp" ng-controller="contactCtrl">
    <div class="container-contact100  winter-neva-gradient">
        <div class="wrap-contact100" style="display: block;">
            <form class="contact100-form validate-form" ng-submit="submitForm()">
                <span class="contact100-form-title">
                    Contact Us
                </span>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Your Name</span>
                    <input class="input100" ng-model="contact.name" type="text" id="name" placeholder="Enter your name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" ng-model="contact.email" id="email" placeholder="Enter your email addess">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="subject is required">
                    <span class="label-input100">Subject</span>
                    <textarea class="input100" ng-model="contact.subject" id="subject" placeholder="Your subject here...">
            </textarea>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <span class="label-input100">Message</span>
                    <textarea class="input100" ng-model="contact.msg" id="msg" placeholder="Your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>
                <div class="container-contact100-form-btn">
                    <!-- <button class="contact100-form-btn hoverable" type="submit" id="save" value="save">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <pre>{{message}}</pre>
                    </button>
                </div>
            </form>
            <span class="contact100-more">
                For any question contact our on: <span class="contact100-more-highlight">9033352636</span>
            </span>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <!-- angular-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.min.js" integrity="sha256-23hi0Ag650tclABdGCdMNSjxvikytyQ44vYGo9HyOrU=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>Public/Module/app.js"></script>
    <script src="<?php echo base_url(); ?>Public/Controller/contactController.js"></script>
    <script src="<?php echo base_url(); ?>Public/Service/ContactService.js"></script>

</body>

</html>