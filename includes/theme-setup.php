<?php

// テーマサポート機能の追加
function my_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // メニューの位置を登録
    register_nav_menus(array(
        'header' => 'ヘッダーメニュー',
        'header_sp' => 'SPヘッダーメニュー',
        'footer_l' => '左側フッターメニュー',
        'footer_c' => '中間フッターメニュー',
        'footer_r' => '右側フッターメニュー'

    ));
    add_post_type_support( 'page', 'excerpt' );

}
add_action('after_setup_theme', 'my_theme_setup');
