<?php
get_header();
?>

<main id="message_page">
	<section id="mv">
		<div class="mv">
			<div class="mv__content container">
				<h1 class="head">メッセージ</h1>
				<p class="lead">Messages from the Management Team</p>
			</div>
		</div>
	</section>
	<section id="breadcrumb">
		<?php
		if (function_exists('display_breadcrumb'))
			display_breadcrumb();
		?>
	</section>
	<section id="message">
		<div class="message">
			<?php
			// 役員のデータを配列で管理
			$executives = [
				[
					'name' => '高谷 康久',
					'position' => '代表取締役社長',
					'image' => 'message_takatani',
					'message' => '日本を代表する総合的な
								<br>サイバーセキュリティの会社に、
								<br>そして世界にもチャレンジ',

					'text' => '今、チェンジホールディングスと一緒に日本のセキュリティをどうにかしたいという思いで、サイリーグをスタートさせました。 サイリーグホールディングスは、サイバーの空間が皆のインフラになっている時代に、そのインフラを安心安全にしっかり守って、育てていく仲間を集めて、リーグ（League）のように切磋琢磨していく場を作りたい。その意志も込めてCyLeagueとなっています。インフラの安全安心を守るには、コストがかかります。
					<br>一部の大企業を除いて、セキュリティは投資ではなくコストとして後回しになってきました。サイリーグとして、セキュリティに限定しないサービスを提供することで、セキュリティ対策の投資の側面やサービス前提としての効率化も提案できるはずです。そのようなサービスを展開していく集団になっていきます。
					<br>そして、サイリーグの中核とするサイバーセキュリティの点では、サイバーの空間における安心安全のインフラをしっかりと守れる人員を創っていく教育、サービス、組織基盤が必要であり、その想いに賛同してくれる個人、会社を集めて、まずは日本を代表する総合的なサイバーセキュリティの会社を目指します。
					<br>また、私が長年、社長を務めているイー・ガーディアンには、日本各地の拠点だけでなく、ベトナムやフィリピンに子会社がありますので、その連携も進め、集まった個人、会社をアジア、そして世界にもチャレンジさせていきます。'
				],
				[
					'name' => '福留　大士',
					'position' => '取締役',
					'image' => 'message_fukutome',
					'message' => 'これまでの日本の
									<br>サイバーセキュリティの前提に
									<br>囚われることなく、
									<br>日本のセキュリティをチェンジ',
					'text' => 'チェンジホールディングスは、日本の価値観をチェンジし、問題解決をすることを目指しています。日本のセキュリティをチェンジしていくために、サイリーグという場所に、M&Aなどを通して多くの仲間を集めていきたい。チェンジホールディングスも昔からサイバーセキュリティ事業を行ってきています。
									ただ、その規模は大きいとはいえず、サイバーセキュリティを変える側になれていなかった。高谷社長が長年社長を務めてきたイー・ガーディアンもサイバーセキュリティ事業そのものが大きな会社ではありません。だからこそ、サイリーグは、これまでの日本のサイバーセキュリティの前提に囚われることなく、日本のセキュリティをチェンジできる。日本のセキュリティをチェンジしたい個人、会社の方々、ぜひ、サイリーグへ。'
				],
				[
					'name' => '石川　耕',
					'position' => '取締役COO',
					'image' => 'message_ishikawa',
					'message' => 'サイバーセキュリティを
									<br>中核にした多様な支援をできる
									<br>事業体を目指す',
					'text' => '私自身は、直近、AIやデータ活用、クラウド開発を推進する側で、コンサルティング、IT、法律、会計などの知見を活かしてきました。
								<br>ビジネス・社会にサイバーセキュリティの必要性が拡大する中で、まだまだ人的リソースも不足しているように見えたので、自分自身も一つの人的リソースとしてサイバーセキュリティの提供側に加わりました。私自身が飛び込んだように、サイリーグと共にサイバーセキュリティへの投資＆人材を引き付け、AIやクラウド活用にも対応したサイバーセキュリティ市場を拡大していきたい。
								<br>この市場の拡大のためには、サイバーセキュリティを広く捉えた考え方も必要だと感じています。
								<br>サイリーグとしては、サイバーセキュリティを中核にした多様な支援をできる事業体を目指していきます。'
				],
				[
					'name' => '大越いづみ',
					'position' => '取締役',
					'image' => 'message_ohgoshi',
					'message' => '「サイバーセキュリティ人材」を
					<br>一人でも多く育成・輩出し、
					<br>キャリアデザインを支援',
					'text' => '日本は長い年月をかけて安全安心な社会を築き上げてきました。これからはサイバー空間でそれを実現しなければなりません。
					提供されるサイバーセキュリティ製品やサービスは、効率化・省力化・合理化に向かいますが、十分な体制を持たない組織が求めているのは「手厚いサポートによる寄り添い」です。日頃からサイバー空間を見守り、ひとたびインシデントが発生した時に真っ先に駆けつけてくれる安心感。
					途切れることのない日本版サイバーセキュリティを実現するために、サイリーグでは、主役となる「サイバーセキュリティ人材」を一人でも多く育成・輩出し、キャリアデザインを支援してまいります。'
				]
			];

			?>
			<div class="message__contents pc-only">
				<?php foreach ($executives as $executive): ?>
					<div class="content">
						<div class="executive-container container">
							<div class="executive">
								<h2 class="heading">
									<?php echo $executive['message']; ?>
								</h2>
								<div class="image">
									<picture>
										<source
											srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/' . $executive['image'] . '.webp'; ?>"
											type="image/webp">
										<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' . $executive['image'] . '.png'; ?>"
											alt="<?php echo $executive['position'] . ' ' . $executive['name']; ?>"
											class="image">
									</picture>
								</div>
								<div class="square-box">
									<div class="square-box-wrapper">
										<div class="inner-box">
											<span
												class="inner-box-text-position"><?php echo $executive['position']; ?></span>
											<span class="inner-box-text-name"><?php echo $executive['name']; ?></span>
										</div>
									</div>
								</div>
							</div>
							<p class="text">
								<?php echo $executive['text']; ?>
							</p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="message__contents sp-only">
				<?php foreach ($executives as $executive): ?>
					<div class="content">
						<div class="executive-container">
							<div class="executive container">
								<h2 class="heading">
									<?php echo $executive['message']; ?>
								</h2>
								<div class="wrapper">
									<div class="image">
										<picture>
											<source
												srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/' . $executive['image'] . '.webp'; ?>"
												type="image/webp">
											<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' . $executive['image'] . '.png'; ?>"
												alt="<?php echo $executive['position'] . ' ' . $executive['name']; ?>"
												class="image">
										</picture>
									</div>
									<div class="square-box">
										<div class="square-box-wrapper">
											<div class="inner-box">
												<span
													class="inner-box-text-position"><?php echo $executive['position']; ?></span>
												<span class="inner-box-text-name"><?php echo $executive['name']; ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<p class="text container">
								<?php echo $executive['text']; ?>
							</p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<?php
			// リンク情報を配列で定義
			$links = [
				['url' => home_url('/about'), 'class' => '', 'text' => 'サイリーグについて'],
				['url' => home_url('/about/company'), 'class' => '', 'text' => '会社概要/アクセス']
			];

			// テンプレートにリンク情報を渡す
			set_query_var('links', $links);
			get_template_part('templates/parts/link-buttons');
			?>
		</div>
	</section>


</main>
<?php get_footer(); ?>

