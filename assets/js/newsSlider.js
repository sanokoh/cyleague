jQuery(document).ready(function ($) {
    // WordPressのホームURLを取得
    var homeUrl = window.location.origin;

    $(".slide-items").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        appendArrows: $('.arrow-box'),
        prevArrow: '<div class="prev-arrow"><img src="' + homeUrl + '/wp/wp-content/themes/cyleague/assets/images/svg/top_slide_arrow_left.svg" alt="矢印" width="15" height="24"  loading="lazy"></div>',
        nextArrow: '<div class="next-arrow"><img src="' + homeUrl + '/wp/wp-content/themes/cyleague/assets/images/svg/top_slide_arrow_right.svg" alt="矢印" width="15" height="24" loading="lazy"></div>',
    });

    $(".slide-items--sp").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        appendArrows: $('.arrow-box--sp'),
        prevArrow: '<div class="prev-arrow"><img src="' + homeUrl + '/wp/wp-content/themes/cyleague/assets/images/svg/top_slide_arrow_left.svg" alt="矢印" width="15" height="24" loading="lazy"></div>',
        nextArrow: '<div class="next-arrow"><img src="' + homeUrl + '/wp/wp-content/themes/cyleague/assets/images/svg/top_slide_arrow_right.svg" alt="矢印" width="15" height="24" loading="lazy"></div>',
    });
});
