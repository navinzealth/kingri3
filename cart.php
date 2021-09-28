
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Cart</title>
 
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

<link rel="stylesheet" href="css/cart.css">
  
</head>
<body>
<?php include 'include/header.php'; ?>

<section class="listing-bredcrumb">
    <div class="container">
	    <div class="row">
					<div class="col-md-12">
						<div class="seller__registration__heading heading">
						<div class="heading_s1 text-center">
                        <h2><span class="heading-design">Cart</span></h2>
                    </div></div>
					</div>
				</div>
	
        
    </div>
</section>


<!---------------------------------------------------------------------------------------------------------------------->


<div class="container">
 <div class="row">
<div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="type-page hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="cart-wrapper">
											
                                                <form method="post" action="#" class="woocommerce-cart-form">
                                                    <table class="shop_table shop_table_responsive cart">
                                                        <thead>
                                                            <tr>
                                                                <th class="product-remove">&nbsp;</th>
                                                                <th class="product-thumbnail">Images</th>
                                                                <th class="product-name">Product</th>
                                                                <th class="product-price">Price</th>
                                                                <th class="product-quantity">Quantity</th>
                                                                <th class="product-subtotal">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
														 
                                                        <tr>
                                                            <td class="product-remove"><a class="remove fa fa-close" href="javascript:void(0);" onclick="removeProduct(527)"></a></td>
                                                            <td class="product-thumbnail">
                                                                    <a href="product-detail.php?slug=lotus-professional-phyto-rx-skin-renewal-anti-ageing-night-cream-50g"><img width="180" height="180" alt="" class="wp-post-image" src="images/product1.jpg"></a>
                                                            </td>
                                                             <td data-title="Product :-" class="product-name">
                                                                 <div class="media cart-item-product-detail">
                                                                    <div class="media-body align-self-center">
                                                                       <a href="product-detail.php?slug=lotus-professional-phyto-rx-skin-renewal-anti-ageing-night-cream-50g">Lotus Professional Phyto Rx Skin Renewal Anti Ageing Night Cream, 50g</a>
																		<p></p>
                                                                     </div>
                                                                    </div>
                                                                </td>
                                                                <td data-title="Price :-" class="product-price">
                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><i class="fa fa-rupee"></i> </span>742</span>
                                                                </td>
                                                               <td class="product-quantity" data-title="Quantity :-">
                                                                    <div class="quantity">
                                                                        <label for="quantity-input-2">Quantity</label>
																		<button onclick="decreaseQty(this);" data-pro_id="527"> - </button>
                                                                        <input type="text" name="qty" value="3" min="1" title="Qty" class="input-text qty text" size="4">
																		
																		<button onclick="increaseQty(this);" data-pro_id="527" class="cartupdatebtn" type="button"> + </button>
																		
                                                                    </div>
                                                                </td>
                                                                <td data-title="Total :-" class="product-subtotal">
                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><i class="fa fa-rupee"></i> </span>2226</span>
                                                                </td>
																<!--<td data-title="Add to Wishlist" class="product-subtotal product-quantity">
																   <div class="quantity">
                                                                   <button onclick="" class="cartupdatebtn" type="button">Add to Wishlist</button>
																   </div>
                                                                </td>-->
                                                            </tr>
															
											
															                                    
                                                           </tbody>
                                                    </table>
                                                    <!-- .shop_table shop_table_responsive -->
                                                </form>
												
                                                <!-- .woocommerce-cart-form -->
                                                <div class="cart-collaterals">
                                                    <div class="cart_totals">
                                                        <h2>Cart Total</h2>
                                                        <table class="shop_table shop_table_responsive">
                                                            <tbody>
                                                                <tr class="cart-subtotal">
                                                                  <th>Subtotal :-</th>
                                                                   <td data-title="Subtotal">
                                                                     <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><i class="fa fa-inr"></i></span>4620</span>
                                                                    </td>
                                                                </tr>
																<tr class="cart-subtotal">
                                                                  <th>Shipping :-</th>
                                                                    <td data-title="Shipping"><span class="woocommerce-Price-amount amount"><i class="fa fa-rupee"></i> 0.00</span></td>
                                                                </tr>
																<tr class="cart-subtotal green">
                                                                  <th>Discount :-</th>
                                                                    <td data-title="Discount">
                                                                      <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">- <i class="fa fa-inr"></i> </span> 0</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="order-total">
                                                                  <th>Total :-</th>
                                                                    <td data-title="Total">
                                                                      <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><i class="fa fa-inr"></i> </span>4620</span>
                                                                       </strong>
                                                                    </td>
                                                                </tr>
																<tr>
																   <td><div class="cart-checkout-coupon-code"><span style="display: block;">Apply Coupon Code..</span>
																   <span class="fa fa-close" style="display: none;"></span>
																     <div class="cart-checkout-coupon-code-box" style="display: none;">
																	   <input type="text" name="coupon_code" class="coupon_code" placeholder="coupon code here" value="">
																	   <button class="applyCoupon">Apply</button>
																	 </div>
																   </div></td>
																</tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- .shop_table shop_table_responsive -->
                                                        <div class="wc-proceed-to-checkout">
														
                                                            <a class="checkout-button button alt wc-forward" href="checkout.php">Proceed to checkout</a>
															
                                                            <a class="back-to-shopping" href="index.php">Back to Shopping</a>
                                                        </div>
                                                        <!-- .wc-proceed-to-checkout -->
                                                    </div>
                                                    <!-- .cart_totals -->
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

 <!--<div class="container">
	  <div class="row">
		<div class="col-md-12">
		  <div class="" style="max-width:300px;margin:0 auto;margin-top:30px;">
			<a href="index.php"><img src="images/wishlist.jpg" style="width:100%;"></a>
		  </div>	
		</div>  
	  </div>	
	</div>-->
 

</div>
</div>

<!-------------------------------------------------------------------------------------------------------------------->
<?php include 'include/footer.php'; ?>

</body>
<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	 <script src="js/custom.js"></script>
		
</html>