<?php

// メタタグとSEO最適化

// カスタムファビコンの追加（ファビコンのアイコンを設定する）
function add_custom_favicon()
{
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/images/favicon.ico" type="image/x-icon">';
}
add_action('wp_head', 'add_custom_favicon');

// Open Graphタグの追加（SNS共有時に最適なタイトル、画像、URLを設定）
function add_open_graph_tags()
{

    global $post;
    echo '<meta property="og:title" content="' . get_the_title() . '"/>'; // 記事のタイトル
    echo '<meta property="og:description" content="' . get_the_excerpt() . '"/>'; // 記事の抜粋（説明）
// サムネイルが設定されている場合はそれを使用し、なければサイトのロゴを使用
    $og_image = get_the_post_thumbnail_url($post->ID, 'full') ?: get_site_icon_url();
    echo '<meta property="og:image" content="' . esc_url($og_image) . '"/>'; // サムネイル画像またはサイトロゴ
    echo '<meta property="og:url" content="' . get_permalink() . '"/>'; // 記事のURL
    echo '<meta property="og:type" content="article"/>'; // 記事タイプを指定

}
add_action('wp_head', 'add_open_graph_tags');

// 構造化データの追加（Googleなどの検索エンジンに対して、ページ情報をより正確に提供）
function add_structured_data()
{
    if (is_single()) { // 投稿ページにのみ適用
        echo '<script type="application/ld+json">';
        echo json_encode(array(
            "@context" => "https://schema.org", // 構造化データのコンテキスト
            "@type" => "Article", // 記事として扱う
            "headline" => get_the_title(), // 記事のタイトル
            "image" => get_the_post_thumbnail_url(), // 記事のサムネイル画像
            "author" => array(
                "@type" => "Person",
                "name" => get_the_author(), // 記事の著者名
            ),
            "datePublished" => get_the_date(), // 記事の公開日
        ));
        echo '</script>';
    }
}
add_action('wp_head', 'add_structured_data');

// メタタグの追加（投稿やページごとに動的なメタディスクリプションを生成）
function add_meta_tags()
{
    if (is_single() || is_page()) { // 投稿または固定ページにのみ適用
        global $post;
        $description = strip_tags($post->post_excerpt); // 抜粋をメタディスクリプションに使用
        if (empty($description)) {
            $description = mb_substr(strip_tags($post->post_content), 0, 160); // 抜粋がない場合、本文から抜粋
        }
        echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n"; // メタディスクリプションを出力
    }
}
add_action('wp_head', 'add_meta_tags');

// canonical URLの追加（ページが重複コンテンツとして扱われないようにする）
function add_canonical_url()
{
    if (is_singular()) { // 投稿や固定ページに適用
        echo '<link rel="canonical" href="' . get_permalink() . '" />' . "\n"; // 正規のURLを指定
    }
}
add_action('wp_head', 'add_canonical_url');

// 404ページが表示された際に、トップページにリダイレクト（不要な404エラーを避けるため）
function redirect_to_canonical()
{
    if (is_404()) { // 404エラーが発生した場合
        wp_redirect(home_url(), 301); // ホームページに301リダイレクト
        exit(); // 処理を終了
    }
}
// add_action('template_redirect', 'redirect_to_canonical');

function add_noindex_meta_tags() {
    if (is_archive() ||        // アーカイブページ
        is_search() ||         // 検索結果ページ
        is_tag() ||            // タグページ
        is_author() ||         // 著者ページ
        is_date() ||           // 日付アーカイブページ
        is_paged() ||          // ページネーション
        is_page('privacy-policy') ||   // プライバシーポリシー
        is_page('terms-of-service')) { // 利用規約ページ（ページ名は適宜変更してください）

        echo '<meta name="robots" content="noindex, follow">';
    }
}
add_action('wp_head', 'add_noindex_meta_tags');
