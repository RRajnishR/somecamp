<script>
    var intro = document.querySelector('.banner');
    var introPlayer = document.querySelector('.banner__video');

    var iOS = /iPad|iPhone|iPod/.test(navigator.platform);
    if (iOS) {
        intro.style.backgroundImage = 'url("' + introPlayer.poster + '")';
        introPlayer.style.display = 'none';
    }
</script>
<script src="<?php echo base_url(); ?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utils.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>