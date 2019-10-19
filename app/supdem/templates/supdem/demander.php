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
	 <link href="https://cdn.jsdelivr.net/jquery.roundslider/1.3/roundslider.min.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap4hack.css" >
    <link rel="stylesheet" type="text/css" href="css/main.css" >
  </head>
  <body class="demand">
    <!-- wrapper starts -->
    <div class="wrapper">
      <!--header start-->
       <?php include 'header.php'; ?> 
      <!--header end-->
      <!--banner start-->
      <div class="banner" itemscope itemtype="https://schema.org/Image">
        <div class="overlay"></div>
        <figure>
          <img src="images/banner.jpg" width="1560" height="596" alt="img">
        </figure>
        <div class="container">
          <div class="banner-in">
            <h1><span>Select the category of your business </span> and then<br>
              pin the area you would like to demand business<br>
              to establish in. If Supplier also pin in that area<br>
              <span>you will be notified with a match</span>
            </h1>
          </div>
          <div class="arrow">
              <ul>
              <li><a href="#top"><i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
              <li><a href="#bottom" class="blue"><i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--banner end-->
      <!--main-content start-->
      <div class="main-content main-content1">
        <div class="container">
          <!--resturant start-->
			<div id="top"></div>
          <div class="restaurant d-flex flex-wrap" itemscope itemtype="https://schema.org/Product">
            <div class="restaurant-lt col-lg-9 col-md-12 col-sm-12 col-12">
              <ul class="d-flex flex-wrap nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">
					<img src="images/icon1.png" width="34" height="26" alt="img">
					RESTAURANT</a></li>
                <li ><a href="#tab2" data-toggle="tab">
					<img src="images/icon2.png"  class="show-img" width="34" height="26" alt="img">
					<img src="images/icon2-hover.png" class="hide-img" width="34" height="26" alt="img">
					Clothing</a></li>
                <li ><a href="#tab3" data-toggle="tab">
					<img src="images/icon3.png" class="show-img" width="34" height="26" alt="img">
					<img src="images/icon3-hover.png" class="hide-img" width="34" height="26" alt="img">
					MArket</a></li>
                <li ><a href="#tab4" data-toggle="tab">
					<img src="images/icon4.png" class="show-img" width="34" height="26" alt="img">
					<img src="images/icon4-hover.png" class="hide-img" width="34" height="26" alt="img">
					Suggest Category</a></li>
              </ul>
				
			 </div>
            <div class="restaurant-rt col-lg-3 col-md-12 col-sm-12 col-12">
              <a  class="btn search">
				  <input type="text" placeholder="Search.." id="mySearch" onkeyup="myFunction()">
				  <ul id="myMenu">
				  <li><a href="#">Animal Arts, crafts, and collectibles.</a></li>
				  <li><a href="#">Audio and Video Aviation	Baby.</a></li>
				  <li><a href="#">Beauty and fragrances.</a></li>
				  <li><a href="#">Books and magazines.</a></li>
				  <li><a href="#">Business to business.</a></li>
				  <li><a href="#">Clothing, accessories, and shoes.</a></li>
				  <li><a href="#">Computers, accessories, and services.</a></li>
				  <li><a href="#">Education.</a></li>
				  <li><a href="#">Electronics and telecom.</a></li>
				  <li><a href="#">Entertainment and media.</a></li>
				  <li><a href="#">Family Planning	Farming Financial services and products.</a></li>
				  <li><a href="#">Food retail and service.</a></li>
				  <li><a href="#">Gifts and flowers.</a></li>
				  <li><a href="#">Government.</a></li>
				  <li><a href="#">Health and personal care.</a></li>
				  <li><a href="#">Home and garden.</a></li>
				  <li><a href="#">Housing	Medical Military	Nonprofit.</a></li>
				  <li><a href="#">Pets and animals.</a></li>
				  <li><a href="#">Religion and spirituality.</a></li>
				  <li><a href="#">Restaurant	Retail (not elsewhere classified).</a></li>
				  <li><a href="#">Services - other.</a></li>
				  <li><a href="#">Sports and outdoors.</a></li>
				  <li><a href="#">Toys and hobbies.</a></li>
				  <li><a href="#">Travel.</a></li>
				  <li><a href="#">Vehicle sales.</a></li>
				  <li><a href="#">Vehicle service and accessories.</a></li>
    			</ul>
				</a>
            </div>								 			
           </div>									 			
          <!--resturant end-->
          <!--map start-->		
