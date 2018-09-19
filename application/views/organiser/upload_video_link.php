<section id="main-content">
    <section class="wrapper">
        
        <div class="row mt">
            <div class="col-lg-12">
                <div class="white-panel pn" style="overflow:auto; height:auto;">
                    <div class="panel-heading">
                         <h3><i class="fa fa-video-camera"></i> Video Link</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url() ?>camp_organiser/Camps/update_video">
                             <input type="url" name="video_link" placeholder="Eg: http://www.youtube.com/v?watch=afa#143" class="form-control" value="<?php if(!$camp[0]->video_link == ""){ echo $camp[0]->video_link; } ?>" required/>
                             <input type="hidden" name="camp_id" value="<?php echo $camp_id; ?>">
                             <button class="btn btn-success"> Update Video Link <i class="fa fa-check-circle-o"></i></button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- /wrapper -->
</section>