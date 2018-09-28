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
                </div>
                <div class="col-sm-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="fab fa-fort-awesome-alt"></i>Accomodation
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod in mi quis dapibus. Sed eros orci, ultrices et lacus rhoncus, ultrices suscipit libero. Nunc laoreet, ligula mattis imperdiet convallis, sapien nisi auctor dui, nec scelerisque nulla massa et magna.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default shadow">
                           
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="far fa-calendar-alt"></i> Program
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod in mi quis dapibus. Sed eros orci, ultrices et lacus rhoncus, ultrices suscipit libero. Nunc laoreet, ligula mattis imperdiet convallis, sapien nisi auctor dui, nec scelerisque nulla massa et magna.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default shadow">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        <i class="fas fa-location-arrow"></i> Camp Location
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod in mi quis dapibus. Sed eros orci, ultrices et lacus rhoncus, ultrices suscipit libero. Nunc laoreet, ligula mattis imperdiet convallis, sapien nisi auctor dui, nec scelerisque nulla massa et magna.
                                </div>
                            </div>
                        </div>
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