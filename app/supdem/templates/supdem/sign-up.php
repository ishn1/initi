<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="keyword1, keyword2">
    <meta name="description" content=" ">
    <title>SupDem</title>
    <!-- SET: Favicon -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap4hack.css" >
    <link rel="stylesheet" type="text/css" href="css/main.css" >
  </head>
  <h2>Form</h2> 
             <form action="" method="post"><input type='hidden'/> 
             {%csrf_token %}
  <body class="demand">
    <!-- wrapper starts -->
    <div class="wrapper">
      <!--header start-->
      <?php include 'header.php'; ?> 
      <!--header end-->
      <!--main-content start-->
      <div class="sign-up">
        <div class="container">
          <div class="sign" itemscope itemtype="https://schema.org/MedicalSignOrSymptom">
            <h2>Sign up Now</h2>
            <p>Morbi accumsan nam nec tellus a odio tincidunt </p>
            <div class="sign-in  d-flex flex-wrap">
              <div class="sign-lt col-md-6">
                <form method="post">
                  <div class="form-in">
                    <div class="form-group user">
                      <input type="text" class="form-control" placeholder="First Name" id="fname" name="fname">
                    </div>
                  </div>
                  <div class="form-in">
                    <div class="form-group user">
                      <input type="text" class="form-control" placeholder="Last Name" id="flname" name="flname">
                    </div>
                  </div>
                  <div class="form-in">
                    <div class="form-group user user4">
                      <input type="text" class="form-control" id="faddress" placeholder="Address" name="faddress">
                    </div>
                  </div>
                  <div class="form-in">
                    <div class="form-group user user1">
                      <input type="text" class="form-control" id="femail" placeholder="Email" name="femail">
                    </div>
                  </div>
                  <div class="form-in">
                    <div class="form-group user">
                      <input type="text" class="form-control" placeholder="Username" id="uname" name="uname">
                    </div>
                  </div>
                  <div class="form-in">
                    <div class="form-group user user5">
                      <input type="text" class="form-control" id="fPassword" placeholder="Password" name="fPassword">
                    </div>
                  </div>
                  <div class="form-in">
                    <div class="form-group user user6">
                      <input type="text" class="form-control" id="vPassword" placeholder="Verify Password" name="vPassword">
                    </div>
                  </div>
                  <div class="flex-time">
                    <ul>
                      <li>
						  <a href="#"><img id="captcha_code" src="captcha_code.php"></a>
