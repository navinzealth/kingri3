
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>My Orders</title>
   <!-- Favicon Icon -->
  
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
  
</head>
	<body>
		
		<?php 
			require("include/header.php");
		?>
		
		
		
		<section class="seller__registration__page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="seller__registration__heading heading"><div class="heading_s1 text-center">
                        <h2><span class="heading-design">My Orders</span></h2>
                    </div></div>
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
								<li><a href="user-profile.php"><i class="fa fa-info"></i>Personal Information</a></li>
								<li><a href="myaddress.php"><i class="fa fa-home"></i>My Addresses</a></li>
								<li class="profile-active"><a href="myorder.php"><i class="fa fa-list"></i>My Orders</a></li>
								<li><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
								<li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
								 <li class=""><a href="ticket-list.php"><i class="fa fa-ticket"></i>Support</a></li>
								
							</ul>
						</div>
						
					</article>
					
					<article class="col-xs-12 col-sm-12 col-md-9 col-lg-9 panel-table">
						<!--<div class="my-order1"><span><?php echo $myOrderCount;?> order </span> placed in 
							
							<select>
								<option value="">past 30 days</option>
								<option value="">past 60 days</option>
								<option value="">past 3 months</option>
								<option value="">2020</option>
								<option value="">2019</option>
								<option value="">2018</option>
							</select>
							
						</div>-->
						<!------------------------------------------------------------------------------------------------------------------------------------>
						
							
							
								<div class="order-row">
									
									<div class="order-row-order-heading">
										<div class="order-row-order-heading-left">
											<div class="order-heading-order-place-date">
												<p>ORDER PLACED</p>
												<span>2021-06-29 17:59:49</span>
											</div>
											<div class="order-heading-order-delivery-amount">
												<p>TOTAL</p>
												<span>₹ 3297</span>
											</div>
											<div class="order-heading-order-customername">
												<p>SHIP TO</p>
												<span>Gulshan Kumar<i class="fa fa-angle-down"></i>
													<div class="order-heading-order-customername-detail">
														<p>D065 Dsdd NOIda NOIDA Uttar Pradesh 201301</p>
														<p>Phone: 9971277528</p>
													</div>	
												</span>	
											</div>
										</div>
										<div class="order-row-order-heading-right">
											<div class="order-heading-order-num">
												<p>ORDER # CMK000160</p>
												<span><a href="order-detail.php?order_id=160">Order Details </a></span>
												<!--<span> Invoice <i class="fa fa-angle-down"></i></span>-->
											</div>
										</div>
									</div>
									
									<div class="order-row-box">
										<div class="row">
											
											<div class="col-md-8">
												
												<!--<div class="order-row-product-delivery-date">
													<p>Delivered 16-Aug-2020</p>
													<span>Package was handed directly to the customer</span>
												</div>-->
																									<div class="order-row-product-box">
														<div class="order-row-product-box-img">
															<a href=""><img src="https://cosmetikaa.com/manager/images/product-images/front/sp-luxe-oil-keratin-restore-mask-150ml_1.jpg"></a>
														</div>
														<div class="order-row-product-box-detail">
															<div class="order-row-product-box-detail-product-name"><a href="">Wella Professionals SP Luxe Oil Keratin Restore Mask (150ml)</a></div>
															<div class="order-row-product-box-detail-seller-name">sold by: Kingri</div>
															<!--<div class="order-row-product-box-detail-return-date">Return eligible through 28-Aug-2020</div>-->
															<div class="order-row-product-box-detail-product-price">₹1275.00</div>
															<div class=""><a href="product-detail.php?slug=wella-professionals-sp-luxe-oil-keratin-restore-mask-150ml" class="order-row-product-box-detail-buy-again"> Buy it Again</a></div>
														</div>
													</div>
																									<div class="order-row-product-box">
														<div class="order-row-product-box-img">
															<a href=""><img src="https://cosmetikaa.com/manager/images/product-images/front/wella-professionals-fusion-intense-repair-shampoo-250-ml-and-conditioner-200ml-duo-for-damaged-hair-2-pieces_1.jpg"></a>
														</div>
														<div class="order-row-product-box-detail">
															<div class="order-row-product-box-detail-product-name"><a href=""> Wella Professionals Fusion Intense Repair Shampoo 250 Ml and Conditioner 200ml Duo For Damaged Hair, 2 Pieces</a></div>
															<div class="order-row-product-box-detail-seller-name">sold by:  Kingri</div>
															<!--<div class="order-row-product-box-detail-return-date">Return eligible through 28-Aug-2020</div>-->
															<div class="order-row-product-box-detail-product-price">₹1692.00</div>
															<div class=""><a href="product-detail.php?slug=wella-professionals-fusion-intense-repair-shampoo-250-ml-and-conditioner-200ml-duo-for-damaged-hair-2-pieces" class="order-row-product-box-detail-buy-again"> Buy it Again</a></div>
														</div>
													</div>
																									<div class="order-row-product-box">
														<div class="order-row-product-box-img">
															<a href=""><img src="https://cosmetikaa.com/manager/images/product-images/front/loreal-professionnel-inoa-ammonia-free-permanent-hair-colour-no-5-56-n-light-mahogany-red-brown_1.jpg"></a>
														</div>
														<div class="order-row-product-box-detail">
															<div class="order-row-product-box-detail-product-name"><a href="">Loreal Professionnel Inoa Ammonia-Free Permanent Hair Colour No 5.56 N , Light Mahogany Red Brown</a></div>
															<div class="order-row-product-box-detail-seller-name">sold by:  Kingri</div>
															<!--<div class="order-row-product-box-detail-return-date">Return eligible through 28-Aug-2020</div>-->
															<div class="order-row-product-box-detail-product-price">₹410.00</div>
															<div class=""><a href="product-detail.php?slug=loreal-professionnel-inoa-ammonia-free-permanent-hair-colour-no-5-56-n-light-mahogany-red-brown" class="order-row-product-box-detail-buy-again"> Buy it Again</a></div>
														</div>
													</div>
													
												
												
											</div>
											
											<div class="col-md-4">
												
																					 <a class="order-row-box-btns" target="_blank" href="https://www.pickrr.com/tracking/#/?tracking_id=13329211827556">Track: 13329211827556</a>
																					<!--<a href="" class="order-row-box-btns">Return or replace items</a>
												<a href="" class="order-row-box-btns">Write a product review</a>
												<!--<a href="" class="order-row-box-btns">Leave seller feedback</a>-->
												
												
											</div>
										</div>
									</div>
									
								</div>
							
							<div class="order-history-row">
								
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