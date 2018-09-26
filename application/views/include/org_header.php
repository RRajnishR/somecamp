<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Rajnish Kumar | rajnishcv.com">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <meta name="robots" content="noindex,nofollow">
  
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/favicon/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo base_url()?>assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="<?php echo base_url()?>assets/favicon/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="<?php echo base_url()?>assets/favicon/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>assets/favicon/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/favicon/favicon-16.png">
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/favicon/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/favicon/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/favicon/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>assets/favicon/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/favicon/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/favicon/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/favicon/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/favicon/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?php echo base_url()?>assets/favicon/favicon-144.png">
    <meta name="msapplication-config" content="<?php echo base_url()?>assets/favicon/browserconfig.xml">
  
  <title>Camp Organiser Dashboard</title>

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/admin/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>assets/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>assets/admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url() ?>assets/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
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
            <?php 
                $pro = base_url()."assets/admin/img/admin.png";
                if($this->session->userdata('image'))
                    $pro = base_url()."assets/uploads/organisers/pro_image/".$this->session->userdata('image');
            ?>
          <p class="centered"><a href="<?php echo base_url() ?>camp_organiser/Dashboard"><img src="<?php echo $pro; ?>" class="img-circle" width="80"></a></p>
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
            <a href="<?php echo base_url() ?>camp_organiser/Camps">
              <i class="fa fa-th-large"></i>
              <span>Camps</span>
            </a>
          </li>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_organiser/Enquiries">
              <i class="fa fa-comments-o"></i>
              <span>Enquiries</span>
            </a>
          </li>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_organiser/Camps/addAccomodation" title="Manage Accomodations Here">
              <i class="fa fa-home"></i>
              <span>Accomodations</span>
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