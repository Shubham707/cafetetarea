 <?php $this->load->view('include/header.php');?>
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
						   <li><a class="active">Booking</a></li>
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
               <div class="row margin-top-40">
                  <!-- Middle Content Area -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <!-- Row -->
                     <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                           <ul class="nav nav-justified nav-tabs">
                              <li class="active"><a href="#profile" data-toggle="tab">Active Bookings</a></li>
                              <li><a href="#payment" data-toggle="tab">Upcoming Bookings</a></li>
                              <li><a href="#settings" data-toggle="tab">Past Bookings</a></li>
                           </ul>
                           <div class="tab-content">
                              <div class="profile-edit tab-pane fade in active" id="profile">
                                 <h2 class="heading-md">You Don't have any active booking. </h2>                                 
                              </div>
							  
                              <div class="profile-edit tab-pane fade" id="payment">
                                 <h2 class="heading-md">You Don't have upcoming bookings.</h2>                                 
                              </div>
							  
                              <div class="profile-edit tab-pane fade" id="settings">
                                 <h2 class="heading-md">You Don't have past bookings. </h2>                                 
                              </div>
							  
                           </div>
                        </div>
                     </div>
                     <!-- Row End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
         <?php $this->load->view('include/footer.php');?>