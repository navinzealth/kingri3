
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Checkout</title>
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/star-rating.css" type="text/css"/>


	<!---common-css--->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" >
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,700;1,100;1,400&display=swap" rel="stylesheet">
<!---common-css--->

					<link rel="stylesheet" href="css/cart.css?v=1" /><!--for this page only-->
  
</head>
	<body>
		<?php include 'include/header.php'; ?>
		
		
		
		
		
		<div id="page" class="hfeed site" style="">
			
			
            <div id="content" class="site-content">
            	<div class="row">
					<div class="col-md-12">
						<div class="seller__registration__heading heading">
						<div class="heading_s1 text-center">
                        <h2><span class="heading-design">Checkout</span></h2>
                    </div></div>
					</div>
				</div>
                <div class="col-full">
                    <div class="row">
                        
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area" style="max-width: 100%;flex: 0 0 100%;">
                            <main id="main" class="site-main">
                                <div class="type-page hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="cart-wrapper row">
                                                <div class="col-md-6"> 

 <!----->
<div class="guest-checkout-box">
												
																								<div class="">
												<form method="post" name="loginfrm" class="loginfrm">
													<input type="hidden" name="action" value="UserLogin">
													<div class="row">
													<div class="col-md-12">
														<div class="new-label">
														   <div class="lable-name">Contact Detail</div>
														   
															<input type="text" placeholder="Mobile Number" name="lg_user_name" onfocus="this.removeAttribute('readonly');" onblur="checkMobile();" id="lg_user_name" autocomplete="off" value="" title="Mobile No." class="form-control checkout_form margin-bottom" maxlength="10">
															<span id="fn"></span>
															<div class="guest-checkout-box-verify-otp">
														     <input type="text" onkeyup="verifyOtp_login(this);" name="inp_otp" readonly="" onfocus="this.removeAttribute('readonly');" id="inp_otp" class="form-control checkout_form" value="" placeholder="OTP" style="display: block;">
																	<span id="metch_otp" style="display:none;">OTP Matched</span>
																	<span id="otp_error" style="display:none;">Invalid OTP Entered</span>
																	<span id="sent_succ" style="display: none;">OTP sent successfully </span>
																	
														</div>
															<!--
															--><button class="new-label-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
															<small class="required--field" style="display: none; color: red;" id="fn">* This field is required</small>
															
														</div>
													</div>
													<div class="col-md-12">
														<div class="guest-checkout-box-verify-otp">
														     <input type="text" onkeyup="verifyOtp_login(this);" name="inp_otp" readonly="" onfocus="this.removeAttribute('readonly');" id="inp_otp" class="form-control checkout_form" value="" placeholder="OTP" style="display:none;">
																	<span id="metch_otp" style="display:none;">OTP Matched</span>
																	<span id="otp_error" style="display:none;">Invalid OTP Entered</span>
																	<span id="sent_succ" style="display:none;">OTP sent successfully </span>
																	
														</div>
													</div>
													</div>
													</form>
													</div>
																									
												
																											<div class="cart2bdchk"><a href="javascript:void(0);">ADD NEW ADDRESS</a></div>
													
												 </div>

 <!----->


												  <div class="guest-checkout-box">
												
									
												
												
												
														
														
														<div class="cart2b">
															<div class="cart2ba">Select Delivery Address</div>
															
															
																<label class="con5"><input type="radio" name="preaddress" class="preaddress" value="" /><span class="checkmark5"></span>
																	<div class="cart2bc">
																		<div class="cart2bca">Name</div><div class="cart2bcb">home</div>
																		<div class="cart2bcd">house no, address nearby landmark</div>
																		<div class="cart2bcd">delhi, state 201301</div>
																		<a href="" class="cart2bce">EDIT</a>
																	</div>
																</label>
														
															
															<div class="cart2bdchk"><a href="javascript:void(0);">ADD NEW ADDRESS</a></div>
															
														</div>
														
														
													
														<div class="cart2a" style="display:none">
															<form action="action.php" method="post" name="addressfrm" id="addressfrm" >
																<input type="hidden" name="action" value="Addaddress" />
																<input type="hidden" name="url" value="checkout.php" />
																<div class="row">
																	
																	<div class="col-md-12">
																		<div class="cart2aa">CONTACT DETAILS</div>
																		<div class="cart2ab">
																			<div class="cart2ab2">
																				<input type="text" placeholder="Name*" name="name">
																			</div>
																			<div class="cart2ab2">
																				<input type="tel" placeholder="Mobile No.*" name="mobile">
																			</div>
																			<div class="cart2ab2">
																				<input type="tel" placeholder="Alternate Number" name="alternate_mobile">
																			</div>
																			<div class="cart2ab2">
																				<input type="tel" placeholder="Email Address *" class="email" name="email">
																			</div>
																		</div>
																	</div>
																	
																	<div class="col-md-12">
																		<div class="cart2aa">ADDRESS</div>
																		<div class="cart2ab">
																			<div class="cart2ab2">
																				<input type="text" placeholder="Pincode*" name="pincode">
																			</div>
																			<div class="cart2ab2">
																				<input type="text" placeholder="Landmark*" name="landmark">
																			</div>
																			<div class="cart2ab2">
																				<input type="text" placeholder="Address (House No)*" name="house_no">
																			</div>
																			<div class="cart2ab2">
																				<input type="text" placeholder="Road Name (Road No)*" name="road_name">
																			</div>
																		</div>
																		
																		
																		<div class="row">
																			<div class="col-md-6">
																				<div class="cart2ab">
																					<select id="state"name="state" class="form-control">
																						<option selected="" disabled="" >Select State</option>
																						
																					</select>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="cart2ab">
																					<select id="city" name="city_name" class="form-control">
																						<option value='' >Select City</option>
																					</select>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	
																	
																	<div class="col-md-12">
																		<div class="cart2aa">SAVE ADDRESS AS</div>
																		<div class="cart2ac">
																			<label class="container-check">Home
																				<input type="radio" checked="checked" value="home" class="address_type" name="address_type">
																				
																			</label>&nbsp;&nbsp;
																			
																			
																			<label class="container-check">Office
																				<input type="radio"  value="office" class="address_type" name="address_type">
																				
																			</label>
																			
																		</div>
																		
																	</div>
																	
																	<div class="col-md-12">
																		<input type="submit" value="ADD ADDRESS" class="cart2ae">
																	</div>
																	
																</div>
															</form>
														</div>
													
													
                                                    
													
													
													
												 </div>
												</div>
												
												
												
												<div class="col-md-1"></div>
                                                <!-- .woocommerce-cart-form -->
                                                <div class="cart-collaterals col-md-4">
													<form  id="shipaddress1" name="shipaddress" method="post" action="payment.php">
														<div class="cart_totals">
															<input type="hidden" name="ship_id"  class="ship_id" value=""  />
															<h2 style="color: #757575;">Cart Total</h2>
															
															<table class="shop_table shop_table_responsive">
																<tbody>
																	<tr class="cart-subtotal">
																		<th>Subtotal</th>
																		<td data-title="Subtotal">
																			<span class="woocommerce-Price-amount amount">
																			<span class="woocommerce-Price-currencySymbol"><i class="fa fa-rupee"></i> </span>945</span>
																		</td>
																	</tr>
																	<tr class="cart-subtotal">
																		<th>Shipping</th>
																		<td data-title="Shipping">
																			<span class="woocommerce-Price-amount amount">
																			<span class="woocommerce-Price-currencySymbol"><i class="fa fa-rupee"></i> </span>79</span>
																		</td>
																	</tr> 
																	<tr class="cart-subtotal">
																		<th>Discount</th>
																		<td data-title="Shipping">
																			<span class="woocommerce-Price-amount amount">
																			<span class="woocommerce-Price-currencySymbol"> - <i class="fa fa-rupee"></i> </span>0</span>
																		</td>
																	</tr>
																	<tr class="order-total">
																		<th>Total</th>
																		<td data-title="Total">
																			<strong>
																				<span class="woocommerce-Price-amount amount">
																				<span class="woocommerce-Price-currencySymbol"><i class="fa fa-rupee"></i> </span>1024</span>
																			</strong>
																		</td>
																	</tr>
																</tbody>
															</table>
															<div class="cart_value_payment">
																<div class="payment-online" style="position:relative;margin-bottom: 10px;">
																	<label class="online-payment">
																		<input type="radio" checked="checked" class="payment_method" value="ONLINE"  name="payment_method">&nbsp;
																		<img src="images/payment.png" style="display: inline;width: 90%;">
																	</label>
																</div>
																<div class="cash_dilevery" style="position:relative;">
																	<label class="online-payment">
																		<input type="radio" class="payment_method" value="COD"   name="payment_method" >&nbsp;
																		Cash on delivery(COD)<br/>
																		
																		<span style="font-size:10px;color:#a3247b;"> COD will be applicable for orders amount above <i class="fa fa-rupee"></i> 999.<span>
																	</label>
																</div>
															</div>
															<!-- .shop_table shop_table_responsive -->
															<div class="wc-proceed-to-checkout">
																<!--  <form class="woocommerce-shipping-calculator" method="post" action="#">
																	<p>
                                                                    <a class="shipping-calculator-button" data-toggle="collapse" href="#shipping-form" aria-expanded="false" aria-controls="shipping-form">Calculate shipping</a>
																	</p>
																	
																</form>-->
																<!-- .wc-proceed-to-checkout --> 
																                       
																	<!--<a class="checkout-button button alt wc-forward" href="checkout.html">  Proceed to checkout</a> -->
																	
																	
																	<div class="cart2bdchk"><a href="javascript:void(0);">Proceed to checkout</a></div>
																	
																
																
																<a class="back-to-shopping" href="index.php">Back to Shopping</a>
															</div>
															<!-- .wc-proceed-to-checkout -->
														</div>
														<!-- .cart_totals -->
													</form>
												</div>
                                                <!-- .cart-collaterals -->
											</div>
                                            <!-- .cart-wrapper -->
										</div>
                                        <!-- .woocommerce -->
									</div>
                                    <!-- .entry-content -->
								</div>
                                <!-- .hentry -->
							</main>
                            <!-- #main -->
						</div>
                        <!-- #primary -->
					</div>
                    <!-- .row -->
				</div>
                <!-- .col-full -->
			</div>
            <!-- #content -->
            
			
		</div>
		
		
		
		
		<?php include 'include/footer.php'; ?>
		
	</body>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	 <script src="js/custom.js"></script>
<script>
$('.cart2bdchk a').on('click', function(e){
	e.preventDefault();
	$('.cart2a').css({'display':'block'});
	 // Add smooth scrolling to all links
      /*$('.cart2a').animate({
          scrollTop: 100
      }, 1200, function(){
		 
      });*/
	
    $('html,body').animate({
        scrollTop: $(".cart2b").offset().top},
        'slow');
    //unset click event:
    $(this).off();
});



</script>
</html>