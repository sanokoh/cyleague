<?php
get_header();
?>


<main id="top_page">
    <section id="hero">
        <div class="hero-wrapper">
            <div class="hero">
                <video class="video-background" autoplay loop muted playsinline preload="none"
                    data-src="<?php echo STYLESHEET_DIRECTORY . '/assets/video/cyLeagu_top_move.mp4'; ?>"
                    poster="<?php echo STYLESHEET_DIRECTORY . '/assets/images/hero-placeholder.webp'; ?>">
                    <p>お使いのブラウザは動画をサポートしていません。</p>
                </video>
                <div class="hero__content container">
                    <h2 class="head">Protecting Today,<br>Empowering <br>Tomorrow’s Success</h2>
                    <p class="lead">お客様の事業の成長と発展を支える、総合的なサイバーセキュリティ企業へ</p>
                    <div class="news-box">
                        <div class="slide-wrapper">
                            <div class="slide-items">
                                <?php
                                // カスタム投稿タイプ 'topics, event' を取得するためのクエリ
                                $args = array(
                                    'post_type' => ['topics', 'event'],   // カスタム投稿タイプ名（複数）
                                    'posts_per_page' => 5,               // 5件取得
                                    'post_status' => 'publish',          // 公開されている投稿のみ取得
                                    'orderby' => 'date',                 // 日付で並び替え
                                    'order' => 'DESC'                    // 新しい順に並び替え
                                );
                                $news_query = new WP_Query($args);

                                // 投稿が存在する場合
                                if ($news_query->have_posts()):
                                    while ($news_query->have_posts()):
                                        $news_query->the_post();  // 現在の投稿データをセット
                                        ?>
                                        <div class="slide">
                                            <a href="<?php the_permalink(); ?>" class="slide-box">
                                                <p class="date">
                                                    <?php echo get_the_date('Y.m.d'); ?>
                                                    <?php
                                                    // カスタムタクソノミー 'news_type' を取得
                                                    $taxonomies = get_the_taxonomies(get_the_ID());
                                                    if (!empty($taxonomies)) {
                                                        foreach ($taxonomies as $taxonomy => $taxonomy_label) {
                                                            // それぞれのタクソノミーに紐づいたタームを取得
                                                            $terms = get_the_terms(get_the_ID(), $taxonomy);
                                                            if ($terms && !is_wp_error($terms)) {
                                                                foreach ($terms as $term) {
                                                                    // ターム名を表示
                                                                    echo '<span class="category">' . esc_html($term->name) . '</span>';
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </p>
                                                <p class="news-title">
                                                    <?php echo mb_strimwidth(get_the_title(), 0, 100, '...'); ?>
                                                </p>
                                            </a>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="arrow-box">
                            <!-- ここに矢印などのナビゲーションを追加 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-box--sp">
                <div class="slide-wrapper">
                    <div class="slide-items--sp">
                        <?php

                        // 投稿が存在する場合
                        if ($news_query->have_posts()):
                            while ($news_query->have_posts()):
                                $news_query->the_post();  // 現在の投稿データをセット
                                ?>
                                <div class="slide">
                                    <a href="<?php the_permalink(); ?>" class="slide-box">
                                        <p class="date">
                                            <?php echo get_the_date('Y.m.d'); ?>
                                            <?php
                                            // カスタムタクソノミー 'news_type' を取得
                                            $taxonomies = get_the_taxonomies(get_the_ID());
                                            if (!empty($taxonomies)) {
                                                foreach ($taxonomies as $taxonomy => $taxonomy_label) {
                                                    // それぞれのタクソノミーに紐づいたタームを取得
                                                    $terms = get_the_terms(get_the_ID(), $taxonomy);
                                                    if ($terms && !is_wp_error($terms)) {
                                                        foreach ($terms as $term) {
                                                            // ターム名を表示
                                                            echo '<span class="category">' . esc_html($term->name) . '</span>';
                                                        }
                                                    }
                                                }
                                            }
                                            ?>
                                        </p>
                                        <p class="news-title"><?php echo mb_strimwidth(get_the_title(), 0, 100, '...'); ?></p>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); // クエリをリセット ?>
                    </div>
                </div>
                <div class="arrow-box--sp">
                    <!-- ここに矢印などのナビゲーションを追加 -->
                </div>
            </div>
        </div>

    </section>
    <?php if (is_active_sidebar('banner-top')): ?>
        <?php dynamic_sidebar('banner-top'); ?>
    <?php endif; ?>
    <section id="about" class="about">
        <div class="pc-only">
            <div class="container">
                <div class="wrapper">
                    <div class="text-wrapper">
                        <div class="square-box">
                            <div class="square-box-wrapper">
                                <div class="inner-box">
                                    <span class="inner-box-text">Who We Are</span>
                                </div>
                                <h2 class="heading">サイリーグについて</h2>
                            </div>
                            <p class="description">お客様の事業の成長と発展を支える、総合的なサイバーセキュリティ企業へ</p>
                        </div>
                        <p class="more"> <a href="/about" class="more-button">More...</a> </p>
                    </div>
                    <div class="image-block image-block-left">
                        <picture>
                            <source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/top_about.png'; ?>"
                                type="image/webp">
                            <img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/top_about.png'; ?>"
                                alt="サイリーグについての説明セクションのイメージ" class="image" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp-only">
            <div class="container">
                <div class="square-box">
                    <div class="square-box-wrapper">
                        <div class="inner-box">
                            <span class="inner-box-text"></span>
                        </div>
                    </div>
                </div>
                <h2 class="header">
                    サイリーグHDについて
                </h2>
                <p class="sub">Who We Are</p>
            </div>
            <div class="image">
                <picture>
                    <source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/top_about.avif'; ?>"
                        type="image/webp">
                    <img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/top_about.png'; ?>"
                        alt="サイリーグについての説明セクションのイメージ" class="image" loading="lazy">
                </picture>
            </div>
            <div class="container">
                <p class="lead">
                    お客様の事業の成長と発展を支える、総合的なサイバーセキュリティ企業へ
                </p>
                <p class="more"> <a href="/about" class="more-button">More...</a> </p>
            </div>
        </div>
    </section>
    <section id="service" class="service">
        <div class="pc-only">
            <div class="container">
                <div class="wrapper">
                    <div class="image-block image-block-right">
                        <picture>
                            <source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/top_service.avif'; ?>"
                                type="image/webp">
                            <img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/top_service.jpg'; ?>"
                                alt="サイリーグの製品・サービスセクションのイメージ" class="image" loading="lazy">
                        </picture>
                    </div>
                    <div class="text-wrapper">
                        <div class="square-box">
                            <div class="square-box-wrapper">
                                <div class="inner-box">
                                    <span class="inner-box-text">Products <br> ＆ Services</span>
                                </div>
                                <h2 class="heading">製品・サービス</h2>
                            </div>
                            <p class="description">サイリーグHDのサイバーレジリエンス強化サービス</p>
                        </div>
                        <p class="more"> <a href="/service" class="more-button">More...</a> </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="sp-only">
            <div class="container">
                <div class="square-box">
                    <div class="square-box-wrapper">
                        <div class="inner-box">
                            <span class="inner-box-text"></span>
                        </div>
                    </div>
                </div>
                <h2 class="header">
                    製品・サービス
                </h2>
                <p class="sub">Products ＆ Services</p>
            </div>
            <div class="image">
                <picture>
                    <source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/top_service.avif'; ?>"
                        type="image/webp">
                    <img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/top_service.jpg'; ?>"
                        alt="サイリーグの製品・サービスセクションのイメージ" class="image" loading="lazy">
                </picture>
            </div>
            <div class="container">
                <p class="lead">
                サイリーグHDのサイバーレジリエンス強化サービス </p>
                <p class="more"> <a href="/service" class="more-button">More...</a> </p>
            </div>
        </div>
    </section>
    <section id="news_topics" class="news-topics">
        <div class="pc-only">
            <div class="container">
                <div class="wrapper">
                    <div class="text-wrapper">
                        <div class="square-box">
                            <div class="square-box-wrapper">
                                <div class="inner-box">
                                    <span class="inner-box-text">News <br>＆ Topics</span>
                                </div>
                                <h2 class="heading">ニュース & トピックス</h2>
                            </div>
                            <p class="description">事業活動、プロジェクト、各種リリースに関する情報をお届けします</p>
                        </div>
                        <p class="more"> <a href="/about" class="more-button">More...</a> </p>
                    </div>
                    <div class="image-block image-block-left">
                        <picture>
                            <source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/news＆topics.avif'; ?>"
                                type="image/webp">
                            <img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/news＆topics.png'; ?>"
                                alt="サイリーグについての説明セクションのイメージ" class="image" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp-only">
            <div class="container">
                <div class="square-box">
                    <div class="square-box-wrapper">
                        <div class="inner-box">
                            <span class="inner-box-text"></span>
                        </div>
                    </div>
                </div>
                <h2 class="header">
                    ニュース & トピックス
                </h2>
                <p class="sub">News ＆ Topics</p>
            </div>
            <div class="image">
                <picture>
                    <source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/news＆topics.avif'; ?>"
                        type="image/webp">
                    <img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/news＆topics.png'; ?>"
                        alt="サイリーグについての説明セクションのイメージ" class="image" loading="lazy">
                </picture>
            </div>
            <div class="container">
                <p class="lead">
                    事業活動、プロジェクト、各種リリースに関する情報をお届けします
                </p>
                <p class="more"> <a href="/about" class="more-button">More...</a> </p>
            </div>
        </div>
    </section>
    <section id="news" class="news">
        <div class="container wrapper">
            <!-- 資料ダウンロード -->
            <div class="post">
                <div class="header">
                    <div class="square-box">
                        <div class="square-box-wrapper">
                            <div class="inner-box">
                                <span class="inner-box-text"></span>
                            </div>
                        </div>
                    </div>
                    <div class="haader__wrapper">
                        <h2 class="header__title">資料ダウンロード</h2>
                        <span class="header__caption">Material Download</span>
                    </div>
                </div>

                <div class="post-list">
                    <?php
                    // カスタム投稿タイプ 'downloads' の最新3件を取得
                    $args = array(
                        'post_type' => 'downloads',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $downloads_query = new WP_Query($args);

                    if ($downloads_query->have_posts()):
                        while ($downloads_query->have_posts()):
                            $downloads_query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>" class="post-item">
                                <div class="text">
                                    <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>

                                    <?php
                                    // 資料カテゴリ（material_category）を表示（最初の1つだけ）
                                    $terms = get_the_terms(get_the_ID(), 'material_category');
                                    if ($terms && !is_wp_error($terms)) {
                                        $term = array_shift($terms);
                                        echo '<span class="category">' . esc_html($term->name) . '</span>';
                                    }
                                    ?>

                                    <p class="title"><?php echo mb_strimwidth(get_the_title(), 0, 100, '...'); ?></p>
                                </div>
                                <div class="arrow"></div>
                            </a>

                        <?php endwhile; ?>

                        <div class="more">
                            <?php
                            // downloads は has_archive=true 前提。falseなら固定ページURLにする必要あり
                            $downloads_archive_url = get_post_type_archive_link('downloads');
                            ?>
                            <a href="<?php echo esc_url($downloads_archive_url); ?>" class="more-button">More...</a>
                        </div>

                    <?php else: ?>
                        <p>資料が見つかりませんでした。</p>
                    <?php endif;

                    wp_reset_postdata();
                    ?>
                </div>
            </div>

            <!-- ブログ -->
            <div class="post">
                <div class="header">
                    <div class="square-box">
                        <div class="square-box-wrapper">
                            <div class="inner-box">
                                <span class="inner-box-text"></span>
                            </div>
                        </div>
                    </div>
                    <div class="haader__wrapper">
                        <h2 class="header__title">ブログ</h2>
                        <span class="header__caption">Blog</span>
                    </div>
                </div>
                <div class="post-list">
                    <?php
                    // 標準投稿（ブログ）の最新3件
                    $args = array(
                        'post_type' => 'post', // 標準投稿
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $post_query = new WP_Query($args);

                    if ($post_query->have_posts()):
                        while ($post_query->have_posts()):
                            $post_query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>" class="post-item">
                                <div class="text">
                                    <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>

                                    <?php
                                    // 標準カテゴリ（category）を表示（最初の1つだけ）
                                    $cats = get_the_category();
                                    if (!empty($cats)) {
                                        echo '<span class="category">' . esc_html($cats[0]->name) . '</span>';
                                    }
                                    ?>

                                    <p class="title"><?php echo mb_strimwidth(get_the_title(), 0, 100, '...'); ?></p>
                                </div>
                                <div class="arrow"></div>
                            </a>

                        <?php endwhile; ?>

                        <div class="more">
                            <?php
                            // ★「投稿ページ」（/blog/ など）へのリンク
                            $posts_page_id = get_option('page_for_posts');
                            $blog_url = $posts_page_id ? get_permalink($posts_page_id) : home_url('/');
                            ?>
                            <a href="<?php echo esc_url($blog_url); ?>" class="more-button">More...</a>
                        </div>

                    <?php else: ?>
                        <p>ブログが見つかりませんでした。</p>
                    <?php endif;

                    wp_reset_postdata();
                    ?>
                </div>

            </div>
            <div class="post">
                <div class="header">
                    <div class="square-box">
                        <div class="square-box-wrapper">
                            <div class="inner-box">
                                <span class="inner-box-text"></span>
                            </div>
                        </div>
                    </div>
                    <div class="header__wrapper">
                        <h2 class="header__title">イベント・セミナー情報</h2>
                        <span class="header__caption">Events & Seminars</span>
                    </div>
                </div>
                <div class="post-list">
                    <?php
                    // カスタム投稿タイプ 'event' の最新3件を取得するクエリ
                    $args = array(
                        'post_type' => 'event', // カスタム投稿タイプ 'event'
                        'posts_per_page' => 3,        // 表示する投稿数
                        'orderby' => 'date',   // 日付順に並び替え
                        'order' => 'DESC',   // 最新順に表示
                    );
                    $post_query = new WP_Query($args);

                    if ($post_query->have_posts()):
                        // 投稿ループ
                        while ($post_query->have_posts()):
                            $post_query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>" class="post-item">
                                <div class="text">
                                    <!-- 日付を動的に表示 -->
                                    <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>

                                    <!-- カテゴリ（タクソノミー）を動的に表示 -->
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'event_type'); // カスタムタクソノミー 'news_type'
                                    if ($terms && !is_wp_error($terms)):
                                        $term = array_shift($terms);
                                        ?>
                                        <span class="category"><?php echo esc_html($term->name); ?></span>
                                    <?php endif; ?>

                                    <!-- タイトルを動的に表示 -->
                                    <p class="title"><?php echo mb_strimwidth(get_the_title(), 0, 100, '...'); ?></p>
                                </div>
                                <div class="arrow"> </div>
                            </a>

                        <?php endwhile; ?>

                        <!-- More ボタン -->
                        <div class="more">
                            <a href="<?php echo get_post_type_archive_link('event'); ?>" class="more-button">More...</a>
                        </div>

                    <?php else: ?>
                        <p>トピックスが見つかりませんでした。</p>
                    <?php endif; ?>

                    <?php
                    // ループ後にクエリをリセット
                    wp_reset_postdata();
                    ?>
                </div>

            </div>
        </div>
    </section>
    <section id="group_companies" class="group-companies">
        <div class="container">
            <div class="header">
                <div class="square-box">
                    <div class="square-box-wrapper">
                        <div class="inner-box">
                            <span class="inner-box-text"></span>
                        </div>
                    </div>
                </div>
                <div class="header__wapper">
                    <h2 class="header__title">グループ会社</h2>
                    <span class="header__caption">Group Companies</span>
                </div>
            </div>
            <div class="companies-list">
                <?php
                $stylesheet_directory = get_stylesheet_directory_uri();
                $companies = [
                    [
                        'src' => "$stylesheet_directory/assets/images/change_holdings_logo",
                        'name' => '株式会社チェンジホールディングス',
                        'alt' => '株式会社チェンジホールディングスのロゴ'
                    ],
                    [
                        'src' => "$stylesheet_directory/assets/images/ideal_route_consulting_logo",
                        'name' => 'アイディルートコンサルティング株式会社',
                        'alt' => 'アイディルートコンサルティング株式会社のロゴ'
                    ],
                    [
                        'src' => "$stylesheet_directory/assets/images/e-guardian_logo",
                        'name' => 'イー・ガーディアン株式会社',
                        'alt' => 'イー・ガーディアン株式会社のロゴ'
                    ],
                    [
                        'src' => "$stylesheet_directory/assets/images/eg_secure_solution_logo",
                        'name' => 'EGセキュアソリューションズ株式会社',
                        'alt' => 'EGセキュアソリューションズ株式会社のロゴ'
                    ],
                ];

                foreach ($companies as $company): ?>
                    <div class="company">
                        <picture>
                            <source srcset="<?php echo $company['src'] . '.webp'; ?>" type="image/webp">
                            <img src="<?php echo $company['src'] . '.png'; ?>"
                                alt="<?php echo esc_attr($company['alt']); ?>" class="image" loading="lazy">
                        </picture>
                        <p class="name"><?php echo esc_html($company['name']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<div id="meter">
    <div class="progress"></div>
</div>
<?php get_footer(); ?>

