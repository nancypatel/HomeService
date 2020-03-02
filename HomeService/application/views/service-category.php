<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no" />
    <title><?= $row1->title ?></title>

    <link rel="icon" href="<?php echo base_url() ?>Assets/services/js/images/favicon.png" type="image/x-icon" />

    <meta name="theme-color" content="#0093dd" />

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/bootstrap.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/bootstrap-grid.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/bootstrap-reboot.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="<?php echo base_url() ?>Assets/services/js/js/jquery-2.2.0.min.js"></script>

    <script src="<?php echo base_url() ?>Assets/services/js/popper.min.js"></script>

    <script src="<?php echo base_url() ?>Assets/services/js/bootstrap.js"></script>

    <script>
        var url = "http://portal99.in/urbanclap-clone-script";
    </script>
    <script src="<?php echo base_url() ?>Assets/services/js/js/misc.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>Assets/services/js/js/jquery.form-validator.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/custom.css" />

    <!-- Android Viewport height fix-->
    <script type="text/javascript">
        var isAndroid = navigator.userAgent.toLowerCase().indexOf("android") > -1; //&& ua.indexOf("mobile");
        if (isAndroid) {
            document.write('<meta name="viewport" content="width=device-width,height=' + window.innerHeight + ', initial-scale=1.0">');
        }
    </script>

    <script>
        $(document).ready(function() {

            $("#blog_post_carousel").load("http://portal99.in/urbanclap-clone-script/blog/recent-post-for-main-website");

        });
    </script>

    <style type="text/css">
        @media screen and (max-width:768px) {
            .modal_phase {
                min-height: 500px;
            }
        }
    </style>

    <script>
        $(document).ready(function() {

        });
    </script>

    <link rel="stylesheet" media="all" href="<?php echo base_url() ?>Assets/services/css/lightbox.css" />
    <script type="text/javascript" src="<?php echo base_url() ?>Assets/services/js/lightbox.min.js"></script>

    <script>
        lightbox.option({
            'alwaysShowNavOnTouchDevices': true,
        })
    </script>

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

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/responsive.css" />

</head>

