<?php

// テーマのヘッダーを読み込む
get_header(); ?>

<div id="product" class="content-area">
	<main id="main" class="site-main">
		<div class="container">



			<?php
			// 投稿が存在する場合、ループで表示
			if (have_posts()):

				while (have_posts()):
					the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


						<div class="entry-content">
							<?php
							// アイキャッチ画像（サムネイル）を表示
							if (has_post_thumbnail()) {
								the_post_thumbnail('large');
							}
							the_title('<h2 class="entry-title">', '</h2>'); ?>

							<?php
							// 本文の内容を表示
							the_content();
							// カスタムフィールドを取得して表示
							$url = get_post_meta(get_the_ID(), 'url', true);
							if ($url) {
								echo '<div class="buttons">';
								echo '<a href="' . esc_url($url) . '" class="more-button"> More... </a>';
								echo '</div>';
							}
							?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">

						</footer><!-- .entry-footer -->

					</article><!-- #post-<?php the_ID(); ?> -->

					<?php

				endwhile;

			else:

				// 投稿がない場合のメッセージ
				echo '<p>' . __('Sorry, no posts matched your criteria.', 'yourtheme') . '</p>';

			endif; ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
// テーマのフッターを読み込む
get_footer();
