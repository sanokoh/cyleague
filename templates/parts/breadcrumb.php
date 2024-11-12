<?php
// パンくずリストの開始
echo '<nav class="breadcrumb container"><ul>';

// ホームリンクを追加
echo '<li><a href="' . home_url() . '">トップ</a></li>';

// 特定の固定ページの場合、/about へのリンクを追加
if (is_page('message') || is_page('company')) {
    echo '<li>&gt;</li><li><a href="' . home_url('/about') . '">サイリーグについて</a></li>';
}

// 投稿ページの場合
if (is_single()) {
    // カテゴリリンクを表示
    $categories = get_the_category();
    if ($categories) {
        $category = $categories[0];
        echo '<li>&gt;</li><li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
    }

    // タクソノミーのタームを取得して表示
    $taxonomies = ['event_type', 'news_type'];
    foreach ($taxonomies as $taxonomy) {
        $terms = get_the_terms(get_the_ID(), $taxonomy);
        if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                echo '<li>&gt;</li><li><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
            }
        }
    }

    // 現在の記事タイトルを表示
    echo '<li>&gt;</li><li>' . get_the_title() . '</li>';
}

// 固定ページの場合
elseif (is_page()) {
    global $post;

    if ($post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = [];
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li>&gt;</li><li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) echo $crumb;
    }
    echo '<li>&gt;</li><li>' . get_the_title() . '</li>';
}

// カテゴリページの場合
elseif (is_category()) {
    echo '<li>&gt;</li><li>' . single_cat_title('', false) . '</li>';
}

// タクソノミーアーカイブページの場合
elseif (is_tax()) {
    $term = get_queried_object();
    echo '<li>&gt;</li><li><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
}

// 投稿タイプのアーカイブページの場合
elseif (is_post_type_archive()) {
    echo '<li>&gt;</li><li>' . post_type_archive_title('', false) . '</li>';
}

// アーカイブページ（年月、タグなど）の場合
elseif (is_archive()) {
    echo '<li>&gt;</li><li>' . get_the_archive_title() . '</li>';
}

// 404エラーページの場合
elseif (is_404()) {
    echo '<li>&gt;</li><li>ページが見つかりません</li>';
}

// パンくずリストの終了
echo '</ul></nav>';
?>