<body>
    <div class="menu_outside_bg" data-target="#slide-navbar-collapse"></div>

    <div class="container-fluid logo_with_navbar">

        <div class="container">

            <div class="row ">
                <!-- <div class="col-lg-2 col-8 ">
                    <a href="#" class="logo"><img src="<?php echo base_url() ?>Assets/services/js/images/logo.png" alt="Repair Services India"></a>
                </div> -->

                <div class="col-lg-10 col-4">

                    <nav class="navbar navbar-expand-lg navbar-light ">

                        <button class="navbar-toggler" type="button" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="slide-navbar-collapse">
                            <ul class="navbar-nav mr-auto ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="http://portal99.in/urbanclap-clone-script">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://portal99.in/urbanclap-clone-script/partner" target="_blank">Become As Partner</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/blog">Contact</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#modal_login">Login / Sign Up</a></li>

                            </ul>

                        </div>
                    </nav>

                </div>

            </div>

        </div>

    </div>
    <div class="container-fluid  after_header">

        <div class="container-fluid category_page2">

            <div class="bg_no" style="position:relative;background:url(<?= base_url(), $row1->image ?>)">
                <div class="category_page_banner_shade"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-md-8 category_page2_left ">

                            <div class="breadcrumb">
                                <span><a href="<?php echo base_url() ?>home">Home </a></span> <span> / </span>
                                <span><a href="<?php echo base_url() ?>home">Delhi NCR </a></span> <span> / </span>
                                <span><a href=""><?= $row1->title ?> </a></span>
                            </div>

                            <div class="col-md-12">
                                <h1 class="heading_category_page2_banner   pt-5"><?= $row1->title ?> in Delhi NCR</h1>

                            </div>

                            <div class="col-md-12  category_page2_text1">

                                <ul>
                                    <li>Upto Rs 10,000 damage insurance</li>
                                    <li>30 day service guarantee</li>
                                    <li>Background checked and trained technicians with genuine parts &amp; fixed pricing</li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 mt-2  ">

                            <div class="card  category_page2_right_box1 position-fixed">
                                <div class="card-body ">

                                    <div class="">

                                        <h5 class="card-title pb-2">Need an <?= $row->title ?> Technician for:</h5>
                                        <div class="card-text">
                                            <?php
                                            foreach ($records as $row) :
                                            ?>
                                                <div class="category_page2_right_box1_field">
                                                    <button class="modal_step2_btn"><?= $row->catsub_name ?></button>

                                                </div>
                                            <?php
                                            endforeach
                                            ?>
                                            <div class="category_page2_right_box1_field">
                                                <button class="modal_step2_btn text-center">Next</button>

                                            </div>

                                            <div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="card     ">
                                    <div class="card-body ">
                                        <div class="card-text">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="category_page2_right_box2_rating">
                                                        <i class="fas fa-star"></i>
                                                        <span>4.7/5</span></div>
                                                    <div class="category_page2_right_box2_text1">based on 38,708 reviews</div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="category_page2_right_box2_text2">1,02,822</div>
                                                    <div class="category_page2_right_box2_text1">Bookings done in last 1 year</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="container">

                <div class="row">
                    <div class="col-md-8">

                        <ul class="nav nav-tabs category_page2_right_box2_tab_heading" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-selected="true">Why RSI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile" aria-selected="false">How it Works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact" aria-selected="false">Customer Reviews</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="contact" aria-selected="false">Blogs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab5" role="tab" aria-controls="contact" aria-selected="false">About <?= $row1->title ?></a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="tab1">

                                <h4> Why RSI ? </h4>
                                <hr />

                                <div class="row">
                                    <div class="col-md-2 no_right_pad"><img class="img-fluid category_icon" src="https://www.repairservicesindia.com/public/images/icons/category_icon1.png" /></div>

                                    <div class="col-md-10 no_left_pad"><b>Doorstep repair in 90 minutes</b>

                                        <p><?= $row1->why_msg ?></p>

                                        <ul>
                                            <li>At your chosen time slot</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row pt-5">
                                    <div class="col-md-2 no_right_pad"><img class="img-fluid category_icon" src="https://www.repairservicesindia.com/public/images/icons/category_icon2.png" /></div>

                                    <div class="col-md-10 no_left_pad"><b>Experienced repair professionals</b>

                                        <p>4.3+ star rated</p>

                                        <ul>
                                            <li>Background-verified &amp; trained professionals</li>
                                            <li>We service all Brands &amp; Models</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row pt-5">
                                    <div class="col-md-2 no_right_pad"><img class="img-fluid category_icon" src="https://www.repairservicesindia.com/public/images/icons/category_icon3.png" /></div>

                                    <div class="col-md-10 no_left_pad"><b>Customer protection</b>

                                        <p>Insurance upto 10,000 INR</p>

                                        <ul>
                                            <li>30 Day service guarantee</li>
                                            <li>Insurance upto 10,000 INR against Damages</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab2">

                                <h4> How it Works? </h4>
                                <hr />
                                <div class="row">
                                    <div class="col-md-2 no_right_pad"><img class="img-fluid category_icon" src="https://www.repairservicesindia.com/public/images/icons/category_icon4.png" /></div>

                                    <div class="col-md-10 no_left_pad"><b>Choose the type of AC</b>

                                        <p><?= $row1->how_work ?></p>

                                        <hr />
                                    </div>
                                </div>

                                <div class="row pt-2">
                                    <div class="col-md-2 no_right_pad"><img class="img-fluid category_icon" src="https://www.repairservicesindia.com/public/images/icons/category_icon5.png" /></div>

                                    <div class="col-md-10 no_left_pad"><b>Choose the service you need</b>

                                        <p>We provide repairs, installations &amp; servicing</p>

                                        <hr />
                                    </div>
                                </div>

                                <div class="row pt-2">
                                    <div class="col-md-2 no_right_pad"><img class="img-fluid category_icon" src="https://www.repairservicesindia.com/public/images/icons/category_icon6.png" /></div>

                                    <div class="col-md-10 no_left_pad"><b>Choose your time-slot</b>

                                        <p>We service from <?= $row->service_time ?></p>

                                        <hr />
                                    </div>
                                </div>

                                <div class="row pt-2">
                                    <div class="col-md-2 no_right_pad"><img class="img-fluid category_icon" src="https://www.repairservicesindia.com/public/images/icons/category_icon7.png" /></div>

                                    <div class="col-md-10 no_left_pad"><b>Hassle-free service</b>

                                        <p>Our professional will get in touch with you one hour before the service</p>

                                        <hr />
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab3">
                                <h4>Customer Reviews </h4>
                                <div>of <?= $row1->title ?> Professionals in New Delhi</div>
                                <div class="clearfix"></div>

                                <hr class="pt-3 pb-3" />

                                <div class="row">

                                    <div class="col-md-12 pt-2 pb-2 mb-3 ">
                                        <h4 class="text-uppercase" style="cursor:pointer" data-toggle="collapse" data-target="#review">
                                            <i class="fa"></i>
                                            Write Your Review </h4>

                                        <div class="review_msg"></div>

                                        <form class="collapse review-form" id="review" action="http://portal99.in/urbanclap-clone-script/ajax/review_submit" method="post">
                                            <input type="hidden" name="_token" value="tNtAxUTCONyCnEUmhHoxwbhG1sN1295npC795HMf">

                                            <div class="form-group">
                                                <input class="form-control" type="text" name="name" data-validation="required" placeholder="Your Name" />
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Your review" data-validation="required" name="review"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-rating">
                                                    <strong class="text-uppercase">Your Rating: </strong>
                                                    <div class="stars">
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label for="star5"></label>
                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label for="star4"></label>
                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label for="star3"></label>
                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label for="star2"></label>
                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label for="star1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary submit_review">Submit</button>
                                            <input type="hidden" name="cid" value="25" />
                                        </form>

                                    </div>

                                </div>

                                <div class="pb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="category_page2_text5 quote"> Great job done</p>
                                        </div>
                                    </div>

                                    <div class="row pl-3">
                                        <div class="col-md-1">
                                            <div class="circle_box color1">N</div>
                                        </div>
                                        <div class="col-md-11">
                                            <p class="category_page2_text6">Nitesh Kumar Pathak</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="pb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="category_page2_text5 quote"> Fast service</p>
                                        </div>
                                    </div>

                                    <div class="row pl-3">
                                        <div class="col-md-1">
                                            <div class="circle_box color1">I</div>
                                        </div>
                                        <div class="col-md-11">
                                            <p class="category_page2_text6">IMAM</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="pb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="category_page2_text5 quote"> Good service and overall behavior</p>
                                        </div>
                                    </div>

                                    <div class="row pl-3">
                                        <div class="col-md-1">
                                            <div class="circle_box color1">M</div>
                                        </div>
                                        <div class="col-md-11">
                                            <p class="category_page2_text6">Manish Bagga</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="pb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="category_page2_text5 quote"> hello abc</p>
                                        </div>
                                    </div>

                                    <div class="row pl-3">
                                        <div class="col-md-1">
                                            <div class="circle_box color1">P</div>
                                        </div>
                                        <div class="col-md-11">
                                            <p class="category_page2_text6">Pawan Kumar</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab4">

                                <div class="row pt-1">

                                    <div id="blog_post_carousel" class="owl-carousel owl-theme  row w-100 mx-auto">

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab5">

                                <h4>All About <?= $row1->title ?> </h4>
                                <hr />

                                <div class="row">

                                    <div class="col-md-12 category_page2_text7">
                                        <h3>Services offered in <?= $row1->title ?></h3>

                                        <ul>
                                            <li>Installing an AC: Choose this service for AC installation at your place. The professional will ensure that the AC is running properly as gas pressure and performance of the appliance will be checked post AC installation.</li>
                                            <li>Uninstalling an existing AC: Select this option when you need professionals to dismount an AC. The appliance will be checked before the AC uninstallation.</li>
                                            <li>Wet services: This service includes an end to end cleaning of your AC (which is not faulty). Cooling coils, condenser coils, outer panel, drain and filet pipes will be extensively cleaned and washed. However, high-pressure jet pumps will not be used for the cleaning purpose. Tick this service when you want your AC to be properly cleaned.</li>
                                            <li>Repairs: Choose this option for diagnosis and repair of your AC. The professional will check the AC upon visitation and provide with quotation depending on the condition of the appliance.</li>
                                        </ul>

                                        <h3>Why <?= $row1->title ?>?</h3>

                                        <ul>
                                            <li>Customer Protection: Unlike any other service provider, provides a customer protection of Rs. 10,000 against damages.</li>
                                            <li>Verified Professionals: All the professionals on board with are taken through a screening process to check for their expertise.</li>
                                            <li>Service Warranty: We at take full ownership of our services and hence, this is the reason that we provide a service warranty of 30 days.</li>
                                            <li>Customer Centric: All our services are curated keeping our customers in mind and AC repair service is no exception.</li>
                                            <li>Standardized pricing: To save our customers from unfair pricing, we have come up with the idea of standardized pricing with the rate card shared on both our website and App.</li>
                                            <li>Online payment: Now pay hassle free post your service through our online portal. You will receive a link via SMS and/or email which will take you to the online payment portal.</li>
                                        </ul>

                                        <p>Like any other machinery, an appliance such as AC needs to be maintained and looked after for its healthy functioning. Hence, the appliance should receive a proper service before the start of summer season. After all, nothing can be worse than a broken or faulty AC. Hunting a service personnel for AC repair in the sultry weather can be a hassle. You can now book a professional either for service and repair within minutes from your home. You don&rsquo;t even need to clear your schedule as you can choose your desirable time slot. &rsquo;s AC repair service has proven to be a blessing for our customers as we continue to receive happy testimonials and ratings from our customers.</p>

                                        <h3>How it works?</h3>

                                        <p>To find the best professionals near you in no time, you just need to go on the website or App and search for &lsquo;AC Repair&rsquo; in the search tab. A pop up tab will open up wherein you will need to fill in the details according to your requirements. Questions such as what kind of service is required &ndash; split AC or window AC, location, time, etc. compromise the questionnaire. Once your request is uploaded on the portal, a professional will be at your doorstep at your requested time and location.</p>

                                        <h3>AC Common Repair/Service Prices in Delhi</h3>

                                        <table class="table table-striped table-hovered">
                                            <thead>
                                                <tr>
                                                    <th>Part Name</th>
                                                    <th>Spare Part Cost (INR)</th>
                                                    <th>Labour Cost (INR)</th>
                                                    <th>Final Cost</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Repair Of PCB</td>
                                                    <td>1500</td>
                                                    <td>499</td>
                                                    <td>NA</td>
                                                </tr>
                                                <tr>
                                                    <td>Gas Charging</td>
                                                    <td>NA</td>
                                                    <td>NA</td>
                                                    <td>2500(Including Nitrogen Flushing)</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        </tbody>
                                        </table>

                                        <p><strong>* Branded spare parts will be charged at MRP<br />
                                                *Overall labour cost will not exceed INR 499</strong></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                    </div>

                </div>

            </div>

        </div>

        <script type="text/javascript">
            $(document).on('ready', function() {

                $(".slider_blog_posts").slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 2000,
                    responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });

            });
        </script>

        <div style="z-index:99999" class="modal fade" id="modal_step2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-mg" role="document">
                <div class="modal-content" style="position:relative">
                    <form id="order_form" action="http://portal99.in/urbanclap-clone-script/ajax/order_place" method="post">
                        <input type="hidden" name="_token" value="tNtAxUTCONyCnEUmhHoxwbhG1sN1295npC795HMf">

                        <img style="display:none" class="loader" src="<?php echo base_url() ?>Assets/services/js/images/loader_image.png" alt="">

                        <div class="modal-header">

                            <a href="javascript:void(0)" class="modal_prev_btn modal_next_prev_btn" data-type="prev"><i class="fas fa-arrow-left"></i></a>

                            <h5 class="modal-title step2_modal_title" id="exampleModalLongTitle"><?= $row1->title ?></h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body pl-4">

                            <div class="row">

                                <div class="modal_phase phase1 col-md-12">
                                    <h3 class="pt-3 pb-2 text-center">Our Advantage</h3>
                                    <hr />
                                    <div class="text-left">
                                        <ul>
                                            <li>Service Guarantee&nbsp;</li>
                                            <li>Warranty period top class&nbsp;</li>
                                            <li>Repair&nbsp;service&nbsp;washing machine&nbsp;microwave&nbsp;Customer Protection of upto Rs.10,000 against damages</li>
                                            <li>30-day service guarantee</li>
                                            <li>Professional Servicing &amp; Repair</li>
                                        </ul>
                                    </div>

                                    <div class="row">

                                    </div>

                                </div>

                                <div style="display:none" class="modal_phase phase2 col-md-12">
                                    <h3 class="pt-3 pb-2 text-center">What are you looking for?</h3>

                                    <div class="row service_list_item">
                                        <label class="col-md-12 pt-2  ">
                                            <?php
                                            foreach ($records as $row) :
                                            ?>
                                                <div style=" text-align:left;float:left">
                                                    <h4>
                                                        <input type="checkbox" name="services[]" class="services" value="3" data-cost="<?= $row->rate ?>" data-title="<?= $row->catsub_name ?>" /> &nbsp;&nbsp; <?= $row->catsub_name ?>
                                                    </h4>
                                                </div>

                                                <div style=" text-align:right;float:right;">
                                                    <b>Rs. <?= $row->rate ?> </b>
                                                </div>

                                                <div class="clearfix"></div>

                                                <ul>
                                                    <li>
                                                        <p>Deep Cleaning the AC for fresh air</p>
                                                    </li>
                                                    <li>
                                                        <p>Filter, coils etc. cleaned with water</p>
                                                    </li>
                                                    <li>
                                                        <p>Save upto 20% on your summer electricity bill with regular servicing</p>

                                                        <hr />
                                                        <p>&nbsp;</p>
                                                    </li>
                                                </ul>

                                                <p>&nbsp;</p>

                                                <hr />
                                                <p>&nbsp;</p>
                                            <?php
                                            endforeach
                                            ?>
                                        </label>
                                    </div>
                                </div>

                                <div style="display:none" class="modal_phase phase3 col-md-12">

                                    <h3 class="pt-md-5 p-3 mt-md-3 pb-md-5 mb-md-5 text-center"> Where do you require the service </h3>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="name_field_container">
                                                <input class="txt_fld_pop name_field" type="text" name="name" placeholder="Your Name" />

                                                <div class="form-group name_title_container radio-toggle">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="name_title" value="Mr" checked="checked"> Mr
                                                        </label>
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="name_title" value="Ms"> Ms
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <input class="txt_fld_pop" type="text" name="flat_building" placeholder="Flat/Building/Street" />

                                            <input class="txt_fld_pop location_field" type="text" name="location_field" placeholder="Locality" value="" />
                                        </div>
                                    </div>

                                </div>

                                <div style="display:none" class="modal_phase phase4 col-md-12">

                                    <h3 class="pt-3 pb-2 text-center"> Select date of service</h3>

                                    <div id="date_of_service"></div>
                                    <input type="hidden" name="date_of_service" class="form-control" />
                                    <br />

                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <h3 class="text-center">Time</h3>
                                        </div>

                                        <div class="col-12 text-center">
                                            <div class="btn btn-outline-secondary text-align-center"> 24hours Resolved </div>

                                        </div>
                                    </div>

                                </div>

                                <div style="display:none" class="modal_phase phase5 col-md-12">

                                    <h3 class="pt-3 pb-2 text-center"> Pricing Details:</h3>

                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-9">
                                            <table width="100%" border="0" class="table border pricing_details_table pricing_details">

                                            </table>

                                            <div class="text-center pt-3 pb-3">
                                                By submitting request, you accept our
                                                <a href="http://portal99.in/urbanclap-clone-script/terms" target="_blank">terms of use </a> and <a href="http://portal99.in/urbanclap-clone-script/privacy-policy" target="_blank">privacy policy </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div style="display:none" class="modal_phase phase6 col-md-12">

                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-7 pt-4 ">

                                            <div class="phone_container">

                                                <h3 class="pt-3 pb-2 text-center"> <?= $row1->title ?> Technician Should Contact You On:</h3>

                                                <div class="pb-4 inner_content">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">+91 </div>
                                                        </div>
                                                        <input type="text" class="form-control border p-4" name="phone" placeholder="Your phone number">
                                                    </div>
                                                </div>

                                                <div class="btn_other row justify-content-center align-items-center">
                                                    <button class="text-center pt-2 pb-2 btn btn-dark col-md-11" onclick="return otp_sent();">
                                                        Continue
                                                    </button>

                                                </div>

                                            </div>

                                            <div style="display:none" class="otp_container">
                                                <h3 class="pt-3 pb-2 text-center"> Enter OTP</h3>
                                                <div class="text-center">OTP sent on
                                                    <span class="otp_sent_phone_no"> </span> <a href="javascript:void(0)" onclick="return otp_sent_back();">Edit</a></div>

                                                <div class="pb-4 pt-4">
                                                    <div class="input-group mb-2">

                                                        <input type="text" class="form-control border-bottom p-4" name="otp" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="row justify-content-center align-items-center">
                                                    <button disabled="disabled" class="btn_login_otp text-center pt-2 pb-2 btn btn-dark col-md-11" onclick="return btn_login();">
                                                        Login
                                                    </button>

                                                </div>

                                            </div>

                                            <div class="mt-2 otp_sent_msg text-center"> </div>

                                        </div>

                                    </div>

                                </div>

                                <div style="display:none" class="modal_phase phase7 col-md-12">

                                    <div class="row ">
                                        <div class="col-md-6">
                                            <h3 class="pt-2 pb-2  "> Pay Using</h3>

                                            <label class="row  pt-2 pb-2 border-bottom">

                                                <div class="col-10">Pay Cash After Service</div>
                                                <div class="col-1">
                                                    <input type="radio" name="payment_method" value="pay_cash_after_service" required />
                                                </div>

                                            </label>

                                            <label class="row  pt-2 pb-2 border-bottom">

                                                <div class="col-10">Paytm</div>
                                                <div class="col-1">
                                                    <input type="radio" name="payment_method" value="paytm" required />
                                                </div>

                                                <div style="display:none" class="payment_option paytm_qr_code col-12"><img class="img img-fluid" src="https://www.repairservicesindia.com/uploads/media/1560759799_Paytm2.png" />
                                                    <br />

                                                    <input type="text" name="transaction_id[]" class="transaction_id_paytm  mt-2 form-control" placeholder="Enter Transaction ID After Payment " />

                                                </div>

                                            </label>

                                            <label class="row  pt-2 pb-2  ">
                                                <div class="col-10">UPI</div>
                                                <div class="col-1">
                                                    <input type="radio" name="payment_method" value="upi" required />
                                                </div>

                                                <div style="display:none" class="payment_option upi_id col-12">
                                                    <h4>Repairservicesindia@upi</h4>

                                                    <input type="text" name="transaction_id[]" class="transaction_id transaction_id_upi mt-2 form-control" placeholder="Enter Transaction ID After Payment " />

                                                </div>

                                            </label>

                                            <script>
                                                $(document).ready(function() {

                                                    $('input[name=payment_method]').on('click', function() {
                                                        var value = $(this).val();

                                                        $('.payment_option').hide();

                                                        if (value == 'paytm') {
                                                            $('.paytm_qr_code').fadeIn();
                                                            $('.transaction_id_upi').val('').attr;
                                                        }

                                                        if (value == 'upi') {
                                                            $('.upi_id').fadeIn();
                                                            $('.transaction_id_paytm').val('');
                                                        }

                                                        if (value == 'bank') {
                                                            $('.bank_details').fadeIn();
                                                            $('.transaction_id_upi').val('');
                                                            $('.transaction_id_paytm').val('');
                                                        }

                                                    });

                                                });
                                            </script>

                                        </div>

                                        <div class="col-md-6">
                                            <h3 class="pt-2 pb-2  "> Payment Summary</h3>

                                            <table width="100%" border="0" class="table table-bordered">
                                                <tr>
                                                    <td>Service Total</td>
                                                    <td class="final_st"></td>
                                                </tr>
                                                <tr>
                                                    <td>Service Amount Payable</td>
                                                    <td class="final_sap"></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Service Amount</td>
                                                    <td class="final_tsa"></td>
                                                </tr>
                                                <tr>
                                                    <td>Amount Payable
                                                        <div class="coupon_applied_discount_display"></div>
                                                    </td>
                                                    <td class="final_ap"></td>
                                                </tr>
                                            </table>

                                            <br />

                                            <input type="text" class="form-control p-2" name="coupon" placeholder="Have a Promo code ?" />
                                            <input type="hidden" name="coupon_applied_id" />
                                            <input type="hidden" name="coupon_applied_discount" />
                                            <button class="btn_apply_coupon btn btn-sm btn-info" style="display:none">Apply Coupon</button>
                                            <div class="coupon_message"></div>

                                        </div>

                                    </div>

                                    <div class="row pt-3 mt-3 btn_pay_now_container">
                                        <div class="col-md-12">
                                            <button id="btn_pay_now" type="button" style="width: 100%;  " class="btn btn-primary " onclick="return place_order();">
                                                Confirm Payment <span class="loader_btn_pay_now"></span> </button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <input type="hidden" name="sub_total" class="sub_total form-control" />

                            <input type="hidden" name="grand_total" class="grand_total form-control" />

                            <input type="hidden" class="is_phone_step_completd" name="is_phone_step_completd" value="0" />
                            <input type="hidden" class="" name="cid" value="25" />

                            <input type="hidden" name="city_id" value="6" />

                        </div>
                        <div class="modal-footer">
                            <button type="button" style="width:100%" class="btn btn-secondary modal_next_btn modal_next_prev_btn" data-type="next" data-current_phase="1">Next</button>
                        </div>

                        <div style="display:none;" class="btn col-md-12 p-4 bg-danger text-white error_modal_container">Some error !</div>

                    </form>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/bootstrap_carousel.css" media="all" />

        <script>
            $('input[name=coupon]').on('keydown', function() {

                $('.btn_apply_coupon').fadeIn();

            });

            $(document).on("click", '.btn_apply_coupon', function(event) {

                var coupon_code = $('input[name=coupon]').val();

                if (coupon_code == '') {
                    return false;
                }

                var data = $('#order_form').serialize();

                $.ajax({
                    url: 'http://portal99.in/urbanclap-clone-script/ajax/coupon_apply',
                    type: 'POST',
                    data: data,
                    success: function(output) {

                        var status = output.status;

                        if (status == 1) {
                            $('.coupon_message').html('<p class="text-success">Coupon applied successfully !</p>');
                            $('.btn_apply_coupon').fadeOut();

                            var cid = output.cid;
                            var discount = output.discount;

                            var grand_total_after_discount = output.grand_total_after_discount;

                            $('input[name=grand_total]').val(grand_total_after_discount);
                            $('.final_ap').html('Rs. ' + grand_total_after_discount);

                            $('input[name=coupon_applied_id]').val(cid);
                            $('input[name=coupon_applied_discount]').val(discount);
                            $('.coupon_applied_discount_display').html('<div class="badge badge-info">Coupon Discount Rs. ' + discount + ' applied </div>');

                        } else if (status == 2) {
                            $('.coupon_message').html('<p class="text-danger">You already used this coupon !</p>');
                        } else {
                            $('.coupon_message').html('<p class="text-danger">Invalid Coupon Code !</p>');
                            //$('.message').html('<div class="alert alert-danger">Coupon is either invalid, expired or reached its usage limit !</div>');
                        }

                    }

                });

                return false;

            });

            $(document).on("click", '.coupon_remove', function(event) {

                $.ajax({
                    url: 'http://portal99.in/urbanclap-clone-script/ajax/coupon_remove',
                    type: 'GET',
                    success: function(output) {

                        if (output == 1) {
                            $('.message').html('<div class="alert alert-success">Coupon removed successfully !</div>');
                            get_cart();

                        } else {
                            $('.message').html('<div class="alert alert-danger">Error removing coupon !</div>');
                        }

                    }

                });

                return false;

            });
        </script>

        <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/js/owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/js/owlcarousel/owl.theme.default.min.css">
        <script src="<?php echo base_url() ?>Assets/services/js/owlcarousel/owl.carousel.min.js"></script>
        <script>
            setTimeout(function() {

                $('#blog_post_carousel').owlCarousel({
                    loop: true,
                    margin: 30,
                    autoplay: true,
                    items: 4,
                    dots: true,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 5,
                            nav: false,
                        }
                    }
                });

            }, 1000);
        </script>

        <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/js/toggleinput/jquery.toggleinput.css" media="all" />

        <script src="<?php echo base_url() ?>Assets/services/js/toggleinput/jquery.toggleinput.js"></script>
        <script>
            jQuery(function($) {
                $('.radio-toggle').toggleInput();
            });
        </script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script>
            var url = "http://portal99.in/urbanclap-clone-script";
        </script>

        <script src="<?php echo base_url() ?>Assets/services/js/jquery_ui/jquery-ui.js"></script>

        <script src="<?php echo base_url() ?>Assets/services/js/js/modal_step.js"></script>
        <script src="<?php echo base_url() ?>Assets/services/js/js/phone_verification.js"></script>

        <div class="container-fluid footer1">

            <div class="container">
                <div class="row  pt-4 pb-4 text-center">

                    <div class="col-md-12 text-center">

                        <h5 class="pt5 pb-3">RELATED SERVICES IN <span class="home_city_name">&nbsp;</span></h5>

                        <ul class="text-center">
                            <li><a href="http://portal99.in/urbanclap-clone-script">Carpenter</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Construction and Renovation</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Electrician</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Hairstyling &amp; Makeup</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Pest Control</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Plumber</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Bathroom Deep Cleaning</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Home Deep Cleaning</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Kitchen Deep Cleaning</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Sofa Cleaning</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">RO or Water Purifier Repair</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Salon at Home</a></li>
                            <li><a href="http://portal99.in/urbanclap-clone-script">Spa at Home for Women</a></li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>
        <div class="container-fluid footer4">

            <div class="container">

                <div class="row  pt-4 pb-4  ">
                    <div class="col-md-7 col-12 footer_logo_copyright">

                        <span class="footer_logo"><a href="javascript:void(0)"> <img src="<?php echo base_url() ?>Assets/services/js/images/loader_image.png" alt="Repair Services India"> </a></span>
                        <span class="footer_txt1"> &copy; 2019-20 Company Name Pvt. Ltd.</span>

                    </div>

                    <div class="col-md-5 col-12 text-right pt-md-3 ">

                        <div class="row">
                            <div class="col-md-6 col-12    ">

                                <a class="footer_small_links" href="/terms">Terms & Conditions</a>
                                <a class="footer_small_links" href="/privacy-policy">Policy</a>
                            </div>

                            <div class="col-md-5 col-12 footer_social_icons float-right  ">
                                <a target="_blank" href="#"><i class="fab fa-facebook-square"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

    <div style="z-index:999999" class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">

            <div class="modal-content">
                <div class="modal-header" style="border:none; z-index:999999">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body pt-2 mt-3 pb-3">

                    <div class="row d-flex justify-content-center">
                        <div class="logo_modal"> <img src="<?php echo base_url() ?>Assets/services/js/images/logo.png" class="img"></div>
                    </div>

                    <div class="row pt-4 d-flex justify-content-center">
                        <div>
                            <h4><b>We Find Your Service Experts</b></h4>
                        </div>
                    </div>

                    <div class="row pt-4 d-flex justify-content-center">
                        <div class="col-md-9 pt-4">

                            <div class="phone_container">

                                <div class="pb-4">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><img class="flag_sm" src="<?php echo base_url() ?>Assets/services/js/images/flag/India_flag.jpg"> +91 </div>
                                        </div>
                                        <input type="text" class="form-control border p-4" name="phone_to_login" placeholder="Your phone number">

                                    </div>

                                    <div class="error_message text-danger input-group p-2"> </div>

                                </div>

                                <div class="row justify-content-center align-items-center">
                                    <button class="text-center pt-2 pb-2 btn btn-dark col-md-11" onClick="return otp_sent_for_login();">
                                        Continue
                                    </button>

                                </div>

                            </div>

                            <div style="display:none" class="otp_container">
                                <h3 class="pt-3 pb-2 text-center"> Enter OTP</h3>
                                <div class="text-center">OTP sent on
                                    <span class="otp_sent_phone_no"> </span> <a href="javascript:void(0)" onClick="return otp_sent_for_login_back();">Edit</a></div>

                                <div class="pb-4 pt-4">
                                    <div class="input-group mb-2">

                                        <input type="text" class="form-control border-bottom p-4" name="otp_for_login" placeholder="">
                                    </div>
                                </div>

                                <div class="row justify-content-center align-items-center">
                                    <button disabled="disabled" class="btn_login_otp_for_phone text-center pt-2 pb-2 btn btn-dark col-md-11" onClick="return btn_login_with_phone();">
                                        Login
                                    </button>

                                </div>

                            </div>

                            <div class="mt-2 otp_sent_msg2 text-center"> </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/services/js/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/services/js/slick/slick-theme.css">

    <script>
        var url = "http://portal99.in/urbanclap-clone-script";
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Urban Clap Clone Script",
            "url": "http://portal99.in/urbanclap-clone-script",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "app.url/sch/i.html?_nkw={srch_str}&ssPageName=GSTL",
                "query-input": "required name=srch_str"
                "sameAs": ["#", "#", "#", "#"]
            }
    </script>

    <script src="<?php echo base_url() ?>Assets/services/js/js/home_login_with_phone.js" type="text/javascript" charset="utf-8"></script>

    <script src="<?php echo base_url() ?>Assets/services/js/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".slider_featured_1").slick({
                dots: false,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $(".slider_review_box").slick({
                dots: false,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]

            });

        });
    </script>

</body>

</html>