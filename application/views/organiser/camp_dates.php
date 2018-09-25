<style>
    table>thead>tr>th{
        text-align: center;
    }
</style>
   <section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                  <h4 class="mb"><i class="fa fa-angle-right"></i> Add Starting dates of this Camp</h4>
                  <form class="form-inline" role="form" action="<?php echo base_url() ?>camp_organiser/Camps/save_date/<?php echo $camp_id; ?>" method="post">
                    <div class="form-group">
                      <label class="sr-only" for="">Date</label>
                      <input type="date" name="sdate" class="form-control" id="" placeholder="dd/MM/YYYY" required />
                    </div>
                    <button type="submit" class="btn btn-theme"><i class="fa fa-plus"></i> Add</button>
                  </form>
                </div>
                <!-- /form-panel -->
              </div>
        </div>
        <!--/ row -->
        <div class="row mt">
            <div class="col-lg-12">
                <div class="white-panel pn table-responsive" style="overflow:auto; height:auto;">
                    <div class="panel-heading">
                        <h3>All starting dates of this camp</h3>
                    </div>
                    <?php
                        if(is_array($all_date)){ ?>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Start date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $count=1;
                                    foreach($all_date as $a){ ?>
                                    <tr>
                                       <form action="<?php echo base_url() ?>camp_organiser/Camps/del_start_date/<?php echo $camp_id; ?>" method="post">
                                        <td><?php echo $count; ?>
                                            <input type="hidden" name="date_id" value="<?php echo $a->id; ?>" />
                                        </td>
                                        <td><?php echo date("F jS, Y", strtotime($a->start_date)); ?></td>
                                        <td><button type="submit" class="btn btn-xs btn-danger confirmation" title="delete this date"><i class="fa fa-trash"></i></button></td>
                                       </form>
                                    </tr>
                                <?php
                                        $count++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    <?php        
                        } else {
                            echo "<div class='help-block'> You have not added any start date for this camp, Users can't find your camp if it has not any start date. Add Now.</div>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>