<!DOCTYPE html>
<html lang="en">

<head>
    <title>Campers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <script>
        var baseurl = '<?php echo base_url(); ?>';
    </script>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="184284430038-e0rkm7s72jgus7isbad487rmrahd8htd.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Wishlist"><i class="far fa-heart"></i> My WishCamps (0)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Blogs">Blogs</a>
          </li>
          <?php 
                if(!$this->session->userdata('google_id')){
            ?>
          <li class="nav-item">
             <a href="#" class="nav-link" role="button" data-toggle="modal" data-target="#signbox"><i class="fas fa-user-circle"></i></a>
          </li> 
          <?php 
                } else { ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-user-circle"></i> Hi, <?php echo $this->session->userdata('first_name'); ?>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo base_url() ?>Logout">Log out <i class="fas fa-sign-out-alt"></i></a>
                  </div>
                </li>
           <?php
            }
            ?>   
        </ul>
      </div>  
    </nav>