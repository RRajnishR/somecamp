<script>
    var page_name = "reservation";
</script>
   <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>assets/frontend/img/enquiry2.jpg');">
      </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Enquiry About This Camp</h1>
        </div>
      </div>
    </div>
    <div class="section">
        <div class="container">
            <h3>Enquire about: <?php echo $this->input->post('camp_name');  ?></h3>
            <div class="row">
                <div class="col-md-2 col-lg-2">&nbsp;</div>
                <div class="col-md-10">
                  
                  
                   <div class="alert alert-info" role="alert">
                      <div class="container">
                        <div class="alert-icon">
                          <i class="now-ui-icons travel_info"></i>
                        </div>
                        The camp organizers normally answers within a few hours. You'll receive an email shortly
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </span>
                        </button>
                      </div>
                    </div>

                    <form action="<?php echo base_url() ?>Enquire/save_enquiry" method="post">
                        <input type="hidden" name="accomodation_selected" value="<?php echo $this->input->post('accomodation'); ?>"/>
                        <input type="hidden" name="start_date" value="<?php echo $this->input->post('start_date'); ?>"/>
                        <input type="hidden" name="org_id" value="<?php echo $this->input->post('org_id'); ?>"/>
                        <input type="hidden" name="camp_id" value="<?php echo $this->input->post('camp_id'); ?>"/>
                        <input type="hidden" name="preffered_currency" value="<?php if($this->session->userdata('selected_currency')) {echo $this->session->userdata('selected_currency'); } else { echo "USD"; } ?>"/>
                        <div class="form-group">
                          <label for="fname">First Name:</label>
                          <input type="text" class="form-control" id="fname" placeholder="Enter Your First Name" name="fname" value="<?php if($this->session->userdata('first_name')) echo $this->session->userdata('first_name'); ?>" required />
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if($this->session->userdata('email')) echo $this->session->userdata('email'); ?>" required />
                        </div>
                        <div class="form-group">
                          <label for="message">Message / Specify your needs / Enquire:</label>
                          <textarea class="form-control" name="msg" rows="5" placeholder="Type your other specifications / suggestion or enquiry here."></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Send Enquiry <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-lg-2">&nbsp;</div>
            </div>
        </div>
    </div>
</div>