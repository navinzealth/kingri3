<!DOCTYPE html>
<html>
<head>
<title>Product Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!---common-css--->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" >
<link rel="stylesheet" href="css/responsive.css" >
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,700;1,100;1,400&display=swap" rel="stylesheet">
<!---common-css---> 
<link rel="stylesheet" href="css/star-rating.css"/>
	
<!---only-for-this-page--->
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/xzoom.css" media="all" /> 
<link type="text/css" rel="stylesheet" media="all" href="fancybox/source/jquery.fancybox.css" />
<link type="text/css" rel="stylesheet" media="all" href="magnific-popup/css/magnific-popup.css" />
<!---only-for-this-page--->
</head>
<body>
	
 <?php
include 'include/header.php';
?>
	
	
<body style=" height:200vh">


<section class="product_page">
<div class="container">
<div class="row">
<div class="col-md-5">
<div class="product-detail-product-img">
                  <!-- <div class="show" href="images/23-july04020.jpeg" style="margin:0 auto;">
                     <img src="images/23-july04020.jpeg" id="show-img">
                   </div>
                    <div class="small-img">
                        <img src="images/right-img.png" class="icon-left" alt="" id="prev-img">
                        <div class="small-container">
                        <div id="small-img-roll">
                            <img src="images/23-july04020.jpeg" class="show-small-img" alt="">
                            <img src="images/23-july04023.jpeg" class="show-small-img" alt="">
                            <img src="images/23-july04025.jpeg" class="show-small-img" alt="">
                            <img src="images/23-july04027.jpeg" class="show-small-img" alt="">
                            <img src="images/product5.jpg" class="show-small-img" alt=""> 
                        </div>
                        </div>
                        <img src="images/right-img.png" class="icon-right" alt="" id="next-img">
                    </div>-->
					
					<div class="xzoom-container">
								<img class="xzoom5" id="xzoom-magnific" src="images/23-july04020.jpeg" xoriginal="images/23-july04020.jpeg" />
								<div class="product-img-layer" style=""></div>
								<div class="xzoom-thumbs">
									<a href="images/23-july04023.jpeg" class="list"><img class="xzoom-gallery5" width="80" src="images/23-july04023.jpeg" title="The description goes here" xpreview="images/23-july04023.jpeg"></a>
								
									
									<a href="images/23-july04025.jpeg" class="list"><img class="xzoom-gallery5" width="80" src="images/23-july04025.jpeg"   title="The description goes here"></a>
									<a href="images/23-july04027.jpeg" class="list"><img class="xzoom-gallery5" width="80" src="images/23-july04027.jpeg" title="The description goes here"></a>
									
								</div>
					</div> 
</div> 


<div style="margin-top: 50px;text-align: center;">
	<!--<div class="product-detail-box-heading"><span>Print Library</span></div>-->
	<div class="heading_s1 text-center" style="margin-bottom:40px;">
      <h2><span class="heading-design">Print Library</span></h2>
    </div>
	<div>
		<div class="patch-box" ><a href=""><img src="images/print_1.png"></a></div>
		<div class="patch-box" ><a href=""><img src="images/print_2.png"></a></div>
		<div class="patch-box" ><a href=""><img src="images/print_3.png"></a></div>
		<div class="patch-box" ><a href=""><img src="images/print_4.png"></a></div>
	</div>
</div>               



</div>
<div class="col-md-7">
<div class="product-detail-product-content">
                
				<!--<div class="product-detail-product-heading-sellername">Kingri</div>-->
				
               <div class="product-detail-product-heading product_title">Lorem Ipsum is simply dummy text of the.</div>
                <div class="product-detail-price"><i class="fa fa-inr"></i> 35,000 &nbsp;<del><i class="fa fa-inr"></i> 35,000</del></div>

<div class="product_details_size">
<label> &nbsp;<span><a href="#" class="open-size-chart">Size Chart</span></a></label>
 <?php
include 'include/custom-design.php';
?>
<div>

