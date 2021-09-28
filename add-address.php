
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Add Address</title>
  
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
                        <h2><span class="heading-design">My Address</span></h2>
                    </div></div>
	  </div>
	</div>
	
	
	<div class="row">
<article class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
								<div class="widget-title customer-heading">
                                    <i class="fa fa-tag"></i> My menu <i class="fa fa-list hidden-md hidden-lg open-dashboard-menu"></i>
                                </div>
                                <div class="widget-block">
                                    <ul class="list-unstyled catalog">
                                        <li><a href="profile-dashboard.php" class="customer-active"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                                        <li><a href="personalisinfo.php"><i class="fa fa-info"></i>Personal Information</a></li>
                                        <li class="profile-active"><a href="myaddress.php"><i class="fa fa-home"></i>My Addresses</a></li>
                                        <li><a href="myorder.php"><i class="fa fa-list"></i>My Orders</a></li>
                                        <li><a href="wishlist.php"><i class="fa fa-heart"></i>My Wishlist</a></li>
                                        <li><a href="changepwd.php"><i class="fa fa-pencil"></i>Change Password</a></li>
                                       <li class=""><a href="ticket-list.php"><i class="fa fa-ticket"></i>Support</a></li>
                                    
                                    </ul>
                                </div>

                            </article>
                            
<article class="col-xs-12 col-sm-12 col-md-9 col-lg-9 panel-table">
 <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
	   
	   <div class="cart2a">
		  <div class="row">
                            <div class="col-md-12">
                                     <div class="cart2aa">CONTACT DETAIL</div>
                                     <div class="cart2ab">
                                         <input type="text" placeholder="Name*" name="name">
                                         <input type="tel" placeholder="Mobile No.*" name="mobile">
                                         <input type="tel" placeholder="Alternate Number" name="alternate_mobile">
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="cart2aa">ADDRESS</div>
                                     <div class="cart2ab">
                                         <input type="text" placeholder="Pincode*" name="pincode">
                                         <input type="text" placeholder="Address (House No, Road No)*" name="house_no">
                                         <input type="text" placeholder="Landmark*" name="landmark">
                                     </div>
                                 </div>
                                
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
                                 <div class="col-md-12">
                                     <div class="cart2aa">SAVE ADDRESS AS</div>
                                     <div class="cart2ac"><a href="" class="active">Home</a><a href="" class=" work">Work</a></div>
                                  
                                 </div>
                                 <div class="col-md-12">
                                     <input type="submit" value="ADD ADDRESS" class="cart2ae">
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
	<script src="js/owl.carousel.min.js"></script>
	 <script src="js/custom.js"></script>

</html>