<?php
/**
 * The template for displaying taxonomy archive pages
 *
 * @package YourThemeName
 */

get_header(); // ヘッダーを読み込む
?>

<div id="archive_page" class="content-area">
	<main id="main-content" class="site-main">
		<?php
		// 現在のタクソノミーとタームを取得
		$taxonomy = get_queried_object()->taxonomy;
		$term = get_queried_object();
		?>

		<section id="breadcrumb">
			<?php
			if (function_exists('display_breadcrumb'))
				display_breadcrumb();
			?>
		</section>

		<?php
		// ポストを5個ずつ表示するクエリ設定
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => ['event', 'topics'], // 複数のカスタム投稿タイプを指定
			'tax_query' => array(
				array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => $term->slug,
				),
			),
			'posts_per_page' => 5,
			'paged' => $paged
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
								<!-- 日付を動的に表示 -->
								<span class="post-date"><?php echo get_the_date('Y.m.d'); ?></span>

								<!-- タクソノミーとターム名を動的に表示 -->
								<?php
								$terms = get_the_terms(get_the_ID(), $taxonomy);
								if ($terms && !is_wp_error($terms)) {
									foreach ($terms as $term) {
										echo '<span class="post-category">' . esc_html($term->name) . '</span>';
									}
								}
								?>
								<h2 class="post-title"><?php the_title(); ?></h2>
							</div>
							<div class="arrow"> </div>
						</a>
					</article>
					<hr class="post-divider">
				<?php endwhile; ?>
			</div><!-- .archive-posts -->

			<div class="pagination">
				<?php
				// ページネーションを表示
				echo paginate_links(array(
					'total' => $the_query->max_num_pages,
					'prev_text' => 'Previous',
					'next_text' => 'Next',
				));
				?>
			</div><!-- .pagination -->

		<?php else: ?>
			<div class="container-small">
				<p>該当する投稿が見つかりませんでした。</p>
			</div>
		<?php endif; ?>

		<?php
		// クエリのリセット
		wp_reset_postdata();
		?>

	</main><!-- #main-content -->
</div><!-- #archive-page -->

<?php
get_footer(); // フッターを読み込む
?>
