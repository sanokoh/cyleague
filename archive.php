<?php get_header(); // ヘッダーを読み込む ?>
<main>
	<div id="archive_page" class="content-area">

		<section id="main-content" class="site-main">
			<?php
			// 現在のカスタム投稿タイプを取得
			$post_type = get_post_type();
			?>
			<div id="mv">
				<?php if ($post_type == 'topics'): ?>
					<div class="mv mv-topics">
						<div class="mv-topics__content container">
						<?php elseif ($post_type == 'event'): ?>
							<div class="mv mv-event">
								<div class="mv-event__content container">
								<?php endif; ?>

								<?php
								// 現在のカスタム投稿タイプを取得
								$post_type = get_post_type();

								// カスタム投稿タイプのオブジェクトを取得
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
							</div> <!-- mv-topics__content container -->
						</div> <!-- mv-topics or mv-event -->
					</div>
		</section>

		<section id="breadcrumb">
			<?php if (function_exists('display_breadcrumb'))
				display_breadcrumb(); ?>
		</section>

		<?php
		// ポストを5個ずつ表示するクエリ設定
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => $post_type, // カスタム投稿タイプ $post_type を指定
			'posts_per_page' => 5, // 1ページに表示する投稿数
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

								<!-- カスタムタクソノミー 'news_type' を動的に表示 -->
								<?php
								$taxonomies = get_the_taxonomies(get_the_ID());
								if (!empty($taxonomies)):
									foreach ($taxonomies as $taxonomy => $taxonomy_label):
										$terms = get_the_terms(get_the_ID(), $taxonomy);
										if ($terms && !is_wp_error($terms)):
											foreach ($terms as $term): ?>
												<span class="post-category"><?php echo esc_html($term->name); ?></span>
											<?php endforeach;
										endif;
									endforeach;
								endif;
								?>

								<h2 class="post-title"><?php the_title(); ?></h2>
								<p class="detail"><?php echo get_post_meta($post->ID, 'date', true); ?></p>
								<p class="detail"><?php echo get_post_meta($post->ID, 'place', true); ?></p>
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
			<p>トピックスが見つかりませんでした。</p>
		<?php endif; ?>

		<?php wp_reset_postdata(); // クエリのリセット ?>
	</div><!-- #archive-page -->
</main><!-- #main-content -->

<?php get_footer(); // フッターを読み込む ?>

