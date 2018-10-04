<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Rajnish Kumar | rajnishcv.com">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <meta name="robots" content="noindex,nofollow">
  <title>Admin Dashboard</title>

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
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
  <style>
    .round_div{
        text-align: center;
        border: 1px green solid;
        margin: 4%;
    }
    .first_half, .second_half{
        display: block;
        width: 100%;
        font-weight: bold;
    }
    .first_half{
        background-color: beige;
        font-size: 22px;
        padding: 8%;
    }
    .second_half{
        font-size: 16px;
        padding: 4%;
        background-color: darkturquoise;
        color: white;
        border-top: 2px yellow double;
    }
    
</style>
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
      <a href="<?php echo base_url() ?>camp_admin/Admin" class="logo"><b>Admin<span>DASH</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url() ?>Logout">Logout</a></li>
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
          <p class="centered"><a href="<?php echo base_url() ?>camp_admin/Admin"><img src="<?php echo base_url() ?>assets/admin/img/admin.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin Dashboard</h5>
          <?php 
            if($this->session->userdata('admin_id')){
          ?>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_admin/Admin">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_admin/Organisers">
              <i class="fa fa-briefcase"></i>
              <span>Manage Organisers</span>
              </a>
          </li>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_admin/Users">
              <i class="fa fa-dashboard"></i>
              <span>Manage Users</span>
              </a>
          </li>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_admin/Camps">
              <i class="fa fa-dashboard"></i>
              <span>Manage Camps</span>
              </a>
          </li>
          <li class="mt">
            <a href="<?php echo base_url() ?>camp_admin/Enquiries">
              <i class="fa fa-dashboard"></i>
              <span>Manage Enquiries</span>
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