<div class="prod-detail-size-box">
	<div class="size-pack">2XS</div>
	<div class="size-pack">XS</div>
	<div class="size-pack ">S</div>
	<div class="size-pack ">M</div>
	<div class="size-pack ">L</div>
	<div class="size-pack">XL</div>
	<div class="size-pack">2X</div>
	<div class="size-pack">3X</div>
	<div class="size-pack">4X</div>
	<div class="size-pack">5X</div>
	<div class="size-pack">6X</div>
</div>

<div class="custom-outfit-btn  ">
	<a href="custom-design.php"  style="text-decoration: none;color: black;font-weight: 600;"> CUSTOM<span></span></a>
</div>

</div>

</div>






<div class="product_qty">
<label>Qty:</label>
<div class="num-block skin-2">
  <div class="num-in">
    <span class="minus"></span>
    <input type="text" class="in-num" value="1" readonly="">
    <span class="plus"></span>
  </div>
</div>
</div>

 <div class="product_add_to_cart">
<button class="btn add-to-bag-product btn-block btn-blue"><span><i class="fa fa-shopping-cart"></i></span> Add to Bag</button>
<button class="btn add-to-bag-product btn-block btn-blue" style="padding: 10px !important;"><span><i class="fa fa-heart-o" aria-hidden="true"></i></span>WishList</button>
 </div> 
 
<div class="product-details-image-icon">
<div class="row">
	<ul class="icon_5">
	<li><div class="product_icon_box"><img src="images/100-cotton.png"><div class="icon-text">100% Cotton</div></div></li>
	<li><div class="product_icon_box"><img src="images/antimicrobial.png"><div class="icon-text">Antimicrobial</div></div></li>
	<li><div class="product_icon_box"><img src="images/consciously-made.png"><div class="icon-text">Consciously made</div></div></li>
	<li><div class="product_icon_box"><img src="images/handblock.png"><div class="icon-text">Handblock  printed</div></div></li>
	<li><div class="product_icon_box"><img src="images/natural-vegetable-dye.png"><div class="icon-text">Natural Vegetable Dyes</div></div></li>
	<li><div class="product_icon_box"><img src="images/artisan-made.png"><div class="icon-text">Artisan Made</div></div></li>
	</ul>
</div>
</div>

          
<div class="product-detail-box">
  <div class="product-detail-box-heading"><span>PRODUCT DETAILS</span> <i class="fa fa-close"></i></div>
  <div class="product-detail-box-content">
    <div class="product-detail-box-content-p">
	  <p>This two piece set includes choga with pants. Ivory and maroon cotton choga with all over hand block prints, round neckline and full sleeves.</p>
	  <p>Maroon and ivory pants with all over hand block prints and front tie-up.</p>
	</div>
	<div class="product-detail-box-content-p"><p><span>COLOUR: </span> <span>Ivory, Maroon</span></p></div>
	<div class="product-detail-box-content-p"><p><span>MATERIALS: </span> <span>Cotton</span></p></div>
	<div class="product-detail-box-content-p"><p><span>CARE:  </span> <span>Hand Wash Separately in Cold Water</span></p></div>
	<div class="product-detail-box-content-p"><p><span>SKU: </span> <span>KAAS23JUN110/KAAS23</span></p></div>
	<div class="product-detail-box-content-p"><p><span>DISCLAIMER:  </span> <span>It might have slight irregularities because of hand block printing technique.</span></p></div>
  </div>
</div>  

<div class="product-detail-box">
  <div class="product-detail-box-heading"><span>SHIPPING</span> <i class="fa fa-close"></i></div>
  <div class="product-detail-box-content">
    <div class="product-detail-box-content-p">
	  <p>Dispatched in 15-20 working days as this product is made on order. Returns accepted within 7 days of delivery.</p>
	</div>
  </div>
</div>  

<div class="product-detail-box">
  <div class="product-detail-box-heading"><span>RETURN or EXCHANGE POLICY</span> <i class="fa fa-close"></i></div>
  <div class="product-detail-box-content">
    <div class="product-detail-box-content-p">
	  <p>At Kingri, each fabric we supply goes through strict quality check from multiple hands ensuring accurate measurements, defect-free designs or prints, undamaged and unworn condition.</p>
	</div>
	
  </div>
