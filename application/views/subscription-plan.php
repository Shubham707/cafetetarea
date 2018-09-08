
 <?php $this->load->view('include/header.php');?>

 <style type="text/css">
 	
 	 .btn-group{ 
 	 	 padding: 0;
 	 	 margin-bottom: 20px;
 	 	}
 </style>      <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= -->
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
					 <!--<div class="profile-section margin-bottom-20">
						<div class="profile-tabs">
						   <ul class="nav nav-justified nav-tabs">
							  <li class="active"><a href="#b-150" data-toggle="tab">BELOW 150 CC </a></li>
							  <li><a href="#150-250" data-toggle="tab">150 CC - 250 CC </a></li>
							  <li><a href="#a-250" data-toggle="tab">ABOVE 250 CC </a></li>
						   </ul>
						   <div class="tab-content">
							  <div class="profile-edit tab-pane fade in active" id="b-150">
								 <section class="">-->

								 	<!--Buttons-->
								 	<div class="btn-group col-xs-12" role="group" aria-label="Basic example">
								 		<?php foreach($plans as $plan){?>
									  <a  class="btn btn-secondary col-xs-3" href="<?php echo base_url().'plan-extra/'.str_replace(' ', '-', $plan->Engine_Classification);?>" ><?php echo $plan->Engine_Classification;?></a>
									<?php }?>
									</div>
									<!-- Main Container -->
									<div class="">
									   <!-- Row -->
									   <div class="row">
										  <!-- Middle Content Box -->
										  <div class="col-md-12 col-xs-12 col-sm-12">
											 <div class="row pricing">
											 	<?php if($planing!='') { foreach($planing as $pln){?>
												<div class="col-sm-6 col-lg-4 col-md-4">
												   <div class="block">
													  <h3><?php echo $pln->Plan_Name;?></h3>
													  <span class="price">Rs <?php echo $pln->Price;?>/-</span>
													  <ul>
														 <li>No of Services - <?php echo $pln->No_of_Services;?></li>
														 <li>Savings > <?php echo $pln->Discount;?>%</li>
														 <li>Breakdown Assist - <?php echo $pln->Breakdown_Assist;?></li>
														 <li>Validity -<?php echo $pln->Duration_Years;?> Year</li>
													  </ul>
													  <a href="<?php echo base_url().'plans/'.$bike.'/'.$pln->Plan_Name.'/'.$pln->No_of_Services;?>" class="btn btn-theme">Select Plan <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
												   </div>
												</div>
												<?php } }else{ echo 'Data Not Found!'; }?>
												
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
			<!-- Main Container End -->
		 </section>
		 <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
     
         
      </div>
      <?php $this->load->view('include/footer');?>
      <script type="text/javascript">
      	function getValue(arg) {
      		alert(arg);
      	}
      </script>