<!DOCTYPE html>
<html style="height: auto; min-height: 100%;"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin - Contact List</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Review/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Review/ionicons.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Review/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Review/_all-skins.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Review.css">
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url() ?>Assets/admin/Review/bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>Assets/admin/Review/custom.css">
</head>
<body ng-app="myapp" class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<!-- Site wrapper -->
  <div ng-controller="UserCtrl as c" class="wrapper" style="height: auto; min-height: 100%;">
    <div class="content-wrapper" style="min-height: 813px;">
     <section class="content-header">
      <h1>User Detail</h1>  
    </section>

     <section class="content">

       <div class="box">
         
        <div class="box-body">
      
            <br>
            <table class="table table-striped table-hover" width="100%" border="0">
              <thead>
                <tr class="table_heading">
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 114.117px;" aria-label="Office: activate to sort column ascending">Id</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 88.45px;" aria-label="Salary: activate to sort column ascending">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 88.45px;" aria-label="Salary: activate to sort column ascending">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 88.45px;" aria-label="Salary: activate to sort column ascending">Password</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 114.117px;" aria-label="Office: activate to sort column ascending">Delete</th>
                        </tr>
              </thead>
              <tbody>
                    <tr ng-repeat="x in User">
                      <th rowspan="1" colspan="1">{{x.user_id}}</th>
                      <th rowspan="1" colspan="1">{{x.username}}</th>
                      <th rowspan="1" colspan="1">{{x.email}}</th>
                      <th rowspan="1" colspan="1">{{x.password}}</th>
                      <th><i ng-click="delete(x.user_id)" class="fa fa-trash" style="cursor: pointer; color: red;"></i></th>
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
  <!-- /.content-wrapper --
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<!-- SlimScroll -->
<script>
var url="http://portal99.in/urbanclap-clone-script";
</script>
<script src="<?php echo base_url() ?>Assets/admin/Review/jquery_002.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>Assets/admin/Review/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>Assets/admin/Review/demo.js"></script>
 <link href="<?php echo base_url() ?>Assets/admin/Review/select2.css" rel="stylesheet">
<script src="<?php echo base_url() ?>Assets/admin/Review/select2.js"></script>
 
<script src="<?php echo base_url() ?>Assets/admin/Review/21c1e810f7f98f00b3_002.js"></script>

<!-- angular-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.min.js" integrity="sha256-23hi0Ag650tclABdGCdMNSjxvikytyQ44vYGo9HyOrU=" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>Public/Module/app.js"></script>
<script src="<?php echo base_url(); ?>Public/Controller/UserController.js"></script>
<script src="<?php echo base_url(); ?>Public/Service/ContactService.js"></script>
</body>

</html>
