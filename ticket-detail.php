
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Ticket Detail</title>
		
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
                    <link rel="stylesheet" href="css/user-profile.css" />
					<link rel="stylesheet" href="css/cart.css?v=1" /><!--for this page only-->
		
	</head>
	<body>
		
		<?php 
			require("include/header.php");
		?>
		
		
		
		<section class="seller__registration__page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading_s1 text-center">
                        <h2><span class="heading-design">MY ISSUES</span></h2>
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
								<li class="profile-active"><a href="ticket-list.php"><i class="fa fa-ticket"></i> Support</a></li>
								
							</ul>
						</div>
						
					</article>
					
					<article class="col-xs-12 col-sm-12 col-md-9 col-lg-9 panel-table">
						
						
						
						
						<div class="issue-all-list-box">
						
						    <div class="issue-list-box">
							
							  <div class="issue-list-box-heading-box">
							   
							    <div class="issue-list-box-heading-box1">
								  <div class="issue-list-box-heading-box1a">Issue Number</div>
								  <div class="issue-list-box-heading-box1b">TKT000043</div>
								</div>
								<div class="issue-list-box-heading-box1">
								  <div class="issue-list-box-heading-box1a">Issue Date</div>
								  <div class="issue-list-box-heading-box1b">02 Jul 2021</div>
								</div>
								<div class="issue-list-box-heading-box1">
								  <div class="issue-list-box-heading-box1a">Issue Type</div>
								  <div class="issue-list-box-heading-box1b">quality</div>
								</div>
								<div class="issue-list-box-heading-box1">
								  <div class="issue-list-box-heading-box1a">Issue Status</div>
								  <div class="issue-list-box-heading-box1b">Open</div>
								</div>
							  </div>
							  
							  <div class="issue-list-box-msg-box">
							   
								  <div class="user-rply"><span>hi<span>09:26 AM, Fri Jul 2021 <b style="font-size:12px;margin-left:10px;">Gulshan Kumar</b></span></span></div>
									
						
							  
								<div class="admin-rply"><span>hi<span>09:26 AM, Fri Jul 2021 <b style="font-size:12px;margin-left:10px;">Gulshan Kumar</b></span></span></div>
									
							  </div>
							  
							  <div class="issue-list-box-msg-type-box">
							    <form method="post" name="msgfrm" class="msgfrm" novalidate="novalidate">
								<input type="hidden" name="action" value="messaging">
								<input type="hidden" name="support_id" value="43">
								<input type="hidden" name="to_user" value="1">
								<input type="hidden" name="from_user" value="390">
							    <div class="issue-list-box-msg-type-box1"><input type="text" placeholder="type a message" name="message" class="message"></div>
								<div class="issue-list-box-msg-type-box2"><button type="submit"><i class="fa fa-paper-plane"></i></button></div>
								</form>
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
	<script src="js/owl.carousel.min.js"></script>
	 <script src="js/custom.js"></script>
	
</html>