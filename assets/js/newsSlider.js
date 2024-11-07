jQuery(document).ready(function ($) {
	$(".slide-items").slick({
		autoplay: true,
		autoplaySpeed: 3000,
		dots: false,
		arrows: true,
		appendArrows: $('.arrow-box'),
		prevArrow: '<div class=prev-arrow ><img src="wp-content/themes/cyleague/assets/images/svg/top_slide_arrow_left.svg" alt="矢印" width="15" height="24" ></div>',
		nextArrow: '<div class=next-arrow ><img src="wp-content/themes/cyleague/assets/images/svg/top_slide_arrow_right.svg" alt="矢印" width="15" height="24"></div>',
	});
});
jQuery(document).ready(function ($) {
	$(".slide-items--sp").slick({
		autoplay: true,
		autoplaySpeed: 3000,
		dots: false,
		arrows: true,
		appendArrows: $('.arrow-box--sp'),
		prevArrow: '<div class=prev-arrow ><img src="wp-content/themes/cyleague/assets/images/svg/top_slide_arrow_left.svg" alt="矢印" width="15" height="24" ></div>',
		nextArrow: '<div class=next-arrow ><img src="wp-content/themes/cyleague/assets/images/svg/top_slide_arrow_right.svg" alt="矢印" width="15" height="24"></div>',
	});
});
