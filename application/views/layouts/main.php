<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Digital Signature - Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
	<link rel="icon" href="<?php echo site_url('resources/img/favicon.ico')?>">

    <link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap-datetimepicker.min.css');?>">
    <!-- Theme style -->
	<!--Datatable-->
	<?php if(isset($_usedtable) && $_usedtable == true){?>
		<link href="<?php echo site_url('resources/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?php echo site_url('resources/css/responsive.dataTables.min.css');?>" rel="stylesheet">
	<?php } ?>
	<!--Select 2-->
	<?php if(isset($_select2) && $_select2 == true){?>
		<link href="<?php echo site_url('resources/css/select2.min.css');?>" rel="stylesheet">
	<?php } ?>

    <link rel="stylesheet" href="<?php echo base_url('resources/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/_all-skins.min.css');?>">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="<?=site_url()?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><small><small><small>SIGN</small></small></small></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">DIGITAL SIGNATURE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url('resources/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?=$this->session->userdata["your_session_prefix_nama"]?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                <p>
                                    <?=$this->session->userdata["your_session_prefix_nama"]?>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?=site_url('user/profile')?>" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?=site_url('logout/proses')?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?=$this->session->userdata["your_session_prefix_nama"]?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>

                <li class="<?php if($this->uri->segment(1)=='dashboard' || $this->uri->segment(1)=='') echo 'active'?>">
                    <a href="<?php echo site_url();?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li class="<?php if($this->uri->segment(1)=='token') echo 'active'?>">
                    <a href="<?php echo site_url('token/index');?>">
                        <i class="fa fa-signing"></i> <span>Token</span>
                    </a>
                </li>

                <li class="header">JALAN PINTAS</li>

				<li class="<?php if($this->uri->segment(1)=='logout') echo 'active'?>">
					<a href="<?php echo site_url('logout/proses');?>">
						<i class="fa fa-sign-out"></i> <span>Logout</span>
					</a>
				</li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <?php
            if(isset($_view) && $_view)
                $this->load->view($_view);
            ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 | DIGITAL SIGNATURE | Ahmad Farisi </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->

        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('resources/js/jquery-2.2.3.min.js');?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('resources/js/bootstrap.min.js');?>"></script>
<!-- Datatables -->
<?php if(isset($_usedtable) && $_usedtable == true){ ?>
	<script src="<?php echo site_url('resources/js/jquery.dataTables.min.js')?>"></script>
	<script src="<?php echo site_url('resources/js/dataTables.bootstrap.min.js')?>"></script>
	<script src="<?php echo site_url('resources/js/dataTables.responsive.min.js')?>"></script>
<?php } ?>
<!--Select 2-->
<?php if(isset($_select2) && $_select2 == true){?>
	<script src="<?php echo site_url('resources/js/select2.full.min.js')?>"></script>
<?php } ?>
<!-- FastClick -->
<script src="<?php echo base_url('resources/js/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('resources/js/app.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('resources/js/demo.js');?>"></script>
<!-- DatePicker -->
<script src="<?php echo base_url('resources/js/moment.js');?>"></script>
<script src="<?php echo base_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
<!--CK Editor-->
<?php if(isset($_ckeditor) && $_ckeditor == true){?>
    <script src="<?php echo site_url('resources/ckeditor/ckeditor.js')?>"></script>
<?php } ?>
<script src="<?php echo base_url('resources/js/global.js');?>"></script>
</body>
</html>
