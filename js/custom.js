/*------home-page----*/
$('.home-slider').owlCarousel({
    autoplayTimeout: 4000,
    autoplay: true,
    slideSpeed: 1000,
    paginationSpeed: 1000,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true,
            dots: false,
            margin: 0
        },
        600: {
            items: 1,
            nav: false,
            loop: true,
            margin: 0,
            dots: false,
        },
        1000: {
            items: 1,
            nav: true,
            loop: true,
            margin: 0,
            dots: false,
        }
    }
});


$('.gallery-slider').owlCarousel({
    autoplayTimeout: 4000,
    autoplay: true,
    slideSpeed: 1000,
    paginationSpeed: 1000,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true,
            dots: false,
            margin: 0
        },
        600: {
            items: 1,
            nav: false,
            loop: true,
            margin: 0,
            dots: false,
        },
        1000: {
            items: 1,
            nav: true,
            loop: true,
            margin: 0,
            dots: false,
        }
    }
});


$('.tranding-product').owlCarousel({
    dots: false,
    autoplayTimeout: 4000,
    margin: 0,
    nav: true,
    loop: false,
    autoplay: true,
    slideSpeed: 1000,
    paginationSpeed: 1000,
    center: false,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true,
            dots: false,
            margin: 0
        },
        600: {
            items: 2,
            nav: false,
            loop: true,
            margin: 10,
            dots: false,
        },
        1000: {
            items: 4,
            nav: true,
            loop: true,
            margin: 10,
            dots: false,
        }
    }
});


$('.client-testimonial-home').owlCarousel({
    dots: false,
    autoplayTimeout: 4000,
    margin: 0,
    nav: true,
    loop: false,
    autoplay: true,
    slideSpeed: 1000,
    paginationSpeed: 1000,
    center: false,
    rtl: true,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true,
            dots: false,
            margin: 0
        },
        600: {
            items: 2,
            nav: false,
            loop: true,
            margin: 10,
            dots: false,
        },
        1000: {
            items: 3,
            nav: true,
            loop: true,
            margin: 10,
            dots: false,
        }
    }
});


$('.client-testimonial-home-2').owlCarousel({
    dots: false,
    autoplayTimeout: 4000,
    margin: 0,
    nav: true,
    loop: false,
    autoplay: true,
    slideSpeed: 1000,
    paginationSpeed: 1000,
    center: false,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true,
            dots: false,
            margin: 0
        },
        600: {
            items: 2,
            nav: false,
            loop: true,
            margin: 10,
            dots: false,
        },
        1000: {
            items: 3,
            nav: true,
            loop: true,
            margin: 10,
            dots: false,
        }
    }
});


$('.full-left-slider').owlCarousel({
    dots: false,
    autoplayTimeout: 4000,
    margin: 0,
    nav: false,
    loop: true,
    autoplay: true,
    slideSpeed: 1000,
    paginationSpeed: 1000,
    center: false,
    responsive: {
        0: {
            items: 1,
            nav: false,
            loop: true,
            dots: false,
            margin: 0
        },
        600: {
            items: 1,
            nav: false,
            loop: true,
            margin: 0,
            dots: false,
        },
        1000: {
            items: 1,
            nav: false,
            loop: true,
            margin: 0,
            dots: false,
        }
    }
});
/*------home-page----*/

/*------product-detail----*/
/*open-size-chart*/

$('.open-size-chart').on('click', function(e){
	e.preventDefault();
	$('body').css({'overflow':'hidden'});
	$('.size-chart-popup').css({'display':'block'});
});

$('.size-chart-popup-close i').on('click', function(){
	$('body').css({'overflow':'visible'});
	$('.size-chart-popup').css({'display':'none'});
})



$(document).ready(function(){
	
	 /*--set-quantity---*/
$('.num-in .plus').on('click', function() {
		if ($(this).prev().val()) {
			$(this).prev().val(+$(this).prev().val() + 1);
		}
	});
	$('.num-in .minus').on('click', function() {
		if ($(this).next().val() > 1) {
			if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		}
	});
	
	$('.product-detail-box-heading').on('click', function(){
		$(this).find('i').toggleClass('fa-close , fa-plus');
		$(this).parent('.product-detail-box').find('.product-detail-box-content').slideToggle(300);
	})
	
	
	
});

/*----------------custom----------*/
$('.custom-outfit-btn, .close-custom-design-box').on('click', function(e){
	//e.preventDefault();
	$('.custom-design-box').slideToggle(300);
});


$('.custom-d-box-label i').on('click', function(){
	var img = $(this).attr('data-img');
	var head = $(this).attr('data-head');
	var txt = $(this).attr('data-txt');
	
	$('.size-info-img img').attr('src', img);
	$('.size-info-txt1').text(head);
	$('.size-info-txt2').text(txt);
	$('.size-info-pop').css({'opacity':'1', 'visibility':'visible'});
});

$('.close-size-info-pop').on('click', function(){
	$('.size-info-pop').css({'opacity':'0', 'visibility':'hidden'});
})

/*custom.php*/
$('.male, .kids, .unisex').on('click', function(){
	if($('.male, .kids, .unisex').not(this).hasClass('active')){
		$('.male, .kids, .unisex').not(this).removeClass('active');
	}
	else{}
	$(this).addClass('active');
	$('.female').removeClass('active');
	$('.style-div').css({'display':'block'});
	$('.top, .bottom, .drape').css({'display':'inline-block'});
	$('.dress').css({'display':'none'});
});

$('.female').on('click', function(){
	$(this).addClass('active');
	$('.male, .kids, .unisex').removeClass('active');
	$('.style-div').css({'display':'block'});
	$('.top, .bottom, .drape, .dress').css({'display':'inline-block'});
	
});

