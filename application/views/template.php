
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('asset/plugins/images/geologo.png');?>">
    <title><?php echo $head;?> | PT. Geoinfo Teknologi</title>
      <?= isset($style) ? $this->load->view($style) : ''; ?>  
 <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('asset/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- This is Sidebar menu CSS -->
    <link href="<?= base_url('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css');?>" rel="stylesheet">
    <!-- This is a Animation CSS -->
    <link href="<?= base_url('asset/css/animate.css');?>" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="<?= base_url('asset/css/style.css');?>" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (default.css) for this starter
         page. However, you can choose any other skin from folder css / colors .
         -->
    <link href="<?= base_url('asset/css/colors/megna-dark.css');?>" id="theme" rel="stylesheet">


    

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <!-- menampilkan header -->
        <?php $this->load->view("partials/header"); ?>

        <!-- menampilkan navigasi -->
        <?php $this->load->view("partials/navigasi"); ?>
       
     
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $head;?></h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       
                        <!-- Breadcrumbs-->
                  <ol class="breadcrumb">
                        <?php foreach ($this->uri->segments as $segment): ?>
                        <?php 
                             $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                             $is_active =  $url == $this->uri->uri_string;
                         ?>
                    <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
                        <?php if($is_active): ?>
                            <?php echo ucfirst($segment) ?>
                         <?php else: ?>
                             <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ol>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <?= isset($modals) ? $this->load->view($modals) : ''; ?>
                <?php $this->load->view($content); ?>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> <?php echo date("Y"); ?> &copy; PT. Geoinfo Teknologi </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

   
     <script src="<?= base_url('asset/plugins/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('asset/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Sidebar menu plugin JavaScript -->
    <script src="<?= base_url('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js');?>"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="<?= base_url('asset/js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('asset/js/waves.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('asset/js/custom.js');?>"></script>
    

    <?= isset($js) ? $this->load->view($js) : ''; ?>
</body>

</html>