<div class="map" itemscope itemtype="https://schema.org/Map">
			  <div class="tab-content">
			  <div class="tab-pane  active" id="tab1"><img src="images/map_img.png" width="1154" height="543" alt="img"></div>
			  <div class="tab-pane  fade" id="tab2"><img src="images/map_img.png" width="1154" height="543" alt="img"></div>
			  <div class="tab-pane  fade" id="tab3"><img src="images/map_img.png" width="1154" height="543" alt="img"></div>
				<div class="tab-pane  fade" id="tab4"><img src="images/map_img.png" width="1154" height="543" alt="img"></div>
				</div>
			</div>    <!--map end-->
			<div id="bottom"></div>
          <div class="number-in number-admin d-flex flex-wrap" itemscope itemtype="https://schema.org/docs/datamodel.html">
            <div class="number-lt">
              <div class="number-lt-in">
                <figure><img src="images/graph3.png" width="494" height="223" alt="img"></figure>
                <p>Suppliers vs demanders for this category for this area
                  over the past week
                </p>
              </div>
            </div>
            <div class="number-lt number-rt">
              <div class="number-lt-in ">
                <div id="slider"></div>
                <h5>Percentage of Demanders who<br>
                  have pinned this Area
                </h5>
              </div>
            </div>
          </div>
          <!--add-in start-->
          <div class="add d-flex flex-wrap" itemscope itemtype="https://schema.org/Product">
            <div class="add-lt">
              <div class="add-lt-in">
                <div class="add-bk">
                  <input type="text" placeholder="">
                  <a href="#" class="add-btn">Add</a>
                  <div class="clear"></div>
                </div>
                <div class="add-nav">
                  <ul class="d-flex flex-wrap">
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Your Tags</a></li>
                    <li><a href="#">Market</a></li>
                    <li><a href="#">Your Tags</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Your Tags</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Fooding</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Realestate</a></li>
                    <li><a href="#">qanats (17)</a></li>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Business</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="add-lt">
              <div class="add-lt-in">
                <div class="proin">
                  <div class="login-in">
                    <div class="login-lt">
                      <h5>Proin gravida nibh vel velit auctor.</h5>
                      <ul>
                        <li><a href="#" class="red">Lorem</a></li>
                        <li><a href="#" class="blue1">Ipsum amet</a></li>
                      </ul>
                      <figure><img src="images/graph4.png" width="473" height="221" alt="img"></figure>
                      <a href="#" class="read">Read More <img src="images/arrow.png" width="15" height="11" alt="img"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--add-in end-->
          <!--contact form start-->
          <div class="contact" itemscope="" itemtype="https://schema.org/ContactPage">
            <form method="post">
            <div class="d-flex flex-wrap">
              <div class="form-in col-md-6">
                <div class="form-group user">
                  <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname">
                </div>
              </div>
              <div class="form-in col-md-6">
                <div class="form-group user">
                  <input type="text" class="form-control" placeholder="Last Name" name="flname" id="flname">
                </div>
              </div>
              <div class="form-in col-md-6">
                <div class="form-group user user1">
                  <input type="text" class="form-control" name="femail" id="femail" placeholder="Email">
                </div>
              </div>
              <div class="form-in col-md-6">
                <div class="form-group user user2">
                  <input type="text" class="form-control" name="fphone" id="fphone" placeholder="Phone">
                </div>
              </div>
              <div class="form-in col-md-6">
                <div class="form-group user user3">
                  <textarea class="form-control" name="fmessage" id="fmessage" placeholder="Description"></textarea>
                </div>
              </div>
              <div class="form-in col-md-6">
                <div class="word">
                  <div class="word-in">
                    <a href="#"><img id="captcha_code" src="captcha_code.php"></a>
                    <a href="#"><img id="captcha_code" src="captcha_code.php"></a>
                    <div class="type">
                      <div class="type-lt">
                        <h5>Type the words below</h5>
                      </div>
                      <div class="type-rt">
                        <ul>
                          <li><a href="javascript:void(0)" class="btnRefresh" onclick="refreshCaptcha();">
							  <img src="images/img4.png" width="14" height="14" alt="img">
							  </a></li>
                          <li><a href="#">
							   <img src="images/img5.png" width="16" height="16" alt="img">
							  </a></li>
                          <li><a href="#">
							   <img src="images/img6.png" width="15" height="15" alt="img">
							  </a></li>
                        </ul>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="enter">
                      <input type="text" class="form-control" name="captcha" id="captcha" placeholder="- enter text here -">
                    </div>
                  </div>
                </div>
                <div class="submit-btn">
                  <a href="javascript:void(0)" class="Submit btn" id="send"> Submit</a>
                  <a href="javascript:void(0)" class="Submit Cancel btn"> Cancel</a>
                  <div class="clear"></div>
                </div>
              </div>
              <span class="errS"></span>
              <span class="fsuccess"></span>
              <div id="mail-status"></div>
              </div>
            </form>
          </div>
          <!--contact form end-->
        </div>
      </div>
		<div class="push"></div>
      <!--main-content end-->
		    </div>
    <!-- wrapper ends -->
      <!--footer start-->
       <?php include 'footer.php'; ?> 
      <!--footer end-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/jquery.roundslider/1.3/roundslider.min.js"></script>
	  <script src="js/custom_scripts.js"></script>
	  <script src="js/jquery.easing.1.3.js"></script>
	   <script src="js/retina.js"></script>
    <script>
      $(document).ready(function(e) {	
      	$("#slider").roundSlider({
		radius: 75,
		width: 10,
		handleSize: "+16",
		handleShape: "dot",
		sliderType: "min-range",
		value: 75
      });
      });
    </script>
	  <script type="text/javascript">
