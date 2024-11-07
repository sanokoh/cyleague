<?php
function my_custom_post_type()
{
	// 製品・サービス投稿タイプ
	register_post_type('products', array(
		'labels' => array(
			'name' => '製品・サービス',
			'singular_name' => '製品・サービス',
			'menu_name' => '製品・サービス',
			'all_items' => 'すべての製品・サービス',
			'add_new' => '新規追加',
			'add_new_item' => '新しい製品・サービスを追加',
			'edit_item' => '製品・サービスを編集',
			'new_item' => '新しい製品・サービス',
			'view_item' => '製品・サービスを見る',
			'search_items' => '製品・サービスを検索',
			'not_found' => '製品・サービスが見つかりません',
			'not_found_in_trash' => 'ゴミ箱に製品・サービスが見つかりません',
		),
		'public' => true,
		'description' => 'Products ＆ Services',
		'has_archive' => false,
		'rewrite' => array(
			'slug' => 'products',  // カスタム投稿タイプのスラッグ（URLに表示される部分）
			'with_front' => false  // trueの場合、前にベースのパーマリンク（例: /blog/）が付く
		),
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'menu_icon' => 'dashicons-admin-post',
		'hierarchical' => false,
		'show_in_rest' => true,
	));

	// トピックス投稿タイプ
	register_post_type('topics', array(
		'labels' => array(
			'name' => 'トピックス',
			'singular_name' => 'トピックス',
			'menu_name' => 'トピックス',
			'all_items' => 'すべてのトピックス',
			'add_new' => '新規追加',
			'add_new_item' => '新しいトピックスを追加',
			'edit_item' => 'トピックスを編集',
			'new_item' => '新しいトピックス',
			'view_item' => 'トピックスを見る',
			'search_items' => 'トピックスを検索',
			'not_found' => 'トピックスが見つかりません',
			'not_found_in_trash' => 'ゴミ箱にトピックスが見つかりません',
		),
		'public' => true,
		'description' => 'News ＆ Topics',
		'has_archive' => true,
		'rewrite' => array('slug' => 'topics'),
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'menu_icon' => 'dashicons-admin-post',
		'hierarchical' => false,
		'show_in_rest' => true,
	));

	// イベント・セミナー情報投稿タイプ
	register_post_type('event', array(
		'labels' => array(
			'name' => 'イベント・セミナー情報',
			'singular_name' => 'イベント・セミナー情報',
			'menu_name' => 'イベント・セミナー情報',
			'all_items' => 'すべてのイベント・セミナー情報',
			'add_new' => '新規追加',
			'add_new_item' => '新しいイベント・セミナー情報を追加',
			'edit_item' => 'イベント・セミナー情報を編集',
			'new_item' => '新しいイベント・セミナー情報',
			'view_item' => 'イベント・セミナー情報を見る',
			'search_items' => 'イベント・セミナー情報を検索',
			'not_found' => 'イベント・セミナー情報が見つかりません',
			'not_found_in_trash' => 'ゴミ箱にイベント・セミナー情報が見つかりません',
		),
		'public' => true,
		'description' => 'Events & Seminars',
		'has_archive' => true,
		'rewrite' => array('slug' => 'event'),
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'menu_icon' => 'dashicons-admin-post',
		'hierarchical' => false,
		'show_in_rest' => true,
	));
}
add_action('init', 'my_custom_post_type');
