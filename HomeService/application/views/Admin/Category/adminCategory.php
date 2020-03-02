<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html style="height: auto; min-height: 100%;">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Categories</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/ionicons.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/services/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>Assets/services/css/_all-skins.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="<?php echo base_url()?>Assets/services/css/css.css">

    <script src="<?php echo base_url()?>Assets/services/css/jquery.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url()?>Assets/services/css/bootstrap.js"></script>

    <link rel="stylesheet" href="<?php echo base_url()?>Assets/services/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script src="<?php echo base_url()?>Assets/services/css/ckeditor.js"></script>
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url()?>Assets/services/css/custom.css">

    <script type="text/javascript" src="<?php echo base_url()?>Assets/services/css/int.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>Assets/services/css/api.txt"></script>
    <script type="text/javascript" src="<?php echo base_url()?>Assets/services/css/21c1e810f7f98f00b3.js"></script>
</head>

<?php include '/xampp/htdocs/HomeService/HomeService/application/views/Admin/Main/Navbar.php'; ?> 

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
        <div  ng-app="myapp" ng-controller="CategCtrl as c" class="content-wrapper" style="min-height: 813px;">
            <section class="content-header">
                <h1> Categories </h1>
            </section>

            <section class="content">
                <div class="box">
                    <div class="box-body">
                        <a class="btn btn-medium btn-primary pull-right" href="http://localhost/HomeService/HomeService/Dashboard/Addcat">Add Category</a>
                        <br>
                        <table class="table  table-striped table-hover" width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td>S/No</td>
                                    <td>Image</td>
                                    <td>Icon</td>
                                    <td>Title</td>
                                    <td>Service</td>
                                    <td>Meta Description</td>
                                    <td>Is Featured </td>
                                    <td>Status</td>
                                    <td>service Time</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>

                                <tr ng-repeat="A in Category">
                                    <td>{{A.cate_id}}</td>
                                    <td><img class="img img-responsive" style="width:50px" src="<?php echo base_url()?>Assets/services/css/1555827163_34680.png">{{A.image}}</td>
                                    <td><img class="img img-responsive" style="width:30px" src="<?php echo base_url()?>Assets/services/css/1555671712_259981.svg">{{A.icon}}</td>
                                    <td>{{A.title}}</td>
                                    <td><span class="badge badge-info">
                                      <a style="color:#fff" href="http://portal99.in/urbanclap-clone-script/admin/service?cid=24">0&nbsp;
                                      <i class="fa fa-list-alt"></i></a></span>
                                    </td>
                                    <td>{{A.how_work}}</td>
                                    <td>{{A.isfeature}}</td>
                                    <td><i style="color:green" class="fa fa-check-circle"></i>{{A.status}}</td>
                                    <td>{{A.service_time}}</td>
                                    <td><a href="http://localhost/Extra/HomeService/Dashboard1/EditCat"><i ng-click="edit(A.cate_id)" class="fa fa-edit"></i></a></td>
                                    <td>
                                        <form action="#" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="uHbBheiPOz5ZLb9cIrGKmeO0kzo2c0RizLty22Ps">
                                            <input type="hidden" name="submit" value="Delete">
                                            <button onclick="return confirm('Are you sure want to delete this ?');return false;"><i ng-click="delete(A.cate_id)" class="fa fa-trash" aria-hidden="true"></i></button>

                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center"></div>

                    </div>

                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    
    <!-- jQuery 3 -->

    <!-- SlimScroll -->
    <!-- <script>
        var url = "http://portal99.in/urbanclap-clone-script";
    </script> -->
    <script src="<?php echo base_url()?>Assets/services/css/jquery_002.js"></script>
    <!-- FatClick -->
    <script src="<?php echo base_url()?>Assets/services/css/fatclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>Assets/services/css/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>Assets/services/css/demo.js"></script>

    <link href="<?php echo base_url()?>Assets/services/css/select2.css" rel="stylesheet">
    <script src="<?php echo base_url()?>Assets/services/css/select2.js"></script>

    <script>
        $(document).ready(function() {
            $('.sidebar-menu').tree()
        })
    </script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

    <script src="<?php echo base_url()?>Assets/services/css/21c1e810f7f98f00b3_002.js"></script>

    <!-- angular-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.min.js" integrity="sha256-23hi0Ag650tclABdGCdMNSjxvikytyQ44vYGo9HyOrU=" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>Public/Module/app.js"></script>
<script src="<?php echo base_url(); ?>Public/Controller/CatController.js"></script>
<script src="<?php echo base_url(); ?>Public/Service/ContactService.js"></script>
</body>

</html>--