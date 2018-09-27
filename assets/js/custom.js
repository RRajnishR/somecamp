/*
    Writing this way so that unneccessary JS shouldn't load.
    Following is checking if the page is Host's signup page
*/
if(page_name=="host_signup"){
    $("#phn").intlTelInput();
    //***************************Validating Password
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }
    //***************************Validating Password end
    
    function verify_signup(){
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var email = $('#mail').val();
        var btype = $('#btype').val();
        var pass = $('#psw').val();
        var num = $("#phn").intlTelInput("getNumber", intlTelInputUtils.numberFormat.E164);
        
        if(fname==''){
           $("#sys_alert").html('<i class="far fa-clock"></i> First Name is required ');
           $("#sys_alert").show(); 
            return false;
        }
        if(lname==''){
           $("#sys_alert").html('<i class="far fa-clock"></i> Last Name is required ');
           $("#sys_alert").show(); 
            return false;
        }
        if(email==''){
           $("#sys_alert").html('<i class="far fa-clock"></i> You\'re email please.. ');
           $("#sys_alert").show(); 
            return false;
        }
        var re = /\S+@\S+\.\S+/;
        if(!re.test(email)){
           $("#sys_alert").html('<i class="far fa-clock"></i> Correct email please.. ');
           $("#sys_alert").show(); 
            return false;
        }
        if(pass==''){
           $("#sys_alert").html('<i class="far fa-clock"></i> A strong password is required ');
           $("#sys_alert").show(); 
            return false;
        }
        
      var lowerCaseLetters = /[a-z]/g;
      if(!myInput.value.match(lowerCaseLetters)) {  
        $("#sys_alert").html('<i class="fas fa-exclamation-circle"></i> Password should have a Lowercase letter ');
        $("#sys_alert").show(); 
        return false;
      }

      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if(!myInput.value.match(upperCaseLetters)) {  
        $("#sys_alert").html('<i class="fas fa-exclamation-circle"></i> Password should have a Uppercase letter ');
        $("#sys_alert").show(); 
        return false;
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if(!myInput.value.match(numbers)) {  
        $("#sys_alert").html('<i class="fas fa-exclamation-circle"></i> Password should have a number ');
        $("#sys_alert").show(); 
        return false;
      }

      // Validate length
      if(myInput.value.length < 8) {
        $("#sys_alert").html('<i class="fas fa-exclamation-circle"></i> Password should atleast be of 8 characters');
        $("#sys_alert").show(); 
        return false;
      }
        
      if(num==''){
           $("#sys_alert").html('<i class="far fa-clock"></i> Contact number is a must ');
           $("#sys_alert").show(); 
            return false;
        }
        if(btype==''){
           $("#sys_alert").html('<i class="far fa-clock"></i> Individual or a business? ');
           $("#sys_alert").show(); 
            return false;
        }
      $("#sys_alert").hide();
        $.ajax({
            type: "POST",
            url: baseurl+ "Hostsignup/register",
            dataType: 'html',
            data: {fname:fname, lname:lname, email:email, btype:btype, num:num, pass: pass},
            beforeSend: function(){
              $("#loading").show();  
            },
            success: function(res)
            {	
                console.log(res);
                $("#loading").hide();
                if(res == '1'){
                    $("#sys_alert").html('<i class="fas fa-check-circle"></i> Awesome, Your account has been created. Please confirm your email and login');
                } else if(res == "2"){
                    $("#sys_alert").html('<i class="fas fa-exclamation-triangle"></i> Email id already exists. Try logging in using your favourite password.');
                } else if( res== "-1"){
                    $("#sys_alert").html('<i class="fas fa-times-circle"></i> Woah!! There is something wrong, Please retry after sometime.');
                }
                $("#sys_alert").show();
            },
            error: function (request, status, error) 
            {
                alert(request.responseText);
            }
        });
        
    }  
    
}
//Js For View Camp page
if(page_name=="camps"){
    var slider = new IdealImageSlider.Slider({
        selector: '#slider',
	    height: 400
    });
    slider.addBulletNav();
    slider.start();
}

