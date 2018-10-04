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
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Business Name</th>
                            <th>Website</th>
                            <th>Owner?</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(is_array($organisers)){
                                $count = 1;
                                foreach($organisers as $o){
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td class="hidden-phone"><?php echo $o->first_name; ?></td>
                                    <td class="hidden-phone"><?php echo $o->last_name; ?></td>
                                    <td><?php echo $o->email; ?></td>
                                    <td><?php echo $o->b_name; ?></td>
                                    <td><?php echo $o->b_website; ?></td>
                                    <td><?php echo $o->is_owner == '1' ? 'Yes':'No'; ?></td>
                                    <td><?php echo $o->status == '1' ? '<i class="fa fa-check-circle-o" title="Approved"></i>':'<i class="fa fa-times-circle-o" title="pending"></i>'; ?></td>
                                    <td><a class="btn btn-xs btn-info" href="<?php echo base_url() ?>camp_admin/Organisers/view_org/<?php echo $o->id; ?>"><i class="fa fa-eye"></i></a></td>
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