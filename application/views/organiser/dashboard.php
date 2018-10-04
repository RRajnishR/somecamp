<style>
    .round_icon{
        display: inline-block;
        cursor: pointer;
        margin: 15px;
        width: 105px;
        height: 105px;
        border-radius: 50%;
        padding-top: 24%;
        text-align: center;
        position: relative;
        z-index: 1;
        font-size: 20px;
        font-weight: bold;
        background: #4ECDC4;
        color: #ffffff;
    }
</style>
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt mb">
            <div class="col-lg-12">
                <h3><i class="fa fa-dashboard"></i> Dashboard</h3>
                <br>
                <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="dmbox">
                    <div class="service-icon">
                        <a class="" href="<?php echo base_url() ?>camp_organiser/Iprofile"><i class="dm-icon fa fa-user-circle fa-3x"></i></a>
                    </div>
                    <h4>1. Profile</h4>
                    <p>A fully filled profile helps our admin to approve your status as soon as possible/</p>
                </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="dmbox">
                    <div class="service-icon">
                        <a class="" href="<?php echo base_url() ?>camp_organiser/Camps"><i class="dm-icon fa fa-th-large fa-3x"></i></a>
                    </div>
                    <h4>2. Camps</h4>
                    <p>Adding a camp with all the neccessary information will bring many campers to your camp.</p>
                </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="dmbox">
                    <div class="service-icon">
                        <a class="" href="<?php echo base_url() ?>camp_organiser/Camps/addAccomodation"><i class="dm-icon fa fa-home fa-3x"></i></a>
                    </div>
                    <h4>3. Accomodations</h4>
                    <p>List and manage all your accomodations frpm this page and then link it with your camps.</p>
                </div>
            </div>
            <!-- end dmbox -->
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="dmbox">
                    <div class="service-icon">
                        <a class="" href="<?php echo base_url() ?>camp_organiser/Enquiries"><i class="dm-icon fa fa-comments-o fa-3x"></i></a>
                    </div>
                    <h4>4. Enquiry</h4>
                    <p>You can answer all the questions and enquiries from various campers here </p>
                </div>
            </div>
                <!-- end dmbox -->
            </div>
            <!--  /col-lg-12 -->
        </div>
        
        <div class="row content-panel">
          <h2 class="centered">Stats</h2>
          <div class="col-md-10 col-md-offset-1 mt mb">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="dmbox">
                    <div class="service-icon">
                       <?php 
                            $camp_count = $this->db->from("camp")->where('organiser_id="'.$this->session->userdata('org_id').'"')->count_all_results();
                        ?>
                        <span class="round_icon"><?php echo $camp_count; ?></span>
                    </div>
                    <h4>Total Camps</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="dmbox">
                    <div class="service-icon">
                       <?php 
                            $enq_count = $this->db->from("enquiry")->where('org_id="'.$this->session->userdata('org_id').'"')->count_all_results();
                        ?>
                        <span class="round_icon"><?php echo $enq_count; ?></span>
                    </div>
                    <h4>Total Enquiries</h4>
                </div>
            </div>
          </div>
          <!-- col-md-10 -->
        </div>
    </section>
    <!-- /wrapper -->
</section>