<script>
    var page_name="profile";
</script>  
<style>
    .profile-page .page-header {
        min-height: 350px !important;
    }
</style>
<div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('<?php echo base_url() ?>assets/frontend/img/profile.jpg');">
      </div>
      <div class="container">
        <div class="photo-container">
         <?php 
            if($this->session->userdata('social_stat')=="0"){
                if($this->session->userdata('photo')==""){
                   $p_img = base_url()."assets/uploads/users/profile/default_profile.png"; 
                } else {
                   $p_img = base_url()."assets/uploads/users/profile/".$this->session->userdata('photo'); 
                }
            } else {
                $p_img = $this->session->userdata('photo');
            }
         ?>
          <img src="<?php echo $p_img; ?>" alt="<?php echo $this->session->userdata('first_name')." | Camper at Langecole"; ?>">
        </div>
        <h3 class="title"><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name') ?></h3>
        <p class="category">Camper at Bookourcamp.com</p>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="button-container">
          <a href="#button" class="btn btn-primary btn-round btn-lg">Messages From Organiser</a>
        </div>
        <h5 class="description" style="font-weight:bold;"></h5>
        <div class="row">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8 table-responsive">
                <?php 
                    if(is_array($enq_history)){ ?>
                        <div class="message_box">
                            <?php 
                                foreach($enq_history as $en){ ?>
                                    if(){
                                    
                                    }
                            <?php
                                }
                            ?>
                        </div>
                <?php
                    } else {
                        echo "<h4 style='text-align:center;'>No replies yet!!</h4>";
                    }
                ?>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>
      </div>
    </div>
    <script>
        var thisbody = document.querySelector('body');
        thisbody.classList.remove('index-page');
        thisbody.classList.add('profile-page');
    </script>