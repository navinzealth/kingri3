

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">	
	<head>		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
				
		<title>Update Address</title>		
	
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

	<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/demo.css">
					  <link rel="stylesheet" href="css/user-profile.css">
				
	</head>	
	<body>					
		<?php 			
			require("include/header.php");			
		?>		
		<section class="seller__registration__page" style="">			
			<div class="container">				
				<div class="row">					
					<div class="col-md-12">						
						<div class="heading_s1 text-center">
                        <h2><span class="heading-design">My Address</span></h2>
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
                                        <li class="profile-active"><a href="myaddress.php"><i class="fa fa-home"></i>My Addresses</a></li>
                                        <li><a href="myorder.php"><i class="fa fa-list"></i>My Orders</a></li>
                                        <li><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
                                        <li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
                                        <li class=""><a href="tickets.php"><i class="fa fa-ticket"></i>Support</a></li>
                                    </ul>
                                </div>

                            </article>
							
					<article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<div class="box-border">
                    <form action="action.php" method="post" name="editaddressfrm" id="editaddressfrm" >          
                      <input type="hidden" name="action" value="Updateaddress" /> 
                         
                                <div class="row margin-bottom-20">
                                    <div class="col-sm-4"><label>Name</label></div>
                                    <div class="col-sm-8">
                                      <input class="form-control name" type="text" name="name"  placeholder="Full Name" value=""  />  
                                    </div>
                                </div></br>
								<div class="row margin-bottom-20">
                                    <div class="col-sm-4"><label>Mobile</label></div>
                                    <div class="col-sm-8">
                                      <input class="form-control mobile" type="text" name="mobile"  placeholder="Mobile Number" value=""  />  
                                    </div>
                                </div></br>
								<div class="row margin-bottom-20">
                                    <div class="col-sm-4"><label>Alternate Mobile</label></div>
                                    <div class="col-sm-8">
                                      <input class="form-control alternate_mobile" type="text" name="alternate_mobile"  placeholder="Alternate Mobile" value=""  />  
                                    </div>
                                </div></br>
								<div class="row margin-bottom-20">
                                    <div class="col-sm-4"><label>House No.</label></div>
                                    <div class="col-sm-8">
                                      <input class="form-control house_no" type="text" name="house_no"  placeholder="Address(House No.)" value="" >  
                                    </div>
                                </div></br>
								
                                <div class="row">
                                    <div class="col-sm-4"><label>Road Name</label></div>
                                    <div class="col-sm-8">
                                        <input class="form-control road_name" type="text" name="road_name"  placeholder="Road Name" value="">
                                    </div>
                                </div></br>
                                <div class="row">
                                    <div class="col-sm-4"><label>Land Mark</label></div>
                                    <div class="col-sm-8">
                                        <input class="form-control landmark" type="text" name="landmark" id="landmark" placeholder="Land Mark" value="">
                                    </div>
                                </div></br>
								<div class="row">
                                    <div class="col-sm-4"><label>State</label></div>
									 <div class="col-sm-8">
									<select id="state"name="state" class="form-control">
									  <option selected="" disabled="" >Select State</option>
									
									 <option>Delhi</option>
									 <option>Uttar Pradesh</option>
									 <option>Haryana</option>
									</select>
									</div>
                                </div><br>
								<div class="row">
                                    <div class="col-sm-4"><label>City</label></div>
									 <div class="col-sm-8">
                                   <select id="city" name="city_name" class="form-control">
								  <option value='' >Select City</option>

								  <option>Noida</option>
									 <option>Lucknow</option>
									 <option>Gurgaon</option>
								  
								</select>
								</div>
                                </div><br>
								<div class="row">
                                    <div class="col-sm-4"><label>Pin</label></div>
                                    <div class="col-sm-8">
                                        <input class="form-control pincode" type="text" name="pincode"  placeholder="Pin" value="">
                                    </div>
                                </div><br>
								<div class="row">
										<div class="col-sm-4"><label>Address Type</label></div>
										<div class="col-sm-8">
											<label class="container-check">Home
												<input type="radio" value="home" class="address_type" name="address_type">										
												</label>
											    &nbsp;
											
											<label class="container-check">Office
												<input type="radio" value="office" class="address_type" name="address_type">
												
											</label>
											
										</div>
								</div>

                                <div align="center" class="margin-top-30"><button class="btn btn-black" type="submit">Update <span></span></button> </div>
                    </form>
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
	<script src="js/owl.carousel.min.js"></script>
	 <script src="js/custom.js"></script>

</html>