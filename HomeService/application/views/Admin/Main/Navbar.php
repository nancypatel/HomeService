<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html style="height: auto; min-height: 100%;">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin - Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/bootstrap.css">
  <!-- Font Awesome -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/_all-skins.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Dashboard/css.css">
  <script src="<?php echo base_url() ?>Assets/admin/Dashboard/jquery.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url() ?>Assets/admin/Dashboard/bootstrap.js"></script>

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

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
  <!-- Site wrapper -->
  <div class="wrapper" style="height: auto; min-height: 100%;">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url() ?>admin/home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Admin</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin Panel</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu">
          <i class="fa fa-bars"></i>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-wallet"></i>
                <span class="label label-success">0</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li class="footer"><a href="<?php echo base_url() ?>admin/technician_wallet">Total 0 new inactive recharge</a></li>
                    <!-- end message -->
                  </ul>
                </li>
              </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url() ?>Assets/admin/Dashboard/user2-160x160.jpg" class="user-image img-circle" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url() ?>Assets/admin/Dashboard/user2-160x160.jpg" class="user-image img-circle" alt="User Image">

                  <p>
                    Admin
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url() ?>admin/profile" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url() ?>admin/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url() ?>Assets/admin/Dashboard/user2-160x160.jpg" class="user-image img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p> Admin</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">

          <li><a href="http://localhost/HomeService/HomeService/Dashboard">
              <i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-database"></i> <span>Category</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="http://localhost/HomeService/HomeService/Dashboard/adcategory"><i class="fa fa-circle"></i> Category
                </a></li>
              <li><a href="<?php echo base_url() ?>admin/review"><i class="fa fa-circle"></i> Reviews</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/order">
              <i class="fa fa-th"></i> <span>Orders</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/order_revenue">
              <i class="fa fa-th"></i> <span>Orders Revenue</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/user">
              <i class="fa fa-th"></i> <span>Customers</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i> <span>Technicians</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() ?>admin/technician"><i class="fa fa-circle"></i> Technicians</a></li>
              <li><a href="<?php echo base_url() ?>admin/technician_wallet"><i class="fa fa-circle"></i> Wallet Recharge</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/city">
              <i class="fa fa-th"></i> <span>City</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/page">
              <i class="fa fa-th"></i> <span>Contact</span>

            </a>

          </li>


          <li>
            <a href="<?php echo base_url() ?>admin/media">
              <i class="fa fa-th"></i> <span>Media</span>

            </a>

          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/home_category">
              <i class="fa fa-th"></i> <span>Home Category</span>

            </a>

          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/banner">
              <i class="fa fa-th"></i> <span>Home Banner</span>

            </a>

          </li>
          <li>
            <a href="<?php echo base_url() ?>admin/enquiry">
              <i class="fa fa-th"></i> <span>Enquiries</span>

            </a>

          </li>
          <li>
            <a href="http://localhost/HomeService/HomeService/Contact/">
              <i class="fa fa-th"></i> <span>Contact</span>

            </a>

          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->
  <script>
    var url = "http://portal99.in/urbanclap-clone-script";
  </script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>Assets/admin/Dashboard/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() ?>Assets/admin/Dashboard/demo.js"></script>
</body>

</html>