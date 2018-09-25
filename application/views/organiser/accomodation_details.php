<style>
    table>tbody>tr>td{
        
    } 
</style>
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3><i class="fa fa-th-large"></i> Manage Camp Accomodation pricing and starting dates </h3>
                <div class="form-panel">
                  <h4 class="mb"><i class="fa fa-angle-right"></i> New Accomodation Details</h4>
                  <form class="form-horizontal style-form" method="post" action="<?php echo base_url() ?>camp_organiser/Camps/save_acc">
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Accomodation Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Eg: Hostel" name="acc_name" required />
                        <span class="help-block">Help: Name an accomodation you provide. Eg: Tent, Cabin, Hostel, etc..</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">No. Of Rooms</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Eg: 2" name="room_num" required />
                        <span class="help-block">Help: Add number of room(s) Eg:1, 2, 3 etc.</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Available for sharing?</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="sharing">
                            <option value="1">Yes, Other Campers can share this accomodation</option>
                            <option value="2">No, This accomodation will be private to camper(s)</option>
                        </select>
                        <span class="help-block">Help: Is this accomodation on sharing basis?</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Persons Allowed</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" name="num_person" placeholder="Eg: 3" required />
                        <span class="help-block">Help: Input the number of person(s) which it can be allocated with.</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Price</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="Eg: 150" name="price" required />
                        <span class="help-block">Help: Add Price to this accomodation if you charge extra for this, else put 0. [In your camp's currency]</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">&nbsp;</label>
                      <div class="col-sm-10">
                        <button class="btn btn-success">Submit</button>
                        <span class="help-block">Help: Please recheck evry information before submitting this form</span>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
            <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="white-panel pn table-responsive" style="overflow:auto; height:auto;">
                    <div class="panel-heading">
                      <h2>Your Accomodations</h2>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Rooms</th>
                                <th>No. Of persons</th>
                                <th>Sharing</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if(is_array($accomodations)){
                                   foreach($accomodations as $a){ ?>
                                    <tr>
                                        <form action="<?php echo base_url() ?>camp_organiser/Camps/update_acc/<?php echo $a->id; ?>" method="post">
                                        <td><?php echo $a->id; ?></td>
                                        <td><input type="text" name="acc_name" value="<?php echo $a->acc_name ?>" class="form-control" required /></td>
                                        <td><input type="number" name="room_num" value="<?php echo $a->no_room; ?>" class="form-control" required /></td>
                                        <td><input type="number" name="num_person" value="<?php echo $a->person_num; ?>" class="form-control" required /></td>
                                        <td><select class="form-control" name="sharing">
                                                <option value="1" <?php if($a->sharing == "1") echo "selected"; ?> >Yes</option>
                                                <option value="2" <?php if($a->sharing == "2") echo "selected"; ?> >No</option>
                                            </select></td>
                                        <td><input type="number" name="price" value="<?php echo $a->price; ?>" class="form-control" required /></td>
                                        <td><button class="btn btn-success" title="update this row accomodation"><i class="fa fa-save"></i></button></td>
                                        </form>
                                    </tr>
                            <?php   
                                   } 
                                } else {
                                    echo "<div class='help-block'>No Accomodations Yet!, Fill up </div>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>