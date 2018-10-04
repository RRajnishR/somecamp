<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Dashboard</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-2">
                        <div class="round_div"><div class="first_half">
                            <?php
                                echo $uCount = $this->db->from("users")->count_all_results();
                                $oCount = $this->db->from("organisers")->count_all_results();
                                $cCount = $this->db->from("camp")->count_all_results();
                                $eCount = $this->db->from("enquiry")->count_all_results();
                                $rCount = $this->db->from("reservations")->count_all_results();
                                $wCount = $this->db->from("wishlist")->count_all_results();
                            ?>
                        </div><div class="second_half"><i class="fa fa-group"></i> Users</div></div>
                    </div>
                    <div class="col-md-2">
                        <div class="round_div"><div class="first_half"><?php echo $oCount; ?></div><div class="second_half"><i class="fa fa-briefcase"></i> Organisers</div></div>
                    </div>
                    <div class="col-md-2">
                        <div class="round_div"><div class="first_half"><?php echo $cCount; ?></div><div class="second_half"><i class="fa fa-compass"></i> Camps</div></div>
                    </div>
                    <div class="col-md-2">
                       <div class="round_div"><div class="first_half"><?php echo $eCount; ?></div><div class="second_half"><i class="fa fa-question-circle"></i> Enquiries</div></div> 
                    </div>
                    <div class="col-md-2">
                       <div class="round_div"><div class="first_half"><?php echo $rCount; ?></div><div class="second_half"><i class="fa fa-book"></i> Reservations</div></div> 
                    </div>
                    <div class="col-md-2">
                       <div class="round_div"><div class="first_half"><?php echo $wCount; ?></div><div class="second_half" style="font-size:14px;"><i class="fa fa-book"></i> Wishlisted Camps</div></div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->