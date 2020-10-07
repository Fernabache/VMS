<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <title> Visitor management system</title>
        <meta name="author" content="Fernabache">
  
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/hook.js"></script>
         <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
		
		$("#logger").click(function(){
			$(".boxerr").toggle("slow");
			
			});
		})
    </script>
        
    </head>
    <body class="mainb">
		<?php
		include("form.php");
		include("nb.php");
		?>
 
		<script src="js/scroller.js"></script>
			
        <div class="container" id="tbow">
			<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<img src="img/F3.jpg" style="width:100px;border-radius:50% 50%;"/>
			<h3 style="text-align:center;" id="yetanotherscroller"><i class="glyphicon glyphicon-home">&nbsp;</i>
			<script src="js/scroller.js"></script>
			</h3>
			</div>
			</div>
			
			<div class="reot">
			
			</div>
			
			
			
			
			
			
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 text-center firstb">
        <i class="fa fa-users fa-3x wow animated zoomIn" data-wow-delay="0.3s" id="redc"></i>
        <p class="ry">Register Vistor</p>
        </div>
        
         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 text-center secondb">
         <i class="glyphicon glyphicon-lock wow animated zoomIn" data-wow-delay="0.6s" id="redc"></i>
        <p class="ry">Authenticate Visitor</p>
        </div>
        
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 text-center thirdb">
         <i class="glyphicon glyphicon-credit-card wow animated zoomIn" data-wow-delay="0.9s" id="redc"></i>
        <p class="ry">Authorize VIsitor</p>
        </div> 
        </div>
        
        
        <div class="row">
			
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 text-center ftb" onclick="tick()">
        
      
        <i class="glyphicon glyphicon-tasks wow animated zoomIn" data-wow-delay="1.2s" id="redc"></i>
        <p class="ry">Notifications</p>
        </div>
        
         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 text-center fifthb">
            <i class="glyphicon glyphicon-user wow animated zoomIn" data-wow-delay="1.5s" id="redc"></i>
        <p class="ry">Add Employee</p>
        </div>
        
         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 text-center sixthb">
        <i class="fa fa-users wow animated zoomIn" data-wow-delay="1.8s" id="redc"></i>
        <p class="ry">Add Student</p>
        
        </div> 
        </div>
        

        
          <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 text-center firstbp">
        <i class="fa fa-users fa-3x wow animated zoomIn" data-wow-delay="0.3s" id="redc"></i>
        <p class="ry">Badge Management</p>
        </div>
        
         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 text-center secondbp">
         <i class="fa fa-car fa-3x wow animated zoomIn" data-wow-delay="0.6s" id="redc"></i>
        <p class="ry">Cars Tracking</p>
        </div>
        
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 text-center thirdbp">
         <i class="glyphicon glyphicon-qrcode wow animated zoomIn" data-wow-delay="0.9s" id="redc"></i>
        <p class="ry">Qrcode Encode / Decoder</p>
        </div> 
        </div>
        
        
                
        <div class="row">
			
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center ftb">
      <i class="fa fa-download fa-3x wow animated zoomIn" data-wow-delay="2.1s" id="redc"></i>
        <p class="ry">Cars Tracking</p>
        
        </div>
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center fifthb">
       <i class="glyphicon glyphicon-briefcase wow animated zoomIn" data-wow-delay="2.4s" id="redc"></i>
        <p class="ry">Asset Management</p>
        </div>
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center sixthb">
       <i clasu77s="glyphicon glyphicon-trash wow animated zoomIn" data-wow-delay="2.7s" id="redc"></i>
        <p class="ry">BLacklisted Record</p>
        </div> 
        </div>
        
        
        
                <div class="row">
			
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center ftbo">
      <i class="fa fa-envelope fa-3x wow animated zoomIn" data-wow-delay="2.1s" id="redc"></i>
        <p class="ry">Messaging (Sms/Mailing system)</p>
        
        </div>
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center fifthbo">
       <i class="glyphicon glyphicon-stats wow animated zoomIn" data-wow-delay="2.4s" id="redc"></i>
        <p class="ry">Statistics</p>
        </div>
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center sixthbo">
       <i class="glyphicon glyphicon-hdd wow animated zoomIn" data-wow-delay="2.7s" id="redc"></i>
        <p class="ry">Database Management</p>
        </div> 
        </div>
        
        	<div class="footer-social well">
							
							<ul>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
							</ul>
						
						</div>
        
        </div>
        
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
	<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></scr ipt>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
