<?php get_header(); ?>
<main>
    <div id="archive_page" class="content-area">
        <section id="main-content" class="site-main">
            <?php
            // 現在のカスタム投稿タイプを取得
            $post_type = get_post_type();
            $is_light_logo = ($post_type === 'topics' || $post_type === 'event');
            ?>

            <div id="mv">
                <?php if ($is_light_logo): ?>
                    <div class="mv <?php echo 'mv-' . $post_type; ?>">
                        <div class="mv-<?php echo $post_type; ?>__content container">
                            <?php
                            $post_type_obj = get_post_type_object($post_type);
                            ?>

                            <!-- カスタム投稿タイプのラベルを使用してタイトルとリードを表示 -->
                            <?php if ($post_type_obj): ?>
                                <h1 class="head"><?php echo esc_html($post_type_obj->labels->name); ?></h1>
                                <p class="lead"><?php echo esc_html($post_type_obj->description); ?></p>
                            <?php else: ?>
                                <!-- デフォルトのタイトルとリード文を表示 -->
                                <h1 class="head">製品・サービス</h1>
                                <p class="lead">Products ＆ Services</p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <section id="breadcrumb">
            <?php if (function_exists('display_breadcrumb'))
                display_breadcrumb(); ?>
        </section>

        <?php
        // 現在のページ番号を取得
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => 5,
            'paged' => $paged,
        );
        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()): ?>
            <div class="archive-posts container-small">
                <?php while ($the_query->have_posts()):
                    $the_query->the_post(); ?>
                    <article class="post-item">
                        <a href="<?php the_permalink(); ?>" class="post-link">
                            <div class="post-meta">
                                <span class="post-date"><?php echo get_the_date('Y.m.d'); ?></span>

                                <?php
                                // news_type と event_type のタクソノミーを一度に処理
                                $taxonomies = ['news_type', 'event_type'];

                                foreach ($taxonomies as $taxonomy) {
                                    $terms = get_the_terms(get_the_ID(), $taxonomy);
                                    if ($terms && !is_wp_error($terms)):
                                        foreach ($terms as $term): ?>
                                            <span class="post-category"><?php echo esc_html($term->name); ?></span>
                                        <?php endforeach;
                                    endif;
                                }

                                ?>

                                <h2 class="post-title"><?php the_title(); ?></h2>
                                <p class="detail"><?php echo esc_html(get_post_meta(get_the_ID(), 'date', true)); ?></p>
                                <p class="detail"><?php echo esc_html(get_post_meta(get_the_ID(), 'place', true)); ?></p>
                            </div>
                            <div class="arrow"> </div>
                        </a>
                    </article>
                    <hr class="post-divider">
                <?php endwhile; ?>
            </div><!-- .archive-posts -->

            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $the_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => 'Previous',
                    'next_text' => 'Next',
                    'end_size' => 1,
                    'mid_size' => 2,
                    'aria_label' => 'Pagination', // アクセシビリティ向上
                ));
                ?>
            </div><!-- .pagination -->

        <?php else: ?>
            <p>トピックスが見つかりませんでした。</p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div><!-- #archive-page -->
</main>

<?php get_footer(); ?>

