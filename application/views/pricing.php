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
                           <li><a class="active" href="#">Pricing</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>Pricing Plan</h1>
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
         <section class="section-padding gray no-top">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-8 col-xs-12 col-sm-12">

                     <ul class="accordion">
                        <?php foreach($table_cat as $services){?>
                        <li class="in">
                           <h3 class="accordion-title"><a href="#"><?php echo $services->Category_Name;?></a></h3>
                           <div class="accordion-content">
      							  <table>
      								  <tr>
      									<th>&nbsp;</th>
      									<th>BIKE BELOW 150 CC</th>
      									<th>SCOOTER BELOW 150 CC</th>
      									<th>BIKE B/W 150-220 CC</th>
      									<th>BIKE B/W 220-500 CC</th>
      								  </tr>
      								  <?php foreach($prices as $price){ ?>
                                 <?php if($price->Category_Name==$services->Category_Name){ ?>
      								  <tr>
      									<td><?php echo $price->Service_Name;?></td>
      									<td><?php echo $price->Bikes_Below_150CC;?></td>
      									<td><?php echo $price->Scooters_Below_150CC;?></td>
      									<td><?php echo $price->Bikes_Btw_150_220CC;?></td>
      									<td><?php echo $price->Bikes_Btw_220_500CC;?></td>
      								  </tr>
      								 <?php } } ?>
      								</table>
                           </div>
                        </li>
                       <?php }?>
                     </ul>
                  </div>
                  <div class="col-md-4 col-xs-12 col-sm-12">
                     <!-- Sidebar Widgets -->
                     <div class="blog-sidebar">
                        <!-- Categories --> 
                        <div class="widget">
                           <div class="widget-heading">
                              <h4 class="panel-title"><a>Service &amp; Labour</a></h4>
                           </div>
						   
                           <div class="widget-content">
                              <ol>
                                 <li>INSPECTIONS &nbsp;&nbsp;&nbsp;&nbsp; Rs 200</li>
								 <p>Electrical Inspection, Tyres & Rim Inspection, Chassis Inspection, Transmission Inspection, Body Parts Inspection, Brakes Inspection</p>
                                
                              </ol>
                           </div>
						   
						   <div class="widget-heading">
                              <h4 class="panel-title"><a>FULL SERVICE</a></h4>
                           </div>
						   
						   <div class="widget-content">
                              <ol>
                                 <li>Below 150 cc &nbsp;&nbsp;&nbsp;&nbsp; Rs 349</li>
								 <li>Above 150 cc &nbsp;&nbsp;&nbsp;&nbsp; Rs 499</li>
								 <p>Engine oil check, Battery check, Spark plug check, Electricals check, Clean/Replace Air filter, Clean/Adjust Carburetor, Adjust clutch freeplay, Test ride</p>
                                
                              </ol>
							  <a href=""><button class="btn btn-theme">Request Service</button></a>
                           </div>
						   
                        </div>
                        <!-- Latest News --> 
                     </div>
                     <!-- Sidebar Widgets End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
      <?php $this->load->view('include/footer.php');?>