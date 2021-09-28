
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Change Password</title>
  
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
                        <h2><span class="heading-design">Change Password</span></h2>
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
								<li><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
								<li class="profile-active"><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
								 <li class=""><a href="ticket-list.php"><i class="fa fa-ticket"></i>Support</a></li>
								
							</ul>
						</div>
						
					</article>
					
					<article class="col-xs-12 col-sm-12 col-md-7 col-lg-7 panel-table ">
						<div class="box-border">
                            <form style="width:100%" name="changepasswordfrm" class="changepasswordfrm" id="changepasswordfrm" method="post" action="" >
								<input type="hidden" name="action" value="changePasswordForm" />
								
                               
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-1"></div>
                                    <div class="col-sm-4"><label>New password</label></div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="password" name="new_password" id="newpassword" placeholder="Enter new password">
									</div>
								</div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-1"></div>
                                    <div class="col-sm-4"><label>Confirm password</label></div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="password" name="confirm_password" id="confirmpassword" placeholder="Enter confirm password">
									</div>
								</div>
								
                                <div align="center"><button class="btn btn-primary" type="submit">Update</button> 
								<button class="btn btn-danger" type="button">Cancel</button></div>
								
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