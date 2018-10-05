<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-briefcase"></i> Manage Organisers</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table table-responsive">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-hover" id="organisers_basic_data">
                <thead>
                        <tr>
                            <th>Enquirer</th>
                            <th>email</th>
                            <th>Message</th>
                            <th>About Camp</th>
                            <th>Expected <abbr title="Date Of Arrival">DOA</abbr></th>
                            <th>Reply Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(is_array($enquiries)){
                                $count = 1;
                                foreach($enquiries as $e){
                                ?>
                                <tr>
                                    <td><?php echo $e->fname; ?></td>
                                    <td><?php echo $e->email; ?></td>
                                    <td><?php echo $e->msg; ?></td>
                                    <td><?php 
                                            $camp = $this->My_model->selectRecord('camp', array('title'), array('camp_id' => $e->camp_id));
                                        ?>
                                        <a href="<?php echo base_url() ?>camp_admin/Camps/view_camp/<?php echo $e->camp_id; ?>"><?php echo $camp[0]->title; ?></a>
                                    </td>
                                    <td><?php echo $e->start_date; ?></td>
                                    <td><?php echo !$e->reply == "" ? '<i class="fa fa-check-circle-o" title="Reply Sent"></i>':'<i class="fa fa-spinner" title="Reply Pending. Click on View to Reply else forward to Organiser"></i>'; ?></td>
                                    <td><a href="<?php echo base_url(); ?>camp_admin/Enquiries/view/<?php echo $e->id; ?>" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a> &nbsp; <a href="<?php echo base_url(); ?>camp_admin/Enquiries/forward/<?php echo $e->id; ?>" class="btn btn-xs btn-warning" title="Forward to Organiser" <?php echo $e->forward_to_org == "1" ? "":"disabled"; ?> ><i class="fa fa-mail-forward"></i></a></td>
                                </tr>    
                                <?php
                                    $count++;
                                }
                            } else {
                                echo "<tr><td colspan='8' class='text-center'>No Enquiries Yet</td></tr>";
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