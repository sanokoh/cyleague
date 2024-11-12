<?php
get_header();
?>

<main id="company_page">
    <section id="mv">
        <div class="mv">
            <div class="mv__content container">
                <h1 class="head">会社概要/アクセス</h1>
                <p class="lead">Company Overview</p>
            </div>
        </div>
    </section>

    <section id="breadcrumb">
        <?php if (function_exists('display_breadcrumb')) display_breadcrumb(); ?>
    </section>

    <section id="company">
        <div class="company">
            <div class="container-small">
                <?php
                // 会社情報を配列で定義
                $company_info = [
                    '商号' => 'サイリーグホールディングス株式会社 / CyLeague Holdings, Inc',
                    '所在地' => '<p class="mt25">〒105-0001 東京都港区虎ノ門3-17-1 TOKYU REIT 虎ノ門ビル6階</p>
                                <p class="mt20 pc-only"><a href="https://maps.app.goo.gl/gxv6ZRY1skzzKDYw7" target="_blank" rel="noopener noreferrer">Googleマップで見る 〉</a></p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2163.4587032702498!2d139.7446418544293!3d35.66406203251425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b111ad1e99f%3A0xb088e1d2691de830!2z44K144Kk44Oq44O844Kw44Ob44O844Or44OH44Kj44Oz44Kw44K55qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1729482691995!5m2!1sja!2sjp" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="CyLeague Holdings所在地"></iframe>
                                <p class="mt20">アクセス<br>東京メトロ日比谷線「神谷町」駅徒歩約1分<br>銀座線「虎ノ門」駅徒歩約9分<br>都営地下鉄三田線「御成門」駅徒歩約9分</p>',
                    '設立' => '2023年12月',
                    '資本金' => '99 百万円',
                    '代表取締役社長' => '高谷 康久',
                    '役員' => '取締役 福留 大士<br>取締役COO 石川 耕<br>取締役 大越 いづみ<br>監査役 久保 剛彦',
                    '事業内容' => 'サイバーセキュリティ事業及びデジタル・トランスフォーメーション関連事業<br>並びにそれらを行う会社の株式保有、事業活動の支援及び管理',
                    'グループ会社' => '<p><a href="#" target="_blank" rel="noopener noreferrer">アイディルートコンサルティング株式会社 〉</a></p><p><a href="#" target="_blank" rel="noopener noreferrer">EGセキュアソリューションズ株式会社 〉</a></p>',
                ];

                // 会社情報をループで表示
                foreach ($company_info as $title => $content): ?>
                    <div class="section">
                        <div class="section-title"><?php echo esc_html($title); ?></div>
                        <div class="section-content"><?php echo $content; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php
            // リンク情報を配列で定義
            $links = [
                ['url' => home_url('/about'), 'class' => '', 'text' => 'サイリーグについて'],
                ['url' => home_url('/about/message'), 'class' => '', 'text' => 'メッセージ']
            ];
            set_query_var('links', $links);
            get_template_part('templates/parts/link-buttons');
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
