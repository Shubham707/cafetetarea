<?php

$this->load->view('include/header');

?>

<script>
function clear_cart() {
	var result = confirm('Are you sure want to clear all bookings?');
	
	if(result) {
		window.location = "<?php echo base_url();?>cart/remove/all";
	}else{
		return false; // cancel button
	}
}
</script>


<div style="background:#000; width:100%;height:93px;"></div>

<div class="booking-form">
<div class="columns-container">



  <div class="container" id="columns">
    <div class="col-md-12"> 
    </div>
    <div class="col-md-12"> 
      <h2 class="page-heading no-line"> <span class="page-heading-title2">Ground Cart Summary</span> </h2> 
    </div>
    <div class="col-md-12">
      <div class="page-content page-order">
        <form action="<?php echo base_url().'cart/update_cart/';?>" method="post">
          <?php if ($cart = $this->cart->contents()): ?>
       
            <div class="cart_navigation"> 
                <form action="<?php echo $action; ?>" method="post" name="payuForm" id="payuForm" style="display: block">
                    <input type="hidden" name="key" value="<?php echo MERCHANT_KEY ?>" />
                    <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
                    <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                    <input name="amount" type="number" value="<?php echo $totalCost; ?>" />
                    <input type="text" name="firstname" id="firstname" value="<?php echo $firstName; ?>" />
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" />
                    <input type="text" name="phone" value="<?php echo $mobile; ?>" />
                    <textarea name="productinfo"><?php echo "productinfo"; ?></textarea>
                    <input type="text" name="surl" value="<?php echo SUCCESS_URL; ?>" />
                    <input type="text" name="furl" value="<?php echo  FAIL_URL?>"/>
                    <input type="text" name="service_provider" value="payu_paisa"/>
                    <input type="text" name="lastname" id="lastname" value="<?php echo $lastName ?>" />
                </form>
                <script type="text/javascript">
                    var payuForm = document.forms.payuForm;
                    payuForm.submit();
                </script>
                



              <button type="button" title="Proceed to Checkout" class="btn btn-13 pull-right prev-btn" onclick="window.location='<?php echo base_url('checkout');?> ';"><span><span>Proceed to Checkout</span></span></button>



            </div>



          </div>



        </form>



        <?php else: ?>



        <h2 align="center">Please add your slots to cart, your cart is currently empty</h2>



        <?php endif; ?>



      </div>



    </div>



  </div>



</div>

</div>

<?php

$this->load->view('include/footer');







?>



