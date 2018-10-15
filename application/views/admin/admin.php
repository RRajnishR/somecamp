<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Dashboard</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-2">
                        <div class="round_div"><div class="first_half">
                            <?php
                                echo $uCount = $this->db->from("users")->count_all_results();
                                $oCount = $this->db->from("organisers")->count_all_results();
                                $cCount = $this->db->from("camp")->count_all_results();
                                $eCount = $this->db->from("enquiry")->count_all_results();
                                $rCount = $this->db->from("reservations")->count_all_results();
                                $wCount = $this->db->from("wishlist")->count_all_results();
                            ?>
                        </div><div class="second_half"><i class="fa fa-group"></i> Users</div></div>
                    </div>
                    <div class="col-md-2">
                        <div class="round_div"><div class="first_half"><?php echo $oCount; ?></div><div class="second_half"><i class="fa fa-briefcase"></i> Organisers</div></div>
                    </div>
                    <div class="col-md-2">
                        <div class="round_div"><div class="first_half"><?php echo $cCount; ?></div><div class="second_half"><i class="fa fa-compass"></i> Camps</div></div>
                    </div>
                    <div class="col-md-2">
                       <div class="round_div"><div class="first_half"><?php echo $eCount; ?></div><div class="second_half"><i class="fa fa-question-circle"></i> Enquiries</div></div> 
                    </div>
                    <div class="col-md-2">
                       <div class="round_div"><div class="first_half"><?php echo $rCount; ?></div><div class="second_half"><i class="fa fa-book"></i> Reservations</div></div> 
                    </div>
                    <div class="col-md-2">
                       <div class="round_div"><div class="first_half"><?php echo $wCount; ?></div><div class="second_half" style="font-size:14px;"><i class="fa fa-book"></i> Wishlisted Camps</div></div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel table-responsive">
            <h4>Reservation Requests</h4>
            <table class="table table-hover" id="organisers_basic_data">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Requested By</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Camp</th>
                        <th><abbr title="Date Of Arrival">DOA</abbr></th>
                        <th>Request Time</th>
                        <th>Confirmation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(is_array($reservations)){
                          $count = 1;
                          foreach($reservations as $r){
                              ?>
                              <tr>
                                  <td><?php echo $count; ?></td>
                                  <td><?php echo $r->fname;  ?></td>
                                  <td><?php echo $r->email; ?></td>
                                  <td><?php echo "(".$r->number_code.") - ".$r->phone; ?></td>
                                  <td><?php $camp = $this->My_model->selectRecord('camp', array('title'), array('camp_id' => $r->camp_id)); echo $camp[0]->title; ?></td>
                                  <td><?php echo date('l jS \of F Y', strtotime($r->start_date)); ?></td>
                                  <td><?php echo date('l jS \of F Y h:i:s A', strtotime($r->request_time)); ?></td>
                                  <td><?php echo $r->booking_confirmation; ?></td>
                                  <td><a class="btn btn-info btn-xs" href="#"><i class="fa fa-eye"></i></a></td>
                              </tr>
                              <?php
                              $count++;
                          }
                        } else {
                           echo "<tr><td colspan='10'>No reservations yet!<td></tr>"; 
                        }
                    ?>
                </tbody>
            </table>
          </div>
          <!-- page end-->
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->