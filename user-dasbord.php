<!DOCTYPE html>
<html>
<head>
<title>User DashBoard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" >
 <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/jquery.flipster.css">
    <link rel="stylesheet" href="css/jquery.flipster.nav.css">  
	<link rel="stylesheet" href="css/main-zoom.css"> 

	
	
</head>
<body>
	
 <?php

include 'include/header.php';

?>
	
<body style="">
<div class="container-fluid">

<div class="row">

<div class="col-md-12">
 <div class="heading_s1 text-center">
                        <h2><span class="heading-design">My Account</span></h2>
 </div>
</div>

<div class="col-12 col-sm-3 col-md-3 col-lg-3">
								<div class="widget-title customer-heading">
                                    <i class="fa fa-tag"></i> My menu
                                </div>
                                <div class="widget-block">
                                    <ul class="list-unstyled catalog">                                       
                                        <li><a href="user-profile.php"><i class="fa fa-info"></i>Personal Information</a></li>
                                        <li><a href="#"><i class="fa fa-home"></i>My Addresses</a></li>
                                        <li><a href="#"><i class="fa fa-list"></i>My Orders</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i>My Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i>Change Password</a></li>
                                        
                                    </ul>
                                </div>

 </div>
 <div class="col-12 col-sm-9 col-md-9 col-lg-9">
 <div class="row">
<div class="col-md-6">
                          

      <div class="card">
    <div class="card-header">
      My Cart Items
    </div>
    <div class="card-body card-body-2">
     <div class="table-responsive" style="overflow-y:scroll; height:215px;">
You have no items in your cart.                                        </div>
    </div>
  </div>
   </div>
   <div class="col-md-6">
                          

      <div class="card">
    <div class="card-header">
      My Addresses
    </div>
    <div class="card-body card-body-2">
      
<div class="table-responsive table-dashborad" style="overflow-y:scroll; height:215px;">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Address</th>
                                                        <th>City</th>
                                                        <th>State</th>
                                                        <th>Pincode</th>
<!--                                                        <th>Type</th>-->
                                                    </tr>
                                                    <!--                                                        <tr>
                                                            <td>E 287 New Ashok Nagar</td>
                                                            <td>New Delhi</td>
                                                            <td>Delhi</td>
                                                            <td>110096</td>
                                                            <td>Default</td>
                                                        </tr>-->
                                                                <tr>
                                                                <td>E 287 New Ashok Nagar</td>
                                                                <td>New Delhi</td>
                                                                <td>Delhi</td>
                                                                <td>110096</td>
<!--                                                                <td>Additional	</td>-->
                                                            </tr>
                                                    </thead>
                                            </table>

                                        </div>



    </div>
  </div>
   </div>
   </div>
 </div>
</div>


</div>








 <?php

include 'include/footer.php';

?>



</body>

 
 <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js" ></script>
  	

	
</html>
