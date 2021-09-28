
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Support</title>
  
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
                        <h2><span class="heading-design">My Tickets</span></h2>
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
								<li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
								<li class="profile-active"><a href="ticket-list.php"><i class="fa fa-ticket"></i>Support</a></li>
							</ul>
						</ul>
					</div>
					
				</article>
				
                <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9 panel-table">
					<span class="plus-add-btn "><a class="btn btn-black " href="new-ticket.php" style="margin-bottom:28px;"><i class="fa fa-plus"></i> Add New Ticket<span></span></a> </span>
					<div class="box-border wow fadeInLeft animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
						
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>S.No.</th>
                                                <th>Ticket no</th>
                                                <th>Order no</th>
                                               
                                                <th>Issue</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                              
									</tr>
								</thead>
								
								<tbody>
								
                                            <tr>
                                                <td>1</td>
                                                <td><a style="font-weight: 700;color: #d8ceb9;" href="ticket-detail.php">TKT000043</td>
                                                <td>CMK000160</td>
                                               
                                                <td>quality</td>
                                                <td>testing</td>
                                            
                                                <td><span class="label-custom label label-default">Open</span></td>
                                           
                                                <!--<td><span class="label-info label label-default">In Progress</span></td>
                                            
                                                <td><span class="label-danger label label-default">Closed</span></td>-->
                                           
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

		
		
		
		
		
		<?php 
			require("include/footer.php");
		?>
		
		
	</body>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	 <script src="js/custom.js"></script>
	
</html>