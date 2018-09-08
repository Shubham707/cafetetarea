<?php
error_reporting(0);
$this->load->view('vwFrontHeader');
?>

<style>
#postlist1 p{
	height:60px;
}
#postlist p{
	height:60px;
}
.form-control{
		border-radius:0px;
	}
	
.check-box1	{margin:20px 0 0 50px;}
.check-box1 label{font-weight:400;}
.check-box1 span{
		padding-right:20px;
	}
	
.button-div{
		margin:20px 0 0 30px
	}
</style>
<script type="text/javascript">
function FillBilling(f) {
  if(f.billingtoo.checked == true) {
	f.fld_shipping_name.value = f.fld_customer_name.value;
	f.fld_shipping_email.value = f.fld_customer_email.value;
	f.fld_shipping_phone.value = f.fld_customer_phone.value;
    f.fld_shipping_address.value = f.fld_customer_address.value;
	f.fld_shipping_city.value = f.fld_customer_city.value;
    f.fld_shipping_state.value = f.fld_customer_state.value;
	f.fld_shipping_pincode.value = f.fld_customer_pincode.value; 
	f.fld_shipping_country.value = f.fld_customer_country.value; 
  }else{
    f.fld_shipping_name.value = '';
	f.fld_shipping_email.value = '';
	f.fld_shipping_phone.value = '';
    f.fld_shipping_address.value = '';
	f.fld_shipping_city.value = '';
    f.fld_shipping_state.value = '';
	f.fld_shipping_pincode.value = ''; 
	f.fld_shipping_country.value = ''; 
  }
}
 
	
	function its_customer(id)
	{
		$.ajax({   
					url: "customer/filtercustomer/", 
					type: "POST", 
					data: "search_customer="+id,
					success: function(data) {
					 $('#postlist').hide();
					 $('#filterlist').html(data);
					}
				})
	}
		
</script>

