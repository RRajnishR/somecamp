<script>
    var page_name="profile";
</script>  
<style>
    .profile-page .page-header {
        min-height: 350px !important;
    }
    .message_box{
        height: 350px;
        border: 1px solid grey;
        overflow-y: auto;
    }
    .container2 {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
    }
    .darker {
        border-color: #ccc;
        background-color: #ddd;
    }
    .container2::after {
        content: "";
        clear: both;
        display: table;
    }
    .container2 img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }
    .container2 img.right {
        float: right;
        margin-left: 20px;
        margin-right:0;
    }
    .time-right {
        float: right;
        color: #aaa;
    }
    .time-left {
        float: left;
        color: #999;
    }
    #msg_reply{
        margin-top: 5px;
        border: 1px solid grey;
        border-radius: 2%;
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
                                foreach($enq_history as $en){ 
                                    if($en->replied_by == "User"){
                            ?>
                                    <div class="container2">
                                      <img src="<?php echo base_url(); ?>assets/images/user.png" alt="User Avatar" style="width:100%;">
                                      <p><?php echo $en->reply; ?></p>
                                      <span class="time-right"><?php echo date("F j, Y, g:i a", strtotime($en->reply_time)); ?></span>
                                    </div>
                            <?php
                                    } else if($en->replied_by == "Org"){ ?>
                                    <div class="container2 darker">
                                      <img src="<?php echo base_url(); ?>assets/images/org.png" alt="Org Avatar" class="right" style="width:100%;">
                                      <p><?php echo $en->reply; ?></p>
                                      <span class="time-left"><?php echo date("F j, Y, g:i a", strtotime($en->reply_time)); ?></span>
                                    </div>
                            <?php
                                    } else if($en->replied_by == "Admin"){ ?>
                                    <div class="container2 darker">
                                      <img src="<?php echo base_url(); ?>assets/images/adm.png" alt="Admin Avatar" class="right" style="width:100%;">
                                      <p><?php echo $en->reply; ?></p>
                                      <span class="time-left"><?php echo date("F j, Y, g:i a", strtotime($en->reply_time)); ?></span>
                                    </div>
                            <?php  
                                    }
                                }
                            ?>
                        </div>
                        <div class="reply">
                           <form action="<?php echo base_url(); ?>Enquire/continue_enq/<?php echo $enq_id; ?>" method="post">
                            <textarea name="reply_to_camp" id="msg_reply" cols="30" rows="10" class="form-control" placeholder="Write your reply here." required></textarea>
                            <button class="btn btn-success" style="float:right;"><i class="fas fa-paper-plane"></i> Send </button>
                           </form>
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
        //scrolling to the end of the message box
        var element = document.getElementById("message_box");
        element.scrollTop = element.scrollHeight;
    </script>