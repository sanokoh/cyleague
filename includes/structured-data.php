<?php

// 構造化データ生成関数
function generate_structured_data($data) {
  ?>
  <script type="application/ld+json">
    <?php echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>
  </script>
  <?php
}

// JSONファイルを読み込む関数
function load_json_file($file_path) {
    $json_content = file_get_contents($file_path);
    return json_decode($json_content, true);
}

// 特定のページに構造化データを追加
function add_structured_data_to_specific_page() {
  if (is_page('company')) {
    // 会社概要の構造化データをJSONファイルから読み込み
    $data = load_json_file(get_template_directory() . '/includes/json/company-structured-data.json');
    generate_structured_data($data);

  } elseif (is_page('message')) {
    // メッセージページの構造化データをJSONファイルから読み込み
    $data = load_json_file(get_template_directory() . '/includes/json/message-structured-data.json');
    generate_structured_data($data);
  } elseif (is_page('service')) {
    // メッセージページの構造化データをJSONファイルから読み込み
    $data = load_json_file(get_template_directory() . '/includes/json/solution-table-structured-data.json');
    generate_structured_data($data);
  }
}

add_action('wp_footer', 'add_structured_data_to_specific_page');
