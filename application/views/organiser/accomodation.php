<style>
    .go_middle{
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>
<?php 
    $this_camp = $camp[0];
    $acc_arr = explode(',',$this_camp->accomodation);
?>
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3><i class="fa fa-th-large"></i> Manage Your Camp's Accomodation</h3>
                <div class="panel pn" >
                   <div class="go_middle">
                       <label>Select Accomodations for this camp</label>
                    <form action="<?php echo base_url() ?>camp_organiser/Camps/camp_acc/<?php echo $camp_id; ?>" method="post">
                <?php 
                    if(is_array($camp_by_organiser)){
                        foreach($camp_by_organiser as $c){ ?>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="acc[]" <?php if(in_array($c->id, $acc_arr)) echo "checked"; ?> value="<?php echo $c->id; ?>"><?php echo $c->acc_name; ?>
                        </label>
                        &nbsp; &nbsp;
                <?php
                        }
                        echo "<br/><br/><button class='btn btn-success'>Update Accomodations <i class='fa fa-save'></i></button>";    
                    } else {
                        echo "<div class='help-block'>You have not created any accomodations yet. <a href='".base_url()."camp_organiser/Camps/addAccomodation'>Create Some Now!</a></div>";
                    }
                ?>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>