<div style="background:#000; width:100%;height:93px;"></div>
	<div class="booking-form">
		<div class="container">
      <div class="row">
        <div class="col-md-12">
         
            
           
             
				<!-- Table -->
				<?php
				$grand_total = 0;
				
				if ($cart = $this->cart->contents()):
					foreach ($cart as $item):
						//$grand_total = $grand_total + $item['subtotal'];
						$ss=explode(',',$item['timeslot']);
						$grand_total =count($ss) * $item['price'];
					endforeach;
				endif;
				?>
					<form name="billing" method="post" action="<?php echo base_url().'checkout/save_order' ?>" role="form" id="required-form" >
						
						
						
						
						<?php //echo form_dropdown('fld_customer_city', @$city,'#', 'class="form-control" id="fld_customer_city"');?>
						
						<div class="row">
						<div class="col-md-12">
							<h3 style="margin:0 0 0 40px; border-bottom:#f1f1f1 solid 1px;" align="left">Billing Information</h3>
						</div>
							<div class="col-md-4">
								<div class="billinginfo">
									
									<div style="margin:0 0 0 40px;"><br />
										<!--<p><label>Order Total:</label> <strong>Rs. <?php //echo number_format($grand_total,2); ?></strong></p>-->
										<div class="postinfo1">
										<div id="postlist">
											
											<p>
												<label>Customer Name:</label>
												<input type="text" name="fld_customer_name" class="form-control" value="<?php echo $row[0]['fld_customer_name'];?>" required="required" />
											</p>
											
											
											
											<!-- <p >
												<label>State:</label>
												<?php //echo form_dropdown('fld_customer_state', $state,'', 'class="form-control" id="fld_customer_state"');?>
												<select class="form-control"  name="fld_customer_state" id="fld_customer_state" required>
													<option value="">--- Select State ---</option>
													<?php for($j=0;$j<count($state);$j++){
														//echo '<option value="'.$state[$j]['fld_state_id'].'">'.$state[$j]['fld_state_name'].'</option>';
													}?>
												</select>
											</p> -->
											
											
											<!-- <p>
												<label>City:</label>
												<input type="text" name="fld_customer_city" class="form-control" value="<?php //echo $row[0]['fld_customer_city'];?>" required="required" />
											</p> -->
											
										</div>
											<div id="filterlist"></div>
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="billinginfo">
									
									<div style="margin:0 0 0 40px;"><br />
										<!--<p><label>Order Total:</label> <strong>Rs. <?php //echo number_format($grand_total,2); ?></strong></p>-->
										<div class="postinfo1">
										<div id="postlist">
											
											
											
											<p> 
												<label>Email:</label>
												<input type="email" name="fld_customer_email" class="form-control" required="required" value="<?php echo $row[0]['fld_customer_email'];?>"/>
											</p>
											
											<!-- <p>
												<label>Address:</label>
												<textarea name="fld_customer_address" class="form-control" requiredvalue="<?php //echo $row[0]['fld_customer_address'];?>"></textarea>
											</p> -->

											
											
											<!-- <p style="margin-top:40px;">
												<label>Pincode:</label>
												
											</p> -->
											<input type="hidden" maxlength="6" name="fld_customer_pincode" value="<?php echo $row[0]['fld_customer_pincode'];?>" class="form-control" required="required" />
											<p style="display:none">
												<label>Country:</label>
												<?php echo form_dropdown('fld_customer_country', $country,'IN', 'class="form-control" id="fld_customer_country"');?>
											</p>
											
											
										</div>
											<div id="filterlist"></div>
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="billinginfo">
									
									<div style="margin:0 0 0 40px;"><br />
										<!--<p><label>Order Total:</label> <strong>Rs. <?php //echo number_format($grand_total,2); ?></strong></p>-->
										<div class="postinfo1">
										<div id="postlist">
											
											
											
											<p>
												<label>Phone:</label>
												<input type="text" name="fld_customer_phone" class="form-control" required="required" value="<?php echo $row[0]['fld_customer_mobile'];?>"/>
											</p>
											
											
											
											
										</div>
											<div id="filterlist"></div>
											
										</div>
									</div>
								</div>
							</div>
							
						<div class="row" >
							<div class="col-md-12">
								<h3 style="margin:20px 0 0 50px; border-bottom:#f1f1f1 solid 1px;" align="left">Review Order</h3>
								<div class="check-box1">
									<div class="table-responsive">

            <table class="table table-bordered table-hover cart_summary">



              <thead style="background:#fee2d9">



                <tr>



                  <th class="cart_product">Sr.</th>



                  <th>Ground Type</th>



                  <!--<th>Avail.</th>-->                  



                  <th>Schedule Date</th>



                  <th>TimeSlot</th>
				  <th>Amount</th>


                </tr>



              </thead>



              <tbody>




               <?php  //$grand_total = 0; 
			   $i=1;	foreach ($cart as $item): 

							$size='';
							echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
							echo form_hidden('cart['. $item['id'] .'][prdid]', $item['prdid']);
							echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
							echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
							//echo form_hidden('cart['. $item['id'] .'][skucode]', $item['skucode']);
							echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
							//echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
							echo form_hidden('cart['. $item['id'] .'][size]', $item['size']);
							//echo form_hidden('cart['. $item['id'] .'][color]', $item['color']);
							
							
						?>

              <tr>



                <td><?php echo $i++; ?></td>
				<td><?php echo $this->MRcat->getRcat($item['ground_type'])->row()->fld_rcat_name; ?></td>
				<td><?php echo $item['name']; ?></td>
				<td>
					<?php
						if($item['timeslot']!='undefined')
						{
							$ss=explode(',',$item['timeslot']);
							
							for($i=0;$i<count($ss);$i++)
							{
								echo $this->MBrand->getBrand($ss[$i])->row()->fld_brand_name;
								echo '<br>';
							}
						}
					?>
				</td>
				<td><?php echo 'Rs. '.(count($ss) * $item['price']); ?></td>
              </tr>



              <?php endforeach; ?>



              


                </tbody>



              



              <tfoot>


              



              </tfoot>



            </table>

		</div>
								</div>
							</div>
							<div class="col-md-12">
								<h3 style="margin:20px 0 0 50px; border-bottom:#f1f1f1 solid 1px;" align="left">Payment Method</h3>
								<div class="check-box1">
								<ul style="padding:0px;">
								<li>
								 <span>
									<input type="radio" id="coding" name="radio_4" value="1">
									<label for="coding">Pay At Venue</label>
								</span>
								</li>
								<li>
								<span>
									<input type="radio" id="coding1" name="radio_4" value="5" required>
									<label for="coding1">Online Payment</label>
									
									<input type="hidden" name="amount" value="<?php echo $grand_total; ?>" />
											
									<INPUT TYPE="hidden" NAME="product" value="BINDRA">
									<INPUT TYPE="hidden" NAME="TType" value="NBFundTransfer">
									<INPUT TYPE="hidden" NAME="clientcode" value="007">
									<INPUT TYPE="hidden" NAME="AccountNo" value="0884201002029">
									<INPUT TYPE="hidden" NAME="ru" value="<?php echo base_url('thankyou');?>">
									<input type="hidden" name="bookingid" value="100001"/>
								</span>
									</li>
									</ul>
								</div>
								<div class="col-md-12">
									<div class="button-div">
										<label>&nbsp;</label>
										<input  type="submit" value="Place Order" class="btn btn-default btn-gradient"  />
									</div>
								</div>
							</div>
						</div>
					</form>
				
            
          
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
	</div>
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main -->



<?php
$this->load->view('vwFrontFooter');
?>
