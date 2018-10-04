<!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>_______</strong>. All Rights Reserved
        </p>
        <a href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url(); ?>assets/admin/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/admin/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url(); ?>assets/admin/lib/common-scripts.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <!--script for this page-->
<script>
$(document).ready(function() {
    $('#organisers_basic_data').DataTable();
} );
</script>
  
</body>

</html>
