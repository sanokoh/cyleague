<?php
get_header();
?>

<main id="about_page">
	<section id="mv">
		<div class="mv">
			<div class="mv__content container">
				<h1 class="head">サイリーグについて</h1>
				<p class="lead">Who We Are</p>
			</div>
		</div>
	</section>
	<section id="breadcrumb">
		<?php
		if (function_exists('display_breadcrumb'))
			display_breadcrumb();
		?>

	</section>
	<section id="about_company">
		<div class="about-company container">
			<div class="about-content">
				<div class="image-block">
					<picture>
						<source
							srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.webp'; ?>"
							type="image/webp">
						<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company_mark.png'; ?>"
							alt="サイリーグホールディングスのロゴ" class="image">
					</picture>
				</div>
				<div class="text-block">
					<h2 class="heading">お客様の事業の<br class="sp-only">成長と発展を支える、<br class="pc-only">
						総合的な<br class="sp-only">サイバーセキュリティ企業へ</h2>
					<p class="subheading pc-only">
					サイリーグホールディングスは、日本の企業や組織のサイバーセキュリティを高めることを使命とする持株会社です。M&A、業務提携、自社サービスの開発を通じて、ITインフラやネットワークの安全性を確保しつつ、事業の成長と発展を支えます。

					</p>
				</div>
				<div class="detail">
					<div class="about-image">
						<picture>
							<source
								srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/building-image.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/building-image.png'; ?>"
								alt="オフィスビルの外観" class="image">
						</picture>
					</div>
					<p class="description">
						<span class="sp-only">サイリーグホールディングスは、日本の企業や組織のサイバーセキュリティを高めることを使命とする持株会社です。M&A、業務提携、自社サービスの開発を通じて、ITインフラやネットワークの安全性を確保しつつ、事業の成長と発展を支えます。</span>
						「リーグ（League）」の精神のもと、グループ企業やパートナーと共に競い合い、日本のサイバーセキュリティ業界全体を牽引。セキュリティ人材の育成にも力を入れ、企業や組織が直面する脅威に迅速で効果的な対応ができる体制を整備し、デジタル時代における安心と安全を提供する総合的なサイバーセキュリティ企業を目指します。
					</p>
				</div>
			</div>
			<?php
            // リンク情報を生成
            $links = [
                ['url' => home_url('/message'), 'class' => 'message', 'text' => 'メッセージ'],
                ['url' => home_url('/company'), 'class' => 'company', 'text' => '会社概要/アクセス']
            ];
            set_query_var('links', $links);
            get_template_part('templates/parts/link-buttons');
            ?>
		</div>
	</section>
	<section id="group_companies">
		<div class="group-companies container">
			<div class="group-companies__content">
				<div class="header">
					<!-- <div class="square-box">
						<div class="square-box-wrapper">
							<div class="inner-box">
								<span class="inner-box-text"></span>
							</div>
						</div>
					</div> -->
					<h2 class="heading">チェンジ<br class="sp-only">ホールディングスの<br class="sp-only">事業領域とグループ各社</h2>
				</div>
				<div class="company-overview">
					<h3 class="head">株式会社チェンジホールディングス</h3>
					<div class="change-logo image-container pr70 pl70">
						<picture>
							<source
								srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/change_holdings_logo_colored.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/change_holdings_logo_colored.png'; ?>"
								alt="株式会社チェンジホールディングスのロゴ" class="image">
						</picture>
					</div>
					<div class="image-container container">
						<picture>
							<source
								srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/group_companies_NEW-IT.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/group_companies_NEW-IT.png'; ?>"
								alt="NEW-ITのグループ企業: CHANGE、サイリーグホールディングス、E-Guardian、IdealRoute Consulting、DFA Robotics、beacapp、KaWaL eLearning、KaWaL診断"
								class="image">
						</picture>
						<picture>
							<source
								srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/group_comapnies_publitec.avif'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/group_comapnies_publitec.png'; ?>"
								alt="パブリテックのグループ企業: TRUST BANK、Governance Technologies、Travel Zip、Orb、LoGoチャット、LoGoフォーム、ふるさとチョイス、ガバメイツ、アップクロス"
								class="image">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="company_structure">
		<div class="company-structure container">
			<div class="company-structure__content">
				<div class="header">
					<div class="square-box">
						<div class="square-box-wrapper">
							<div class="inner-box">
								<span class="inner-box-text"></span>
							</div>
						</div>
					</div>
					<!-- <h2 class="heading">中間持株会社化 で<br class="sp-only"> 専門家を集積・増強</h2> -->
					<p class="description">
						CyLeague（「Cyber」＋「League」）には、独立事業者が集い、切磋琢磨し、より<br class="pc-only">良いサービスを提供し、グローバルに飛び出す　という思いを込めている </p>
				</div>
				<div class="image-container">
					<picture>
						<source
							srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company-structure.webp'; ?>"
							type="image/webp">
						<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/company-structure.png'; ?>"
							alt="サイリーグホールディングスの組織図。中央にCyLeagueが位置し、上部にCHANGE HOLDINGS、下部にE-GuardianとIdealRoute Consultingのロゴ。その他、外部パートナー、Gr各社、セキュリティ各社といった関連企業やパートナー企業が示されています。"
							class="image">
					</picture>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>