$('.top, .bottom, .drape, .dress').on('click', function(){
	$(this).addClass('active');
	$('.top, .bottom, .drape, .dress').not(this).removeClass('active');
	$('.top-option').css({'display':'block'});
})
/*custom.php*/

/*----------------custom----------*/


	
$('.match-this-with-product-details').owlCarousel({
    dots: false,
    autoplayTimeout: 4000,
    margin: 0,
    nav: true,
    loop: false,
    autoplay: true,
    slideSpeed: 1000,
    paginationSpeed: 1000,
    center: false,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true,
            dots: false,
            margin: 20
        },
        600: {
            items: 2,
            nav: false,
            loop: true,
            margin: 20,
            dots: false,
        },
        1000: {
            items: 4,
            nav: true,
            loop: true,
            margin: 10,
            dots: false,
        }
    }
});

$('.tranding-product-details').owlCarousel({
    dots: false,
    autoplayTimeout: 4000,
    margin: 0,
    nav: true,
    loop: false,
    autoplay: true,
    slideSpeed: 1000,
    paginationSpeed: 1000,
    center: false,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true,
            dots: false,
            margin: 20
        },
        600: {
            items: 2,
            nav: false,
            loop: true,
            margin: 20,
            dots: false,
        },
        1000: {
            items: 4,
            nav: true,
            loop: true,
            margin: 10,
            dots: false,
        }
    }
});



$('.size-pack').on('click', function(){
	$(this).addClass('active');
	$('.size-pack').not(this).removeClass('active');
//	$('.custom-outfit-btn').removeClass('active');
	$('.custom-design-box').css({'display':'none'});
})

$('.custom-outfit-btn').on('click', function(){
//	$(this).addClass('active');
	$('.size-pack').removeClass('active');
});

/*------product-detail----*/
/*------custom-design-----*/
$('.print-carousel').owlCarousel({
    dots: false,
    autoplayTimeout: 4000,
    margin: 0,
    nav: true,
    loop: true,
    autoplay: true,
    slideSpeed: 1000,
    paginationSpeed: 1000,
    center: false,
    responsive: {
        0: {
            items: 2,
            nav: true,
            loop: true,
            dots: false,
            margin: 20
        },
        600: {
            items: 2,
            nav: true,
            loop: true,
            margin: 20,
            dots: false,
        },
        1000: {
            items: 4,
            nav: true,
            loop: true,
            margin: 10,
            dots: false,
        }
    }
});
/*------custom-design-----*/
/*------------------------login---------------*/

$('.open-log-pop').on('click', function(e){
	e.preventDefault();
	$('.open-login').css({'display':'block'});
	$('.open-signup').css({'display':'none'});
	$('body').addClass('black-layer');
});

$('.open-login-close').on('click', function(){
	$('.open-login').css({'display':'none'});
	$('body').removeClass('black-layer');
});


$('.open-signup-pop').on('click', function(e){
	e.preventDefault();
	$('.open-login').css({'display':'none'});
	$('.open-signup').css({'display':'block'});
})

$('.open-signup-close').on('click', function(){
	$('.open-signup').css({'display':'none'});
	$('body').removeClass('black-layer');
})
/*------------------------login---------------*/

/*------------------------product-listing-------------------*/
$('.listing-product-by-sort-heading').on('click', function(){
  $(this).siblings('.listing-product-by-sort-options').slideToggle(100);
});


 $('.listing-product-filter-list-heading').on('click', function(){
   $(this).siblings('.listing-product-filter-list-options').slideToggle(100);
   $(this).find('i').toggleClass('fa-minus');
   $('.listing-product-filter-list-heading').not(this).siblings('.listing-product-filter-list-options').css({'display':'none'});
   $('.listing-product-filter-list-heading').not(this).find('i').removeClass('fa-minus');
 });
 
 $(window).scroll(function () { 
	if ($(window).scrollTop() > 450) {
      $('.open-filter-box').css({'position':'fixed', 'top':'130px'});
    }
	else{
		$('.open-filter-box').css({'position':'absolute', 'top':'0'});
		}
	
	});
/*open-filter-in-phone*/
$('.open-filter-box').on('click', (e)=>{
	$('.ps-sticky').css({'left':'0'})
});
$('.close-listing-filter-box').on('click', (e)=>{
	$('.ps-sticky').css({'left':'-100%'});
});
/*open-filter-in-phone*/
 
 /*------------------------product-listing-------------------*/
 /*--add-to-bag-popjup--*/
 $('.add-to-bag').on('click', function(e){
	 e.preventDefault();
	$('.add-cart-popup').addClass('open-addcart-popup'); 
 });
 $('.add-cart-popup-close').on('click', function(){
	$('.add-cart-popup').removeClass('open-addcart-popup'); 
 });
 /*--add-to-bag-popjup--*/
 /*-----------add-to-wishlist---*/
 $('.add-wishlist').on('click', function(e){
	 e.preventDefault();
	 $(this).find('i').removeClass('fa-heart-o');
	 $(this).find('i').addClass('fa-heart');
 })
 
  /*-----------add-to-wishlist---*/
 
 /*-------------------------------------------------------------------cart-page------------------------------------------------*/
$('.cart-checkout-coupon-code span').on('click', function(){
			 $(this).slideToggle(50);
			 $('.cart-checkout-coupon-code span').not(this).slideToggle(50);
			 $('.cart-checkout-coupon-code-box').slideToggle(50);
		 });
		 
/*--------------------------------------------------------------------cart-page------------------------------------------------*/