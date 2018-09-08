<!-- Row -->
<div class="row">
  <!-- Middle Content Area -->
  <div class="col-md-12 col-xs-12 col-sm-12">
	 <section class="search-result-item">
		<a class="image-link"><img class="image center-block" alt="" src="../images/users/default.jpg"> </a>
		<div class="search-result-item-body">
		   <div class="row">
			  <div class="col-md-5 col-sm-12 col-xs-12">
				 <h4 class="search-result-item-heading"><a><?php echo $this->session->userdata('name');?></a></h4>
				 <p class="info"><span><a><i class="fa fa-envelope "></i> : <?php echo $this->session->userdata('email');?> </a></span></p>
				 <p class="info"><span><a><i class="fa fa-mobile "></i> : <?php echo $this->session->userdata('mobile');?> </a></span></p>
				 <p class="description">You last logged in at: <?php echo $this->session->userdata('login_time');?></p>
			  </div>
			  <div class="col-md-7 col-sm-12 col-xs-12">
				 <div class="row ad-history">
					<div class="col-md-4 col-sm-4 col-xs-12">
					   <div class="user-stats">
					   	
							<h2>&#x20b9; <?php //$b= $booking[0]->payment==""  ? '' : $booking[0]->payment ;
							if(empty($booking[0]->payment))
							echo "";
							else
								echo $booking[0]->payment

						?></h2>
						  <small>YOUR CREDITS</small>
					   </div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
					   <div class="user-stats">
					   	<?php if(empty($booking[0]->bike_cc)){ ?>
					   		<small>Plan</small>
						<?php } else {?>

						  <h2><?php echo $booking[0]->bike_cc;?></h2>
						  <small><?php echo $booking[0]->bike_plan;?></small>
						<?php }?>

					   </div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
					   <div class="user-stats">
					   	<?php if(empty($booking[0]->txid)){ ?>
						  
						  <?php } else {?>
						  	<h2><?php echo $booking[0]->txid;?></h2>
						<?php }?>
						  <small>REFERRALS CODE</small>
					   </div>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
	 </section>
	 <div class="dashboard-menu-container">
		<ul>
		   <li>
			  <a href="<?php echo base_url('profile');?>">
				 <div class="menu-name"> Profile </div>
			  </a>
		   </li>
		   <li>
			  <a href="<?php echo base_url('logout');?>">
				 <div class="menu-name">Booking</div>
			  </a>
		   </li>
		   <li>
			  <a href="<?php echo base_url('subscription-plan');?>">
				 <div class="menu-name">Subcription</div>
			  </a>
		   </li>
		   <li>
			  <a href="<?php echo base_url('logout');?>">
				 <div class="menu-name">Logout</div>
			  </a>
		   </li>
		</ul>
	 </div>
	 
  </div>
  <!-- Middle Content Area  End -->
</div>
<!-- Row End -->