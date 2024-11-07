<?php

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

