<?php
// ウィジェットの初期化と登録
function register_custom_widgets() {
    // サイドバーウィジェット
    register_sidebar(array(
        'name'          => 'サイドバー',
        'id'            => 'sidebar',
        'description'   => 'サイドバーのウィジェットエリア',
        'before_widget' => '<div class="widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));

    // フッターウィジェット
    register_sidebar(array(
        'name'          => 'フッター',
        'id'            => 'footer',
        'description'   => 'フッターのウィジェットエリア',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>'
    ));
}
add_action('widgets_init', 'register_custom_widgets');
