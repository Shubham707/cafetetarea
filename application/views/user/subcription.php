<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />      
      <title>User Subcription | VK Bikes</title>
	  <meta name="description" content="">
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="../images/favicon.ico" type="image/x-icon" />
      <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="../css/bootstrap.css">
      <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="../css/font-awesome.css" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link href="../css/flaticon.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="../css/et-line-fonts.css" type="text/css">
      <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="../css/carspot-menu.css" type="text/css">
      <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="../css/animate.min.css" type="text/css">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="../css/select2.min.css" rel="stylesheet" />
      <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
      <link href="../css/nouislider.min.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
      <link href="../css/slider.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
      <link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="../css/owl.theme.css">
      <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
      <link href="skins/minimal/minimal.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= PrettyPhoto =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="../css/jquery.fancybox.min.css" type="text/css" media="screen"/>
      <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
      <link href="../css/responsive-media.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="color" href="../css/colors/defualt.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CSource+Sans+Pro:400,400i,600" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="../js/modernizr.js"></script>
	  <style>
	  #select-plan{display:none;}
	  </style>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script>
		$(document).ready(function(){
			$("#change-plan").click(function(){	
				$("#select-plan").toggle();
			});
		});
		</script>
   </head>
   <body>
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      <div class="preloader"></div>
      
      <!-- =-=-=-=-=-=-= Main Header =-=-=-=-=-=-= -->
      <?php include'../include/header.inc.php';?>
      <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= -->
     <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class=" breadcrumb-link">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li><a class="active">User</a></li>
						   <li><a class="active">Subcription</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>User Dashboard</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding no-top gray">
            <!-- Main Container -->
            <div class="container"><!---  --->
               <?php include'pro.inc.php';?>
			   <div id="plan" class="row margin-top-40">
                  <!-- Middle Content Area -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <!-- Row -->
                     <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                           <ul class="nav nav-justified nav-tabs">
                              <li class="active"><a href="#profile" data-toggle="tab">My Subcription Plan</a></li>
                           </ul>
                           <div class="tab-content">
							  <div class="profile-edit tab-pane fade in active" id="b-150">
								 <section class="">
									<!-- Main Container -->
									<div class="">
									   <!-- Row -->
									   <div class="row">
										  <!-- Middle Content Box -->
										  <div class="col-md-12 col-xs-12 col-sm-12">
											 <div class="row pricing">
												
												<div class="col-sm-3 col-lg-4 col-md-4">
												   <div class="block">
													   <h3>Standard Plan</h3>
													   <span class="type">Below 150CC</span>
													  <span class="price">Rs 1356/-</span>
													  <ul>
														 <li>No of Services - 4</li>
														 <li>Savings > 18%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a id="change-plan" class="btn btn-theme">Change Plan <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
												   </div>
												</div>
												
												<div id="select-plan" class="row col-sm-9 col-lg-8 col-md-8">
				  <!-- Middle Content Area -->
				  <div class="col-md-12 col-xs-12 col-sm-12">
					 <!-- Row -->
					 <div class="profile-section margin-bottom-20">
						<div class="profile-tabs">
						   <ul class="nav nav-justified nav-tabs" style="margin-top:0">
							  <li class="active"><a href="#b-150" data-toggle="tab">BELOW 150 CC </a></li>
							  <li><a href="#150-250" data-toggle="tab">150 CC - 250 CC </a></li>
							  <li><a href="#a-250" data-toggle="tab">ABOVE 250 CC </a></li>
						   </ul>
						   <div class="tab-content">
							  <div class="profile-edit tab-pane fade in active" id="b-150" style="padding:5px">
								 <section class="">
									<!-- Main Container -->
									<div class="">
									   <!-- Row -->
									   <div class="row">
										  <!-- Middle Content Box -->
										  <div class="col-md-12 col-xs-12 col-sm-12">
											 <div class="row pricing">
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													  <h4>Basic Plan</h4>
													  <span class="price2">Rs 1061/-</span>
													  <ul>
														 <li>No of Services - 3</li>
														 <li>Savings > 14%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a href="#" class="btn2 btn-theme">Select Plan</a>
												   </div>
												</div>
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													   <h4>Standard Plan</h4>
													  <span class="price2">Rs 1356/-</span>
													  <ul>
														 <li>No of Services - 4</li>
														 <li>Savings > 18%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a href="#" class="btn2 btn-theme">Select Plan</a>
												   </div>
												</div>
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													  <h4>Premium Plan</h4>
													  <span class="price2">Rs 2005/-</span>
													  <ul>
														 <li>No of Services - 6</li>
														 <li>Savings > 19%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a href="#" class="btn2 btn-theme">Select Plan</a>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
									   <!-- Row End -->
									</div>
									<!-- Main Container End -->
								 </section>
							  </div>
							  <div class="profile-edit tab-pane fade" id="150-250" style="padding:5px">
								 <section class="">
									<!-- Main Container -->
									<div class="">
									   <!-- Row -->
									   <div class="row">
										  <!-- Middle Content Box -->
										  <div class="col-md-12 col-xs-12 col-sm-12">
											 <div class="row pricing">
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													  <h4>Basic Plan</h4>
													  <span class="price2">Rs 1189/-</span>
													  <ul>
														 <li>No of Services - 3</li>
														 <li>Savings > 17%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a href="#" class="btn2 btn-theme">Select Plan</a>
												   </div>
												</div>
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													   <h4>Standard Plan</h4>
													  <span class="price2">Rs 1533/-</span>
													  <ul>
														 <li>No of Services - 4</li>
														 <li>Savings > 19%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a href="#" class="btn btn-theme">Select Plan</a>
												   </div>
												</div>
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													  <h4>Premium Plan</h4>
													  <span class="price2">Rs 2299/-</span>
													  <ul>
														 <li>No of Services - 6</li>
														 <li>Savings > 20%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a href="#" class="btn2 btn-theme">Select Plan</a>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
									   <!-- Row End -->
									</div>
									<!-- Main Container End -->
								 </section>
							  </div>
							  <div class="profile-edit tab-pane fade" id="a-250" style="padding:5px">
								 <section class="">
									<!-- Main Container -->
									<div class="">
									   <!-- Row -->
									   <div class="row">
										  <!-- Middle Content Box -->
										  <div class="col-md-12 col-xs-12 col-sm-12">
											 <div class="row pricing">
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													  <h4>Basic Plan</h4>
													  <span class="price2">Rs 1651/-</span>
													  <ul>
														 <li>No of Services - 3</li>
														 <li>Savings > 15%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a href="#" class="btn2 btn-theme">Select Plan</a>
												   </div>
												</div>
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													   <h4>Standard Plan</h4>
													  <span class="price2">Rs 2123/-</span>
													  <ul>
														 <li>No of Services - 4</li>
														 <li>Savings > 18%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a href="#" class="btn2 btn-theme">Select Plan</a>
												   </div>
												</div>
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													  <h4>Premium Plan</h4>
													  <span class="price2">Rs 3067/-</span>
													  <ul>
														 <li>No of Services - 6</li>
														 <li>Savings > 21%</li>
														 <li>Breakdown Assist - 0</li>
														 <li>Validity - 1 Year</li>
													  </ul>
													  <a href="#" class="btn2 btn-theme">Select Plan</a>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
									   <!-- Row End -->
									</div>
									<!-- Main Container End -->
								 </section>
							  </div>
							  
						   </div>
						</div>
					 </div>
					 <!-- Row End -->
				  </div>
				  <!-- Middle Content Area  End -->
			   </div>
												
											 </div>
										  </div>
									   </div>
									   <!-- Row End -->
									</div>
									<!-- Main Container End -->
								 </section>
							  </div>
							  
                           </div>
						   
						   
						   
                        </div>
                     </div>
                     <!-- Row End -->
                  </div>
                  <!-- Middle Content Area  End -->
			   
               
			</div>
			<!-- Main Container End -->
		 </section>
		 <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
         
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <?php include'../include/footer.inc.php';?>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End --> 
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="../js/jquery.min.js"></script>
      <!-- Bootstrap Core Css  -->
      <script src="../js/bootstrap.min.js"></script>
      <!-- Jquery Easing -->
      <script src="../js/easing.js"></script>
      <!-- Menu Hover  -->
      <script src="../js/carspot-menu.js"></script>
      <!-- Jquery Appear Plugin -->
      <script src="../js/jquery.appear.min.js"></script>
      <!-- Numbers Animation   -->
      <script src="../js/jquery.countTo.js"></script>
      <!-- Jquery Select Options  -->
      <script src="../js/select2.min.js"></script>
      <!-- noUiSlider -->
      <script src="../js/nouislider.all.min.js"></script>
      <!-- Carousel Slider  -->
      <script src="../js/carousel.min.js"></script>
      <script src="../js/slide.js"></script>
      <!-- Image Loaded  -->
      <script src="../js/imagesloaded.js"></script>
      <script src="../js/isotope.min.js"></script>
      <!-- CheckBoxes  -->
      <script src="../js/icheck.min.js"></script>
      <!-- Jquery Migration  -->
      <script src="../js/jquery-migrate.min.js"></script>
      <!-- Style Switcher -->
      <script src="../js/color-switcher.js"></script>
      <!-- PrettyPhoto -->
      <script src="../js/jquery.fancybox.min.js"></script>
      <!-- Wow Animation -->
      <script src="../js/wow.js"></script>
      <!-- Template Core JS -->
      <script src="../js/custom.js"></script>
   </body>
</html>

