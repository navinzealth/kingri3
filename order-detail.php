
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Order Detail</title>
		
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
<link rel="stylesheet" href="css/user-profile.css">
		
	</head>
	<body>
		
		<?php 
			require("include/header.php");
		?>
		
		
		
		<section class="seller__registration__page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="seller__registration__heading heading">
						  <div class="heading_s1 text-center">
                           <h2><span class="heading-design">My Account</span></h2>
                          </div>
					     </div>
					</div>
				</div>
				
				
				<div class="row">
					<article class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
						<div class="widget-title customer-heading">
							<i class="fa fa-tag"></i> My menu <i class="fa fa-list hidden-md hidden-lg open-dashboard-menu" ></i>
						</div>
						<div class="widget-block">
							<ul class="list-unstyled catalog">
								<li><a href="profile-dashboard.php" class="customer-active"><i class="fa fa-dashboard"></i>Dashboard</a></li>
								<li><a href="personalisinfo.php"><i class="fa fa-info"></i>Personal Information</a></li>
								<li><a href="myaddress.php"><i class="fa fa-home"></i>My Addresses</a></li>
								<li class="profile-active"><a href="myorder.php"><i class="fa fa-list"></i>My Orders</a></li>
								<li><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
								<li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
							 <li class=""><a href="ticket-list.php"><i class="fa fa-ticket"></i>Support</a></li>
								
							</ul>
						</div>
						
					</article>
					
					<article class="col-xs-12 col-sm-12 col-md-9 col-lg-9 panel-table">
						
						<div class="row">
							<div class="col-md-12">
								<h2 style="margin-top: 0;">Order Details</h2>
								<p><span>Order On 29 Jun 2021 17 59 PM</span> | <span>Order No. CMK000160</span></p>
							</div> 
							
						</div>
						
						
						<div class="row order-detail-border">
							
							<div class="col-md-4 details-box-summery">
								<h3>Shipping Address</h3>
								<p>Gulshan Kumar</p>
								<p>9971277528</p>
								<p>D065, Dsdd, NOIDA, Uttar Pradesh, NOIda</p>
								<p>Pin Code- 201301</p>
								
								
							</div>  
							<div class="col-md-4 details-box-summery">
								<h3>Payment Method</h3>
								<p><span></span></p><p>COD</p><p></p>
								<h3>Order Status</h3>
								<p><span>Placed</span></p>
								
							</div> 
							<div class="col-md-4 details-box-summery col-xs-12">
								<h3>Order Summary</h3>
								<div class="total-item-box">
									<div class="item-heading">
										<p><strong>Item(s) Subtotal</strong></p>
										<p><strong>GST</strong></p>
										<p><strong>Delivery Charges</strong></p>
										<p><strong>Discount</strong></p>
										<p><strong>Total</strong></p>
										
									</div>
									<div class="item-heading-price">
										<p><i class="fa fa-inr"></i> 3039</p>
										<p><i class="fa fa-inr"></i> 338</p>
										<p><i class="fa fa-inr"></i> 0</p>
										
																				<p>- <i class="fa fa-inr"></i> 80</p>
																				<p><i class="fa fa-inr"></i> 3297</p>
										
									</div>
									
								</div>
								
								
							</div> 
						</div>
						
						
						
						
						
						
						<div class="row order-detail-border">
							<div class="col-md-8 col-xs-12">	
								<div class="order-product">
									
									 									<div class="order-row-product-box">								
										<div class="order-row-product-box-img">
											<img src="https://cosmetikaa.com/manager/images/product-images/front/sp-luxe-oil-keratin-restore-mask-150ml_1.jpg" alt="Wella Professionals SP Luxe Oil Keratin Restore Mask (150ml)">							
										</div>						
										<div class="order-row-product-box-detail">	
											<div class="order-row-product-box-detail-product-name"><a href="">Wella Professionals SP Luxe Oil Keratin Restore Mask (150ml)</a></div>
											
											<div class="order-row-product-box-detail-product-price">1X<i class="fa fa-inr"></i> 1275.00</div>												
											<div class=""><a href="product-detail.php?slug=wella-professionals-sp-luxe-oil-keratin-restore-mask-150ml" class=" btn-sucess-cart"> Buy it Again</a></div>											
										</div>										
									</div>	
									
													<div class="order-row-product-box">								
										<div class="order-row-product-box-img">
											<img src="https://cosmetikaa.com/manager/images/product-images/front/wella-professionals-fusion-intense-repair-shampoo-250-ml-and-conditioner-200ml-duo-for-damaged-hair-2-pieces_1.jpg" alt=" Wella Professionals Fusion Intense Repair Shampoo 250 Ml and Conditioner 200ml Duo For Damaged Hair, 2 Pieces">							
										</div>						
										<div class="order-row-product-box-detail">	
											<div class="order-row-product-box-detail-product-name"><a href=""> Wella Professionals Fusion Intense Repair Shampoo 250 Ml and Conditioner 200ml Duo For Damaged Hair, 2 Pieces</a></div>
											
											<div class="order-row-product-box-detail-product-price">1X<i class="fa fa-inr"></i> 1692.00</div>												
											<div class=""><a href="product-detail.php?slug=wella-professionals-fusion-intense-repair-shampoo-250-ml-and-conditioner-200ml-duo-for-damaged-hair-2-pieces" class=" btn-sucess-cart"> Buy it Again</a></div>											
										</div>										
									</div>	
									
													<div class="order-row-product-box">								
										<div class="order-row-product-box-img">
											<img src="https://cosmetikaa.com/manager/images/product-images/front/loreal-professionnel-inoa-ammonia-free-permanent-hair-colour-no-5-56-n-light-mahogany-red-brown_1.jpg" alt="Loreal Professionnel Inoa Ammonia-Free Permanent Hair Colour No 5.56 N , Light Mahogany Red Brown">							
										</div>						
										<div class="order-row-product-box-detail">	
											<div class="order-row-product-box-detail-product-name"><a href="">Loreal Professionnel Inoa Ammonia-Free Permanent Hair Colour No 5.56 N , Light Mahogany Red Brown</a></div>
											
											<div class="order-row-product-box-detail-product-price">1X<i class="fa fa-inr"></i> 410.00</div>												
											<div class=""><a href="product-detail.php?slug=loreal-professionnel-inoa-ammonia-free-permanent-hair-colour-no-5-56-n-light-mahogany-red-brown" class=" btn-sucess-cart"> Buy it Again</a></div>											
										</div>										
									</div>	
									
						
									
									
								</div>
								
							</div>
							
							<div class="col-md-4">
								<div class="btn-track-box">
																		  <a class="btn btn-grey btn-block" target="_blank" href="https://www.pickrr.com/tracking/#/?tracking_id=13329211827556">Track: 13329211827556</a>
																							
									
									<a class="btn btn-grey btn-block">Write a Product review</a>
									<!--<a href="" target="_blank" class="order-row-box-btns"><i class="fa fa-download" aria-hidden="true"></i> Download Invoice</a>-->
									
									
									
								</div>						
							</div>
							
							
						</div>
						
						
						
						
					</article>
					
				</div>
				
				
				
				
				
			</div>
		</section>
		
		
		
		
		<?php 
			require("include/footer.php");
		?>
		
		
	</body>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/custom.js"></script>
	
</html>