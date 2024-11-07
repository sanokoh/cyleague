<?php
// イベントタイプタクソノミー
function create_event_type_taxonomy() {
    $labels = array(
        'name'              => 'イベントタイプ',
        'singular_name'     => 'イベントタイプ',
        'search_items'      => 'イベントタイプを検索',
        'all_items'         => 'すべてのイベントタイプ',
        'parent_item'       => '親イベントタイプ',
        'parent_item_colon' => '親イベントタイプ:',
        'edit_item'         => 'イベントタイプを編集',
        'update_item'       => 'イベントタイプを更新',
        'add_new_item'      => '新しいイベントタイプを追加',
        'new_item_name'     => '新しいイベントタイプ名',
        'menu_name'         => 'イベントタイプ',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'event_type' ),
        'show_in_rest'      => true,  // Gutenbergエディタに表示

    );

    register_taxonomy( 'event_type', array( 'event' ), $args );
}
add_action( 'init', 'create_event_type_taxonomy' );

// ニュースタイプタクソノミー
function create_news_type_taxonomy() {
    $labels = array(
        'name'              => 'ニュースタイプ',
        'singular_name'     => 'ニュースタイプ',
        'search_items'      => 'ニュースタイプを検索',
        'all_items'         => 'すべてのニュースタイプ',
        'parent_item'       => '親ニュースタイプ',
        'parent_item_colon' => '親ニュースタイプ:',
        'edit_item'         => 'ニュースタイプを編集',
        'update_item'       => 'ニュースタイプを更新',
        'add_new_item'      => '新しいニュースタイプを追加',
        'new_item_name'     => '新しいニュースタイプ名',
        'menu_name'         => 'ニュースタイプ',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'news_type' ),
        'show_in_rest'      => true  // Gutenbergエディタに表示

    );

    register_taxonomy( 'news_type', array( 'topics' ), $args );
}
add_action( 'init', 'create_news_type_taxonomy' );
