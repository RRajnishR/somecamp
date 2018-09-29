<style>
    .navbar.navbar-transparent {
        background: #f96332 !important;
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
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-comment"></i> Section 1
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis ac leo vel rutrum. Integer varius tristique magna vel dictum. Vestibulum augue magna, convallis id velit a, porttitor fermentum sem.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-link"></i>  Section 2
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis ac leo vel rutrum. Integer varius tristique magna vel dictum. Vestibulum augue magna, convallis id velit a, porttitor fermentum sem.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-bars"></i>  Section 3
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis ac leo vel rutrum. Integer varius tristique magna vel dictum. Vestibulum augue magna, convallis id velit a, porttitor fermentum sem.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    </div>
                </div>
            </div>            
        </div>
        <div class="col-md-3 sidebar">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-dark table-borderless shadow">
                        <tr>
                            <td>Value for money</td>
                            <td><span class="sm">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Accommodation & facilities</td>
                            <td><span class="sm">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Food</td>
                            <td><span class="sm"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td><span class="sm"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Overall impression</td>
                            <td><span class="sm"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                            </td>
                        </tr>
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
                <div class="col-sm-12">
                    <span class="small">4 Days/ 3 Nights</span><br/>
                    From Rs. 5000 /- Per person
                </div>
                <div class="col-sm-12">
                    <label class="small">Select Arrival Date</label>
                    <select class="form-control">
                        <option>Select Date</option>
                        <option>31st Aug 2018</option>
                        <option>31st Aug 2018</option>
                        <option>31st Aug 2018</option>
                    </select>
                    <br/>
                </div>
                <div class="col-sm-12">
                    <button class="btn btn-success form-control">Send Enquiry</button>
                    <hr>
                    <button class="btn btn-info form-control">Request Reservation</button>
                </div>
            </div>
        </div>
    </div>
</div>