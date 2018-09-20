<style>
    h3 input[type="text"]{
        border: 4px solid yellow;
        background: #37d54c;
    }
    h3 input[type="text"]::placeholder{
       color: blue;
    }
</style>
<script>
    var page_name = "home";
</script>
<div class="wrapper">
    <div class="page-header clear-filter" filter-color="">
        <div class="page-header-image" data-parallax="true">
            <div class="banner">
                <video autoplay loop muted class="banner__video" poster="https://pawelgrzybek.com/photos/2015-12-06-codepen.jpg">
                    <source src="<?php echo base_url(); ?>assets/video/camp.webm" type="video/webm">
                    <source src="<?php echo base_url(); ?>assets/video/camp.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="container">
            <div class="content-center brand">
                <img class="n-logo rounded-circle img-raised" src="<?php echo base_url(); ?>assets/logo.png" alt="Book Our Camp Logo">
                <h1 class="h1-seo"><span class="first_shade">Search</span> <span class="second_shade">Your</span> <span class="third_shade">Favourite Camp</span></h1>
                <h3>
                    <input type="text" class="form-control" placeholder="Search using Name and Location..." />
                    <a href="javascript:void(0);" onclick=""><img class="search-icon" src="<?php echo base_url() ?>assets/images/search-icon.png"></a>
                </h3>
            </div>
            <h6 class="category category-absolute">
                A one stop solution for campers! <a id="scrolltocamps" href="#camps"><span></span></a>
            </h6>
        </div>
    </div>
    <div class="main" id="camps" style="background-color:#f7f7f7; margin-top:5px; margin-bottom:5px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="box">
                        <h4>Select Your Suitable Form</h4>
                        
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
                    
                </div>
            </div>
        </div>
    </div>