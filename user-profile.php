<!DOCTYPE html>
<html>
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User DashBoard</title>

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

include 'include/header.php';

?>
	
<body style="">
<div class="container">

<div class="row">
					<div class="col-md-12">
						<div class="seller__registration__heading heading"><div class="heading_s1 text-center">
                        <h2><span class="heading-design">My Personal Info</span></h2>
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
                                        <li  class="profile-active"><a href="user-profile.php"><i class="fa fa-info"></i>Personal Information</a></li>
                                        <li><a href="myaddress.php"><i class="fa fa-home"></i>My Addresses</a></li>
                                        <li><a href="myorder.php"><i class="fa fa-list"></i>My Orders</a></li>
                                        <li><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
                                        <li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
                                        <li class=""><a href="ticket-list.php"><i class="fa fa-ticket"></i> Support</a></li>
                                    </ul>
                                </div>

                            </article>


 <div class="col-md-1 col-lg-1"></div>
 <div class="col-12 col-sm-9 col-md-6 col-lg-6 mt-4">
 <div class="box-border">
                        <form>  
                          
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <input type="text" class="profile-form" name="name" id="name" placeholder="First Name"required="" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="profile-form" name="name" id="name" placeholder="Last Name"required="" aria-required="true" aria-invalid="false">
                                </div>
                            </div>
                           
                            
                            <div class="row mb-3">
                              
                                <div class="col-md-12">
								   <div style="border:1px solid #000;padding:10px;margin-bottom:15px;">gulshan.zealth1@gmail.com
                                       <span style="float: right;"><i class="fa fa-check" style="color:green;" aria-hidden="true"></i>Verified</span>   
                                   </div>   
								</div>
                            </div>
                           
                            <div class="row">
                             
                                <div class="col-md-12"> <input type="text" class="profile-form" name="phone" id="phone" placeholder="Mobile Number" required="" aria-required="true" aria-invalid="false"> </div>
                            </div>
                          
                            <div>
                                <button class="btn btn-black" type="submit">Update <span></span></button>
                            </div>
                        </form>
                    </div>
 </div>
</div>


</div>








 <?php

include 'include/footer.php';

?>



</body>

 
<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	 <script src="js/custom.js"></script>
  	

	
</html>
