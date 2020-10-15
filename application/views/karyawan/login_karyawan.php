<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="Isna Nur Azis">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karyawan | Log In</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plugins/fullcalendar.min.css"/>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- end: Css -->

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body id="mimin" class="dashboard form-signin-wrapper" style="background: #50c3e0 !important;">
        <div class="container">
        <form class="form-signin" action="<?php echo base_url('login/login'); ?>" method="post">
          <div class="panel periodic-login" style="background: #f7f7f7 !important;">
              <div class="panel-body text-center">
                  <img src="<?php echo base_url(); ?>assets/images/kabupaten malang vector logo.png" width=200px>
                    <?php if (validation_errors() || $this->session->flashdata('result_login')) { ?>
                    <div class="alert alert-danger animated fadeInDown" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Peringatan!</strong>
                        <?php echo validation_errors(); ?>
                        <?php echo $this->session->flashdata('result_login'); ?>
                    </div>
                    <?php } ?>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="NIP" required>
                    <span class="bar"></span>
                    <label>NIP</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:30px !important ;">
                    <input type="password" class="form-text" name="password" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <input type="submit" class="btn col-md-12" value="Masuk" style="background: #4f657c !important;" />
              </div>
          </div>
        </form>
        </div>
        <!-- end: Content -->
        <!-- start: Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <!-- plugins -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/icheck.min.js"></script>
        <!-- custom -->
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <!-- end: Javascript -->
    </body>
</html>