<!--						  <a href="#"><img src="images/cap2.png" alt="img" width="144" height="41"></a>-->
						</li>
                      <li><input type="text" class="form-control" name="captcha" id="captcha" placeholder="- enter text here -"></li>
                    </ul>
                  </div>
                  <div class="radio_btn">
                    
                    <label id="check1">
						<input type="checkbox" name="check_box" id="check1" class="check1">
                    <span>I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></span>
                    </label>
                  </div>
					   
              <div id="mail-status"></div>
                  <div class="submit-btn">
                    <a href="#" class="Submit btn Cancel " id="send"> signup</a>
                  </div>
					<span class="errS"></span>
              <span class="fsuccess"></span>
                </form>
              </div>
              <div class="sign-rt col-md-6">
                <div class="social-btn">
                  <ul>
                    <li><a href="#" class="btn  facebook">Sign up with facebook</a></li>
                    <li><a href="#" class="btn facebook linked">Sign up with linkedin</a></li>
                    <li><a href="#" class="btn facebook google">Sign up with google+</a></li>
                  </ul>
                  <p>Don't worry, we won't post anything without your
                    permission.
                  </p>
                  <figure><img src="images/tree.jpg" width="492" alt="img" height="379"></figure>
                </div>
              </div>
            </div>
          </div>
          <div class="sign-login" itemscope itemtype="https://schema.org/RegisterAction">
            <div class="sign">
              <h2>Login</h2>
              <p>Morbi accumsan nam nec tellus a odio tincidunt </p>
              <div class="sign-in  d-flex flex-wrap">
                <div class="sign-lt col-md-6">
                  <form >
                    <div class="form-in">
                      <div class="form-group user user1">
                        <input type="text" class="form-control" id="femail1" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-in">
                      <div class="form-group user user5">
                        <input type="text" class="form-control" id="Password1" placeholder="Password">
                      </div>
                    </div>
                    <div class="submit-btn">
                      <span><a href="#">Forgot password ?</a></span>
                      <a href="#" class="Submit btn"> Login</a>
                    </div>
                  </form>
                </div>
                <div class="sign-rt col-md-6">
                  <div class="social-btn">
                    <ul>
                      <li><a href="#" class="btn  facebook">Sign up with facebook</a></li>
                      <li><a href="#" class="btn facebook linked">Sign up with linkedin</a></li>
                      <li><a href="#" class="btn facebook google">Sign up with google+</a></li>
                    </ul>
                    <p>Don't worry, we won't post anything without your permission.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--main-content end-->
   <div class="push"></div>
    </div>
    <!-- wrapper ends -->
      <!--footer start-->
        <?php include 'footer.php'; ?> 
      <!--footer end-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	  	 <script src="js/custom_scripts.js"></script>
	   <script src="js/retina.js"></script>
	  <script src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
	$('#send').click(function(e) {
		
        var fname = $('#fname');
        var uname = $('#uname');
		var flname = $('#flname');
		var femail = $('#femail');
		var faddress = $('#faddress');
		var fPassword = $('#fPassword');
		var vPassword = $('#vPassword');
		var captcha = $('#captcha');
		var check1	=	$('#fcheck1');

		
		var error = 0;
		
		$('#fname, #flname,#uname, #femail,#faddress,  #fPassword, #vPassword, #check1').css({'border':''});
		
		// First name
		if($.trim($('#fname').val()) == '') {
			fname.css({'border':'1px solid #f00'});
			error = 1;
		}
		
		// Last Name
		if($.trim($('#flname').val()) == '') {
			flname.css({'border':'1px solid #f00'});
			error = 1;
		}
		
		// User Name
		if($.trim($('#uname').val()) == '') {
			uname.css({'border':'1px solid #f00'});
			error = 1;
		}
		
		// E-mail 			
		if($('#femail').val() == '') {
			femail.css({'border':'1px solid #f00'});
			error = 1;
		}else {
			var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			if(!emailPattern.test($('#femail').val())) {
				femail.css({'border':'1px solid #f00'});
				error = 1;
			}
		}
	
		
		// Address
		if($.trim($('#faddress').val()) == '') {
			faddress.css({'border':'1px solid #f00'});
			error = 1;
		}
		
          // fPassword
		
		if($.trim($('#fPassword').val()) == '') {
			fPassword.css({'border':'1px solid #f00'});
			error = 1;
		}
		// fPassword
		
		if($.trim($('#vPassword').val()) == '') {
			vPassword.css({'border':'1px solid #f00'});
			error = 1;
		}

		
		// Check boxes 
				var fields = $('input[class=check1]:checked').serializeArray();
					if (fields.length == 0) {
						$('.check1').css('color','red');  
						error = 1; 
				}else{
					$('.check1').css('color','');
					}

		
		
		// For Catcha
		if($.trim($('#captcha').val()) == '') {
			$('#captcha_code').css('border','1px solid red');
			error = 1;
		}else{
			$('#captcha_code').css('border','');
		}
		
		
		// For Error Message 
		if(error) {
			$('.errS').text('Required : valid info.');
			$('.f_success').hide();
			return false;
		}
		
		var str = 'fname='+fname.val()+'&flname='+flname.val()+'&uname='+uname.val()+'&femail='+femail.val()+'&faddress='+faddress.val()+'&fPassword='+fPassword.val()+'&vPassword='+vPassword.val()+'&captcha='+captcha.val()+'&check1='+check1.val();
		
		
		$.ajax({
				url: 'submit1.php',
				type : 'POST',
				data : str,
				cache: false,
	
				success:function(data){
					$("#mail-status").html(data);
				},
				error:function (){
				
				},
				
				
				success: function (data) {
					$('.fsuccess').html(data);
					$('.fsuccess').show();
					$('.errS').hide();
					// For captcha
					if(data==1) {	
						data = 'Invalid captcha';
					}
					
					
					$('#fname, #flname, #femail, #uname, #faddress, #fPassword, #vPassword, #captcha_form, #captcha').val('');
					$('.check1').attr('checked', false);
					
				}
		 });
		 return false;
		
    });
	
	// For Phone number number typing
	$("#fphone").keypress(function (e) {
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			return false;
		}
	});
	
	
});

function refreshCaptcha() {
	$("#captcha_code").attr('src','captcha_code.php');
}
</script>
  </body>
</html>