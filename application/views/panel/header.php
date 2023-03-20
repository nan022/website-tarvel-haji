<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>PT MMB</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url(); ?>assets/panel/assets/img/icon-mmb.png" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
					"simple-line-icons"
				],
				urls: ['<?= base_url(); ?>assets/panel/assets/css/fonts.min.css']
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<style>
	.checked {
	color: orange;
	}
	</style>
	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/panel/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/panel/assets/css/atlantis.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/panel/assets/css/sweetalert2.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
	<!-- Sweet Alert -->
	<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Print Area -->
	<style>
        /* .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        
        .print-area {
            display: none;
        }
         */
        @media print {
            body * {
                visibility: hidden;
            }
            #print-card, #print-card * {
                visibility: visible;
            }
            #print-card {
                position: 100%;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="<?= base_url('panel'); ?>" class="logo">
					<img src="<?= base_url(); ?>assets/panel/assets/img/logo-header-final-panel.png" alt="navbar brand"
						class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
					data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
								aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>

						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i>
												</div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i>
												</div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-img">
													<img src="<?= base_url(); ?>assets/panel/assets/img/profile2.jpg"
														alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i
											class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
								aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= base_url(); ?>assets/panel/assets/img/profile-default.jpg" alt="..."
										class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img
													src="<?= base_url(); ?>assets/panel/assets/img/profile-default.jpg"
													alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4 class="text-primary font-weight-bold">
													<?= ucfirst($this->session->userdata('nama')) ?></h4>
												<h5 class="text-muted"><?= ucfirst($this->session->userdata('email')) ?>
												</h5>
												<i><h5 class="text-muted"><?= $this->session->userdata('role') ?>
												</h5></i>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?= base_url('setting'); ?>">Account
											Setting</a>
										<a class="dropdown-item" href="<?= base_url('login/logout'); ?>">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item <?php if($status == 'panel'){ echo 'active'; }?>">
							<a href="<?= base_url('panel'); ?>">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<?php if($this->session->userdata("role") == 'customer'){ ?>
						<li class="nav-item <?php if($status == 'customer'){ echo 'active'; }?>">
							<a href="<?= base_url('customer'); ?>">
								<i class="far fa-id-card"></i>
								<p>Customer</p>
							</a>
						</li>
						<?php } ?>
						<?php if($this->session->userdata("role") == 'representatif'){ ?>
						<li class="nav-item <?php if($status == 'representatif'){ echo 'active'; }?>">
							<a href="<?= base_url('representatif'); ?>">
								<i class="fas fa-briefcase"></i>
								<p>Representatif</p>
							</a>
						</li>
						<?php } ?>

						<?php if($this->session->userdata("role") == 'admin') { ?>
						<li class="nav-item <?php if($status == 'customer'){ echo 'active'; }?>">
							<a href="<?= base_url('customer'); ?>">
								<i class="far fa-id-card"></i>
								<p>Customer</p>
							</a>
						</li>

						<li class="nav-item <?php if($status == 'representatif'){ echo 'active'; }?>">
							<a href="<?= base_url('representatif'); ?>">
								<i class="fas fa-briefcase"></i>
								<p>Representatif</p>
							</a>
						</li>
						<?php } ?>

						<li class="nav-item <?php if($status == 'paket'){ echo 'active'; }?>">
							<a href="<?= base_url('data_paket'); ?>">
								<i class="fas fa-archive"></i>
								<p>Paket</p>
							</a>
						</li>

						<li class="nav-item <?php if($status == 'transaksi'){ echo 'active'; }?>">
							<a href="<?= base_url('transaksi'); ?>">
								<i class="far fa-credit-card"></i>
								<p>Transaksi</p>
							</a>
						</li>

						<li class="nav-item <?php if($status == 'report'){ echo 'active'; }?>">
							<a href="<?= base_url('report'); ?>">
								<i class="fas fa-chart-line"></i>
								<p>Report</p>
							</a>
						</li>
						
						<li class="nav-item <?php if($status == 'report_representatif'){ echo 'active'; }?>">
							<a href="<?= base_url('report/report_representatif'); ?>">
								<i class="fas fa-chart-line"></i>
								<p>Report Representatif</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url('home'); ?>">
								<i class="flaticon-left-arrow-4"></i>
								<p>Halaman Depan</p>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<div class="main-panel">