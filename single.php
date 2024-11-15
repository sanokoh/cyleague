<?php
/**
 * The template for displaying all single posts
 *
 * @package YourThemeName
 */

get_header(); // ヘッダーを読み込む
?>

<div id="single_page" class="content-area">
    <main id="main-content" class="site-main">
        <section id="breadcrumb container">
            <?php
            if (function_exists('display_breadcrumb'))
                display_breadcrumb();
            ?>

        </section>
        <div class="single-post container-small">


            <?php
            // 投稿が存在する場合
            if (have_posts()):

                // ループ開始
                while (have_posts()):
                    the_post();
                    $post_type = get_post_type();  // カスタム投稿タイプ取得

                    ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <header class="entry-header">
                            <div class="entry-meta">
                            <?php
                                // 出力するタクソノミーの配列
                                $taxonomies = ['event_type', 'news_type'];
                                foreach ($taxonomies as $taxonomy) {
                                    if (taxonomy_exists($taxonomy)) {
                                        the_terms(get_the_ID(), $taxonomy, '<div class="entry-category">', '', '</div>');
                                    }
                                }
                                ?>
                                <p class="entry-date"><?php echo get_the_date('Y.m.d'); ?></p>

                                <?php
                                // 投稿のタイトルを表示
                                the_title('<h1 class="entry-title">', '</h1>');
                                ?>

                            </div><!-- .entry-meta -->
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php
                            // アイキャッチ画像が設定されている場合は表示
                            if (has_post_thumbnail()) {
                                echo '<div class="entry-thumbnail">' . get_the_post_thumbnail(get_the_ID(), 'large') . '</div>';
                            }


                            // 投稿の本文を表示
                            the_content();

                            $external_url = get_post_meta($post->ID, 'external_url', true);
                            // if ($external_url) {
                            //     echo $external_url;
                            // }
                            ?>
                            <?php if (get_post_type() === 'event'): ?>
                                <?php
                                $date = get_post_meta($post->ID, 'date', true);
                                $place = get_post_meta($post->ID, 'place', true);
                                $detail = get_post_meta($post->ID, 'detail', true);

                                if ($date || $place || $detail): ?>
                                    <hr class="wp-block-separator has-alpha-channel-opacity">
                                    <?php if ($date): ?>
                                    <h2 class="wp-block-heading">日時</h2>
                                        <p><?php echo $date; ?></p>
                                    <?php endif; ?>

                                    <?php if ($place): ?>
                                    <h2 class="wp-block-heading">場所</h2>
                                        <p><?php echo $place; ?></p>
                                    <?php endif; ?>

                                    <?php if ($detail): ?>
                                    <h2 class="wp-block-heading">詳細</h2>
                                        <a href="<?php echo $detail; ?>"  target="_blank" rel="noopener noreferrer" class="detail"><?php echo $detail; ?></a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <hr class="wp-block-separator has-alpha-channel-opacity">

                            <!-- <div class="contact-info">
                                <p>本件に関するお問い合わせ先
                                    <br>サイリーグホールディングス株式会社
                                    <br>Email：<a href="mailto:info@cyleague.jp">info@cyleague.jp</a>
                                    <br>Tel：03-6435-7338
                                </p>
                            </div> -->
                        </div><!-- .entry-content -->


                    </article><!-- #post-<?php the_ID(); ?> -->

                    <?php
                    // ループ終了
                endwhile;

            else:

                // 投稿がない場合のメッセージ
                echo '<p>' . __('Sorry, no posts matched your criteria.', 'your-theme-textdomain') . '</p>';

            endif;
            ?>
            <?php
            // 投稿タイプのアーカイブURLを取得
            $archive_url = get_post_type_archive_link($post_type);

            // アーカイブページが存在する場合のみボタンを表示
            if ($archive_url): ?>
                <div class="back-to-archive">
                    <a href="<?php echo esc_url($archive_url); ?>" class="back-button">Back to Index</a>
                </div>
            <?php endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar(); // サイドバーを読み込む
get_footer();  // フッターを読み込む

