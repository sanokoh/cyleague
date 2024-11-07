<?php
get_header();
?>


<main id="top_page">
    <section id="hero">
        <div class="hero">
            <video class="video-background" autoplay loop muted playsinline>
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/cyLeagu_top_move.mp4'; ?>" type="video/mp4">
                お使いのブラウザは動画をサポートしていません。
            </video>
            <div class="hero__content container">
                <h2 class="head">Protecting Today,<br>Empowering <br>Tomorrow’s Success</h2>
                <p class="lead">お客様の事業の成長と発展を支える、総合的なサイバーセキュリティ企業へ</p>
                <div class="news-box">
                    <div class="slide-wrapper">
                        <ul class="slide-items">
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
                                    <li class="slide">
                                        <!-- aタグはliの中で使用 -->
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
                                            <p class="news-title"><?php the_title(); ?></p>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); // クエリをリセット ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="arrow-box">
                        <!-- ここに矢印などのナビゲーションを追加 -->
                    </div>
                </div>
            </div>
        </div>
        <div class="news-box--sp">
            <div class="slide-wrapper">
                <ul class="slide-items--sp">
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
                            <li class="slide">
                                <!-- aタグはliの中で使用 -->
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
                                    <p class="news-title"><?php the_title(); ?></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); // クエリをリセット ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="arrow-box--sp">
                <!-- ここに矢印などのナビゲーションを追加 -->
            </div>
        </div>
    </section>
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
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/top_about.png'; ?>"
                                type="image/webp">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/top_about.png'; ?>"
                                alt="サイリーグについての説明セクションのイメージ" class="image">
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
                    サイリーグについて
                </h2>
                <p class="sub">Who We Are</p>
            </div>
            <div class="image">
                <picture>
                    <source srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/top_about.avif'; ?>"
                        type="image/webp">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/top_about.png'; ?>"
                        alt="サイリーグについての説明セクションのイメージ" class="image">
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
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/top_service.avif'; ?>"
                                type="image/webp">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/top_service.jpg'; ?>"
                                alt="サイリーグの製品・サービスセクションのイメージ" class="image">
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
                            <p class="description">特定から検知・対応・復旧まで幅広いソリューションを提供しています</p>
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
                    <source srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/top_service.avif'; ?>"
                        type="image/webp">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/top_service.jpg'; ?>"
                        alt="サイリーグの製品・サービスセクションのイメージ" class="image">
                </picture>
            </div>
            <div class="container">
                <p class="lead">
                    特定から検知・対応・復旧まで幅広いソリューションを提供しています
                </p>
                <p class="more"> <a href="/service" class="more-button">More...</a> </p>
            </div>
        </div>
    </section>
    <section id="news" class="news">
        <div class="container wrapper">
            <div class="post">
                <div class="header">
                    <div class="square-box">
                        <div class="square-box-wrapper">
                            <div class="inner-box">
                                <span class="inner-box-text"></span>
                            </div>
                        </div>
                    </div>
                    <h2 class="header__title">トピックス</h2>
                    <span class="header__caption">News & Topics</span>
                </div>
                <div class="post-list">
                    <?php
                    // カスタム投稿タイプ 'topics' の最新3件を取得するクエリ
                    $args = array(
                        'post_type' => 'topics', // カスタム投稿タイプ 'topics'
                        'posts_per_page' => 3,        // 表示する投稿数
                        'orderby' => 'date',   // 日付順に並び替え
                        'order' => 'DESC',   // 最新順に表示
                    );
                    $topics_query = new WP_Query($args);

                    if ($topics_query->have_posts()):
                        // 投稿ループ
                        while ($topics_query->have_posts()):
                            $topics_query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>" class="post-item">
                                <div class="text">
                                    <!-- 日付を動的に表示 -->
                                    <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>

                                    <!-- カテゴリ（タクソノミー）を動的に表示 -->
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'news_type'); // カスタムタクソノミー 'news_type'
                                    if ($terms && !is_wp_error($terms)):
                                        $term = array_shift($terms);
                                        ?>
                                        <span class="category"><?php echo esc_html($term->name); ?></span>
                                    <?php endif; ?>

                                    <!-- タイトルを動的に表示 -->
                                    <p class="title"><?php the_title(); ?></p>
                                </div>
                                <div class="arrow"> </div>
                            </a>

                        <?php endwhile; ?>

                        <!-- More ボタン -->
                        <div class="more">
                            <a href="<?php echo get_post_type_archive_link('topics'); ?>" class="more-button">More...</a>
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
            <div class="post">
                <div class="header">
                    <div class="square-box">
                        <div class="square-box-wrapper">
                            <div class="inner-box">
                                <span class="inner-box-text"></span>
                            </div>
                        </div>
                    </div>
                    <h2 class="header__title">イベント・セミナー情報</h2>
                    <span class="header__caption">Events & Seminars</span>
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
                    $topics_query = new WP_Query($args);

                    if ($topics_query->have_posts()):
                        // 投稿ループ
                        while ($topics_query->have_posts()):
                            $topics_query->the_post(); ?>

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
                                    <p class="title"><?php the_title(); ?></p>
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
                <h2 class="header__title">グループ会社</h2>
                <span class="header__caption">Group Company</span>
            </div>
            <div class="companies-list">
                <div class="company">
                    <picture>
                        <source
                            srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/change_holdings_logo.avif'; ?>"
                            type="image/webp">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/change_holdings_logo.png'; ?>"
                            alt="株式会社チェンジホールディングスのロゴ" class="image">
                    </picture>
                    <p class="name">株式会社チェンジホールディングス</p>
                </div>
                <div class="company">
                    <picture>
                        <source
                            srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/ideal_route_consulting_logo.webp'; ?>"
                            type="image/webp">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ideal_route_consulting_logo.png'; ?>"
                            alt="アイディールルートコンサルティング株式会社のロゴ"" class=" image">
                    </picture>
                    <p class="name">アイディールルートコンサルティング株式会社</p>
                </div>
                <div class="company">
                    <picture>
                        <source
                            srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/e-guardian_logo.webp'; ?>"
                            type="image/webp">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/e-guardian_logo.png'; ?>"
                            alt="イー・ガーディアン株式会社のロゴ" class="image">
                    </picture>
                    <p class="name">イー・ガーディアン株式会社</p>
                </div>
                <div class="company">
                    <picture>
                        <source
                            srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/eg_secure_solution_logo.webp'; ?>"
                            type="image/webp">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/eg_secure_solution_logo.png'; ?>"
                            alt="EGセキュアソリューションズ株式会社のロゴ" class="image">
                    </picture>
                    <p class="name">EGセキュアソリューションズ株式会社</p>
                </div>
            </div>
        </div>
    </section>
</main>

<div id="meter">
    <div class="progress"></div>
</div>

<script>
    window.addEventListener('scroll', function () {
        const scrollPercentage = window.scrollY / (document.body.scrollHeight - window.innerHeight);
        const height = Math.min(scrollPercentage * 100, 100); // 最大100%
        document.querySelector('#meter .progress').style.height = `${height}%`;
    });

</script>

<?php get_footer(); ?>

