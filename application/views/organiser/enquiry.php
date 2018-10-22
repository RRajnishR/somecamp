<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3><i class="fa fa-comments-o"></i> Enquiries / Question By Visitors </h3>
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> Listed Enquiries</h4>
                        <hr>
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Person's Name </th>
                                <th> Message </th>
                                <th> Camp </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if(is_array($enquiries)){
                                    $count = 1;
                                    foreach($enquiries as $e){ ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $e->fname; ?></td>
                                        <td><?php echo $e->msg; ?></td>
                                        <td><?php 
                                                $camp = $this->My_model->selectRecord('camp', array('title'), array('camp_id' => $e->camp_id));
                                            ?>
                                                <a href="<?php echo base_url() ?>Camp/view/<?php echo $e->camp_id; ?>" target="_blank"><?php echo $camp[0]->title; ?></a>
                                        </td>
                                        <td><a href="<?php echo base_url() ?>camp_organiser/Enquiries/reply/<?php echo $e->id; ?>" class="btn btn-xs btn-info" title="see and reply to this conversation"><i class="fa fa-comments-o"></i></a></td>
                                    </tr>
                            <?php
                                        $count++;
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No enquiries yet!</td></tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
    </section>
    <!-- /wrapper -->
</section>