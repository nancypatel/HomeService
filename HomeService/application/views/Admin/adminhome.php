<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html style="height: auto; min-height: 100%;">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/bootstrap.css">
  <!-- Font Awesome -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/ionicons.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/_all-skins.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/css.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="<?php echo base_url() ?>Assets/admin/Dashboard/ckeditor.js"></script>
  <style>
    .cke {
      visibility: hidden;
    }
  </style>
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/custom.css">
</head>

<?php include 'Main/Navbar.php'; ?>

<body style="height: auto; min-height: 100%;">
  <div class="content-wrapper" style="min-height: 813px;">
    <section class="content-header">
      <h1> Admin Dashboard </h1>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-body">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>

                <a href="<?php echo base_url() ?>/admin/user">
                  <div class="info-box-content">
                    <span class="info-box-text">Customers</span>
                    <span class="info-box-number"> 1</span>
                  </div>
                </a>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-sitemap"></i></span>

                <a href="<?php echo base_url() ?>/admin/technician">
                  <div class="info-box-content">
                    <span class="info-box-text">Technicians</span>
                    <span class="info-box-number"> 2</span>
                  </div>
                </a>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-shopping-cart"></i></span>
                <a href="<?php echo base_url() ?>/admin/order">
                  <div class="info-box-content">
                    <span class="info-box-text">Orders</span>
                    <span class="info-box-number"> 0 </span>
                  </div>
                </a>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-sitemap"></i></span>

                <a href="<?php echo base_url() ?>/admin/category">
                  <div class="info-box-content">
                    <span class="info-box-text">Category</span>
                    <span class="info-box-number"> 42</span>
                  </div>
                </a>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
        </div>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
</body>

</html>