
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Dashboard</title>
   
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
						<div class="seller__registration__heading heading">
						<div class="heading_s1 text-center">
                        <h2><span class="heading-design">My Dashboard</span></h2>
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
								<li class="profile-active"><a href="profile-dashboard.php" class="customer-active"><i class="fa fa-dashboard"></i>Dashboard</a></li>
								<li><a href="user-profile.php"><i class="fa fa-info"></i>Personal Information</a></li>
								<li><a href="myaddress.php"><i class="fa fa-home"></i>My Addresses</a></li>
								<li><a href="myorder.php"><i class="fa fa-list"></i>My Orders</a></li>
								<li><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
								<li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
								 <li class=""><a href="ticket-list.php"><i class="fa fa-ticket"></i>Support</a></li>
							</ul>
						</div>
						
					</article>
					<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                        <div class="top-icon box-border">
							
                            <div class="col-md-12">
                                <div class="row">
									
                                    <div class="col-md-4 col-sm-6 col-xs-12 n-margin top-icon ">
										<i class="fa fa-list" aria-hidden="true"></i> <span class="ico-text"><a href="myorder.php">Orders</a></span>
										<span class="ico-num">0</span>
									</div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 n-margin top-icon"><i class="fa fa-shopping-cart"></i> <span class="ico-text"><a href="cart.php">Product in Cart</a></span>   
										<span class="ico-num">0</span>									
									</div> 
                                    <div class="col-md-4 col-sm-6 col-xs-12 n-margin2 top-icon "><i class="fa fa-heart" aria-hidden="true"></i> <span class="ico-text"><a href="wishlist.php">Wishlist Items</a></span>
                                        <span class="ico-num">12</span>
									</div>
								</div>
							</div>
							
							
						</div>
					
						
                       <div class='row'>

						<div class="col-md-6">
                            
								
                                <div class="panel panel-default pull-left">
                                    <div class="panel-heading">My Cart Items</div>
									
                                    <div class="panel-body">
                                        <div class="table-responsive" style="height:215px;">
										<table class="table table-striped table-hover dashboard-table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>image</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
														
														<!--                                                        <th>Type</th>-->
													</tr>
													
												</thead>
												<tbody>
													
															<tr>
																<td>Product Name</td>
																<td><img  class="fancyboximg" src="images/kids.png" alt="" width="50" height="50" /></td>
																<td>Quantity</td>
																<td>Product Price</td>
																
															</tr>
															<tr>
																<td>Product Name</td>
																<td><img  class="fancyboximg" src="images/kids.png" alt="" width="50" height="50" /></td>
																<td>Quantity</td>
																<td>Product Price</td>
																
															</tr>
															<tr>
																<td>Product Name</td>
																<td><img  class="fancyboximg" src="images/kids.png" alt="" width="50" height="50" /></td>
																<td>Quantity</td>
																<td>Product Price</td>
																
															</tr>
															<tr>
																<td>Product Name</td>
																<td><img  class="fancyboximg" src="images/kids.png" alt="" width="50" height="50" /></td>
																<td>Quantity</td>
																<td>Product Price</td>
																
															</tr>
													
														
														
													</tbody>
													
											</table>                                    
										</div>
									</div>
								
							</div>
							
						</div><!--/.col-->
						
                        <div class="col-md-6">
                            
								
                                <div class="panel panel-default pull-right">
                                    <div class="panel-heading my-add">My Addresses</div>
									
                                    <div class="panel-body">
                                        <div class="table-responsive" style=" height:215px;">
                                            <table class="table table-striped table-hover dashboard-table">
                                                <thead>
                                                    <tr>
                                                        <th>Address</th>
                                                        <th>State</th>
                                                        <th>City</th>
                                                        <th>Pincode</th>
														
														<!--                                                        <th>Type</th>-->
													</tr>
													
												</thead>
												<tbody>
													
														
													
															<tr>
																
																
																<td>House No .road Name Land mark</td>
																<td>State</td>
																<td>City</td>
																<td>Pincode</td>
																
																
																
															</tr>
														
														
														
													</tbody>
													
											</table>
											
										</div>
									</div>
								
								
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