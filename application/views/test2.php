<!DOCTYPE html>
<html lang="en">
<head>
  <title>Awesome Bruh!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
    .customcycler{
        height: 150px;
        width: 150px;
        border: 1px solid;
        display: inline-block;
        background-size: cover;
    }    
</style>
<body>
  
<div class="container">
    <base href="<?php echo base_url() ?>assets/uploads/organisers/camp_images/">
    <div class="customcycler" style="background-image:url('05102018071617camps+news+events.jpg');" data-images="05102018071617camps+news+events.jpg, 05102018071732Home-Grid-Sport.jpg, 05102018071737images.jpg, 05102018071743mount-abu-trekking-camp-aravalli-hills-rajasthan-nbMgzbA-1440x810.jpg, 19092018075504LJ3.jpg"></div>     
    
    <div class="customcycler" style="background-image:url('19092018085009IMG-20170817-WA0049.jpg');" data-images="19092018085009IMG-20170817-WA0049.jpg, 26092018125436partner.jpg, 26092018125459IMG-20170807-WA0090.jpg, 260920181255364521e8a3-a6a6-4f9b-9cc7-9e1e7a81839e-original.jpeg"></div>     
</div>
<script>
    var baseurl = '<?php echo base_url(); ?>';
    $('document').ready(function(){
        $('.customcycler').mouseenter(function(){
            let images = $(this).attr('data-images').split(', '); 
            $(this).addClass('this_div');
            var index=1;
            timer = setInterval(function(){
                var img = baseurl+"assets/uploads/organisers/camp_images/"+images[index++ % images.length];
                $('.this_div').css('background-image', "url('"+img+"')");
                console.log(images[index++ % images.length]);
            }, 1000)
        }).mouseleave(function(){
            $('.customcycler.this_div').removeClass('this_div');
            clearTimeout(timer);
        });
        
    });
</script>
</body>
</html>
