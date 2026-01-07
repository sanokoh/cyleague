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
					<h2 class="heading">サイリーグHDのサイバーレジリエンス強化サービス
					</h2>
				</div>
			</div>
			<div class="solution-lead">
				<h3 class="sub-heading">サイバー攻撃に“備える力”と“立て直す力”を、すべての組織に。 </h3>
				<p class="lead">
					サイリーグHDは、「すべての組織にサイバーレジリエンスを」というミッションのもと、企業・医療機関・公共機関の事業継続を支える実践的なセキュリティサービスを提供しています。
					<br>
					<br>高度化するサイバー攻撃に対して、防御だけでは十分ではありません。
					<br>私たちは、平時の備えと、有事の対応を一体化したサービスで、「攻撃を受けても早期に復旧し、事業を継続できる力＝サイバーレジリエンス」の実装を支援しています。
					<br>
					<br>多様な業種・規模の組織に最適なサービス体系で、レジリエンスの底上げを実現します。
				</p>
			</div>

			<!-- <div class="solution-table ">
				<a href="<?php echo STYLESHEET_DIRECTORY . '/assets/images/solution_table.png'; ?>" target="_blank">
					<picture>
						<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/solution_table.png'; ?>"
							type="image/webp">
						<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/solution_table.png'; ?>"
							alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
					</picture>
				</a>
			</div> -->
		</div>
	</section>
	<section id="our_services">
		<div class="our-services container">
			<div class="our-services__head">
				<div class="header">
					<div class="square-box">
						<div class="square-box-wrapper">
							<div class="inner-box">
								<span class="inner-box-text"></span>
							</div>
						</div>
					</div>
					<h2 class="heading">サイリーグHDが提供するサービスラインアップ</h2>
					<p class="sub-title">Our Services</p>
				</div>
			</div>
			<div class="our-services__contents">

				<div class="content">
					<div class="content__text">
						<div class="text-company-mark">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark_white.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</div>
						<div class="text-wrapper">

							<h3 class="header">
								<span>事前契約型インシデント対応サービス</span><br>
								CyLeague サイバーレジリエンス・パッケージ
							</h3>
							<h4 class="sub-header">
								すべての企業・組織向けパッケージ

							</h4>
							<p class="lead">
								インシデント発生時の即応体制を確保し、平時の備えも含めて事業継続力を高める年間契約型サービス
							</p>
							<a href="#" class="btn-detail">詳細を見る</a>

							<hr class="border">
							<h3 class="header">
								医療機関向けパッケージ
							</h3>
							<p class="lead">
								医療特有の課題（電子カルテ・医療機器ネットワーク・BCP実効性など）に対応した専用プラン </p>
							<a href="#" class="btn-detail">詳細を見る</a>
						</div>
					</div>
					<div class="content__pic">
						<picture>
							<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_01.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_01.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</picture>
					</div>
				</div>
				<div class="content">
					<div class="content__text">
						<div class="text-company-mark">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark_white.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</div>
						<div class="text-wrapper">

							<h3 class="header">
								インシデント対応演習
							</h3>
							<p class="lead">
								サイバー攻撃を想定した実践的な演習を通じて、CSIRTや関係部門が「本当に動ける体制」を構築
							</p>
							<a href="#" class="btn-detail">詳細を見る</a>
						</div>
					</div>
					<div class="content__pic">
						<picture>
							<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_02.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_02.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</picture>
					</div>
				</div>
				<div class="content">
					<div class="content__text">
						<div class="text-company-mark">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark_white.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</div>
						<div class="text-wrapper">

							<h3 class="header">
								経営層向けセキュリティ研修
							</h3>
							<p class="lead">
								役員・経営層が“企業価値とサイバーリスク”を正しく理解し、戦略的に意思決定できるよう支援する研修プログラム </p>
							<a href="#" class="btn-detail">詳細を見る</a>
						</div>
					</div>
					<div class="content__pic">
						<picture>
							<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_03.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_03.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</picture>
					</div>
				</div>

				<div class="content">
					<div class="content__text">
						<div class="text-company-mark">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark_white.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</div>
						<div class="text-wrapper">

							<h3 class="header">
								セキュリティ規程の改訂支援 </h3>
							<p class="lead">
								最新の脅威動向・法規制・ガイドラインに対応し、実務で運用可能な規程体系へと再設計
							</p>
							<a href="#" class="btn-detail">詳細を見る</a>
						</div>
					</div>
					<div class="content__pic">
						<picture>
							<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_04.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_04.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</picture>
					</div>
				</div>
				<div class="content">
					<div class="content__text">
						<div class="text-company-mark">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark_white.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</div>
						<div class="text-wrapper">

							<h3 class="header">
								セキュリティアセスメントサービス
							</h3>
							<p class="lead">
								現状のセキュリティ対策・体制を多角的に評価し、改善すべきポイントを可視化するアセスメントサービス
							</p>
							<a href="#" class="btn-detail">詳細を見る</a>
						</div>
					</div>
					<div class="content__pic">
						<picture>
							<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_05.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_05.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</picture>
					</div>
				</div>
				<div class="content">
					<div class="content__text">
						<div class="text-company-mark">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark_white.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</div>
						<div class="text-wrapper">

							<h3 class="header">
								CSIRT 構築支援
							</h3>
							<p class="lead">
								初動対応フロー、体制設計、ロール分担など、実効性あるCSIRTを構築
							</p>
							<a href="#" class="btn-detail">詳細を見る</a>
						</div>
					</div>
					<div class="content__pic">
						<picture>
							<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_06.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_06.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</picture>
					</div>
				</div>
				<div class="content">
					<div class="content__text">
						<div class="text-company-mark">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark_white.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</div>
						<div class="text-wrapper">

							<h3 class="header">
								その他のサービスについて
							</h3>
							<p class="lead">
								本ページに掲載のサービス以外にも、サイリーグHDでは多様なセキュリティサービスを提供しています。
								<br>お困りごとがございましたら、ぜひお気軽にお問い合わせください。
							</p>
							<a href="#" class="btn-detail">詳細を見る</a>
						</div>
					</div>
					<div class="content__pic">
						<picture>
							<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_07.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/service_07.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</picture>
					</div>
				</div>

			</div>
		</div>
	</section>
	<section>

	</section>
	<!-- <section id="ir_service">
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
			</div>
			<p class="lead">年間100万円で、“いざ”というときに動ける体制を確保できるS&JとサイリーグHDの共同開発サービス</p>
			<a href="/service/ir_service" class="more-button">More... </a>

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
	</section> -->

</main>
<?php get_footer(); ?>

