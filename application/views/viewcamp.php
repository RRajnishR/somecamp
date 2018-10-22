<style>
.navbar.navbar-transparent {
    background: #f951c7 !important;
    padding: 0px !important;
}
body{
    background: #fff !important;
}
h3.page_heading{
    margin-bottom: 15px !important;
}
.table{
    font-size: 10px;
}
.shadow{
    -webkit-box-shadow: 2px 2px 5px 0px rgba(19,145,73,1);
    -moz-box-shadow: 2px 2px 5px 0px rgba(19,145,73,1);
    box-shadow: 2px 2px 5px 0px rgba(19,145,73,1);
}
.camp{
    margin-top: 4px;
}
.camp_image{
    height: 200px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
}
.organiser{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    transform: translate3d(-50%,-50%,0);
    border: 4px solid white;
}
.camp_desc{
    font-size: 10px;
    text-align: justify;
}
.intro{
    margin-top: 2vw;
    font-size: 12px;
    font-weight: bold;
}
a:hover, a:focus{
outline: none;
text-decoration: none;
}
#accordion .panel{
    border:0px none;
    border-radius: 0px;
    box-shadow: none;
    margin-bottom:15px;
}
#accordion .panel-heading{
    padding: 0;
    border-radius: 0px;
}
#accordion .panel-title a{
    position: relative;
    display: block;
    padding: 15px 10px 15px 55px;
    background: #fff;
    text-transform:uppercase;
    transition: all 0.4s ease 0s;
}
#accordion .panel-title a i,
#accordion .panel-title a.collapsed i{
    position: absolute;
    top:0;
    left:-26px;
    color: #CAD079;
    font-size: 17px;
    background: #233859;
    padding: 15px 19px;
    border-radius:4px;
    border:0 none;
}
#accordion .panel-title a.collapsed i{
    background:#fff;
    color:#333;
    border:1px solid #d3d3d3;
}
#accordion .panel-title a.collapsed:hover i{
    background:#233859;
    color:#fff;
}
#accordion .panel-body{
    padding-left:50px;
    color:#333;
    line-height: 24px;
    border-top: 0px none;
    border-left:1px dashed #233859;
}
@media only screen and (max-width: 768px){
    #accordion .panel-title a i,
    #accordion .panel-title a.collapsed i{
        left:-10px;
    }
    #accordion .panel-body{
        padding-left: 15px;
        margin-left: 15px;
    }
}
    .element{
        padding-bottom: 15px;
    }
    .tag {
  background: #eee;
  border-radius: 3px 0 0 3px;
  color: #999;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 20px 0 23px;
  position: relative;
  margin: 0 10px 10px 0;
  text-decoration: none;
  -webkit-transition: color 0.2s;
}

.tag::before {
  background: #fff;
  border-radius: 10px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
  content: '';
  height: 6px;
  left: 10px;
  position: absolute;
  width: 6px;
  top: 10px;
}

.tag::after {
  background: #fff;
  border-bottom: 13px solid transparent;
  border-left: 10px solid #eee;
  border-top: 13px solid transparent;
  content: '';
  position: absolute;
  right: 0;
  top: 0;
}

.tag:hover {
  background-color: crimson;
  color: white;
}

.tag:hover::after {
   border-left-color: crimson; 
}
</style>
<script>
    var page_name = "camps";
</script>
<?php 
    $this_camp = $camp_data[0];
