<?php

function enqueue_slick_from_cdn()
{
    // SlickのCSSをCDNから読み込む
    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null);

    // SlickのJSをCDNから読み込む
    wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);


}
add_action('wp_enqueue_scripts', 'enqueue_slick_from_cdn');

// フロントページでslick.phpを読み込む関数
function load_slick_for_front_page() {
    if (is_front_page()) {
        require_once get_template_directory() . '/includes/slick.php';
    }
}
add_action('wp', 'load_slick_for_front_page');
