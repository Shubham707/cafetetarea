
 <?php $this->load->view('include/header.php');?>
      <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= -->
     <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class="breadcrumb-link">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a class="active" href="#">Plans</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>Subscription Plan</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
	   <section class="section-padding no-top gray">
            <!-- Main Container -->
            <div class="container"><!---  --->
			  <div class="row margin-top-40">
				  <!-- Middle Content Area -->
				  <div class="col-md-12 col-xs-12 col-sm-12">
					 <!-- Row -->
					 <div class="profile-section margin-bottom-20">
					 	
						<div class="profile-tabs">
						   <ul class="nav nav-justified nav-tabs">
						   	<?php  foreach($planing as $planbike){?>
							  <li class="<?php if($planbike->Engine_Classification=='Bikes Below 150CC'){ echo 'active';}?>"><a href="#b-150_<?php echo $planbike->Engine_Classification;?>" data-toggle="tab"> <?php echo $planbike->Engine_Classification;?> </a></li>
							<?php }?>
						   </ul>
						   <div class="tab-content">
						    <?php $count=1; foreach($plans as $plan){ ?>
							  <div class="profile-edit tab-pane fade in <?php if($plan->Engine_Classification=='Bikes Below 150CC'){ echo 'active';}?>" id="b-150_<?php echo $planbike->Engine_Classification;?>">
								 <section class="">
									<!-- Main Container -->
									<div class="">
									   <!-- Row -->
									   <div class="row">
										  <!-- Middle Content Box -->
										  <div class="col-md-12 col-xs-12 col-sm-12">
											 <div class="row pricing">
											 	<?php 
											 		foreach($plans as $plan){
											 			if($plan->Plan_ID % 3==1){

											 			?>
											 		

												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													  <h3><?php echo $plan->Plan_Name;?></h3>
													  <span class="price">Rs <?php echo $plan->Price;?>/-</span>
													  <ul>
														 <li>No of Services - <?php echo $plan->No_of_Services;?></li>
														 <li>Savings > <?php echo $plan->Discount;?>%</li>
														 <li>Breakdown Assist - <?php echo $plan->Breakdown_Assist;?></li>
														 <li>Validity - <?php echo $plan->Duration_Years;?> Year</li>
													  </ul>
													  <a href="<?php echo base_url('plan-selected/1');?>" class="btn btn-theme">Select Plan <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
												   </div>
												</div>
												
											<?php }   }break; ?>
											 </div>
										  </div>
									   </div>
									   <!-- Row End -->
									</div>
									<!-- Main Container End -->
								 </section>
							  </div>
							<?php }?>
							  
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
     
         
      </div>
      <?php $this->load->view('include/footer');?>