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
  <!--script for this page-->
  <script src="<?php echo base_url(); ?>assets/admin/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
        $('[type="date"]').attr('placeholder', 'Select Date "YYYY/MM/dd"');
        $('[type="date"]').flatpickr();
        //to switch to the tab where we were working
        var tab = window.location.hash;
        $('a[href="'+tab+'"]').trigger('click');
        $('.select2').select2();
        $("#inc_food").change(function() {
            if(this.checked) {
                $("#ml_list").prop('disabled', true);
            } else {
                $("#ml_list").prop('disabled', false);
            }
        });
        $("#drnk").change(function() {
            if(this.checked) {
                $("#dl").prop('disabled', true);
            } else {
                $("#dl").prop('disabled', false);
            }
        });
        $("#mulImages").change(function(){
            $("#imageForm").submit();
         });
         $('.confirmation').on('click', function () {
            return confirm('Are you sure?');
        });
    });
  </script>
  <script>
      function show_another_input(x){
          if(x=="2"){
              let currency = document.getElementById('currency').value;
              if(currency == ""){
                  alert('select currency first');
                  document.getElementById('po').value="";
                  return false;
              }
              document.getElementById('option2').style.display="block";
              document.getElementById('option2').placeholder +=" [in "+currency+"]";
              CKEDITOR.remove('camp_direction');
              document.getElementById('option3').style.display="none";
          } else if(x=="3") {
              document.getElementById('option3').style.display="block";
              document.getElementById('option2').style.display="none";
              CKEDITOR.replace('camp_direction');
          } else if(x=="1"){
              document.getElementById('option3').style.display="none";
              document.getElementById('option2').style.display="none";
              CKEDITOR.remove('camp_direction');
          }
      }
  </script>
</body>

</html>
