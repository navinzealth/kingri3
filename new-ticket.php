
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Tickets</title>
		
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
                        <h2><span class="heading-design">My Ticket</span></h2>
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
								<li><a href="personalisinfo.php"><i class="fa fa-info"></i>Personal Information</a></li>
								<li><a href="myaddress.php"><i class="fa fa-home"></i>My Addresses</a></li>
								<li><a href="myorder.php"><i class="fa fa-list"></i>My Orders</a></li>
								<li><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
								<li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
								 <li class="profile-active"><a href="ticket-list.php"><i class="fa fa-ticket"></i>Support</a></li>
								
							</ul>
						</div>
						
					</article>
					
					<article class="col-xs-12 col-sm-12 col-md-9 col-lg-9 panel-table">
						
						<!------------------------------------------------------------------------------------------------------------------------------------>
						<form name="rasieTicket" class="rasieTicket" id="rasieTicket" action="action.php" method="post">
							
							<div class="ticket-raise-box">
							  <div class="row">
							   <div class="col-md-6">
								<div class="ticket-raise-box1" style="margin-bottom: 15px;">
									<p>SELECT YOUR ORDER</p>
									<select name="order_id" class="order_id"> 
										<option value="">Please select Order No</option>
																					<option value="160">CMK000160 Rs 3297</option>
																					<option value="156">CMK000156 Rs 479</option>
																			</select>
								</div>
								</div>
								<div class="col-md-6">
								<div class="ticket-raise-box1">
									<p>SELECT YOUR ISSUE</p>
									<select class="subject" name="subject">
										<option value="order">Order</option>
										<option value="quality">Quality</option>
										<option value="delivery">Delivery</option>
										<option value="payment">Payment</option>
										<option value="other">Other</option>
									</select>
								</div>
								</div>
								<div class="col-md-12">
								<div class="ticket-raise-box2">
								    <p>YOUR COMMENT</p>
									<textarea class="message" name="message"></textarea>
								</div>
								</div>
								<div class="col-md-12">
								<div class="ticket-raise-box3" style="margin-top: 25px;"><button class="btn btn-black">Submit <span></span></button></div>
								</div>
								</div>
							</div>
						</form>
						
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
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/validation.js"></script>
	<script>
		
$("#rasieTicket").validate({			
	rules: {
		order_id:"required",
		subject:"required",
		message: "required"
	},			
	messages: {			
		
		order_id: "Please select Order NO",
		subject: "PLease enter issue",			
		message: "PLease enter message"			
		
	}			
});	
	</script>
	
</html>