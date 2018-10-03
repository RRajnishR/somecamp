<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Book Our Camps | Search and Book Camps
  </title>
  <script>
        var baseurl = '<?php echo base_url(); ?>';
  </script>
  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="681276105655-sf5524g7dadjcb57c9u15v4klm3lj1a9.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/frontend/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/frontend/demo/demo.css" rel="stylesheet" />
  <style>
  .banner {
  position: relative;
  overflow: hidden;
  color: #fff;
  font-family: 'Raleway', sans-serif;
  font-size: 1em;
  font-weight: 700;
  text-transform: uppercase;
  text-align: center;
  line-height: 0vh;
  height: inherit;
  letter-spacing: 2px;
}

.banner__video {
  position: absolute;
  top: 50%;
  left: 50%;
  width: auto;
  min-width: 100%;
  height: auto;
  min-height: 100%;
  transform: translateX(-50%) translateY(-50%);
  z-index: -1;
}
.search-icon{
  position: relative;
  float: right;
  width: 35px;
  height: 35px;
  top: -40px;
  right: 15px;
}
.navbar-brand{
    background: #fff;
    line-height: 0.7rem !important;
    padding: 4px;
    font-weight: bold;
    border-radius: 4%;
}
#scrolltocamps span{
  position: absolute;
  top: 0;
  left: 50%;
  width: 30px;
  height: 30px;
  margin-left: -12px;
  border-left: 5px solid #fff;
  border-bottom: 5px solid #fff;
  -webkit-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg);
  -webkit-animation: sdb06 1.5s infinite;
  animation: sdb06 1.5s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb06 {
  0% {
    -webkit-transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}
@keyframes sdb06 {
  0% {
    transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}
.first_shade{
  color:#0202fd;
}
.second_shade{
 color:#e97231; 
}
.third_shade{
 color:#37d54c;  
}
/*Snackbar css*/
#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #333; /* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */
    /* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
   However, delay the fade out process for 2.5 seconds */
   -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
   animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
  </style>
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav id="page_menu" class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="1">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?php echo base_url(); ?>" rel="tooltip" title="Bookourcamp.com" data-placement="bottom">
           <span class="first_shade">BOOK</span><span class="second_shade">OUR</span><span class="third_shade">CAMP</span>
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" rel="tooltip" title="List of camps you want to visit">
              <i class="now-ui-icons location_pin"></i>
              <p>WishCamps(0)</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              <i class="now-ui-icons business_money-coins"></i>
              <p><?php if($this->session->userdata('selected_currency')) {echo $this->session->userdata('selected_currency'); } else { echo "USD";}  ?></p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1" style="height: 350px;overflow-y: auto;overflow-x: hidden;">
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/AUD" > AUD - Australian Dollar </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/CAD" > CAD - Canadian Dollar </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/EUR" > EUR - Euro </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/GBP" > GBP - British Pound </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/USD" > USD - United States Dollar </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/BRL" > BRL - Brazilian Real </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/CHF" > CHF - Swiss Franc </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/CNY" > CNY - Chinese Renminbi Yuan </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/CZK" > CZK - Czech Koruna </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/DKK" > DKK - Danish Krone </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/HKD" > HKD - Hong Kong Dollar </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/IDR" > IDR - Indonesian Rupiah </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/ILS" > ILS - Israeli New Sheqel </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/INR" > INR - Indian Rupee </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/JPY" > JPY - Japanese Yen </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/KRW" > KRW - South Korean Won </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/MXN" > MXN - Mexican Peso </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/MYR" > MYR - Malaysian Ringgit </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/NOK" > NOK - Norwegian Krone </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/NZD" > NZD - New Zealand Dollar </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/PHP" > PHP - Philippine Peso </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/PLN" > PLN - Polish Złoty </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/RUB" > RUB - Russian Ruble </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/SEK" > SEK - Swedish Krona </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/SGD" > SGD - Singapore Dollar </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/THB" > THB - Thai Baht </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/TRY" > TRY - Turkish Lira </a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>Home/setcurrency/ZAR" > ZAR - South Africa, Rand </a>
            </div>
          </li>
          <?php 
                if(!$this->session->userdata('google_id') && !$this->session->userdata('email')){
          ?>
          <li class="nav-item">
            <a class="nav-link btn btn-neutral" href="#" role="button" data-toggle="modal" data-target="#signbox">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Login/Signup</p>
            </a>
          </li>
          <?php } else { ?>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-expanded="true">
              <i class="fas fa-user-circle"></i>
              <p>Hi, <?php echo $this->session->userdata('first_name'); ?></p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="<?php echo base_url() ?>Logout">
                <i class="fas fa-sign-out-alt"></i> Log out
              </a>
            </div>
          </li>       
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->