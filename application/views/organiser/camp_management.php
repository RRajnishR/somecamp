<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3><i class="fa fa-th-large"></i> Manage Your Camps</h3>
                <!--  BASIC PROGRESS BARS -->
                <div class="showback">
                    <a class="btn btn-info" href="<?php echo base_url() ?>camp_organiser/Camps/new_camp"><i class="fa fa-plus"></i> Add new camp</a>
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
                    <div class="custom-check goleft mt">
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
                                  <th>Camp Details [Edit] </th>
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
                                    <td> <a class="btn btn-xs btn-info" title="Edit this camp details" href="<?php echo base_url() ?>camp_organiser/Camps/editCamp/<?php echo $c->camp_id; ?>"><i class="fa fa-file-text-o"></i></a>
                                        <?php 
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
                                         <a class="btn btn-xs btn-info" title="Add Images of this camp" href="<?php echo base_url() ?>camp_organiser/Camps/images/<?php echo $c->camp_id; ?>"><i class="fa fa-camera-retro"></i></a> 
                                         <a href="" class="btn btn-xs btn-sm btn-success" title="Add accomodation, pricing and camp starting dates"><i class="fa fa-calendar"></i> | <i class="fa fa-dollar"></i></a> 
                                    </td>
                                    <td><?php echo $c->created; ?></td>
                                    <td><?php 
                                            if($c->status)
                                            { 
                                                echo "<i class='fa fa-check-circle-o' title='Approved'></i>"; 
                                            } else {
                                                echo "<i class='fa fa-times-circle' title='Awaiting Approval'></i>";
                                            }
                                        ?> &nbsp; <a class="btn btn-xs btn-danger confirmation" title="delete this camp" href="<?php echo base_url() ?>camp_organiser/Camps/deletecamp/<?php echo $c->camp_id; ?>"><i class="fa fa-trash"></i></a>
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