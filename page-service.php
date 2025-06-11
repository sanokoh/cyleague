<?php
get_header();
?>

<main id="service_page">
	<section id="mv">
		<div class="mv">
			<div class="mv__content container">
				<h1 class="head">製品・サービス</h1>
				<p class="lead">Products ＆ Services</p>
			</div>
		</div>
	</section>
	<section id="breadcrumb">
		<?php
		if (function_exists('display_breadcrumb'))
			display_breadcrumb();
		?>

	</section>

	<section id="solution">
		<div class="solution container">
			<div class="solution-content">
				<div class="image-block">
					<picture>
						<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.webp'; ?>"
							type="image/webp">
						<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.png'; ?>"
							alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
					</picture>
				</div>
				<div class="text-block">
					<h2 class="heading">特定から復旧まで
						<br>幅広いソリューションをワンストップで提供しています
					</h2>
				</div>
			</div>
			<div class="solution-table ">
				<a href="<?php echo STYLESHEET_DIRECTORY . '/assets/images/solution_table.png'; ?>" target="_blank">
					<picture>
						<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/solution_table.png'; ?>"
							type="image/webp">
						<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/solution_table.png'; ?>"
							alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
					</picture>
				</a>
			</div>
		</div>
	</section>
	<section id="ir_service">
		<div class="ir_service container">
			<div class="ir_service-content">
				<div class="image-block">
					<picture>
						<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.webp'; ?>"
							type="image/webp">
						<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.png'; ?>"
							alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
					</picture>
				</div>
				<div class="text-block">
					<h2 class="heading">CyLeagueサイバーレジリエンス・パッケージ </h2>
				</div>
				<p class="lead">年間100万円で、“いざ”というときに動ける体制を確保できるS&JとサイリーグHDの共同開発サービス</p>
				<a href="/ir_service" class="more-button">More... </a>
			</div>

		</div>
	</section>
	<section id="group">
		<div class="group container">
			<div class="group-content">
				<div class="image-block">
					<picture>
						<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.webp'; ?>"
							type="image/webp">
						<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.png'; ?>"
							alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
					</picture>
				</div>
				<div class="text-block">
					<h2 class="heading">Group Solution
					</h2>
				</div>
			</div>
			<div class="group-solution">

				<?php
				// カスタム投稿タイプ 'products' を取得するためのクエリ
				$args = array(
					'post_type' => 'products',  // カスタム投稿タイプ名
					'posts_per_page' => -1,         // すべての投稿を取得
					'post_status' => 'publish',  // 公開されている投稿のみ取得
					'orderby' => 'date',     // 日付で並び替え
					'order' => 'ASC'      // 新しい順に並び替え
				);

				// クエリを実行
				$service_query = new WP_Query($args);

				// 投稿が存在する場合
				if ($service_query->have_posts()):

					echo '<div class="service-list">';

					// 投稿ループ開始
					while ($service_query->have_posts()):
						$service_query->the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="service-thumbnail">
								<?php
								// アイキャッチ画像を表示
								if (has_post_thumbnail()) {
									the_post_thumbnail('large');
								}
								?>
							</div>
							<h2 class="service-title">
								<?php the_title(); ?>
							</h2>


							<div class="service-content">
								<?php
								the_content();
								?>
							</div>

							<div class="service-meta">
								<?php
								// カスタムフィールドを取得して表示
								$url = get_post_meta(get_the_ID(), 'url', true);
								if ($url) {
									echo '<div class="buttons">';
									echo '<a href="' . esc_url($url) . '" class="more-button" target="_blank" rel="noopener noreferrer"> More... </a>';
									echo '</div>';
								}
								?>
							</div>
						</article>

						<?php
						// ループ終了
					endwhile;

					echo '</div>';

				else:

					// 投稿が存在しない場合のメッセージ
					echo '<p>現在、サービスは登録されていません。</p>';

				endif;

				// クエリをリセット
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>

</main>
<?php get_footer(); ?>

