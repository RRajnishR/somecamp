<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-briefcase"></i> Manage Camps</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table table-responsive">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-hover" id="organisers_basic_data">
                <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Address</th>
                            <th>Currency</th>
                            <th>Video Link</th>
                            <th>Created on</th>
                            <th>Organiser</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(is_array($camps)){
                                $count = 1;
                                foreach($camps as $c){
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $c->title; ?></td>
                                    <td><?php echo $c->address; ?></td>
                                    <td><?php echo $c->currency; ?></td>
                                    <td><?php echo $c->video_link; ?></td>
                                    <td><?php echo date('l jS \of F Y', strtotime($c->created)); ?></td>
                                    <td><?php $org = $this->My_model->selectRecord('organisers', array('b_name') ,array('id' => $c->organiser_id) );
                                        echo '<a href="'.base_url().'camp_admin/Organisers/view_org/'.$c->organiser_id.'">'.(!$org[0]->b_name=="" ? $org[0]->b_name : 'No Business Name').'</a>';    
                                    ?></td>
                                    <td><?php echo $c->status == '1' ? '<i class="fa fa-check-circle-o" title="Approved"></i>':'<i class="fa fa-times-circle-o" title="pending"></i>'; ?></td>
                                    <td><a class="btn btn-info btn-xs" title="View Details" href="<?php echo base_url() ?>camp_admin/Camps/view_camp/<?php echo $c->camp_id; ?>"><i class="fa fa-eye"></i></a></td>
                                </tr>    
                                <?php
                                    $count++;
                                }
                            } else {
                                echo "<tr><td colspan='8' class='text-center'>No Organisers found</td></tr>";
                            }
                        ?>
                    </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->