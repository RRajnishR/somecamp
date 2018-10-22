<style>
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
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3><i class="fa fa-comments-o"></i> Messages </h3>
                <div class="content-panel">
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
                                                <div class="container2 darker">
                                                  <img src="<?php echo base_url(); ?>assets/images/camper.png" alt="User Avatar" style="width:100%;" class="right">
                                                  <p><?php echo $en->reply; ?></p>
                                                  <span class="time-left"><?php echo date("F j, Y, g:i a", strtotime($en->reply_time)); ?></span>
                                                </div>
                                        <?php
                                                } else if($en->replied_by == "Org"){ ?>
                                                <div class="container2">
                                                  <img src="<?php echo base_url(); ?>assets/images/user.png" alt="Org Avatar" style="width:100%;">
                                                  <p><?php echo $en->reply; ?></p>
                                                  <span class="time-right"><?php echo date("F j, Y, g:i a", strtotime($en->reply_time)); ?></span>
                                                </div>
                                        <?php
                                                } else if($en->replied_by == "Admin"){ ?>
                                                <div class="container2">
                                                  <img src="<?php echo base_url(); ?>assets/images/adm.png" alt="Admin Avatar" style="width:100%;">
                                                  <p><?php echo $en->reply; ?></p>
                                                  <span class="time-right"><?php echo date("F j, Y, g:i a", strtotime($en->reply_time)); ?></span>
                                                </div>
                                        <?php  
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="reply">
                                       <form action="<?php echo base_url(); ?>camp_admin/Enquiries/continue_enq/<?php echo $enq_id; ?>" method="post">
                                        <textarea name="reply_to_camp" id="msg_reply" cols="5" rows="2" class="form-control" placeholder="Write your reply here." required></textarea>
                                        <button class="btn btn-success" style="float:right;"><i class="fa fa-send"></i> Send </button>
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
            <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
    </section>
    <!-- /wrapper -->
</section>