
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no" />
    <title></title>

    <link rel="icon" href="http://portal99.in/urbanclap-clone-script/public/images/favicon.png" type="image/x-icon" />

    <meta name="theme-color" content="#0093dd" />

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/bootstrap.css" />

    <script src="<?php echo base_url() ?>Assets/services/js/bootstrap.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/custom.css" />
    <style type="text/css">
        /* .phase1  .fa-check{
 color:#069206;
 font-size:13px;
 padding-right:10px;
 }*/

        .phase1 li::before,
        .phase2 li::before {
            font-family: "Font Awesome 5 Free";
            content: "\f00c";
            display: inline-block;
            padding-right: 10px;
            vertical-align: middle;
            font-weight: 900;
            color: #069206;
            font-size: 13px;
        }

        .phase1 li {
            padding-bottom: 15px;
        }

        .nav-tabs .nav-item .nav-link {
            padding-left: 6px;
            padding-right: 6px;
        }

        @media screen and (max-width:768px) {

            html,
            body {
                height: 100% !important;
            }

            .no_left_pad,
            .no_right_pad {
                padding: 6%;
            }

            .category_page2_right_box1 {
                width: 100%;
            }

            #modal_step2 .inner_content {
                min-height: 250px;
            }

            #modal_step2 .phone_container {
                position: relative;
            }

            .btn_pay_now_container {
                width: 97%;
                position: fixed;
                bottom: 35px;
            }

            #modal_step2 .modal-footer {
                bottom: 0px !important;
                position: fixed !important;
            }

            .error_modal_container {
                bottom: 40px !important;
            }

            .btn_other {
                position: absolute;
                bottom: 40px;
                width: 100%;
            }

            .modal-open .modal {
                overflow: hidden !important;
                height: 100% !important;
            }

            #modal_step2 .modal-content {
                position: absolute !important;
                top: 0px !important;
                left: 0px;
                height: 100%;
                overflow-x: hidden !important;
                overflow-y: scroll;
            }

            #modal_step2 .modal-body {
                position: absolute;
                top: 70px;
                left: 0px;
                height: 75% !important;
                overflow: scroll;
            }

            .phase1 p,
            .service_list_item p {
                margin-bottom: 4px;
                font-size: 13px;
                line-height: 16px;
            }

            .phase1 ul {
                padding: 0px;
            }

            .phase1 li {
                font-size: 14px;
                line-height: 16px;
            }

            #modal_step2 .modal-mg {
                padding: 0px !important;
            }
        }
    </style>

</head>

<body>
    <div class="menu_outside_bg" data-target="#slide-navbar-collapse"></div>

    <div class="container-fluid logo_with_navbar">

        <div class="container">

            <div class="row ">
                <!-- <div class="col-lg-2 col-8 ">
                    <a href="#" class="logo"><img src="http://portal99.in/urbanclap-clone-script/public/images/logo.png" alt="Repair Services India"></a>
                </div> -->

                <div class="col-lg-10 col-4">

                    <nav class="navbar navbar-expand-lg navbar-light ">

                        <button class="navbar-toggler" type="button" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="slide-navbar-collapse">
                            <ul class="navbar-nav mr-auto ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="http://localhost/HomeService/HomeService/home">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" target="_blank">Become As Partner</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/HomeService/HomeService/Contact" target="_blank">Contact</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#modal_login">Login / Sign Up</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  </body>
</Html>

