<?php
// イベントタイプタクソノミー（※キー/URLは維持、表示名だけ変更）
function create_event_type_taxonomy() {
    $labels = array(
        'name'              => 'イベントカテゴリー',
        'singular_name'     => 'イベントカテゴリー',
        'search_items'      => 'イベントカテゴリーを検索',
        'all_items'         => 'すべてのイベントカテゴリー',
        'parent_item'       => '親イベントカテゴリー',
        'parent_item_colon' => '親イベントカテゴリー:',
        'edit_item'         => 'イベントカテゴリーを編集',
        'update_item'       => 'イベントカテゴリーを更新',
        'add_new_item'      => '新しいイベントカテゴリーを追加',
        'new_item_name'     => '新しいイベントカテゴリー名',
        'menu_name'         => 'イベントカテゴリー',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        // ★URLが変わらないようにslugはそのまま
        'rewrite'           => array('slug' => 'event_type'),
        'show_in_rest'      => true,
    );

    register_taxonomy('event_type', array('event'), $args);
}
add_action('init', 'create_event_type_taxonomy');


// ニュースタイプタクソノミー（※キー/URLは維持、表示名だけ変更）
function create_news_type_taxonomy() {
    $labels = array(
        'name'              => 'トピックスカテゴリー',
        'singular_name'     => 'トピックスカテゴリー',
        'search_items'      => 'トピックスカテゴリーを検索',
        'all_items'         => 'すべてのトピックスカテゴリー',
        'parent_item'       => '親トピックスカテゴリー',
        'parent_item_colon' => '親トピックスカテゴリー:',
        'edit_item'         => 'トピックスカテゴリーを編集',
        'update_item'       => 'トピックスカテゴリーを更新',
        'add_new_item'      => '新しいトピックスカテゴリーを追加',
        'new_item_name'     => '新しいトピックスカテゴリー名',
        'menu_name'         => 'トピックスカテゴリー',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        // ★URLが変わらないようにslugはそのまま
        'rewrite'           => array('slug' => 'news_type'),
        'show_in_rest'      => true,
    );

    register_taxonomy('news_type', array('topics'), $args);
}
add_action('init', 'create_news_type_taxonomy');


// 資料カテゴリ（downloads 用に新規追加）
function create_material_category_taxonomy() {
    $labels = array(
        'name'              => '資料カテゴリー',
        'singular_name'     => '資料カテゴリー',
        'search_items'      => '資料カテゴリーを検索',
        'all_items'         => 'すべての資料カテゴリー',
        'parent_item'       => '親資料カテゴリー',
        'parent_item_colon' => '親資料カテゴリー:',
        'edit_item'         => '資料カテゴリーを編集',
        'update_item'       => '資料カテゴリーを更新',
        'add_new_item'      => '新しい資料カテゴリーを追加',
        'new_item_name'     => '新しい資料カテゴリー名',
        'menu_name'         => '資料カテゴリー',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'material_category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('material_category', array('downloads'), $args);
}
add_action('init', 'create_material_category_taxonomy');
