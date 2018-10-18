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
          <a href="#button" class="btn btn-primary btn-round btn-lg">Enquiry History</a>
        </div>
        <h5 class="description" style="font-weight:bold;">List of all the enquiries you've ever made. You can click on view to see recent message / message history between you and camp organiser / Admin.</h5>
        <div class="row">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8 table-responsive">
                <?php 
                    if(is_array($enq)){ ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Camp</th>
                                    <th>Time of Enquiry</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $count=1;
                                    foreach($enq as $e){ ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td>
                                                <?php 
                                                    $camp = $this->My_model->selectRecord('camp', array('title'), array('camp_id' => $e->camp_id));
                                                    echo $camp[0]->title;
                                                ?>
                                            </td>
                                            <td><?php echo date('F j, Y, g:i a', strtotime($e->enquiry_time)) ?></td>
                                            <td><a class="btn btn-sm" href="<?php echo base_url() ?>Enquire/chathistory/<?php echo $e->id; ?>"><i class="fas fa-comments"></i></a></td>
                                        </tr>
                                    </tbody>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                <?php
                    } else {
                        echo "<h4 style='text-align:center;'>You have not enquired about any camp yet!</h4>";
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