$(document).ready(function(){
	$('#send').click(function(e) {
		
        var fname = $('#fname');
		var flname = $('#flname');
		var femail = $('#femail');
		var fphone = $('#fphone');
		var fstates = $('#fstates');
		var fmessage = $('#fmessage');
		var captcha = $('#captcha');
		
		var error = 0;
		
		$('#fname, #flname, #femail, #fphone, #fstates, #fmessage').css({'border':''});
		
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
		
		// Phone Number
		if($.trim($('#fphone').val()) == '') {
			fphone.css({'border':'1px solid #f00'});
			error = 1;
		}
		
		
		
		// Message
		if($.trim($('#fmessage').val()) == '') {
			fmessage.css({'border':'1px solid #f00'});
			error = 1;
		}

		
		
		
		
		// Radio Box 
		var fields = $('input[class=radio_option]:checked').serializeArray();
		if (fields.length == 0) {
			$('.radio_option + .required').css({'color':'red'});
		}else{
			$('.radio_option + .required').css({'color':''});	
		}

		var rdio="";	// grab selected services
		$('.radio_option').each(function(e){
		if(this.checked){
			rdio +=$(this).val();
		}
		});
		
		
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
		
		var str = 'fname='+fname.val()+'&flname='+flname.val()+'&femail='+femail.val()+'&fphone='+fphone.val()+'&fmessage='+fmessage.val()+'&captcha='+captcha.val();
		
		
		$.ajax({
				url: 'submit.php',
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
					
					
					$('#fname, #flname, #femail, #fphone, #fstates, #fmessage, #captcha_form, #captcha').val('');
					//$('.check_option, .radio_option').attr('checked', false);
					
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
       <script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
			ul.style.display = "block";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
  </body>
</html>