<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('asset/plugins/images/geologo.png');?>">
<title>Login | PT. Geoinfo Teknologi</title>
<link href="<?= base_url('asset/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?= base_url('asset/css/animate.css');?>" rel="stylesheet">
<link href="<?= base_url('asset/css/style.css');?>" rel="stylesheet">
<link href="<?= base_url('asset/css/colors/blue.css');?>" id="theme"  rel="stylesheet">
<link href="<?= base_url('asset/plugins/bower_components/sweetalert/sweetalert.css');?>" rel="stylesheet" type="text/css">

</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
     <form class="form-horizontal form-material" id="loginform" method="post" action="<?php echo base_url('login/auth')?>">
        <a href="javascript:void(0)" class="text-center db"><img src="<?= base_url('asset/plugins/images/geologo.png');?>" alt="Home" /><br/><img src="<?= base_url('asset/plugins/images/geotext.png');?>" alt="Home" /></a>  
        <div class="form-group m-t-40">
        <?php if($this->session->flashdata('flasherror')): ?>
    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?php echo $this->session->flashdata('flasherror'); ?>
    </div>
    <?php endif; ?>
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Username" name="username" >
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="Password" name="password">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"  type="submit" >Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>


<script src="<?= base_url('asset/plugins/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?= base_url('asset/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js');?>"></script>
    <script src="<?= base_url('asset/js/jquery.slimscroll.js');?>"></script>
    <script src="<?= base_url('asset/js/waves.js');?>"></script>
    <script src="<?= base_url('asset/js/custom.min.js');?>"></script>
    <script src="<?= base_url('asset/js/jasny-bootstrap.js');?>"></script>
    <script src="<?= base_url('asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js');?>"></script>
    <script src = "<?= base_url('asset/plugins/bower_components/sweetalert/sweetalert.min.js');?>" > </script> 
    <script src = "<?= base_url('asset/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js');?>"> </script>
</body>
</html>
