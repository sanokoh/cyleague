<?php
get_header();
?>

<main id="ir_service">
	<div class="ir_service">
		<section id="mv">
			<div class="mv">
				<div class="mv__content container">
					<h1 class="head">事前契約型インシデント対応サービス<br class="pc-only">
						CyLeague サイバーレジリエンス・パッケージ</h1>
					<p class="lead">年間100万円で、“いざ”というときに動ける体制を確保できる<br class="pc-only">
						S&JとサイリーグHDの共同開発サービス
					</p>
				</div>
			</div>
		</section>
		<nav aria-label="breadcrumb" id="breadcrumb">
			<?php
			if (function_exists('display_breadcrumb'))
				display_breadcrumb();
			?>

		</nav>
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
						<h2 class="heading">なぜ “サイバーレジリエンス” が必要か
						</h2>
						<p class="description">
							サイバー攻撃を100％防ぐことは、もはや現実的ではありません。
							<br class="pc-only">だからこそ大切なのは、<span class="bold">攻撃を受けても事業を継続させる力</span>
							<br>——それが 「サイバーレジリエンス」 です。
						</p>
						<p class="description">
							この力を身につけるには、<span class="bold">平時からの準備と、信頼できるパートナーの存在</span>が欠かせません。
							<br class="pc-only">「被害が出てから、パートナーを探す」のでは損害が拡大する一方です。
						</p>
						<p class="description">
							私たちがご提供する「CyLeagueサイバーレジリエンス・パッケージ」は、
							<br class="pc-only"> “いざ”というときにすぐ動ける体制を、年間100万円で事前に確保できるサービスです。
						</p>
						<p class="description">
							<span class="bold">初動の遅れを防ぎ、復旧を早め、被害を最小限に抑える。</span>その備えが、企業の未来を守ります。
						</p>
					</div>
					<div class="solution-logo">
						<picture>
							<source
								srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/sandj_cyleague_2.webp'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/sandj_cyleague_2.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy" width="" height="">
						</picture>
					</div>
				</div>
				<div class="section-cta">
					<a href="https://offers.cyleague.jp/crp_download" class="section-cta-button primary" target="_blank"
						rel="noopener">
						導入検討資料をダウンロードする
					</a>
				</div>
			</div>
		</section>
		<section id="features">
			<div class="features container">
				<div class="features-content">
					<div class="image-block">
						<picture>
							<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.webp'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</picture>
					</div>
					<div class="text-block">
						<h2 class="heading">サービスの特徴
						</h2>
					</div>

					<div class="features-grid">
						<div class="feature-card">
							<div class="feature-icon">
								<picture>
									<source
										srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_01.webp'; ?>"
										type="image/webp">
									<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_01.png'; ?>"
										alt="専門家チームを象徴する複数のビジネスパーソンのシルエット" class="image" loading="lazy" width="160"
										height="160">
								</picture>
							</div>
							<h3 class="feature-title">年間100万円で、<br>専門家による<br>インシデント対応体制を確保</h3>
						</div>

						<div class="feature-card">
							<div class="feature-icon">
								<picture>
									<source
										srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_02.webp'; ?>"
										type="image/webp">
									<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_02.png'; ?>"
										alt="事前準備による迅速対応を示すチェックマーク付き円形矢印" class="image" loading="lazy">
								</picture>
							</div>
							<h3 class="feature-title">事前の準備と合意により<br>最短で対応を開始<br>業務への影響を最小化</h3>
						</div>

						<div class="feature-card">
							<div class="feature-icon">
								<picture>
									<source
										srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_03.webp'; ?>"
										type="image/webp">
									<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_03.png'; ?>"
										alt="前払い済みリソースを示す円マーク入りコインのスタック" class="image" loading="lazy">
								</picture>
							</div>
							<h3 class="feature-title">契約時に一定時間分を<br>確保・前払い済み。<br>緊急事態不要で支援開始</h3>
						</div>

						<div class="feature-card">
							<div class="feature-icon">
								<picture>
									<source
										srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_04.webp'; ?>"
										type="image/webp">
									<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_04.png'; ?>"
										alt="効率的／的確なサービスを表す的の中心に刺さる矢" class="image" loading="lazy">
								</picture>
							</div>
							<h3 class="feature-title">インシデント対応に特化した<br>効率的なサービス設計</h3>
						</div>

						<div class="feature-card">
							<div class="feature-icon">
								<picture>
									<source
										srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_05.webp'; ?>"
										type="image/webp">
									<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_05.png'; ?>"
										alt="ベンダーフリーな協力体制を象徴する握手のアイコン" class="image" loading="lazy">
								</picture>
							</div>
							<h3 class="feature-title">EDRなどセキュリティ製品の<br>ベンダーフリー対応</h3>
						</div>

						<div class="feature-card">
							<div class="feature-icon">
								<picture>
									<source
										srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_06.webp'; ?>"
										type="image/webp">
									<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/feature_06.png'; ?>"
										alt="脅威情報共有とセキュリティ文化を示すテーブルを囲む人々のアイコン" class="image" loading="lazy">
								</picture>
							</div>
							<h3 class="feature-title">脅威情報の共有と<br>セキュリティカルチャーで<br>平時からの備えをサポート</h3>
						</div>
					</div>
				</div>
				<div class="section-cta">
					<a href="https://offers.cyleague.jp/crp_download" class="section-cta-button primary" target="_blank"
						rel="noopener">
						導入検討資料をダウンロードする
					</a>
				</div>
			</div>
		</section>
		<section id="plans">
			<div class="plans container">
				<div class="plans-content">
					<div class="image-block">
						<picture>
							<source srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.webp'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.png'; ?>"
								alt="サイリーグホールディングスのロゴ" class="image" loading="lazy">
						</picture>
					</div>
					<div class="text-block">
						<h2 class="heading">サービスプラン
						</h2>
					</div>
					<div class="table-container">

						<table class="plans-table">
							<thead>
								<tr>
									<th></th>
									<th
										style="color:black; font-weight: 400; vertical-align: bottom; padding-bottom:0; text-align: left;">
										※対象：従業員300名以上の企業・団体 </th>
									<th class="entry-plan">エントリープラン<br><span class="plan-price">年間100万円（税別）</span></th>
									<th class="standard-plan">スタンダードプラン<br><span class="plan-price">年間180万円（税別）</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="category-cell category-normal" rowspan="3">平<br>時</td>
									<td class="service-name">定例会</td>
									<td class="small-text">1時間×年間4回<br>その場でのQA対応 </td>
									<td class="small-text">1時間×年間4回<br>※事前QA1問対応＋その場でQA1問対応</td>
								</tr>
								<tr>
									<td class="service-name">脅威インテリジェンス提供</td>
									<td class="small-text merged-cell" colspan="2">年間4回</td>
								</tr>
								<tr>
									<td class="service-name">セキュリティカルテ作成</td>
									<td class="small-text merged-cell" colspan="2">契約時に作成。その後、四半期ごとに更新</td>
								</tr>
								<tr>
									<td class="category-cell category-incident" rowspan="2">有<br>事</td>
									<td class="service-name">インシデント初動対応支援</td>
									<td class="small-text">年間1件 3時間まで</td>
									<td class="small-text">年間4件 12時間まで※1<br>※四半期ごとに1件 3時間まで </td>
								</tr>
								<tr>
									<td class="service-name">インシデントハンドリング</td>
									<td class="small-text merged-cell" colspan="2">年間1件 40時間まで</td>
								</tr>
							</tbody>
						</table>
						<p>※1： 各四半期あたり1件3時間までが上限です。未使用分の繰越や超過分の利用はできません。</p>
						<p>※有事の対応時間については、人時ベースになっております。事象やタイミングに応じて、参加人数が１名～３名になる場合があります。 </p>
					</div>
				</div>
			</div>
		</section>
		<section id="cta">
			<div class="cta-content container">
				<div class="cta-title">詳細・お問い合わせ</div>
				<div class="cta-subtitle">
					"いざ"というときにすぐ動ける体制を、年間100万円で事前に確保。<br>
					初動の遅れを防ぎ、復旧を早め、被害を最小限に抑えます。
				</div>
				<div class="cta-buttons">
					<a href="https://offers.cyleague.jp/crp_download" class="cta-button secondary" target="_blank"
						rel="noopener">
						導入検討資料をダウンロードする </a>
					<a href="https://offers.cyleague.jp/contact/" class="cta-button" target="_blank" rel="noopener">
						お問い合わせ
					</a>
				</div>
			</div>
		</section>
	</div>
</main>
<?php get_footer(); ?>

