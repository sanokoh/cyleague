<?php
// パンくずリストの開始
echo '<nav class="breadcrumb container"><ul>';

// ホームリンクを追加
echo '<li><a href="' . home_url() . '">トップ</a></li>';

// single ページの場合
if (is_single()) {
    // 投稿タイプを取得
    $post_type = get_post_type();
    if ($post_type) {
        $post_type_object = get_post_type_object($post_type);
        if ($post_type_object && $post_type_object->has_archive) {
            echo '<li>&gt;</li><li><a href="' . get_post_type_archive_link($post_type) . '">' . esc_html($post_type_object->labels->name) . '</a></li>';
        }
    }

    // タクソノミーのタームを取得して表示
    $taxonomies = get_object_taxonomies($post_type); // 投稿タイプに関連付けられたタクソノミーを取得
    $output_taxonomy = false; // 1つのタクソノミーだけを出力するためのフラグ

    if ($taxonomies) {
        foreach ($taxonomies as $taxonomy) {
            $terms = get_the_terms(get_the_ID(), $taxonomy);
            if ($terms && !is_wp_error($terms)) {
                $term = $terms[0]; // 最初のタームを取得
                echo '<li>&gt;</li><li><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
                $output_taxonomy = true;
                break; // 最初のタクソノミーだけを出力
            }
        }
    }

    // 現在の記事タイトルを表示
    echo '<li>&gt;</li><li>' . esc_html(get_the_title()) . '</li>';
}

// タクソノミー一覧ページの場合
elseif (is_tax()) {
    $term = get_queried_object();
    $taxonomy = $term->taxonomy;
    $post_type = get_taxonomy($taxonomy)->object_type[0]; // タクソノミーに関連付けられた投稿タイプを取得
    $post_type_object = get_post_type_object($post_type);

    // 投稿タイプのリンクを表示
    if ($post_type_object && $post_type_object->has_archive) {
        echo '<li>&gt;</li><li><a href="' . get_post_type_archive_link($post_type) . '">' . esc_html($post_type_object->labels->name) . '</a></li>';
    }

    // タクソノミーのリンクを表示
    echo '<li>&gt;</li><li><a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a></li>';
}

// その他の条件（固定ページ、カテゴリ、アーカイブなど）
elseif (is_page()) {
    global $post;

    if ($post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = [];
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li>&gt;</li><li><a href="' . get_permalink($page->ID) . '">' . esc_html(get_the_title($page->ID)) . '</a></li>';
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) echo $crumb;
    }
    echo '<li>&gt;</li><li>' . esc_html(get_the_title()) . '</li>';
} elseif (is_category()) {
    echo '<li>&gt;</li><li>' . esc_html(single_cat_title('', false)) . '</li>';
} elseif (is_post_type_archive()) {
    echo '<li>&gt;</li><li>' . esc_html(post_type_archive_title('', false)) . '</li>';
} elseif (is_archive()) {
    echo '<li>&gt;</li><li>' . esc_html(get_the_archive_title()) . '</li>';
} elseif (is_404()) {
    echo '<li>&gt;</li><li>ページが見つかりません</li>';
}

// パンくずリストの終了
echo '</ul></nav>';
?>
