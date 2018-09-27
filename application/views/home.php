<style>
    h3 input[type="text"]{
        border: 4px solid yellow;
        background: #37d54c;
    }
    h3 input[type="text"]::placeholder{
       color: blue;
    }
    .box{
        width: 100%;
        margin-bottom: 4px;
    }
    .box{
        max-height: 300px;
        overflow-x: hidden;
        overflow-y: auto;
    }
    .box::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    .box::-webkit-scrollbar
    {
        width: 3px;
        background-color: #F5F5F5;
    }

    .box::-webkit-scrollbar-thumb
    {
        background-color: #000000;
    }
    .inputGroup {
      display: block;
      margin: 5px 0;
      position: relative;
    }
    .inputGroup label {
      padding: 1px 10px;
      width: 100%;
      display: block;
      text-align: left;
      color: #7C8086;
      cursor: pointer;
      position: relative;
      z-index: 2;
      transition: color 200ms ease-in;
      overflow: hidden;
    }
    .inputGroup label:before {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      content: '';
      background-color: #5562eb;
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%) scale3d(1, 1, 1);
              transform: translate(-50%, -50%) scale3d(1, 1, 1);
      transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
      opacity: 0;
      z-index: -1;
    }
    .inputGroup label:after {
      width: 16px;
      height: 16px;
      content: '';
      border: 2px solid #D1D7DC;
      background-color: #fff;
      background-image: url("data:image/svg+xml,%3Csvg width='12' height='12' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
      background-repeat: no-repeat;
      background-position: 2px 3px;
      border-radius: 50%;
      z-index: 2;
      position: absolute;
      right: 0px;
      top: 50%;
      -webkit-transform: translateY(-50%);
              transform: translateY(-50%);
      cursor: pointer;
      transition: all 200ms ease-in;
    }
    .inputGroup input:checked ~ label {
      color: #fff;
    }
    .inputGroup input:checked ~ label:before {
      -webkit-transform: translate(-50%, -50%) scale3d(56, 56, 1);
              transform: translate(-50%, -50%) scale3d(56, 56, 1);
      opacity: 1;
    }
    .inputGroup input:checked ~ label:after {
      background-color: #7C8086;
      border-color: #7C8086;
    }
    .inputGroup input {
      width: 32px;
      height: 32px;
      order: 1;
      z-index: 2;
      position: absolute;
      right: 30px;
      top: 50%;
      -webkit-transform: translateY(-50%);
              transform: translateY(-50%);
      cursor: pointer;
      visibility: hidden;
    }
    .form {
      padding: 0 16px;
      max-width: 550px;
      margin: 15px auto;
      font-size: 15px;
      font-weight: 400;
      line-height: 20px;
    }
    .form h2{
        font-family: sans-serif;
        text-transform:uppercase;
        font-size: 1em;
        font-weight: 600;
        margin-bottom: 0px;
        border-bottom: 1px solid #969AA1;
    }
    table.camp_box{
        border: 1px solid #37d54c;
        table-layout: fixed;
    }
    table.camp_box tr td{
        width: 33.33%;
    }
    td.camp_view_button, td.camp_duration, td.camp_rate, td.rating{
        text-align: center;
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                  <form class="form">
                   <h2>Camp Type</h2>
                   <div class="box">
                      <?php 
                        foreach($camp_type as $ct){ ?>
                        <div class="inputGroup">
                            <input id="<?php echo "ct_".$ct->id; ?>" name="camp_type" type="checkbox"/>
                            <label for="<?php echo "ct_".$ct->id; ?>"><?php echo $ct->ctype; ?></label>
                        </div> 
                      <?php
                        }
                      ?>                          
                   </div>
                   <h2>Camp Best For</h2>
                   <div class="box">
                      <?php 
                        foreach($camp_for as $cf){ ?>
                        <div class="inputGroup">
                            <input id="<?php echo "cf_".$cf->id; ?>" name="camp_for" type="checkbox"/>
                            <label for="<?php echo "cf_".$cf->id; ?>"><?php echo $cf->name; ?></label>
                        </div> 
                      <?php
                        }
                      ?>                         
                   </div>
                   <h2>Preferred Date</h2>
                   <div class="box">
                      <input type="text" class="form-control date-picker" value="" placeholder="select Date" data-datepicker-color="primary" style="margin-top:4px;">
                   </div>
                    </form>
                </div>
                <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
                    <?php if(is_array($camps)){ 
                            echo "<span class='form'><h2 style='text-transform:none;'>".count($camps)." camp(s) found</h2></span>";
                            foreach($camps as $c){ ?>                        
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="camp_box table-borderless">
                                        <tr>
                                           <?php 
                                                $images = $this->My_model->selectRecord('camp_images', '*', array('camp_id' => $c->camp_id, 'del_status'=>0));
                                            ?>
                                            <td rowspan="4" class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="100" style="cursor:pointer;">
                                                <?php 
                                                    if(is_array($images)){
                                                        foreach($images as $i){ ?>
                                                            <img src="<?php echo base_url(); ?>assets/uploads/organisers/camp_images/<?php echo $i->name; ?>" alt="<?php echo $c->title; ?>"/>
                                                <?php
                                                        }
                                                    } else {
                                                        echo "<img src='".base_url()."assets/uploads/organisers/camp_images/default.jpg' />";
                                                    }
                                                ?>
                                            </td>
                                            <td class="camp_name"><?php echo $c->title; ?></td>
                                            <td class="rating">
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="camp_rate"><?php echo $c->currency.". ".$c->price; ?></td>
                                        </tr>
                                        <tr> 
                                            <td></td>
                                            <td class="camp_duration"><?php echo $c->duration." days / ".($c->duration - 1)." Nights"; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="camp_speciality">
                                                <?php 
                                                    if(!$c->main_lang==""){
                                                        $lang = $this->My_model->selectRecord('langs', '*', array('id' => $c->main_lang));
                                                        echo "<i class='far fa-comment-dots'></i> Instruction language: ".$lang[0]->name." <br/>";
                                                    }
                                                    if($c->pickup_service=="1"){
                                                        echo "<i class='fas fa-car'></i> Airport Pickup available <br/>";
                                                    }
                                                    if($c->inc_meal=="1"){
                                                        echo "<i class='fas fa-utensils'></i> Free Meals available <br/>";
                                                    }
                                                    if($c->inc_drink=="1"){
                                                        echo "<i class='fas fa-coffee'></i> Free Drinks available";;
                                                    }
                                                ?>
                                            </td>
                                            <td class="camp_view_button"><a class="btn btn-primary" href="<?php echo base_url(); ?>Camp/view/<?php echo $c->camp_id."-".htmlentities(str_replace(',','',$c->title)); ?>">See Details <i class="fas fa-eye"></i></a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            
                    <?php
                            }
                        } else {
                            echo "<h6> 0 Camps Found.</h6>";
                            echo "<div style='height:200px;margin-top:15%;margin-left:25%;font-weight:bold;'>Try Using other filter combination!!</div>";
                        }
                    ?> 
                </div>
            </div>
        </div>
    </div>