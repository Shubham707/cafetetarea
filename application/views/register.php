
      
      <!-- =-=-=-=-=-=-= Main Header =-=-=-=-=-=-= -->
      <?php $this->load->view('include/header');?>
      <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= -->
     <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class=" breadcrumb-link">
                        <ul>
                           <li><a href="index.html">Home Page</a></li>
                           <li><a class="active" href="#">Registration</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>Create Your Account</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Registration Form =-=-=-=-=-=-= -->
         
         <section class="section-padding no-top gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                     <!--  Form -->
                     <div class="form-grid">
                        <form action="<?php echo base_url('signup');?>" method="post">
                          <div class="form-group">
                              <label>Name</label>
                              <input placeholder="Enter Your Name" name="name" class="form-control" type="text">
                           </div>
                           <div class="form-group">
                              <label>Contact Number</label>
                              <input placeholder="Enter Your Contact Number"  name="mobile" class="form-control" type="text">
                           </div>
                           <div class="form-group">
                              <label>Email</label>
                              <input placeholder="Your Email" class="form-control" name="email" type="email">
                           </div>
                           <div class="form-group">
                              <label>Password</label>
                              <input placeholder="Your Password" class="form-control" name="password" type="password">
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-7">
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-1">
                                             <label for="minimal-checkbox-1">i agree <a href="#">Terms of Services</a></label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-5 text-right">
                                    <p class="help-block"><a data-target="#myModal" data-toggle="modal">Forgot password?</a>
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <button class="btn btn-theme btn-lg btn-block">Register</button>
                         
                        </form>
                     </div>
                     <!-- Form -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
          <!-- =-=-=-=-=-=-= Registration Form End =-=-=-=-=-=-= -->
           <?php $this->load->view('include/footer');?>