<?php
define('TEMPLATE_DIRECTORY', get_template_directory()); // テーマのディレクトリパスを定義
define('STYLESHEET_DIRECTORY', get_stylesheet_directory_uri()); // スタイルシートのURLを定義

// includesディレクトリのファイルを読み込む
require_once TEMPLATE_DIRECTORY . '/includes/theme-setup.php';
require_once TEMPLATE_DIRECTORY . '/includes/slick.php';
require_once TEMPLATE_DIRECTORY . '/includes/scripts-styles.php';
require_once TEMPLATE_DIRECTORY . '/includes/security-performance.php';
require_once TEMPLATE_DIRECTORY . '/includes/seo-optimization.php';
require_once TEMPLATE_DIRECTORY . '/includes/performance-optimization.php';
require_once TEMPLATE_DIRECTORY . '/includes/custom-post-types.php';
require_once TEMPLATE_DIRECTORY . '/includes/custom-taxonomies.php';
require_once TEMPLATE_DIRECTORY . '/includes/structured-data.php';
require_once TEMPLATE_DIRECTORY . '/includes/breadcrumb.php';
require_once TEMPLATE_DIRECTORY . '/includes/external-url-for-blog.php';
require_once TEMPLATE_DIRECTORY . '/includes/meta-boxes.php';
require_once TEMPLATE_DIRECTORY . '/includes/google-analytics.php';

//ウィジェット
function sample_widgets(){
	register_sidebar(array(
	'name' => 'トップページのバナー',
	'description' => 'トップウィジェット',
	'id' => 'banar-top',
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));
   }
   add_action('widgets_init', 'sample_widgets');
function sample_widgets(){
	register_sidebar(array(
	'name' => '下層ページのバナー',
	'description' => '下層ウィジェット',
	'id' => 'banar',
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));
   }
   add_action('widgets_init', 'sample_widgets');
