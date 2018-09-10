<script>
    var page_name = "wishlist";
</script>
<section>
    <div class="container">
        <?php 
            if(!$this->session->userdata('google_id')){
        ?>
                <br/><br/><br/>
                <h2>Please Login to access your Favourited Camps</h2>
                <br/><br/><br/>
        <?php
            } else { ?>
                <br/><br/><br/>
                <h2>No camps in your wish list yet!!</h2>
                <br/><br/><br/>
        <?php        
            }
        ?>
    </div>
</section>