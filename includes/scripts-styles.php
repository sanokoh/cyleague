<?php

// スクリプトとスタイルシートの読み込み
function my_theme_enqueue_scripts()
{
    wp_enqueue_style('stylesheet', STYLESHEET_DIRECTORY . '/assets/scss/common.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', false);
    wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/mka4riw.css', false);
    if (is_front_page()) {
        wp_enqueue_script('adjust-hero-height', get_template_directory_uri() . '/assets/js/adjustHeroHeight.js', array(), null, true);
        wp_enqueue_script('news-slider', get_template_directory_uri() . '/assets/js/newsSlider.js', array('jquery', 'slick-js'), null, true);
        wp_enqueue_script('progress-bar', get_template_directory_uri() . '/assets/js/progressBar.js', 'jquery', null, true);
        wp_enqueue_script('intersection-observer', get_template_directory_uri() . '/assets/js/intersectionObserver.js', 'jquery', null, true);
    }
    wp_enqueue_script('add-target-blank-to-external-link', get_template_directory_uri() . '/assets/js/targetBlank.js', array(), null, true);
    wp_enqueue_script('hamburger-menu', get_template_directory_uri() . '/assets/js/hamburgerMenu.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// jQueryをフッターに移動
function move_jquery_to_footer()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'move_jquery_to_footer');

// リダイレクト
function add_redirect_script() {
    wp_enqueue_script('redirect', get_template_directory_uri() . '/assets/js/redirect', array(), null, true);

}
add_action('wp_footer', 'add_redirect_script');
