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
          <h5 class="centered">Organiser's Dashboard</h5>
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
            <a href="<?php echo base_url() ?>camp_organiser/Dashboard/bprofile">
              <i class="fas fa-atlas"></i>
              <span>Business Profile</span>
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