<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav">
		<div class="sidebar-head">
			<h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span
				 class="hide-menu">Navigation</span></h3>
		</div>
		<ul class="nav" id="side-menu">
			<!--ACCESS MENUS FOR ADMIN-->
			<?php if($this->session->userdata('level')==='1'){ ?>
			<li class="user-pro">
				<a href="javascript:void(0)" class="waves-effect"><img src="<?= base_url('asset/plugins/images/users/user.png');?>"
					 alt="user-img" class="img-circle"> <span class="hide-menu">
						<?php echo $this->session->userdata("nama"); ?><span class="fa arrow"></span></span>
				</a>
				<ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
					<li>
						<a href="<?= base_url('setting'); ?>"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a>
					</li>
					<li>
						<a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a>
					</li>
				</ul>
			</li>
			<li> <a href="<?= base_url();?>dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard fa-fw" data-icon="v"></i>
					<span class="hide-menu"> Dashboard</span></a></li>
			<li class="devider"></li>
			<li>
				<a href="<?= base_url('user'); ?>" class="waves-effect"><i class="mdi mdi-account-card-details fa-fw"></i> <span
					 class="hide-menu">Pengguna</span></a>
			</li>
			<!-- <li>
				<a href="<?//= base_url('perusahaan'); ?>" class="waves-effect"><i class="mdi mdi-security-home fa-fw"></i> <span
					 class="hide-menu">Perusahaan</span></a>
			</li> -->
			<!--ACCESS MENUS FOR ADMIN-->
			<?php }elseif($this->session->userdata('level')==='3'){?>
				<li class="user-pro">
				<a href="javascript:void(0)" class="waves-effect"><img src="<?= base_url('asset/plugins/images/users/user.png');?>"
					 alt="user-img" class="img-circle"> <span class="hide-menu">
						<?php echo $this->session->userdata("nama"); ?><span class="fa arrow"></span></span>
				</a>
				<ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
					<li>
						<a href="<?= base_url('setting'); ?>"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a>
					</li>
					<li>
						<a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a>
					</li>
				</ul>
			</li>
			<li> <a href="<?= base_url();?>dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard fa-fw" data-icon="v"></i>
					<span class="hide-menu"> Dashboard</span></a></li>
			<li class="devider"></li>
			<li>
				<a href="<?= base_url('kwitansi'); ?>" class="waves-effect"><i class="mdi mdi-note-text fa-fw"></i> <span class="hide-menu">Kwitansi</span></a>
			</li>
			<li>
				<a href="<?= base_url('dokumen'); ?>" class="waves-effect"><i class="mdi mdi-archive fa-fw"></i> <span class="hide-menu">Dokumen</span></a>
			</li>
			<?php }else{?>
			<li class="user-pro">
				<a href="javascript:void(0)" class="waves-effect"><img src="<?= base_url('asset/plugins/images/users/user.png');?>"
					 alt="user-img" class="img-circle"> <span class="hide-menu">
						<?php echo $this->session->userdata("nama"); ?><span class="fa arrow"></span></span>
				</a>
				<ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
					<li>
						<a href="<?= base_url('setting'); ?>"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a>
					</li>
					<li>
						<a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a>
					</li>
				</ul>
			</li>
			<li> <a href="<?= base_url();?>dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard fa-fw" data-icon="v"></i>
					<span class="hide-menu"> Dashboard</span></a></li>
			<li class="devider"></li>
			<li>
				<a href="<?= base_url('kwitansi'); ?>" class="waves-effect"><i class="mdi mdi-note-text fa-fw"></i> <span class="hide-menu">Kwitansi</span></a>
			</li>
			<li>
				<a href="<?= base_url('dokumen'); ?>" class="waves-effect"><i class="mdi mdi-archive fa-fw"></i> <span class="hide-menu">Dokumen</span></a>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>
