
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>My Address</title>
  
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
                        <h2><span class="heading-design">My Address</span></h2>
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
								<li class="profile-active"><a href="myaddress.php"><i class="fa fa-home"></i>My Addresses</a></li>
								<li><a href="myorder.php"><i class="fa fa-list"></i>My Orders</a></li>
								<li><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
								<li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
								 <li class=""><a href="ticket-list.php"><i class="fa fa-ticket"></i>Support</a></li>
							</ul>
						</ul>
					</div>
					
				</article>
				
                <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9 panel-table ">
					<span class="plus-add-btn cart2bd"><a class="btn btn-primary btn-xs mrgn-btm-25 " href="javascript:void(0);"><i class="fa fa-plus"></i> Add New Address</a></span>
					<div class="box-border wow fadeInLeft animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
						
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Address</th>
										<th>State</th>
										<th>City</th>
										<th>Pincode</th>
										<th>Action</th>
									</tr>
								</thead>
								
								<tbody>
								
											<tr>
												<td>House no, road no, landmark</td>
												<td>Uttar Pradesh</td>
												<td>Noida</td>
												<td>201301</td>
												
												<td><a class="btn btn-success btn-sm btn-black btn-black1" href="update-address.php?address_id=24"><li class="fa fa-pencil"></li></a>
													<a href="myaddress.php?action=deleteAddress&address_id=24" class="btn btn-danger btn-sm" value="24" onclick="confirm('Are you sure you want to delete this?'); "><i class="fa fa-trash-o"></i></a>
												</td>
											</tr>
								
									</tbody>
									
								
							</table>
						</div>
						
					</div>
												
												
																
						
					<!--<a class="btn btn-success btn-sm" href="add-address.php"><li class="fa fa-plus"></li> Add Address</a>-->
				</article>
				
			</div>
			
			
			
			
			
		</div>
	</section>
	<div class="add-popupadress">
		<div class="cart2a">
			<form action="action.php" method="post" name="addressfrm" id="addressfrm" >
				<input type="hidden" name="action" value="Addaddress" />
				<input type="hidden" name="url" value="myaddress.php" />
				<div class="row">
					<div class="close-add-popupadress"><i class="fa fa-close"></i></div>
					<div class="col-md-12">
						<div class="cart2aa">CONTACT DETAILS</div>
						<div class="cart2ab">
						    <div class="cart2ab2"><input type="text" placeholder="Name*" name="name"></div>
							<div class="cart2ab2"><input type="tel" placeholder="Mobile No.*" name="mobile"></div>
							
							<div class="cart2ab2"><input type="tel" placeholder="Alternate Number" name="alternate_mobile"></div>
							
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="cart2aa">ADDRESS</div>
						<div class="cart2ab">
						   <div class="cart2ab2"><input type="text" placeholder="Pincode*" name="pincode"></div>
							
							<div class="cart2ab2"><input type="text" placeholder="Landmark*" name="landmark"></div>
							
							<div class="cart2ab2"><input type="text" placeholder="Address (House No)*" name="house_no"></div>
							
							<div class="cart2ab2"><input type="text" placeholder="Road Name (Road No)" name="road_name"></div>
							
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
								
							</label>&nbsp;&nbsp;&nbsp
							<label class="container-check">Office
								<input type="radio"  value="office" class="address_type" name="address_type">
								
							</label>
							
						</div>
						
					</div>
					
					<div class="col-md-12">
						<input type="submit" value="ADD ADDRESS" class="cart2ae">
					</div>
					
				</div>
			</div>
		</div>
		
		
		
		
		
		<?php 
			require("include/footer.php");
		?>
		
		
	</body>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	 <script src="js/custom.js"></script>
	
</html>