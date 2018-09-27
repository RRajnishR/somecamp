<style>
    .navbar.navbar-transparent {
        background: #f96332 !important;
        padding: 0px !important;
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
            <h1>7 Days Wellness and Yoga Retreat in Bali, Indonesia</h1>
            <a href="#">Santhika Bed and Breakfast, Jalan Pandji Tisna, Kaliasem, Lovina 81152 Indonesia</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider">
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
                <div class="col-sm-12 introduction" >
                    <?php 
                        echo $this_camp->intro;
                    ?>
                </div>
                <div class="col-sm-12" style="background:white; margin-bottom:10px; padding-bottom: 10px;">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
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
                        <div class="panel panel-default">
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
                        <div class="panel panel-default">
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
                    <table class="table table-dark table-borderless">
                        <tr><td>Value for money</td><td><span class="sm"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></td></tr>
                        <tr><td>Accommodation & facilities</td><td><span class="sm"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></td></tr>
                        <tr><td>Food</td><td><span class="sm"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></td></tr>
                        <tr><td>Location</td><td><span class="sm"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></td></tr>
                        <tr><td>Overall impression</td><td><span class="sm"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></td></tr>
                    </table>
                </div>
                <div class="col-sm-12">
                    <div class="camp">
                        <div class="camp_image">
                            <img class="rounded-circle organiser" height="80" width="80" src="https://ak3.picdn.net/shutterstock/videos/23637433/thumb/10.jpg" />
                        </div>
                        <div class="camp_desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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