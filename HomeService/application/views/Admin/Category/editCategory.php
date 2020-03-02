<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html style="height: auto; min-height: 100%;">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Edit Category</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url()?>Assets/admin/AddCategory/bootstrap.css">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url()?>Assets/admin/AddCategory/ionicons.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>Assets/admin/AddCategory/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>Assets/admin/AddCategory/_all-skins.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="<?php echo base_url()?>Assets/admin/AddCategory/css.css">

    <script src="<?php echo base_url()?>Assets/admin/AddCategory/jquery.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url()?>Assets/admin/AddCategory/bootstrap.js"></script>

    <link rel="stylesheet" href="<?php echo base_url()?>Assets/admin/AddCategory/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script src="<?php echo base_url()?>Assets/admin/AddCategory/ckeditor.js"></script>
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url()?>Assets/admin/AddCategory/custom.css">

    <script type="text/javascript" src="<?php echo base_url()?>Assets/admin/AddCategory/config.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/admin/AddCategory/editor_gecko.css">
    <script type="text/javascript" src="<?php echo base_url()?>Assets/admin/AddCategory/en.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>Assets/admin/AddCategory/styles.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/admin/AddCategory/scayt.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/admin/AddCategory/dialog.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/admin/AddCategory/tableselection.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/admin/AddCategory/wsc.css">
    <script type="text/javascript" src="<?php echo base_url()?>Assets/admin/AddCategory/int.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>Assets/admin/AddCategory/api.txt"></script>
    <script type="text/javascript" src="<?php echo base_url()?>Assets/admin/AddCategory/21c1e810f7f98f00b3.js"></script>
</head>

<?php include '/xampp/htdocs/HomeService/HomeService/application/views/Admin/Main/Navbar.php'; ?> 
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">

    <!-- Site wrapper -->
    <div class="wrapper" style="height: auto; min-height: 100%;">

        <div class="content-wrapper" style="min-height: 813px;">
            <section class="content-header">
                <h1> Add Category </h1>

            </section>

            <section class="content">

                <div class="box">

                    <div class="box-body">

                        <br>
                        <form action="<?php echo site_url('CategoryController/savedata')?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="uHbBheiPOz5ZLb9cIrGKmeO0kzo2c0RizLty22Ps">

                            <table class="table table-striped table-hovered" width="100%" border="0">
                                <tbody>

                                   <tr>
                                        <td>Parent Id</td>
                                        <td colspan="2">

                                            <br>
                                            <select name="parent_id" class="form-control" required="">
                                                <option selected="selected" value="0"> None </option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="89">Title</td>
                                        <td width="378">
                                            <input type="title" class="form-control" name="title" required="" autofocus="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Banner</td>
                                        <td>
                                            <input type="file" class="form-control" name="banner">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Parent Category</td>
                                        <td colspan="2">

                                            <br>
                                            <select name="parent_cate" class="form-control" required="">
                                                <option selected="selected" value="0"> None </option>
                                                <option value="1">Beauty &amp; Spa</option>
                                                <option value="2">Home Cleaning &amp; Repairs</option>
                                                <option value="3">Wedding &amp; Events</option>
                                                <option value="4">Appliance Repair</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Icon</td>
                                        <td>
                                            <input type="file" class="form-control" name="icon">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image</td>
                                        <td>
                                            <input type="file" class="form-control" name="image">
                                        </td>
                                    </tr>
<!-- highlight_msg-->
                                    <tr>
                                        <td width="156">Highlight Message</td>
                                        <td>
                                            <textarea class="form-control ckeditor" name="highlight_msg" style="visibility: hidden; display: none;"></textarea>
                                            <div id="cke_highlight_message" class="cke_1 cke cke_reset cke_chrome cke_editor_highlight_message cke_ltr cke_browser_gecko" dir="ltr" role="application" aria-labelledby="cke_highlight_message_arialbl" lang="en">
                                            </div>
                                        </td>
                                    </tr>
<!-- End of highlight_msg-->

<!-- start why_msg-->
                                    <tr>
                                        <td width="156">Why Message</td>
                                        <td>
                                            <textarea class="form-control ckeditor" name="why_msg" style="visibility: hidden; display: none;"></textarea>
                                            <div id="cke_highlight_message" class="cke_1 cke cke_reset cke_chrome cke_editor_highlight_message cke_ltr cke_browser_gecko" dir="ltr" role="application" aria-labelledby="cke_highlight_message_arialbl" lang="en">
                                            </div>
                                        </td>
                                    </tr>
<!-- End of why_msg-->

<!-- start of how_work-->
                                    <tr>
                                        <td width="156">how work</td>
                                        <td>
                                            <textarea class="form-control ckeditor" name="how_work" style="visibility: hidden; display: none;"></textarea>
                                            <div id="cke_highlight_message" class="cke_1 cke cke_reset cke_chrome cke_editor_highlight_message cke_ltr cke_browser_gecko" dir="ltr" role="application" aria-labelledby="cke_highlight_message_arialbl" lang="en">
                                            </div>
                                        </td>
                                    </tr>
<!-- End of how_work-->

<!-- start of about-->
                                    <tr>
                                        <td width="156">About</td>
                                        <td>
                                            <textarea class="form-control ckeditor" name="about" style="visibility: hidden; display: none;"></textarea>
                                            <div id="cke_highlight_message" class="cke_1 cke cke_reset cke_chrome cke_editor_highlight_message cke_ltr cke_browser_gecko" dir="ltr" role="application" aria-labelledby="cke_highlight_message_arialbl" lang="en">
                                            </div>
                                        </td>
                                    </tr>
<!-- End of about-->

                                    <tr>
                                        <td width="156">Is feature</td>
                                        <td>
                                            <textarea class="form-control" name="isfeature"></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Status</td>
                                        <td>

                                            <select name="status" class="form-control" required="">
                                                <option value="1" selected="selected"> Active </option>
                                                <option value="0"> Inactive </option>

                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Service Time</td>
                                        <td>
                                            <input type="text" class="form-control" name="service_time">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input type="submit" name="save" value="save" class="btn btn-primary">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </form>

                    </div>

                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->

    <!-- SlimScroll -->
    <script>
        var url = "http://portal99.in/urbanclap-clone-script";
    </script>
    <script src="<?php echo base_url()?>Assets/admin/AddCategory/jquery_002.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>Assets/admin/AddCategory/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>Assets/admin/AddCategory/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>Assets/admin/AddCategory/demo.js"></script>

    <link href="<?php echo base_url()?>Assets/admin/AddCategory/select2.css" rel="stylesheet">
    <script src="<?php echo base_url()?>Assets/admin/AddCategory/select2.js"></script>

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

    <script src="<?php echo base_url()?>Assets/admin/AddCategory/21c1e810f7f98f00b3_002.js"></script>
</body>

</html>