?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/slider/normalize.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/slider/ideal-image-slider.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/slider/themes/default/default.css">
<div class="container" style="margin-top:5vw;">
    <div class="row">
        <div class="col-md-12"> 
            <h1><?php echo $this_camp->title; ?></h1>
            <a href=""><?php echo $this_camp->address; ?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider" class="shadow">
                        <?php 
                            if(is_array($pics)){
                                foreach($pics as $p){ ?>
                                    <img src="<?php echo base_url(); ?>assets/uploads/organisers/camp_images/<?php echo $p->name ?>" alt="<?php echo "Image of ".$this_camp->title; ?>"/>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-sm-12 intro shadow" >
                    <h3 class="page_heading">Introduction</h3>
                    <?php 
                        echo $this_camp->intro;
                    ?>
                    <hr/>
                    <?php 
                        if(!$this_camp->camp_type==""){
                            $types = $this->My_model->selectRecord('camp_type', '*', array('id IN ('.$this_camp->camp_type.')' => NULL));
                            foreach($types as $t) {
                                echo "<a href='javascript:void(0)' class='tag'>".$t->ctype."</a>";
                            }
                        }
                    ?>
                </div>
                <div class="col-sm-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                       <?php 
                            if(!$this_camp->facilities == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="AF">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#facilities" aria-expanded="true" aria-controls="facilities">
                                            <i class="fas fa-smile-beam"></i> Available Facilities
                                        </a>
                                    </h4>
                                </div>
                                <div id="facilities" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="AF">
                                    <div class="panel-body">
                                       <div class="row">
                                        <?php 
                                            $flist = $this->My_model->selectRecord('facilities', '*', array('id IN ('.$this_camp->facilities.')' => NULL));
                                            foreach($flist as $f){ ?>
                                                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 element"><?php echo "<i class='far fa-arrow-alt-circle-right'></i> ".$f->facilityname; ?></div>
                                        <?php 
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                        
                        <?php
                            if(!$this_camp->itinerary == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="prog">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#iti" aria-expanded="true" aria-controls="iti">
                                            <i class="far fa-calendar-alt"></i> Program / Itinerary
                                        </a>
                                    </h4>
                                </div>
                                <div id="iti" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="prog">
                                    <div class="panel-body">
                                        <?php echo $this_camp->itinerary; ?>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        
                        <?php
                            if(!$this_camp->other_lang == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="AL">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#other_lang" aria-expanded="true" aria-controls="other_lang">
                                            <i class="fas fa-language"></i> Other Languages
                                        </a>
                                    </h4>
                                </div>
                                <div id="other_lang" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="AL">
                                    <div class="panel-body">
                                       <div class="row">
                                        <?php 
                                            $llist = $this->My_model->selectRecord('langs', '*', array('id IN ('.$this_camp->other_lang.')' => NULL));
                                            foreach($llist as $l){ ?>
                                                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 element"><?php echo "<i class='far fa-hand-point-right'></i> ".$l->name." (".$l->nativeName.")"; ?></div>
                                        <?php 
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        <?php
                            if(!$this_camp->lot_long == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="loc">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#location" aria-expanded="true" aria-controls="location">
                                            <i class="fas fa-location-arrow"></i> Location
                                        </a>
                                    </h4>
                                </div>
                                <div id="location" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="loc">
                                    <div class="panel-body">
                                       <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                <iframe style="width:80%; height:300px;" src = "https://maps.google.com/maps?q=<?php echo str_replace(" ", "", $this_camp->lot_long); ?>&hl=es;z=14&amp;output=embed"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                         <?php
                            if(!$this_camp->camp_for == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="camp_for">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#bsf" aria-expanded="true" aria-controls="bsf">
                                            <i class="fas fa-check-double"></i> Best Suited For
                                        </a>
                                    </h4>
                                </div>
                                <div id="bsf" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="camp_for">
                                    <div class="panel-body">
                                       <div class="row">
                                        <?php 
                                        $camp_for = $this->My_model->selectRecord('camp_for', '*', array('id IN ('.$this_camp->camp_for.')' => NULL));
                                        foreach($camp_for as $c){ ?>
                                            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 element"><?php echo "<i class='fas fa-chevron-circle-right'></i> ".$c->name; ?></div>
                                        <?php 
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        
                        <?php
                            if(!$this_camp->inc_meal == ''){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="inc_meal">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#food" aria-expanded="true" aria-controls="food">
                                            <i class="fas fa-utensils"></i> Food
                                        </a>
                                    </h4>
                                </div>
                                <div id="food" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="inc_meal">
                                    <div class="panel-body">
                                       <div class="row">
                                            <?php
                                                if($this_camp->inc_meal=='1'){
                                                    ?>
                                                       <ul class="list-group col-md-12">
                                                          <li class="list-group-item list-group-item-success" style="margin-right:5%;"><i class="fab fa-first-order-alt"></i> Food Included! </li>  
                                                        </ul> 
                                                        <br/> 
                                                    <?php
                                                    if(!$this_camp->meal_list==""){
                                                        $meals = $this->My_model->selectRecord('meals', '*', array('id IN ('.$this_camp->meal_list.')' => NULL));
                                                        echo "<b class='col-md-12'>Included Food: </b>";
                                                        foreach($meals as $m){
                                                            ?>
                                                             <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 element"><?php echo "<i class='fas fa-utensil-spoon'></i> ".$m->meal_type; ?></div>
                                                            <?php
                                                        }
                                                        $food_type = $this->My_model->selectRecord('food_type', '*', array('id IN ('.$this_camp->food_type.')' => NULL));
                                                        echo "<b class='col-md-12'>Supported Food Type: </b> <br/>";
                                                        foreach($food_type as $ft){
                                                            ?>
                                                            <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 element"><?php echo "<i class='fas fa-utensil-spoon'></i> ".$ft->food_type; ?></div>
                                                            <?php
                                                        }
                                                    }   
                                                } else {
                                                    ?>
                                                    <ul class="list-group col-md-12">
                                                      <li class="list-group-item list-group-item-success" style="margin-right:5%;"><i class="fab fa-first-order-alt"></i> Food Not Included! </li>  
                                                    </ul> 
                                                    <br/> 
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        
                        <?php
                            if(!$this_camp->inc_drink == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="drinks">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#drnk" aria-expanded="true" aria-controls="drnk">
                                            <i class="fas fa-cocktail"></i> Drinks
                                        </a>
                                    </h4>
                                </div>
                                <div id="drnk" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="drinks">
                                    <div class="panel-body">
                                       <div class="row">
                                            <?php
                                            if($this_camp->inc_drink=="1"){
                                                ?>
                                                    <ul class="list-group col-md-12">
                                                          <li class="list-group-item list-group-item-success" style="margin-right:5%;"><i class="fab fa-first-order-alt"></i> Drinks Included! </li>  
                                                    </ul> 
                                                    <br/> 
                                                <?php
                                                $dlist = $this->My_model->selectRecord('drink_type', '*', array('id IN ('.$this_camp->drink_list.')' => NULL));
                                                echo "<b class='col-md-12'>Include Drinks: </b>";
                                                foreach($dlist as $d){
                                                    ?>
                                                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 element"><?php echo "<i class='fas fa-utensil-spoon'></i> ".$d->drink_type; ?></div>
                                                    <?php
                                                }
                                            } else {
                                            ?>
                                            <ul class="list-group col-md-12 element">
                                                  <li class="list-group-item list-group-item-success" style="margin-right:5%;"><i class="fab fa-first-order-alt"></i> Drinks Not Included </li>  
                                            </ul> 
                                            <br/>    
                                            <?php
                                            }
                                           ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        
                        <?php
                            if(!$this_camp->included == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="incl">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#wincl" aria-expanded="true" aria-controls="wincl">
                                            <i class="far fa-dot-circle"></i> What's Included
                                        </a>
                                    </h4>
                                </div>
                                <div id="wincl" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="incl">
                                    <div class="panel-body">
                                        <?php echo $this_camp->included; ?>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        
                        <?php
                            if(!$this_camp->noincluded == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="noincl">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#nowincl" aria-expanded="true" aria-controls="nowincl">
                                            <i class="far fa-times-circle"></i> What's Not Included
                                        </a>
                                    </h4>
                                </div>
                                <div id="nowincl" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="noincl">
                                    <div class="panel-body">
                                        <?php echo $this_camp->noincluded; ?>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        
                        <?php
                            if(!$this_camp->things_to_do == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="ttodo">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#ttd" aria-expanded="true" aria-controls="ttd">
                                            <i class="fas fa-clipboard-list"></i> Things To Do (Optional)
                                        </a>
                                    </h4>
                                </div>
                                <div id="ttd" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="ttodo">
                                    <div class="panel-body">
                                        <?php echo $this_camp->things_to_do; ?>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        
                        <?php
                            if(!$this_camp->pickup_service == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="ps">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#pickup" aria-expanded="true" aria-controls="pickup">
                                            <?php 
                                                $ps = $this_camp->pickup_service;
                                                if($ps == '1'){
                                                    echo '<i class="fas fa-plane-arrival"></i> Free Airport Pickup' ;
                                                } else if($ps == '2') {
                                                    echo '<i class="fas fa-shuttle-van"></i> <sup style="text-decoration:none;">*</sup>Pickup Available' ;
                                                } else if($ps == '3'){
                                                    echo '<i class="fas fa-map-marked-alt"></i> How to reach here' ;
                                                }
                                            ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="pickup" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="ps">
                                    <div class="panel-body">
                                       <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 element">
                                                <?php 
                                                    if(!$this_camp->near_airport==""){ ?>
                                                        <ul class="list-group">
                                                          <li class="list-group-item list-group-item-success" style="margin-right:5%;"><i class="fas fa-plane"></i> Nearest Airport: <?php echo $this_camp->near_airport; ?></li>  
                                                        </ul> <br/>
                                                <?php 
                                                    }
                                                ?>
                                                <?php
                                                    if($ps == '1'){
                                                        echo "Specifications will be conveyed to you via e-mail.";
                                                    } else if($ps == '2') { 
                                                        echo "Pick up service: ".$this_camp->pickup_cost."/- ".$this_camp->currency." extra per person";
                                                    } else if($ps == '3'){ ?>
                                                        <b>Directions: </b>
                                                        <?php 
                                                            if(!$this_camp->camp_direction==""){
                                                                echo $this_camp->camp_direction;
                                                            } else {
                                                                echo "Directions will be updated shortly";
                                                    } ?>
                                                <?php   
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        
                        <?php
                            if(!$this_camp->video_link == ""){ ?>
                            <div class="panel panel-default shadow">
                                <div class="panel-heading" role="tab" id="vid">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#vdo" aria-expanded="true" aria-controls="vdo">
                                            <i class="fab fa-youtube"></i> Camp's Video
                                        </a>
                                    </h4>
                                </div>
                                <div id="vdo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="vid">
                                    <div class="panel-body">
                                        <iframe width="60%" height="315"
                                        src="<?php echo $this_camp->video_link; ?>?rel=0&showinfo=0&cc_load_policy=1">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        <?php   
                            }
                        ?>
                        
                    </div>
                </div>
            </div>            
        </div>
        <div class="col-md-3 sidebar">
           <form action="" name="camp_form" method="post">
           <input type="hidden" name="camp_name" value="<?php echo $this_camp->title; ?>" />
           <input type="hidden" name="org_id" value="<?php echo $this_camp->organiser_id; ?>" />
           <input type="hidden" name="camp_id" value="<?php echo $this_camp->camp_id; ?>" />
            <div class="row">
                <div class="col-sm-12">
                   <?php 
                        $camp_rating = $this->My_model->selectRecord('camp_rating', array('COUNT(id) as total','AVG(rate_val) as val', ' AVG(rate_acc) as acc', 'AVG(rate_food) as food', ' AVG(rate_loc) as loc', 'AVG(overall_rating) as rating'), array('camp_id' => $this_camp->camp_id) );
                        //print_r($camp_rating);
                    ?>
                    <table class="table table-dark table-borderless shadow">
                      <?php 
                        if(!$camp_rating[0]->rating==0){
                            ?>
                                <tr>
                                   <td><span class="sm">
                                        <?php 
                                            $rate = ceil($camp_rating[0]->rating);
                                            for($i=1;$i<=5;$i++){
                                                if($i <= $rate){
                                                   echo "<i class='fas fa-star'></i>"; 
                                                } else {
                                                    echo '<i class="far fa-star"></i>';
                                                }
                                            }
                                        ?>
                                        </span>
                                    </td>
                                   <td><small><?php echo $camp_rating[0]->total; ?> reviews</small></td>
                               </tr>
                               <tr>
                                    <td>Value for money</td>
                                    <td><span class="sm">
                                           <?php
                                            $rate = ceil($camp_rating[0]->val);
                                            for($i=1;$i<=5;$i++){
                                                if($i <= $rate){
                                                   echo "<i class='fas fa-star'></i>"; 
                                                } else {
                                                    echo '<i class="far fa-star"></i>';
                                                }
                                            }
                                           ?> 
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Accommodation & facilities</td>
                                    <td><span class="sm">
                                        <?php
                                        $rate = ceil($camp_rating[0]->acc);
                                        for($i=1;$i<=5;$i++){
                                            if($i <= $rate){
                                               echo "<i class='fas fa-star'></i>"; 
                                            } else {
                                                echo '<i class="far fa-star"></i>';
                                            }
                                        }
                                       ?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Food</td>
                                    <td><span class="sm">
                                        <?php
                                        $rate = ceil($camp_rating[0]->food);
                                        for($i=1;$i<=5;$i++){
                                            if($i <= $rate){
                                               echo "<i class='fas fa-star'></i>"; 
                                            } else {
                                                echo '<i class="far fa-star"></i>';
                                            }
                                        }
                                       ?>
                                    </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td><span class="sm">
                                        <?php
                                        $rate = ceil($camp_rating[0]->loc);
                                        for($i=1;$i<=5;$i++){
                                            if($i <= $rate){
                                               echo "<i class='fas fa-star'></i>"; 
                                            } else {
                                                echo '<i class="far fa-star"></i>';
                                            }
                                        }
                                       ?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                   <td colspan="2" style="text-align:center;"><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><b>Rate this camp</b></button></td>
                               </tr>
                        <?php
                        }  else {
                           ?>
                               <tr>
                               <td colspan="2" style="text-align:center;"><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><b>Be the First one to rate this camp</b></button></td>
                               </tr>
                           <?php 
                        }
                      ?>
                    </table>
                </div>
                <div class="col-sm-12">
                    <div class="camp shadow">
                        <div class="camp_image" rel="tooltip" title="Organiser's Business Photo" style="background-image:url('<?php echo base_url(); ?>assets/uploads/organisers/featured/<?php echo $organiser[0]->b_photo; ?>')">
                            <img rel="tooltip" title="Organiser's Photo" class="rounded-circle organiser" height="80" width="80" src="<?php echo base_url(); ?>assets/uploads/organisers/pro_image/<?php echo $organiser[0]->image; ?>" />
                        </div>
                        <div class="camp_desc" rel="tooltip" title="Organiser's Description">
                            <?php echo $organiser[0]->b_desc; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 ">
                    <div style="border:1px 7C8086 solid;">
                       <label><i class="far fa-clock"></i> <b><?php echo $this_camp->duration." days / ".($this_camp->duration - 1)." Nights"; ?></b></label> <br/>
                        <h3><small style="font-size:10px;">FROM</small> 
                            <?php
                                $current_currency = 'USD'; 
                                if($this->session->userdata('selected_currency')){
                                    $current_currency = $this->session->userdata('selected_currency');
                                }
                                $display_amount = "";
                                if(strcmp($current_currency, $this_camp->currency) == 0){
                                   $display_amount = $current_currency." ".$this_camp->price."/-";   
                                } else {
                                    $display_amount = $current_currency." ".$this->My_model->convert($this_camp->currency, $current_currency, $this_camp->price)."/-";
                                }
                                echo $display_amount;
                            ?>
                        </h3> 
                        <label style="font-size:10px; font-style:italic; color:red; text-align:justify;">* Prices are indicative becaue of exchange rate and other variables. Exact price will be provided if you enquire/request for reservation. </label>                    
                    </div>
                </div>
                <div class="col-sm-12">
                   <div class="camp shadow" style="border-top:1px solid green;">
                    <label style="padding:4px;"><b>Select Arrival Date</b></label>
                    <select class="form-control" name="start_date">
                        <?php 
                            foreach($start_dates as $s){ ?>
                                <option value="<?php echo $s->start_date ?>"><?php echo date('l jS \of F Y', strtotime($s->start_date)); ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <br/>
                    </div>
                </div>
                <div class="col-sm-12" style="padding-top:10px;">
                   <div class="camp shadow" style="border-top:1px solid green;">
                    <label for="accomodation" style="padding:4px;"><b>Select Accomodation</b></label>
                    <?php 
                        $camp_accomodation = $this->My_model->selectRecord('camp_accomodation', '*', array('id IN ('.$this_camp->accomodation.')' => NULL));
                       //$this->My_model->printQuery(); die();
                       ?>
                           <div class="form-check form-check-radio">
                                <label class="form-check-label" style="width:95%;">
                                  <input class="form-check-input" type="radio" name="accomodation" id="exampleRadios1" value="0" checked />
                                  <span class="form-check-sign"></span>
                                      Default
                                      <span style="font-size:11px; float:right;" rel="tooltip" title="extra price">
                                       + <?php echo $current_currency; ?> 0 /-
                                      </span> 
                                </label>
                               </div>
                       <?php
                        foreach($camp_accomodation as $ca){
                            ?>
                               <div class="form-check form-check-radio">
                                <label class="form-check-label" style="width:95%;">
                                  <input class="form-check-input" type="radio" name="accomodation" id="exampleRadios1" value="<?php echo $ca->id; ?>">
                                  <span class="form-check-sign"></span>
                                      <?php echo $ca->acc_name; ?>
                                      <span style="font-size:11px; float:right;" rel="tooltip" title="extra price">
                                       + <?php 
                                            $extra_amount = "";
                                            if(strcmp($current_currency, $this_camp->currency) == 0){
                                               $extra_amount = $current_currency." ".$ca->price."/-";   
                                            } else {
                                                $extra_amount = $current_currency." ".$this->My_model->convert($this_camp->currency, $current_currency, $ca->price)."/-";
                                            }
                                            echo $extra_amount;
                                          ?>
                                      </span> <br/>
                                    <span style="color:grey; font-size:10px;"><?php echo $ca->sharing == '1'? 'Private':'Sharing'; ?> <br/> <?php echo $ca->no_room; ?> Rooms |  Max <?php echo $ca->person_num; ?> Person(s)<br/>
                                    </span>
                                </label>
                               </div>
                            <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="button" onclick="change_action('Enquiry')" class="btn btn-success btn-round" style="width:100%;">Send Enquiry </button>
                    <hr>
                    <button type="button" onclick="change_action('Reservation')" class="btn btn-info btn-round" style="width:100%;">Request Reservation</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body table-responsive">
                <?php 
                    if(!$this->session->userdata('email')){
                        echo "<h4>Please login as camper first, to rate this camp</h4>";
                    } else {
                        $check = $this->My_model->selectRecord('camp_rating', '*', array('camp_id' => $this_camp->camp_id, 'given_by' => $this->session->userdata('email')));
                        if(!$check){
                        ?>
                            <form action="<?php echo base_url() ?>Home/rate_this_camp" method="post">
                                <table class="table table-hover table-borderless">
                                    <tr>
                                        <td>Value For Money</td>
                                        <td><input name="rate_val" type="number" min="1" max="5" class="form-control" placeholder="out of 5"  required/></td>
                                    </tr>
                                    <tr>
                                        <td>Accomodations and Facilities</td>
                                        <td><input name="rate_acc" type="number" min="1" max="5" class="form-control" placeholder="out of 5"  required/></td>
                                    </tr>
                                    <tr>
                                        <td>Food</td>
                                        <td><input name="rate_food" type="number" min="1" max="5" class="form-control" placeholder="out of 5"  required/></td>
                                    </tr>
                                    <tr>
                                        <td>Location</td>
                                        <td><input name="rate_loc" type="number" min="1" max="5" class="form-control" placeholder="out of 5"  required/></td>
                                    </tr>
                                    <tr>
                                        <td>Overall Impression</td>
                                        <td><input name="overall_rating" type="number" min="1" max="5" class="form-control" placeholder="out of 5"  required/></td>
                                    </tr>
                                    <tr>
                                        <td>Suggestion / Comments</td>
                                        <td><textarea name="comment" class="form-control" style="border:1px solid;border-radius:2px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;
                                            <input type="hidden" name="camp_id" value="<?php echo $this_camp->camp_id; ?>" />
                                            <input type="hidden" name="given_by" value="<?php echo $this->session->userdata('email'); ?>" />
                                        </td>
                                        <td><button type="submit" class='btn btn-success'>Rate it</button></td>
                                    </tr>
                                </table>
                            </form>
                        <?php
                        } else {
                            echo "<h5>You have already rated this camp</h5>";
                        }
                    ?>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<script>
    function change_action(x){
        if(x=='Enquiry'){
            document.camp_form.action = baseurl+"Enquire";
        } else if(x=='Reservation') {
            document.camp_form.action = baseurl+"Reserve";
        }
        document.camp_form.submit();
    }
</script>