<script>
    var page_name = "home";
</script>
<div class="banner">
    <h1>Search Your Camp</h1>
    <form class="search-container">
        <input type="text" id="search-bar" placeholder="Try searching 'Camps in Europe'..">
        <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
    </form>
    <video autoplay loop muted class="banner__video" poster="https://pawelgrzybek.com/photos/2015-12-06-codepen.jpg">
          <source src="<?php echo base_url(); ?>assets/video/camp.webm" type="video/webm">
          <source src="<?php echo base_url(); ?>assets/video/camp.mp4" type="video/mp4">
        </video>
</div><br/>
<div class="container filter_box">
    <div class="row">
        <div class="col-lg-3 col-md-3 vertical_filter">
            <section class="filter_result">
                <div class="camp_category form-check">
                    <label class="cat_name" data-toggle="collapse" href="#camp_type" role="button" aria-expanded="false" aria-controls="camp_type">
                            <i class="fas fa-filter"></i> Show Camps For: <span class="float-right"><i class="fas fa-chevron-circle-down"></i></span>
                        </label>
                    <ul id="camp_type" class="collapse show">
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> School Boys</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> School Girls</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> School (Mix Group)</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Teen Males</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Teen Females</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Teen Mix</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Adult Males</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Adult Females</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Adult Mix</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Adult Couples</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Senior Males</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Senior Females</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Senior Group</li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> Senior Couples</li>
                    </ul>
                </div>
                <div class="camp_category form-check">
                    <label class="cat_name">
                            <i class="fas fa-filter"></i> Arrival Date: <span class="float-right"><i class="fas fa-chevron-circle-down"></i></span>
                        </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="camp_category form-check">
                    <label class="cat_name">
                            <i class="fas fa-filter"></i> Duration: <span class="float-right"><i class="fas fa-chevron-circle-down"></i></span>
                        </label>
                    <ul>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> 2 days </li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> From 3 to 7 days </li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> From 1 to 2 weeks </li>
                        <li><input class="form-check-input" type="checkbox" name="category" value=""> More than 2 weeks </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
            Found Camps: <b>1200+</b>
            <hr/>
            <div class="row bg-faded" style="margin-left:5px;">
                <?php 
                                for($i = 1; $i<10; $i++){ ?>
                <div class="col=lg-12 card">
                    <div class="row">
                        <div class="col-sm-4 pic_holder">
                            <div class="wrapper">
                                <figure>
                                </figure>
                            </div>
                            <i class="far fa-heart" title="Add to wishlist"></i>
                            <i class="far fa-thumbs-up" title="Like"></i>
                        </div>
                        <div class="col-sm-5 header">
                            <h5>7 Days The Art of Self Care Yoga and Meditation Retreat in Hawaii, USA</h5>
                            <span class="small">20th Jan 2019</span>
                            <div class="extra_text">
                                <i class="fas fa-language"></i> Instruction language: English<br/>
                                <i class="fas fa-mortar-pestle"></i> All meals included<br/>
                                <i class="fab fa-pagelines"></i> Vegetarian friendly
                            </div>
                        </div>
                        <div class="col-sm-3 header">
                            <h5>Rs. 14000 /-</h5>
                            <div class="extra_text">
                                <a class="btn btn-danger btn-outline-success" href="<?php echo base_url(); ?>Camp/view">See Details</a>
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