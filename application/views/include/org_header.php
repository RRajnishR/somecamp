<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Rajnish Kumar | rajnishcv.com">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <meta name="robots" content="noindex,nofollow">
  <title>Camp Organiser Dashboard</title>

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/admin/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>assets/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>assets/admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url() ?>assets/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/admin/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/admin/css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="<?php echo base_url() ?>camp_organiser/Dashboard" class="logo"><b>CAMP<span>DASH</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a id="lgt" class="logout" href="<?php echo base_url() ?>Logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="<?php echo base_url() ?>camp_organiser/Dashboard"><img src="<?php echo base_url() ?>assets/admin/img/admin.png" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php if($this->session->userdata('acc_type') == 1){ echo "Individual Account"; } else if($this->session->userdata('acc_type') == 2) {echo "Business Account"; } else { echo "Login Required"; } ?></h5>
          <?php 
            if($this->session->userdata('org_id')){
          ?>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_organiser/Dashboard">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_organiser/Iprofile">
              <i class="fa fa-user-circle"></i>
              <span>Profile</span>
            </a>
          </li>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_organiser/Bprofile">
              <i class="fa fa-credit-card"></i>
              <span>Business Profile</span>
            </a>
          </li>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_organiser/Dashboard/bprofile">
              <i class="fa fa-th-large"></i>
              <span>Camps</span>
              </a>
          </li>
          <?php 
            } else { ?>
               <li class="mt">
                <a href="#">
                  <i class="fa fa-dashboard"></i>
                  <span>Login to see the controls</span>
                  </a>
              </li> 
            <?php
            }
          ?>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>