</div>     

		


</div>
<!-- Accordion wrapper -->  
			 </div>


</div>

</div>

</div>

</section>



<section class="match-this-with">
<div class="container">
<div class="row">

<div class="col-md-12">
	<div class="heading_s1 text-center ">
                        <h2><span class="heading-design">Match this with</span></h2>
                    </div>
                </div>
<div class="col-md-12">
<div class="owl-carousel owl-theme match-this-with-product-details">
    <div class="item single-product">
	<div class="product-img">
	<a href="#">
		<img src="images/img-category-2.jpg" class="img-fluid">
		</a>
	<div class="icons-wrapper">
	<a href="#" class="add-to-bag"><i class="fa fa-shopping-bag"></i></a>
	<a href="#" class="add-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
	</div>
	</div>
	<div class="product-details">
	<div class="heading-product"><a href="#">Lorem Ipsum is simply dummy textdummy textdummy text.</a></div>
	<div class="price-box"><i class="fa fa-inr"></i> 300&nbsp;<del><i class="fa fa-inr"></i> 300</del></div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>
	 <div class="item single-product">
	<div class="product-img">
	<a href="#"><img src="images/category-5.jpg" class="img-fluid"></a>
		<div class="icons-wrapper">
	<a href="#" class="add-to-bag"><i class="fa fa-shopping-bag"></i></a>
	<a href="#" class="add-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
	</div>
	</div>
	<div class="product-details">
	<div class="heading-product"><a href="#">Lorem Ipsum is simply dummy textdummy textdummy text.</a></div>
	<div class="price-box"><i class="fa fa-inr"></i> 300&nbsp;<del><i class="fa fa-inr"></i> 300</del></div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
	</div>
	 <div class="item single-product">
	<div class="product-img">
	<a href="#">
		<img src="images/img-category-2.jpg" class="img-fluid">
		</a>
	<div class="icons-wrapper">
	<a href="#" class="add-to-bag"><i class="fa fa-shopping-bag"></i></a>
	<a href="#" class="add-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
	</div>	
	</div>
	<div class="product-details">
	<div class="heading-product"><a href="#">Lorem Ipsum is simply dummy textdummy textdummy text.</a></div>
	<div class="price-box"><i class="fa fa-inr"></i> 300&nbsp;<del><i class="fa fa-inr"></i> 300</del></div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>
   
</div>


</div>

</div>

</div>

</section>


<section class="trending">
<div class="container">
<div class="row">
<div class="col-md-12">
	<div class="heading_s1 text-center">
                        <h2><span class="heading-design">Shop for Family</span></h2>
                    </div>
                </div>
<div class="col-md-12">
<div class="owl-carousel owl-theme tranding-product-details">
    <div class="item single-product">
	<div class="product-img">
	<a href="#">
		<img src="images/img-category-2.jpg" class="img-fluid">
		</a>
	<div class="icons-wrapper">
	<a href="#" class="add-to-bag"><i class="fa fa-shopping-bag"></i></a>
	<a href="#" class="add-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
	</div>
	</div>
	<div class="product-details">
	<div class="heading-product"><a href="#">Lorem Ipsum is simply dummy textdummy textdummy text.</a></div>
	<div class="price-box"><i class="fa fa-inr"></i> 300&nbsp;<del><i class="fa fa-inr"></i> 300</del></div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>
	 <div class="item single-product">
	<div class="product-img">
	<a href="#"><img src="images/category-5.jpg" class="img-fluid"></a>
		<div class="icons-wrapper">
	<a href="#" class="add-to-bag"><i class="fa fa-shopping-bag"></i></a>
	<a href="#" class="add-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
	</div>
	</div>
	<div class="product-details">
	<div class="heading-product"><a href="#">Lorem Ipsum is simply dummy textdummy textdummy text.</a></div>
	<div class="price-box"><i class="fa fa-inr"></i> 300&nbsp;<del><i class="fa fa-inr"></i> 300</del></div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
	</div>
	 <div class="item single-product">
	<div class="product-img">
	<a href="#">
		<img src="images/img-category-2.jpg" class="img-fluid">
		</a>
	<div class="icons-wrapper">
	<a href="#" class="add-to-bag"><i class="fa fa-shopping-bag"></i></a>
	<a href="#" class="add-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
	</div>	
	</div>
	<div class="product-details">
	<div class="heading-product"><a href="#">Lorem Ipsum is simply dummy textdummy textdummy text.</a></div>
	<div class="price-box"><i class="fa fa-inr"></i> 300&nbsp;<del><i class="fa fa-inr"></i> 300</del></div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>
   
