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

// リダイレクト
function add_redirect_script() {
    // JavaScriptをエンキューする
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.location.hash === "#message") {
                window.location.href = "/message/";
            } else if (window.location.hash === "#company") {
                window.location.href = "/company/";
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'add_redirect_script');
