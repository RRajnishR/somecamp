<style>
    h3 input[type="text"]{
        border: 2px solid yellow;
    }
    h3 input[type="text"]::placeholder{
       color: white;
       font-weight: bold;
        
    }
    .box{
        margin-top: 2%;
        box-shadow: 0 0 20px rgba(65, 39, 82, 0.5);
/*        background: #f951c7;*/
    }
    .pg_tit{
        margin-top: 2%;
        margin-left: 0.5%;
        font-weight: bold;
        font-size: 1.1em; 
    }
    .box h4{
        margin-top: 10px;
        margin-bottom: 0px;
        color: #37d54c /*blue*/;
        padding: 2% 4%;
        text-transform: uppercase;
        font-weight: bold;
        border-bottom: 1px solid red;
/*        background-color: #928292;*/
    }
    .boxes::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    .boxes::-webkit-scrollbar
    {
        width: 3px;
        background-color: #F5F5F5;
    }

    .boxes::-webkit-scrollbar-thumb
    {
        background-color: #000000;
    }
    .boxes {
      margin: auto;
      max-height: 300px;
      overflow-x: hidden;
      overflow-y: auto;
      padding: 15px;
    }

    /*Checkboxes styles*/
    input[type="checkbox"] { display: none; }

    input[type="checkbox"] + label {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 10px;
      font: 14px/20px 'Open Sans', Arial, sans-serif;
      color: blue;
      cursor: pointer;
      font-weight: bold;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
    }

    input[type="checkbox"] + label:last-child { margin-bottom: 0; }

    input[type="checkbox"] + label:before {
      content: '';
      display: block;
      width: 20px;
      height: 20px;
      border: 1px solid darkblue;
      position: absolute;
      left: 0;
      top: 0;
      opacity: .6;
      -webkit-transition: all .12s, border-color .08s;
      transition: all .12s, border-color .08s;
    }

    input[type="checkbox"]:checked + label:before {
      width: 10px;
      top: -5px;
      left: 5px;
      border-radius: 0;
      opacity: 1;
      border-top-color: transparent;
      border-left-color: transparent;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }
    table.camp_box{
        width: 100%;
        border: 1px solid #37d54c;
        table-layout: fixed;
        margin: 0.5%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }
    table.camp_box tr td:nth-child(1), table.camp_box tr td:nth-child(3){
        width: 25%;
    }
    table.camp_box tr td:nth-child(2){
        width: 50%;
    }
    td.camp_view_button, td.camp_duration, td.camp_rate, td.rating{
        text-align: center;
    }
    td.customcycler{
        height: 100%;
        width: 100%;
        background-size: cover;
        cursor:pointer;
    }
    .this_div{
        transition: background 0.4s ease-in;
         -webkit-transition: background 0.4s ease-in;
        -moz-transition: background 0.4s ease-in;
    }
    .camp_name, .camp_speciality{
        text-align: justify;
        padding: 0px 0px 0px 10px;
        color: blue;
        font-weight: bold;
    }
    .camp_speciality{
        color: #6e10b3;
        font-size: 12px;
        font-weight: normal;
    }
    .camp_speciality > i{
        color: red;
        width: 4%;
    }
    .rating > i{
        color: gold;
    }
    .camp_duration{
        font-size: 10px;
        color: darkblue;
    }
    .camp_duration > i{
        color: red;
    }
    .camp_rate > i{
        color: red;
    }
    @media screen and (max-width: 600px) {
        td.camp_view_button > .btn{
            padding: 6px 2px !important;
        }
        .camp_name, .rating, .camp_rate{
            font-size: smaller;
        }
        .camp_speciality, .footer{
            white-space: nowrap; 
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
    }
    @media screen and (max-width: 320px) {
        td.camp_view_button > .btn {
            font-size: 0;
            padding: 10px 10px !important;
        }
        td.camp_view_button > .btn > i{
            font-size: initial;
        }
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
                <h1 class="h1-seo"><span class="">Search</span> <span class="">Your</span> <span class="">Favourite Camp</span></h1>
                <h3>
                    <form id="searching_box" action="<?php echo base_url(); ?>" method="get">
                    <input type="text" name="keyword" class="form-control" placeholder="Search using Name and Location..." />
                    <a href="javascript:void(0);" onclick="searching_box.submit();"><img class="search-icon" src="<?php echo base_url() ?>assets/images/search-icon.png"></a>
                    </form>
                </h3>
            </div>
            <h6 class="category category-absolute">
                A one stop solution for campers! <a id="scrolltocamps" href="#camps"><span></span></a>
            </h6>
        </div>
    </div>
    <div class="main" id="camps" style="background-color:#f7f7f7; margin-bottom:5px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                  <form class="form">
                   <div class="box">
                    <h4>Camp Type</h4>
                     <div class="boxes">
                      <?php 
                        foreach($camp_type as $ct){ ?>
                            <input id="<?php echo "ct_".$ct->id; ?>" value="<?php echo $ct->id; ?>" name="camp_type[]" type="checkbox"/>
                            <label for="<?php echo "ct_".$ct->id; ?>"><?php echo $ct->ctype; ?></label>
                      <?php
                        }
                      ?>  
                       </div>                        
                   </div>
                   
                   <div class="box">
                    <h4>Camp Best For</h4>
                     <div class="boxes">
                      <?php 
                        foreach($camp_for as $cf){ ?>
                            <input id="<?php echo "cf_".$cf->id; ?>" value="<?php echo $cf->id; ?>" name="camp_for[]" type="checkbox"/>
                            <label for="<?php echo "cf_".$cf->id; ?>"><?php echo $cf->name; ?></label> 
                      <?php
                        }
                      ?> 
                       </div>                        
                   </div>
                   <div class="box" style="background:none;">
                     <h4>Preferred Date</h4>
                      <input type="date" name="doa" class="form-control" value="" placeholder="Date Of Arrival" data-datepicker-color="primary" style="border: 1px solid blue; border-radius: .25rem; background-color:white; width:95%; margin:2.5%; color:blue;">
                      <button style="margin-left:35%;" class="btn btn-sm btn-info"><i class="fab fa-searchengin"></i> Search</button>
                   </div>
                    </form>
                </div>
                <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
                    <?php if(is_array($camps)){ 
                            if($this->input->get('camp_type') || $this->input->get('camp_for') || $this->input->get('doa') || $this->input->get('keyword')){
                                echo "<span class='form'><h4 class='pg_tit'>Sorry, Your search returned 0 camps. But have a look at these similar camps: </h4></span>";
                            } else {
                                echo "<span class='form'><h4 class='pg_tit'>".count($camps)." camp(s) found</h4></span>";
                            }
                            
                            $basic_url = base_url()."assets/uploads/organisers/camp_images/";
                            foreach($camps as $c){ ?>                        
                            <div class="row">
                                <div class="col-md-12 table-responsive">
                                    <table class="camp_box table-borderless">
                                        <tr>
                                           <?php 
                                                $images = $this->My_model->selectRecord('camp_images', '*', array('camp_id' => $c->camp_id, 'del_status'=>0));
                                                $list_images = array();
                                                if(is_array($images)){
                                                    foreach($images as $i){
                                                        array_push($list_images, $basic_url.$i->name);
                                                    }
                                                } else {
                                                    array_push($list_images, $basic_url."default.jpg");
                                                }
                                            ?>
                                            <td rowspan="4" class="customcycler" style="background-image:url('<?php echo $list_images[0]; ?>');" data-images="<?php echo implode(', ',$list_images); ?>">
                                                
                                            </td>
                                            <td class="camp_name"><?php echo $c->title; ?></td>
                                            <td class="rating">
                                                <?php 
                                                    $over_all = $this->My_model->selectRecord('camp_rating', array('AVG(overall_rating) as rating'), array('camp_id' => $c->camp_id));
                                                    $rate = ceil($over_all[0]->rating);
                                                    for($i=1;$i<=5;$i++){
                                                        if($i <= $rate){
                                                           echo "<i class='fas fa-star'></i>"; 
                                                        } else {
                                                            echo '<i class="far fa-star"></i>';
                                                        }
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="camp_rate">
                                            <?php
                                                $current_currency = 'USD'; 
                                                if($this->session->userdata('selected_currency')){
                                                    $current_currency = $this->session->userdata('selected_currency');
                                                }
                                                $display_amount = "";
                                                if(strcmp($current_currency, $c->currency) == 0){
                                                   $display_amount = "<span class='money' rel='tooltip' title='Conversion was not needed'>".$current_currency." ".$c->price."/- </span>";   
                                                } else {
                                                    $display_amount = "<span class='money' rel='tooltip' title='~ Approximate Conversion from ".$c->currency."'>".$current_currency." ".$this->My_model->convert($c->currency, $current_currency, $c->price)."/- </span>";
                                                }
                                                echo "<i class='fas fa-credit-card'></i> ".$display_amount;
                                            ?>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td></td>
                                            <td class="camp_duration"><i class="far fa-calendar-alt"></i> <?php echo $c->duration." days / ".($c->duration - 1)." Nights"; ?></td>
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
                                                        echo "<i class='fas fa-coffee'></i> Free Drinks available";
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