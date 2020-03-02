<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title>Home Service</title>

    <link rel="icon" href="<?php echo base_url() ?>Assets/services/images/favicon.png" type="image/x-icon">

    <meta name="theme-color" content="#0093dd">

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/bootstrap-reboot.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="<?php echo base_url() ?>Assets/services/js/jquery-2.js"></script>

    <script src="<?php echo base_url() ?>Assets/services/js/popper.js"></script>

    <script src="<?php echo base_url() ?>Assets/services/js/bootstrap.js"></script>

    <script>
        var url = "http://portal99.in/urbanclap-clone-script";
    </script>
    <script src="<?php echo base_url() ?>Assets/services/js/misc.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>Assets/services/js/jquery.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/custom.css">

    <script src="<?php echo base_url() ?>Assets/services/js/home.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/responsive.css">

</head>

<body>

    <div class="container-fluid  after_header">

        <img class="loader" src="Service%20Provider_files/images/loader_image.png" alt="" style="display: none;">

        <div class="container-fluid">

             <div class=" home_banner_bg"  style="background:url(Assets/Images/home/image1.jpg)"> 
             
            <!--<div class=" home_banner_bg" style="background:url(http://portal99.in/urbanclap-clone-script/uploads/banner/1559912948_space.png);"> -->
                <div class="home_banner_shade"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="heading_home_banner text-white text-center pt-md-5 pt-3">We Find Services in <span class="home_city_name">Delhi NCR</span></h1>
                            <h4 class="heading_bottom_home_banner text-white text-center pt-3">Get instant access to reliable and affordable services</h4>
                        </div>
                    </div>

                    <div class="row pt-md-5 pt-2 home_search_container">
                        <div class="col-md-4 col-12">

                            <select class="form-control  select_search_home">
                                <option value="1" data-slug="ahmedabad" data-name="Ahmedabad">Ahmedabad</option>
                                <option value="11" data-slug="ankleshwer" data-name="Ankleshwer">Ankleshwer</option>
                                <option value="3" data-slug="bangalore" data-name="Bangalore">Bangalore</option>
                                <option value="4" data-slug="chandigarh-tricity" data-name="Chandigarh Tricity">Chandigarh Tricity</option>
                                <option value="10" data-slug="chennai" data-name="Chennai">Chennai</option>
                                <option value="6" data-slug="delhi-ncr" data-name="Delhi NCR" selected="selected">Delhi NCR</option>
                                <option value="7" data-slug="lucknow" data-name="Lucknow">Lucknow</option>
                                <option value="9" data-slug="lukhnow" data-name="Lukhnow">Lukhnow</option>

                            </select>

                        </div>

                        <div class="col-md-8 col-12">
                            <input class="form-control text_search_home modal_search_bar" type="text" name="keyword" id="search-box" placeholder="Search for a service">
                            <div id="suggesstion-box"></div>
                        </div>

                    </div>

                </div>

            </div>

            <div style="z-index:99999" class="modal fade" id="modal_search_bar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  " role="document">
                    <div class="modal-content p-4" style=" min-height:400px;">

                        <div class="row">

                            <div class="col-12 ">
                                <div class="row pb-2 ">
                                    <div class=" ">
                                        <button data-dismiss="modal" style="background:none; border:0px;" class=" home_cat_list_search_close_btn"><i class="p-2 fas fa-arrow-left"></i></button>
                                    </div>
                                    <div class=" ">
                                        <input style="border:none; text-indent:10px;" type="text" class=" pl-0 home_cat_list_search form-control" placeholder="Search for a service">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row pt-4 pb-4 home_r3 ">
                <div class="row icon_home_row">
                    <?php
                    foreach ($records as $row) :
                    ?>
                        <div class="modal_services_btn text-center col-md-2 col-4" data-cid="<?= $row->id ?>">
                            <div class="icon_home">
                                <img class="img cat_icon3  " src="<?= $row->banner ?>">

                                <img style="display:none" class="image_on_mobile img cat_icon3" src="Service%20Provider_files/images/1555824909_minisplit%2520copy.png">

                            </div>
                            <h3 class="pt-2"><?= $row->title ?></h3>
                        </div>
                    <?php
                    endforeach
                    ?>

                </div>

            </div>

        </div>

        <div class="container pt-4 ">

            <div class="row">
                <div class="col-md-12">
                    <h4>Recommended Services
                        <a href="javascript:void(0)" class="modal_services_btn d-block  d-sm-none float-right pr-2 btn btn-sm btn-primary" data-cid="0">View All</a>

                    </h4>

                </div>
            </div>

            <div class="row pt-1">

                <div class="slider_featured_1 slider home_slider slick-initialized slick-slider">
                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 14820px; transform: translate3d(0px, 0px, 0px);">
                            <?php
                            foreach ($sub_records as $row) :
                            ?>

                                <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 245px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">

                                            <a href="category/<?= $row->cate_id ?>" tabindex="0">

                                                <img class="img img-fluid rounded" src="<?= $row->image ?>">

                                                <h3><?= $row->title ?></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach
                            ?>

                        </div>
                    </div>
                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button>
                </div>

            </div>

            <div class="row pt-md-5 pt-2">
                <div class="col-md-12">
                    <h4>Appliance Repair
                        <a href="javascript:void(0)" class="modal_services_btn d-block  d-sm-none float-right pr-2 btn btn-sm btn-primary" data-cid="24">View All</a>

                    </h4>
                </div>
            </div>
            <div class="row pt-1">

                <div class="slider_home_category_24 slider home_slider slick-initialized slick-slider">
                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 3990px; transform: translate3d(0px, 0px, 0px);">
                            <?php
                            foreach ($sub_records as $row) :
                                if ($row->parent_cate === 'Appliance Repair') :
                            ?>

                                    <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 245px;">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">

                                                <a href="category/<?= $row->cate_id ?>" tabindex="0">

                                                    <img class="img img-fluid rounded" src="<?= $row->image ?>">

                                                    <h3><?= $row->title ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endif;
                            endforeach;
                            ?>

                        </div>
                    </div>
                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button>
                </div>

            </div>

            <script type="text/javascript">
                $(document).on('ready', function() {

                    $(".slider_home_category_24").slick({
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

                });
            </script>

            <div class="row pt-md-5 pt-2">
                <div class="col-md-12">
                    <h4>Home Cleaning &amp; Repairs
                        <a href="javascript:void(0)" class="modal_services_btn d-block  d-sm-none float-right pr-2 btn btn-sm btn-primary" data-cid="34">View All</a>

                    </h4>
                </div>
            </div>
            <div class="row pt-1">

                <div class="slider_home_category_34 slider home_slider slick-initialized slick-slider">
                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 3990px; transform: translate3d(0px, 0px, 0px);">
                            <?php
                            foreach ($sub_records as $row) :
                                if ($row->parent_cate === 'Home Cleaning Repair') :
                            ?>
                                    <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 245px;">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">

                                                <a href="category/<?= $row->cate_id ?>" tabindex="0">

                                                    <img class="img img-fluid rounded" src="<?= $row->image ?>">

                                                    <h3><?= $row->title ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endif;
                            endforeach;
                            ?>

                        </div>
                    </div>
                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button>
                </div>

            </div>

            <script type="text/javascript">
                $(document).on('ready', function() {

                    $(".slider_home_category_34").slick({
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

                });
            </script>

            <div class="row pt-md-5 pt-2">
                <div class="col-md-12">
                    <h4>Beauty &amp; SPA
                        <a href="javascript:void(0)" class="modal_services_btn d-block  d-sm-none float-right pr-2 btn btn-sm btn-primary" data-cid="35">View All</a>

                    </h4>
                </div>
            </div>
            <div class="row pt-1">

                <div class="slider_home_category_35 slider home_slider slick-initialized slick-slider">
                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 3990px; transform: translate3d(0px, 0px, 0px);">
                            <?php
                            foreach ($sub_records as $row) :
                                if ($row->parent_cate === 'Beauty SPA') :
                            ?>
                                    <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 245px;">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">

                                                <a href="category/<?= $row->cate_id ?>" tabindex="0">

                                                    <img class="img img-fluid rounded" src="<?= $row->image ?>">

                                                    <h3><?= $row->title ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endif;
                            endforeach;
                            ?>

                        </div>
                    </div>
                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button>
                </div>

            </div>

            <script type="text/javascript">
                $(document).on('ready', function() {

                    $(".slider_home_category_35").slick({
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

                });
            </script>

            <div class="row pt-md-5 pt-2">
                <div class="col-md-12">
                    <h4>Wedding &amp; Events
                        <a href="javascript:void(0)" class="modal_services_btn d-block  d-sm-none float-right pr-2 btn btn-sm btn-primary" data-cid="54">View All</a>

                    </h4>
                </div>
            </div>
            <div class="row pt-1">
                <div class="slider_home_category_54 slider home_slider slick-initialized slick-slider">
                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>
                    <div class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 3990px; transform: translate3d(0px, 0px, 0px);">
                            <?php
                            foreach ($sub_records as $row) :
                                if ($row->parent_cate === 'Wedding Events') :
                            ?>
                                    <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 245px;">
                                        <div>
                                            <div style="width: 100%; display: inline-block;">

                                                <a href="category/<?= $row->cate_id ?>" tabindex="0">

                                                    <img class="img img-fluid rounded" src="<?= $row->image ?>">

                                                    <h3><?= $row->title ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endif;
                            endforeach;
                            ?>

                        </div>
                    </div>
                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button>
                </div>

            </div>

            <script type="text/javascript">
                $(document).on('ready', function() {

                    $(".slider_home_category_54").slick({
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

                });
            </script>
        </div>

        <!-- Modal -->
        <div class="modal" id="modal_services" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-4 modal_services_left">

                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                    <a style="display:none" class="home_pop2_close" href="javascript:void(0)" data-dismiss="modal"><i class="fas fa-arrow-left"></i></a>
                                    <?php
                                    foreach ($records as $row) :
                                    ?>
                                        <a class="nav-link" data-toggle="pill" href="#v-pills-cid-<?= $row->id ?>" data-modal_services_nav_link_cid="<?= $row->id ?>">

                                            <img class="img cat_icon1" src="<?= $row->banner ?>"> <?= $row->title ?>

                                        </a>
                                    <?php
                                    endforeach
                                    ?>

                                    <a class="nav-link d-md-none  d-lg-none" data-toggle="pill" href="#v-pills-cid-0" data-modal_services_nav_link_cid="0">
                                        Recommended Services
                                    </a>

                                </div>
                            </div>

                            <div class="col-md-8 modal_services_right">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <?php
                                    foreach ($sub_records as $row) :
                                    ?>
                                        <div class="tab-pane  show" id="v-pills-cid-<?= $row->parent_id ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <?php
                                            foreach ($sub_records as $row1) :
                                                if ($row->parent_id === $row1->parent_id) :
                                            ?>
                                                    <div class="tab_pane_inner">

                                                        <a href="category/<?= $row1->cate_id ?>" tabindex="0">

                                                            <img class="img d-none d-sm-block cat_icon2" src="<?= $row1->banner ?>">

                                                            <img class="img d-block-inline d-sm-none  pr-2 cat_icon4" src="<?= $row1->banner ?>"> <?= $row1->title ?></a>
                                                    </div>
                                            <?php
                                                endif;
                                            endforeach
                                            ?>
                                        </div>
                                    <?php
                                    endforeach
                                    ?>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

<!--start of footer-->
        <script>
            $(document).ready(function() {
                $('.loader').fadeOut(1000);

            });
        </script>
<!-- End of footer-->
    <div style="z-index:999999" class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">

            <div class="modal-content">
                <div class="modal-header" style="border:none; z-index:999999">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body pt-2 mt-3 pb-3">

                    <div class="row d-flex justify-content-center">
                        <div class="logo_modal"> <img src="Service%20Provider_files/images/logo.png" class="img"></div>
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
                                            <div class="input-group-text"><img class="flag_sm" src="Service%20Provider_files/images/India_flag.jpg"> +91 </div>
                                        </div>
                                        <input type="text" class="form-control border p-4" name="phone_to_login" placeholder="Your phone number">

                                    </div>

                                    <div class="error_message text-danger input-group p-2"> </div>

                                </div>

                                <div class="row justify-content-center align-items-center">
                                    <button class="text-center pt-2 pb-2 btn btn-dark col-md-11" onclick="return otp_sent_for_login();">
                                        Continue
                                    </button>

                                </div>

                            </div>

                            <div style="display:none" class="otp_container">
                                <h3 class="pt-3 pb-2 text-center"> Enter OTP</h3>
                                <div class="text-center">OTP sent on
                                    <span class="otp_sent_phone_no"> </span> <a href="javascript:void(0)" onclick="return otp_sent_for_login_back();">Edit</a></div>

                                <div class="pb-4 pt-4">
                                    <div class="input-group mb-2">

                                        <input type="text" class="form-control border-bottom p-4" name="otp_for_login" placeholder="">
                                    </div>
                                </div>

                                <div class="row justify-content-center align-items-center">
                                    <button disabled="disabled" class="btn_login_otp_for_phone text-center pt-2 pb-2 btn btn-dark col-md-11" onclick="return btn_login_with_phone();">
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/services/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/services/css/slick-theme.css">
    
    <script>
        var url = "http://portal99.in/urbanclap-clone-script";
    </script>


    <script src="<?php echo base_url() ?>Assets/services/js/home_login_with_phone.js" type="text/javascript" charset="utf-8"></script>

    <script src="<?php echo base_url() ?>Assets/services/js/slick.js" type="text/javascript" charset="utf-8"></script>
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