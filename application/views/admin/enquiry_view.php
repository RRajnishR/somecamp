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
<?php $enq = $enquiries[0]; ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-briefcase"></i> View / Reply Enquiry</h3>
        <div class="row mb mt">
          <!-- page start-->
          <div class="form-panel" style="height:auto; overflow:auto;">
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">First Name</label>
              <div class="col-lg-10">
                <p class="form-control-static"><?php echo $enq->fname; ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Email</label>
              <div class="col-lg-10">
                <p class="form-control-static"><?php echo $enq->email; ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Message</label>
              <div class="col-lg-10">
                <p class="form-control-static"><?php echo $enq->msg; ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Camp</label>
              <div class="col-lg-10">
                <p class="form-control-static">
                    <?php 
                        $camp = $this->My_model->selectRecord('camp', array('title'), array('camp_id' => $enq->camp_id));
                    ?>
                    <a href="<?php echo base_url() ?>camp_admin/Camps/view_camp/<?php echo $enq->camp_id; ?>"><?php echo $camp[0]->title; ?></a>
                </p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Organiser</label>
              <div class="col-lg-10">
                <p class="form-control-static">
                    <?php 
                        $org = $this->My_model->selectRecord('organisers', array('b_name'), array('id' => $enq->org_id));
                    ?>
                    <a href="<?php echo base_url() ?>camp_admin/Organisers/view_org/<?php echo $enq->org_id; ?>"><?php echo $org[0]->b_name==""?'No Name Yet':$org[0]->b_name ; ?></a>
                </p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Date of Arrival</label>
              <div class="col-lg-10">
                <p class="form-control-static"><?php echo $enq->start_date; ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Currency</label>
              <div class="col-lg-10">
                <p class="form-control-static"><?php echo $enq->preffered_currency; ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Accomodation Selected</label>
              <div class="col-lg-10">
                <p class="form-control-static">
                   <?php 
                        $accomodation = $this->My_model->selectRecord('camp_accomodation', '*', array('id' => $enq->accomodation_selected));
                        echo "Name of accomodation: <b>".$accomodation[0]->acc_name."</b> [Number of rooms: ".$accomodation[0]->no_room."], [Max persons allowed: ".$accomodation[0]->person_num."], ";
                        echo "[Sharing: "; 
                        echo $accomodation[0]->sharing=='1'?'Yes':'No';
                        echo "], ";
                        echo "[Price: ".$accomodation[0]->price."]";
                    ?>
                </p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Time of Enquiry</label>
              <div class="col-lg-10">
                <p class="form-control-static"><?php echo $enq->enquiry_time; ?></p>
              </div>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!--   Message Box     -->
        <h3><i class="fa fa-history"></i>Enquiry Conversation History</h3>
        <div class="row mb mt">
            <div class="form-panel" style="height:auto; overflow:auto;">
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
                                          <img src="<?php echo base_url(); ?>assets/images/org.png" alt="Org Avatar" style="width:100%;">
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
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
<script>
CKEDITOR.replace('reply');
</script>