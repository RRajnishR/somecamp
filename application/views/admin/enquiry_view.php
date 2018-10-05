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
              <label class="col-lg-2 col-sm-2 control-label">Reply</label>
              <div class="col-lg-10">
                <p class="form-control-static">
                    <form action="<?php echo base_url() ?>camp_admin/Enquiries/send_save_reply/<?php echo $enq->id ?>" method="post">
                    <textarea class="form-control" name="reply" id="" placeholder="Reply here or forward the enquiry to organiser" required /><?php echo $enq->reply==""? '':$enq->reply ?></textarea> <br/>
                    <input type="hidden" name="send_to" value="<?php echo $enq->email; ?>">
                    <span class="help-block">Try to reply in less than 300 words</span>
                    <button class="btn btn-xs btn-success" <?php if($enq->forward_to_org=="2" || !$enq->replied_by=="") echo "disabled title='You can not submit a reply because this enquiry has been forwarded to Organiser / already been replied'"; ?> >Send Reply <i class="fa fa-check-circle-o"></i></button>
                    </form>
                </p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Reply By</label>
              <div class="col-lg-10">
                <p class="form-control-static"><?php echo $enq->replied_by==""? 'N.A.':$enq->replied_by;  ?></p>
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
                        echo "Name of accomodation: ".$accomodation[0]->acc_name." [Number of rooms: ".$accomodation[0]->no_room."], [Max persons allowed: ".$accomodation[0]->person_num."], ";
                        echo "[Sharing: "; 
                        echo $accomodation[0]->sharing=='1'?'Yes':'No'."],";
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
            <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">forward_to_org</label>
              <div class="col-lg-10">
                <p class="form-control-static"><a href="<?php echo base_url(); ?>camp_admin/Enquiries/forward/<?php echo $enq->id; ?>" class="btn btn-xs btn-info" <?php echo $enq->forward_to_org == "1" ? "":"disabled"; ?>> <i class="fa fa-forward"></i> Forward Now </a></p>
              </div>
            </div>
          </div>
          <!-- page end-->
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
<script>
CKEDITOR.replace('reply');
</script>