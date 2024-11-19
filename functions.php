<?php
define('STYLESHEET_DIRECTORY', get_stylesheet_directory_uri());

// includesディレクトリのファイルを読み込む
require_once get_template_directory() . '/includes/theme-setup.php';
require_once get_template_directory() . '/includes/slick.php';
require_once get_template_directory() . '/includes/scripts-styles.php';
require_once get_template_directory() . '/includes/security-performance.php';
require_once get_template_directory() . '/includes/seo-optimization.php';
require_once get_template_directory() . '/includes/performance-optimization.php';
require_once get_template_directory() . '/includes/custom-post-types.php';
require_once get_template_directory() . '/includes/custom-taxonomies.php';
require_once get_template_directory() . '/includes/structured-data.php'; // 構造化データの読み込み
require_once get_template_directory() . '/includes/breadcrumb.php'; // パンくずリスト
require_once get_template_directory() . '/includes/external-url-for-blog.php';  // タームがblogのとき、外部リンクが設定されていれば外部リンクに遷移

// メタボックスの追加
function add_custom_meta_box() {
    // topics と event 投稿タイプにメタボックスを追加
    add_meta_box(
        'contact_info_meta_box',
        'お問い合わせ先の選択',
        'render_contact_info_meta_box',
        ['topics', 'event'], // 複数の投稿タイプに対応
        'side'
    );
}
add_action('add_meta_boxes', 'add_custom_meta_box');

// メタボックスのレンダリング
function render_contact_info_meta_box($post) {
    // 現在のメタデータ値を取得、空の場合は "cyleague" をデフォルト値とする
    $selected_contact = get_post_meta($post->ID, '_selected_contact_info', true);
    if (empty($selected_contact)) {
        $selected_contact = 'cyleague';
    }

    // ラジオボタンのレンダリング（無選択状態も可能に）
    ?>
    <label>
        <input type="radio" name="selected_contact_info" value="" <?php checked($selected_contact, ''); ?>>
        非表示
    </label><br>
    <label>
        <input type="radio" name="selected_contact_info" value="cyleague" <?php checked($selected_contact, 'cyleague'); ?>>
        サイリーグホールディングス株式会社
    </label>
    <?php
}

// データの保存処理
function save_contact_info_meta($post_id) {
    // 自動保存や権限のチェック
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['selected_contact_info'])) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // メタデータの更新（無選択時には空文字で保存）
    update_post_meta($post_id, '_selected_contact_info', $_POST['selected_contact_info']);
}
add_action('save_post', 'save_contact_info_meta');
