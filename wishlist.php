
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>My Wishlist</title>
  
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
		
		<?php 
			require("include/header.php");
			
		
		?>
		
		
		
		<section class="seller__registration__page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="seller__registration__heading heading"><div class="heading_s1 text-center">
                        <h2><span class="heading-design">My Wishlist</span></h2>
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
								<li><a href="myorder.php"><i class="fa fa-list"></i>My Orders</a></li>
								<li class="profile-active"><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
								<li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
								 <li class=""><a href="ticket-list.php"><i class="fa fa-ticket"></i>Support</a></li>
								
							</ul>
						</div>
						
					</article>
					
					<article class="col-xs-12 col-sm-12 col-md-9 col-lg-9 panel-table">
						
						
						
							<!--<div class="" style="max-width:300px;margin:0 auto;margin-top:30px;">
							   <a href="index.php"><img src="images/wishlist.jpg" style="width:100%;"></a>
							</div>-->
							
							
							
							
							
							
							<main id="main" class="site-main">
                                <div class="type-page hentry">
									
                                    <!--entry-header -->
                                    <div class="entry-content">
                                        <form class="woocommerce" method="post" action="#">
                                            <table class="shop_table cart wishlist_table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-remove"></th>
                                                        <th class="product-thumbnail">Product Image</th>
                                                        <th class="product-name">
                                                            <span class="nobr">Product Name</span>
														</th>
                                                        <th class="product-price">
                                                            <span class="nobr">
                                                                Unit Price
															</span>
														</th>
														<!-- <th class="product-stock-status">
                                                            <span class="nobr">
															Stock Status
                                                            </span>
														</th>-->
                                                        <th class="product-add-to-cart">Add to Cart</th>
													</tr>
												</thead>
                                                <tbody>
													
														<tr>
															<td class="product-remove wishlist-remove">
																<a title="Remove this product" data-pro_id="" data-user_id="" class="remove remove_from_wishlist fa fa-close removefrmwishList" href="javascript:void(0);"></a>
															</td>
															<td class="product-thumbnail wishlist-thumbnail">
																<a href="">
																	<img width="100" height="100" alt="" class="" src="images/tops.png">
																</a>
															</td>
															<td class="product-name wishlist-name">
																<a href="">Product Name</a>
															</td>
															<td class="product-price wishlist-price">
																<ins>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol"><i class="fa fa-inr"> 1000 </i></span>
																	</ins>
																</td>
																<!--<td>
																	<span class="stock">
                                                                    <span class="stock"><?php echo $productResult['quantity']; ?></span>
																	
																</td>-->
																
																<td class="product-add-to-cart wishlist-addcart">
																	<a class="btn btn-black" href=""> Add to Cart <span></span></a>
																</td>
															</tr>
														
													</tbody>
													
												</table>
												<!-- .wishlist_table -->
											</form>
											<!-- .woocommerce -->
										</div>
										<!-- .entry-content -->
									</div>
									<!-- .hentry -->
								</main>
								<!-- #main -->
						
							
							
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