</div>


</div>

</div>

</div>

</section>

<section class="trending" style="padding-bottom:0;">
<div class="container">
<div class="row">
<div class="col-md-12">
	<div class="heading_s1 text-center">
                        <h2><span class="heading-design">Trending</span></h2>
                    </div>
                </div>
<div class="col-md-12">
<div class="owl-carousel owl-theme tranding-product-details">
    <div class="item single-product">
	<div class="product-img">
	<a href="#">
		<img src="images/img-category-2.jpg" class="img-fluid">
		</a>
	<div class="icons-wrapper">
	<a href="#" class="add-to-bag"><i class="fa fa-shopping-bag"></i></a>
	<a href="#" class="add-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
	</div>
	</div>
	<div class="product-details">
	<div class="heading-product"><a href="#">Lorem Ipsum is simply dummy textdummy textdummy text.</a></div>
	<div class="price-box"><i class="fa fa-inr"></i> 300&nbsp;<del><i class="fa fa-inr"></i> 300</del></div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>
	 <div class="item single-product">
	<div class="product-img">
	<a href="#"><img src="images/category-5.jpg" class="img-fluid"></a>
		<div class="icons-wrapper">
	<a href="#" class="add-to-bag"><i class="fa fa-shopping-bag"></i></a>
	<a href="#" class="add-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
	</div>
	</div>
	<div class="product-details">
	<div class="heading-product"><a href="#">Lorem Ipsum is simply dummy textdummy textdummy text.</a></div>
	<div class="price-box"><i class="fa fa-inr"></i> 300&nbsp;<del><i class="fa fa-inr"></i> 300</del></div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
	</div>
	 <div class="item single-product">
	<div class="product-img">
	<a href="#">
		<img src="images/img-category-2.jpg" class="img-fluid">
		</a>
	<div class="icons-wrapper">
	<a href="#" class="add-to-bag"><i class="fa fa-shopping-bag"></i></a>
	<a href="#" class="add-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
	</div>	
	</div>
	<div class="product-details">
	<div class="heading-product"><a href="#">Lorem Ipsum is simply dummy textdummy textdummy text.</a></div>
	<div class="price-box"><i class="fa fa-inr"></i> 300&nbsp;<del><i class="fa fa-inr"></i> 300</del></div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>
   
</div>
</div>
</div>
</div>
</section>







 <?php
include 'include/footer.php';
?>


</body>

 
 <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>

<script src="js/owl.carousel.min.js"></script>
 <!--<script src="js/zoom-image.js"></script>
    <script src="js/main.js"></script>-->
	 <script src="js/custom.js"></script>

<script src="js/star-rating.js"></script>
	 

<!---only-for-this-page--->
<script src="js/vendor/modernizr.js"></script>
<script src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/xzoom.min.js"></script>
<script type="text/javascript" src="hammer.js/1.0.5/jquery.hammer.min.js"></script>  	
<script type="text/javascript" src="fancybox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="magnific-popup/js/magnific-popup.js"></script>       
<script type="text/javascript" src="magnific-popup/js/magnific-popup.js"></script> 
<script src="js/foundation.min.js"></script>
<script src="js/setup.js"></script>	
<!---only-for-this-page--->
</html>