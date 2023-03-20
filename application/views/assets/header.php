<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
  <link rel="icon" href="<?= base_url(); ?>assets/panel/assets/img/icon-mmb.png" type="image/x-icon" />
  <title>PT MMB</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url();?>assets/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?= base_url();?>assets/template/css/fontawesome.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/template/css/style.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/template/css/owl.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/panel/assets/css/sweetalert2.min.css">
	<!-- Sweet Alert -->
	<script src="<?= base_url(); ?>assets/panel/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
  
  <style>
    .checked {
      color: #ffa500 !important;
    }
  </style>

  <style type="text/css">
  #slideshow { 
    position: relative; 
    width: 100%; 
    height: 100%; 
    padding: 10px; 
  }

  </style>

<style>
.zoom {
  transition: transform .2s; /* Animation */
  width: 100%;
  height: 100%;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>

</head>

<body>
  <!-- Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <ul class="left-info">
            <li><a href="#"><i class="fa fa-map-marker"></i>Senin - Sabtu 08:00-17:00</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>0811 7607 077</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="right-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <header>
    <nav class="navbar navbar-expand-lg bg-transparent sticky-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img src="<?= base_url();?>assets/template/images/logo-header-final-white.png">
          <!-- <h2>PT. Mudah Menuju Baitullah</h2> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($status == 'home'){ echo 'active';} ?>">
              <a class="nav-link" href="<?= base_url('home'); ?>">Beranda
              </a>
            </li>
            <li class="nav-item <?php if($status == 'paket'){ echo 'active';} ?>">
              <a class="nav-link" href="<?= base_url('paket'); ?>">Paket Umrah</a>
            </li>
            <li class="nav-item <?php if($status == 'galeri'){ echo 'active';} ?>">
              <a class="nav-link" href="<?= base_url('galeri'); ?>">Galeri</a>
            </li>
            <li class="nav-item <?php if($status == 'kontak'){ echo 'active';} ?>">
              <a class="nav-link" href="<?= base_url('kontak'); ?>">Kontak</a>
            </li>
            <li class="nav-item <?php if($status == 'login'){ echo 'active';} ?>">
              <?php if($this->session->userdata('status') == 'login'){ ?>
              <a class="nav-link btn btn-info" style="padding-right:15px; padding-left:15px; color:white !important;"
                href="<?= base_url('panel'); ?>"><b><i class="fa fa-home"></i>&nbsp;Hi. </b><?= ucfirst($this->session->userdata('nama')) ?>
              </a>
              <?php }else{ ?>
              <a class="nav-link btn btn-info" style="padding-right:15px; padding-left:15px; color:white !important;"
                href="<?= base_url('login'); ?>"><i class="fa fa-sign-in"></i>&nbsp;Login</a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

