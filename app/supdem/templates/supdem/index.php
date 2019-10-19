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
    <link rel="stylesheet" type="text/css" href="css/bootstrap4hack.css">
    <link rel="stylesheet" type="text/css" href="css/main.css" >
  </head>
  <body>
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
            <h1>Welcome to the<br>
              Home of <span>Supply</span> & <span>Demand</span>
            </h1>
            <h2>Please Choose your Path</h2>
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
      <div class="main-content">
        <div class="container">
          <!--suppliers start-->
          <div class="suppliers" itemscope  itemtype="https://schema.org/manufacturer">
			  <div id="top"></div>
            <div class="suppliers-in d-flex flex-wrap">
              <div class="suppliers-lt col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="suppliers-lt-in">
                  <div class="suppliers-img">
                    <figure><img src="images/small_img1.png" alt="img" width="224" height="139"></figure>
                  </div>
                  <h3>sUPPLIERS</h3>
                  <ul>
                    <li>
                      <p>Looking for the optimal region to establish your business?</p>
                    </li>
                    <li>
                      <p>Want to reach out to your demanding prospects?</p>
                    </li>
                    <li>
                      <p>Have products/services to sell?</p>
                    </li>
                    <li>
                      <p>Interested in relevant analytical data form many souces ?</p>
                    </li>
                  </ul>
                  <a href="/suppliers/" class="supply btn">sUPPLIERS route</a>
                </div>
              </div>
              <div class="suppliers-lt suppliers-rt col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="suppliers-lt-in">
                  <div class="suppliers-img">
                    <figure><img src="images/small_img2.png" alt="img" width="234" height="133"></figure>
                  </div>
                  <h3>dEMANDERS</h3>
                  <ul>
                    <li>
                      <p>See an oprtunity area for a business to establish and flourish?</p>
                    </li>
                    <li>
                      <p>Want to reach out to suppliers relevant to your interests?</p>
                    </li>
                    <li>
                      <p>Centralize your search for purchasing
                        goods/ services?
                      </p>
                    </li>
                    <li>
                      <p>Connect with like-minded demanders in
                        your area?
                      </p>
                    </li>
                  </ul>
                  <a href="/demanders/" class="supply btn">dEMANDERS route</a>
                </div>
              </div>
            </div>
            <div class="ads ads1">
              <div class="ads-in">
                <h4>your ad here</h4>
                <span>160 x 600</span>
              </div>
            </div>
          </div>
          <!--suppliers end-->
          <!--ads start-->
          <div class="ads">
            <div class="ads-in">
              <h4>your ad here</h4>
              <span>970 x 90</span>
            </div>
          </div>
          <!--ads end-->
          <!--location start-->
			<div id="bottom"></div>
          <div class="loaction" itemscope itemtype="https://schema.org/location">
            <figure><img src="images/video_img.png" width="999" height="438" alt="img"></figure>
            <span><a href="#"><img src="images/play-icon.png" width="73" height="73" alt="img"></a></span>
          </div>
          <!--location end-->
        </div>
      </div>
      <!--main-content end-->

      <div class="push"></div>
    </div>
	  <!--footer start-->
      <?php include 'footer.php'; ?>
      <!--footer end-->
    <!-- wrapper ends -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	 <script src="js/custom_scripts.js"></script>
	 <script src="js/retina.js"></script>
	  <script src="js/jquery.easing.1.3.js"></script>

  </body>
</html>
