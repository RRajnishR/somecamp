<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-briefcase"></i> Manage Users</h3>
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
                            <th>photo</th>
                            <th>Created on</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(is_array($users)){
                                $count = 1;
                                foreach($users as $o){
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td class="hidden-phone"><?php echo $o->first_name; ?></td>
                                    <td class="hidden-phone"><?php echo $o->last_name; ?></td>
                                    <td><?php echo $o->email; ?></td>
                                    <td>
                                       <?php 
                                            $user_img="";
                                            if($o->social_stat==""){
                                                $user_img = base_url()."assets/uploads/users/profile/".$o->photo;
                                            } else {
                                                $user_img = $o->photo;
                                            }
                                        ?>
                                        <img class="img-rounded" src="<?php echo $user_img; ?>" width="50" height="50" />
                                    </td>
                                    <td><?php echo date('l jS \of F Y', strtotime($o->first_login)); ?></td>
                                    <td><?php echo $o->status == '1' ? '<i class="fa fa-check-circle-o" title="Approved"></i>':'<i class="fa fa-times-circle-o" title="pending"></i>'; ?></td>
                                    <td>
                                        <?php 
                                            if($o->status == "1"){
                                                echo '<a class="btn btn-xs btn-danger" href="'.base_url().'camp_admin/Users/change_status/'.$o->id.'/0" title="Disable this account"><i class="fa fa-ban"></i></a>';
                                            } else {
                                                echo '<a class="btn btn-xs btn-info" href="'.base_url().'camp_admin/Users/change_status/'.$o->id.'/1" title="Enable this Account"><i class="fa fa-thumbs-o-up"></i></a>';
                                            }
                                        ?>
                                    </td>
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