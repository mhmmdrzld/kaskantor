<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="<?php echo site_url('dashboard') ?>">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?= base_url('asset/plugins/images/geologo.png');?>" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?= base_url('asset/plugins/images/geologo.png');?>" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?= base_url('asset/plugins/images/geotext.png');?>" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?= base_url('asset/plugins/images/geotext.png');?>" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li> 
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)"> <img src="<?= base_url('asset/plugins/images/users/user.png');?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $this->session->userdata("nama"); ?></b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="<?= base_url('asset/plugins/images/users/user.png');?>" alt="user" /></div>
                                    <div class="u-text m-t-20">
                                        <h4><?php echo $this->session->userdata("nama"); ?></h4>
                                         <p class="text-muted"><?php echo $this->session->userdata("jabatan"); ?></p>
                                         <!--<a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Account Setting</a> -->
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?= base_url('setting'); ?>"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
        </nav>