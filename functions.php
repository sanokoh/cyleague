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
	'name' => '共通サイドバー', /* ←追加したいウィジェットの名前 */
	'description' => 'サイドバーウィジェット', /* ←追加したいウィジェットの概要 */
	'id' => 'banar-top', /* ←追加したいウィジェットのID */
	'before_widget' => '<div>', /* ←追加したいウィジェットを囲う開始タグ */
	'after_widget' => '</div>', /* ←追加したいウィジェットを囲う閉じタグ */
	'before_title' => '<h3>', /* ←追加したいウィジェットのタイトルを囲う開始タグ */
	'after_title' => '</h3>' /* ←追加したいウィジェットのタイトルを囲う閉じタグ */
	));
   }
   add_action('widgets_init', 'sample_widgets');
