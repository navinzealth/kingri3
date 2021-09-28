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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/custom.css" >	
<link rel="stylesheet" href="css/star-rating.css"/>
	<style>
	 label{margin-bottom:0;}
	</style>
</head>
<body>
 <?php

include 'include/header.php';

?>
	
<body style="">
<section class="banner-img">
<img src="images/banner-details.jpg" class="img-fluid">

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="details-box">
<h3>What is Lorem Ipsum?</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it 
to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>


</div>
</div>
</div>
</div>
</section>

<section class="Product-listing">
<div class="container">
<div class="row">
<div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Product Name</li>
  </ol>
</nav>
</div>

<div class="col-md-12">
	              <div class="open-filter-box hidden-md hidden-lg" style="position: absolute; top: 0px;"><img src="images/filter-icon.png"></div>
</div>


<div class="col-md-3 ps-sticky">
	<div class="listing-product-filter-box">
	    <div class="close-listing-filter-box hidden-lg hidden-md"><i class="fa fa-close"></i></div>
		<div class="listing-product-by-sort">
					<div class="listing-product-by-sort-heading">SORT BY: </div>
						<div class="listing-product-by-sort-options">
						   <label class="con">Popularity<input type="radio" class="sortby" name="sortby" value="order by prd.best_seller desc" checked="">
							   <span class="checkmark"></span>
						   </label>
						   <label class="con">Price - Low to High<input type="radio" name="sortby" class="sortby" value="order by vari.pro_price*1 asc"><span class="checkmark"></span>
						   </label>
						   <label class="con">Price - High to Low<input type="radio" name="sortby" class="sortby" value="order by vari.pro_price*1 desc"><span class="checkmark"></span>
						   </label>
						   <label class="con">Newest First<input type="radio" name="sortby" class="sortby" value="order by prd.new_arrival desc">
							 <span class="checkmark"></span>
						   </label>
						</div>
		</div>
		
		        <div class="listin-product-filter-list">
                 <div class="listing-product-filter-list-heading">Price<i class="fa fa-plus"></i></div>
                 <div class="listing-product-filter-list-options" style="display: block;overflow: hidden;padding-right: 27px;">
                   
				   <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                    <div style="margin:30px auto">
					  <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
					  <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
					</div>
                  
                 </div>
                </div>
				
		       <div class="listin-product-filter-list">
                 <div class="listing-product-filter-list-heading">Colour<i class="fa fa-plus"></i></div>
                 <div class="listing-product-filter-list-options">
                   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Beige</label>
                   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Black</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Blue</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Brown</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Green</label>
                  
                 </div>
                </div>


                <div class="listin-product-filter-list">
                 <div class="listing-product-filter-list-heading">Size <i class="fa fa-plus"></i></div>
                 <div class="listing-product-filter-list-options">
                   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> XXS</label>
                   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span>XS</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span>S</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> M</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span>L</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span>XL</label>
                  
                 </div>
                </div>



                <div class="listin-product-filter-list">
                 <div class="listing-product-filter-list-heading">Fabric <i class="fa fa-plus"></i></div>
                 <div class="listing-product-filter-list-options" style="display:block;">
                   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Georgette</label>
                   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Rayon</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Velvet</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Woolen</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Cotton</label>
				   <label class="chek-1"><input type="checkbox"><span class="checkmark1"></span> Chanderi</label>
                   
                 </div>
                </div>
						
						
						<div class="filter-btns">
							<a href="#">CLEAR</a><a href="">APPLY</a>
						</div>
		
	</div>
</div>

<div class="col-md-9">
<div class="row">
<div class="col-md-6">
    <div class="single-product">
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
	<div class="price-box"><i class="fa fa-inr"></i> 300</div>
	<div class="discount-box"><i class="fa fa-inr"></i> 300</div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>

</div>
<div class="col-md-6">
    <div class="single-product">
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
	<div class="price-box"><i class="fa fa-inr"></i> 300</div>
	<div class="discount-box"><i class="fa fa-inr"></i> 300</div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>

</div>
<div class="col-md-6">
    <div class="single-product">
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
	<div class="price-box"><i class="fa fa-inr"></i> 300</div>
	<div class="discount-box"><i class="fa fa-inr"></i> 300</div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>

</div><div class="col-md-6">
    <div class="single-product">
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
	<div class="price-box"><i class="fa fa-inr"></i> 300</div>
	<div class="discount-box"><i class="fa fa-inr"></i> 300</div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>

</div>
<div class="col-md-6">
    <div class="single-product">
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
	<div class="price-box"><i class="fa fa-inr"></i> 300</div>
	<div class="discount-box"><i class="fa fa-inr"></i> 300</div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>

</div>
<div class="col-md-6">
    <div class="single-product">
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
	<div class="price-box"><i class="fa fa-inr"></i> 300</div>
	<div class="discount-box"><i class="fa fa-inr"></i> 300</div>
	<div class="listing-product-box-rating">
	 <input type="text" class="rating rating-loading" value="3.75" data-size="xs" title="" data-show-caption="false" data-show-clear="false" 
	   disabled="disabled"><span>( 1201 )</span>
	</div>
	
	</div>
		
	</div>

</div>


</div>

<div class="row">
 <div class="col-md-4"></div>
 <div class="col-md-4" style="text-align:center;">
	<button class="loadmore" data-category="'hair-care-styling'" data-brnd="" data-kwrd="" data-scate="" data-subcategory="" data-brandcond="" data-subcatcond="" data-maxcond="" data-mincond="" data-sortcond=" order by prd.sequence, (pro_mrp-pro_price) desc " data-total="499" data-loaded="30" style="display: block;"> Load More </button>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="js/owl.carousel.min.js"></script>
<!--<script src="js/main.js" ></script>-->
<script src="js/custom.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/price_range_script.js" ></script>
  	 <script src="js/star-rating.js"></script>

	
</html>
