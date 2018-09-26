<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3><i class="fa fa-th-large"></i> Manage Your Camps</h3>
                <!--  BASIC PROGRESS BARS -->
                <div class="showback">
                    <a class="btn btn-info" href="<?php echo base_url() ?>camp_organiser/Camps/new_camp"><i class="fa fa-plus"></i> Add new camp</a> &nbsp; <a href="#" title="What to do after adding a camp" style="float:right;margin-top:0.5%;" data-toggle="modal" data-target="#help"><i class="fa fa-2x fa-question-circle"></i></a>
                </div>
            </div>
            <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="white-panel pn">
                    <div class="panel-heading">
                        <div class="pull-left">
                          <h5><i class="fa fa-tasks"></i> Camp List </h5>
                        </div>
                        <br>
                    </div>
                    <div class="custom-check goleft mt table-responsive">
                       <span class="help-block" style="margin-left:2%; font-weight:bold;">
                            **Help: Hover over buttons/icons to get more information. Upload Video link / Add Images of your camp. This helps our admin to verify your camp asap and Visitors like camp with some good Images.**
                       </span>
                       <hr>
                       <?php if(is_array($camps)){ ?>
                        <table id="todo" class="table table-hover">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Camp Name</th>
                                  <th>Manage Extra Details </th>
                                  <th>Created On</th>
                                  <th>Status / Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php 
                                $count = 1;
                                foreach($camps as $c){ ?>
                                <tr>
                                    <td><?php echo $count; ?>.</td>
                                    <td><?php echo $c->title; ?></td>
                                    <td><?php 
                                            if(!$c->video_link==""){
                                                if(filter_var($c->video_link, FILTER_VALIDATE_URL) === FALSE){
                                                    echo '<a class="btn btn-xs btn-warning" href="'.base_url().'camp_organiser/Camps/video/'.$c->camp_id.'" title="Check Your Link again, If it works, ignore this warning"><i class="fa fa-video-camera"></i></a>';
                                                }else{
                                                    echo '<a class="btn btn-xs btn-info" href="'.base_url().'camp_organiser/Camps/video/'.$c->camp_id.'" title="You have added a video link of your camp"><i class="fa fa-video-camera"></i></a>';
                                                }
                                            } else {
                                                echo '<a class="btn btn-xs btn-danger" href="'.base_url().'camp_organiser/Camps/video/'.$c->camp_id.'" title="You have not added any video link of your camp"><i class="fa fa-video-camera"></i></a>';
                                            }
                                        ?>
                                         <a class="btn btn-xs btn-info" title="Manage Images of this camp" href="<?php echo base_url() ?>camp_organiser/Camps/images/<?php echo $c->camp_id; ?>"><i class="fa fa-camera-retro"></i></a> 
                                         <a class="btn btn-xs btn-info" href="<?php echo base_url(); ?>camp_organiser/Camps/addStartdate/<?php echo $c->camp_id; ?>" title="Add Camp Start Date(s)"><i class="fa fa-calendar"></i></a> 
                                         <a href="<?php echo base_url() ?>camp_organiser/Camps/camp_accomodation/<?php echo $c->camp_id; ?>" class="btn btn-xs btn-success" title="Link Accomodations to this camp"><i class="fa fa-home"></i></a>
                                    </td>
                                    <td><?php echo $c->created; ?></td>
                                    <td><?php 
                                            if($c->status)
                                            { 
                                                echo "<i class='fa fa-check-circle-o' title='Approved'></i>"; 
                                            } else {
                                                echo "<i class='fa fa-times-circle' title='Awaiting Approval'></i>";
                                            }
                                        ?> &nbsp; <a class="btn btn-xs btn-primary" title="Edit this camp details" href="<?php echo base_url() ?>camp_organiser/Camps/editCamp/<?php echo $c->camp_id; ?>"><i class="fa fa-file-text-o"></i></a> &nbsp; <a class="btn btn-xs btn-danger confirmation" title="delete this camp" href="<?php echo base_url() ?>camp_organiser/Camps/deletecamp/<?php echo $c->camp_id; ?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                              <?php  
                                    $count++;
                                }
                              ?>
                          </tbody>
                        </table>
                        <?php } else {
                            echo "<span class='help-block' style='font-weight:bold;margin-top:8%;text-align:center;'>Camp list will appear here, Start adding your camps now!!</span>";
                        }?>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>
<div id="help" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background:none;">
      <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 mb">
            <div class="steps pn">
              <input type="submit" value="Provide Following information for every camp" id="submit">
              <label><i class="fa fa-video-camera"></i> Youtube Video Link Of your Camp</label>
              <label><i class="fa fa-camera-retro"></i> Images of your Camp</label>
              <label><i class="fa fa-calendar"></i> Starting dates of the camp.</label>
              <label><i class="fa fa-home"></i> Accomodations available for the camp.</label>
            </div>
          </div>
      </div>
    </div>

  </div>
</div>