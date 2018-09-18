<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3><i class="fa fa-th-large"></i> Manage Your Camps</h3>
                <!--  BASIC PROGRESS BARS -->
                <div class="showback">
                    <a class="btn btn-info" href="<?php echo base_url() ?>camp_organiser/Camps/new_camp"><i class="fa fa-plus"></i> Add new camp</a>
                    <span class="help-block" style="font-size:11px; float:right;">
                    (Help: <button class="btn btn-xs btn-info">&nbsp;&nbsp;</button> - OK, <button class="btn btn-xs btn-danger">&nbsp;&nbsp;</button> - Fill up information, <button class="btn btn-xs btn-warning">&nbsp;&nbsp;</button> - Something's Wrong.)
                </span>
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
                                    <td> <button class="btn btn-xs btn-info"><i class="fa fa-file-text-o"></i></button>&nbsp;
                                        <?php 
                                            if(!$c->video_link==""){
                                                if(filter_var($c->video_link, FILTER_VALIDATE_URL) === FALSE){
                                                    echo '<button class="btn btn-xs btn-warning" title="Check Your Link again, If it works, ignore this warning"><i class="fa fa-video-camera"></i></button>';
                                                }else{
                                                    echo '<button class="btn btn-xs btn-info" title="You have added a video link of your camp"><i class="fa fa-video-camera"></i></button>';
                                                }
                                            } else {
                                                echo '<button class="btn btn-xs btn-danger" title="You have not added any video link of your camp"><i class="fa fa-video-camera"></i></button>';
                                            }
                                        ?>
                                         &nbsp;
                                         <a class="btn btn-xs btn-danger" href="<?php echo base_url() ?>camp_organiser/Camps/images/<?php echo $c->camp_id; ?>"><i class="fa fa-camera-retro"></i></a>  
                                    </td>
                                    <td><?php echo $c->created; ?></td>
                                    <td><?php 
                                            if($c->status)
                                            { 
                                                echo "<i class='fa fa-check-circle-o' title='Approved'></i>"; 
                                            } else {
                                                echo "<i class='fa fa-times-circle' title='Awaiting Approval'></i>";
                                            }
                                        ?> &nbsp; <a class="btn btn-xs btn-danger" title="delete this camp" href="<?php echo base_url() ?>camp_organiser/Camps/deletecamp/<?php echo $c->camp_id; ?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                              <?php  
                                    $count++;
                                }
                              ?>
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>