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
						   <li><a class="active">Profile</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>User Dashboard</h1>
               <?php if($this->session->flashdata('message')){ ?>
              <div class="alert alert-success" role="alert">
               <?php  echo $this->session->flashdata('message');?>
              </div>
              <?php }?> 
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
               <?php $this->load->view('user/pro.inc.php');?>
               <div class="row margin-top-40">
                  <!-- Middle Content Area -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <!-- Row -->
                     <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                           <ul class="nav nav-justified nav-tabs">
                              <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                              <li><a href="#edit" data-toggle="tab">Edit Profile</a></li>
                              <!--<li><a href="#payment" data-toggle="tab">Plan Setting</a></li>
                              <li><a href="#settings" data-toggle="tab">Notification Settings</a></li>-->
                           </ul>
                           <div class="tab-content">
                              <div class="profile-edit tab-pane fade in active" id="profile">
                                 <h2 class="heading-md">Check your profile details here.</h2>
                                 <dl class="dl-horizontal">
                                    <dt><strong>Name </strong></dt>
                                    <dd><?php echo $this->session->userdata('name');?></dd>
                                    <dt><strong>Email Address </strong></dt>
                                    <dd><?php echo $this->session->userdata('email');?> </dd>
                                    <dt><strong>Phone Number </strong></dt>
                                    <dd><?php echo $this->session->userdata('mobile');?></dd>
                                    <dt><strong>My Bike</strong></dt>
                                    <dd>You Don't have any saved Bike. </dd>
                                    <dt><strong>Address</strong></dt>
                                    <dd>You Don't have any saved address.</dd>
                                 </dl>
                              </div>
                              <div class="profile-edit tab-pane fade" id="edit">
                                 <h2 class="heading-md">Change your profile details here.</h2>
                                 <div class="clearfix"></div>
                                 <form action="<?php echo base_url('profile/update')?>" method="post" encypt="" >
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Name </label>
                                          <input type="text" name="name" class="form-control margin-bottom-20" placeholder="Arvind Sharma" value="<?php echo $this->session->userdata('name');?>">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Email Address <span class="color-red">*</span></label>
                                          <input type="email" name="email" class="form-control margin-bottom-20" placeholder="example@abc.com" value="<?php echo $this->session->userdata('email');?>">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12">  
                                          <label>Phone Number  <span class="color-red">*</span></label>
                                          <input type="number" name="mobile" class="form-control margin-bottom-20" placeholder="<?php echo $this->session->userdata('mobile');?>" value="<?php echo $this->session->userdata('mobile');?>">
                                       </div>
									   <div class="col-md-3 col-sm-12 col-xs-12">  
                                          <label>My Bike </label>
                                          <p class="form-control margin-bottom-20">You Don't have any saved Bike.</p>
                                       </div>
                                       <div class="col-md-3 col-sm-12 col-xs-12 margin-bottom-20">                                          
                                          <div id="select-bike" class="btn btn-danger" style="margin-top:30px">Select Bike</div>
                                       </div>
									   
									   <!-- Tab panes -->
									   <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20"> 
										 <div id="tab-bike" class="tab-content clearfix">
											<div class="tab-pane fade in active" id="tab1">
											   <form>
												  <div class="search-form pull-left">
													 <div class="search-form-inner pull-left">
														
														<div class="col-md-3 no-padding">
														   <div class="form-group">
															  <label>Select Make</label>
															  <select name="bike_name" class=" form-control make">
                                                <option value="<?php echo $users[0]->bike_name;?>"><?php echo $users[0]->bike_name;?></option>
																 <option label="Any Make"></option>
                                                 <?php foreach($bike as $bikes){?>
                                                 <option value="<?php echo $bikes->Brand_Name;?>"><?php echo $bikes->Brand_Name;?></option>
                                                  <?php }?>
																 
															  </select>
														   </div>
														</div>
														<div class="col-md-3 no-padding">
														   <div class="form-group">
															  <label>Keyword</label>
															  <input type="text" name="bike_ccc" class="form-control" placeholder="Eg Royal Enfield Bullet 350, Honda Activa, Bajaj Discover 100M"  value="<?php echo $users[0]->bike_ccc;?>" />
														   </div>
														</div>
														<div class="col-md-3 no-padding">
														   <div class="form-group">
															  <label>Select Year</label>
															  <select name="bike_year" class=" form-control search-year">
                                                <option value="<?php echo $users[0]->bike_year;?>"><?php echo $users[0]->bike_year;?></option>
																 <option label="Any Year"></option>
																 <option>Year</option>
																 <option>2005</option>
																 <option>2006</option>
																 <option>2007</option>
																 <option>2008</option>
																 <option>2009</option>
																 <option>2010</option>
																 <option>2011</option>
																 <option>2012</option>
																 <option>2013</option>
																 <option>2014</option>
																 <option>2015</option>
																 <option>2016</option>
																 <option>2017</option>
																 <option>2018</option>
															  </select>
														   </div>
														</div>
														<div class="col-md-3 no-padding">
														   <div class="form-group">
															  <label>Select Location</label>
															  <select name="bike_location" class="search-loaction form-control">
                                                <option value="<?php echo $users[0]->bike_location;?>"><?php echo $users[0]->bike_location;?></option>
																 <option label="location"></option>
																 <option value="0">America</option>
																 <option value="1">Australia</option>
																 <option value="2">Africa</option>
																 <option value="3">Pakistan</option>
																 <option value="4">Japan</option>
																 <option value="5">Srilanka</option>
															  </select>
														   </div>
														</div>
													 </div>
													 <div class="form-group">
														<button type="submit" value="submit" class="btn btn-lg btn-theme">Confirm</button>
													 </div>
												  </div>
											</div>
										</div>
										</div>	
									   
                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                          <label>Address </label>
                                          <textarea name="address" class = "form-control margin-bottom-20" rows = "3" placeholder="You Don't have any saved address."><?php echo $users[0]->address;?></textarea>
                                       </div>
                                    </div>
                                    <div class="row margin-bottom-20">
                                       <div class="form-group">
                                          <div class="col-md-9">
                                             <div class="input-group">
                                                <span class="input-group-btn">
                                                <span class="btn btn-primary btn-file">
                                                Browse… <input name="images" type="file" id="imgInp">
                                                </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                             </div>
                                          </div>
                                          <div class="col-md-3">
                                             <?php if($users[0]->images){?>
                                             <img id="img-upload" class="img-responsive" src="<?php echo base_url().'images/'.$users[0]->address;?>" alt="" />
                                          <?php } else { ?>
                                             <img id="img-upload" class="img-responsive" src="../images/users/default.jpg" alt="" />
                                             
                                          <?php }?>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                      
                                       <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                          <button type="submit" class="btn btn-theme btn-sm">Update My Info</button>
                                       </div>
                                    </div>
                                 </form>
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