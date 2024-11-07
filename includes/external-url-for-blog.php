<?php
// 投稿のタクソノミーがblogの場合、外部リンクに遷移
function custom_permalink_for_news_type($url, $post) {
    if ($post->post_type === 'topics') {
        $terms = wp_get_post_terms($post->ID, 'news_type', array('fields' => 'slugs'));
        if (!is_wp_error($terms) && in_array('blog', $terms)) {
            $external_url = get_post_meta($post->ID, 'external_url', true);
            if ($external_url) {
                return esc_url($external_url);  // カスタムフィールドのURLに変更
            }
        }
    }
    return $url;
}
add_filter('post_type_link', 'custom_permalink_for_news_type', 10, 2);
