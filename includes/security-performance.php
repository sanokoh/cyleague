<?php

// セキュリティとパフォーマンスの最適化

// WordPressのバージョン情報を非表示にする（セキュリティ向上）
remove_action('wp_head', 'wp_generator');

// 投稿やページの自動整形を無効にする（自分でHTMLを管理したい場合）
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

// 絵文字スクリプトとスタイルの読み込みを無効化（パフォーマンス向上）
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// REST APIを無効化（セキュリティ向上）
add_filter('rest_enabled', '__return_false');
add_filter('rest_jsonp_enabled', '__return_false');

// oEmbed（外部コンテンツの埋め込み）機能を無効化（セキュリティとパフォーマンス向上）
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// RSSフィードのリンクを無効化（不要な場合）
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// XML-RPCを無効化（セキュリティ向上）
add_filter('xmlrpc_enabled', '__return_false');

// 短縮URL（shortlink）の生成を無効化（不要な場合）
remove_action('wp_head', 'wp_shortlink_wp_head');

// Windows Live Writerのリンクを削除（古いツール向けのリンク、不要であれば削除）
remove_action('wp_head', 'wlwmanifest_link');

// RSD（リモート投稿のためのリンク）を無効化（不要な場合）
remove_action('wp_head', 'rsd_link');
