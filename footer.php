<footer id="footer">
	<div class="footer">
		<div class="container">
			<div class="footer-top">
			<div class="footer-logo">
                    <div class="logo">
                        <picture>
                            <source
                                srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/logo_white.webp'; ?>"
                                type="image/webp">
                            <img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/logo_white.jpg'; ?>"
                                alt="CyLeagueのロゴ">
                        </picture>
                    </div>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/CyLeagueHoldings" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/facebook-icon.webp'; ?>"
                                alt="CyLeagueのFacebookページ">
                        </a>
                        <a href="https://www.linkedin.com/company/cyleague-holdings" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/linkedin-icon.webp'; ?>"
                                alt="CyLeagueのLinkedInページ">
                        </a>
                    </div>
                </div>
				<div class="footer-links">
					<div class="footer-column">
						<?php wp_nav_menu(array('theme_location' => 'footer_l')); ?>

					</div>
					<div class="footer-column">
						<?php wp_nav_menu(array('theme_location' => 'footer_c')); ?>

					</div>
					<div class="footer-column">
						<?php wp_nav_menu(array('theme_location' => 'footer_r')); ?>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<p class="pc-only">&copy; CyLeague Holdings, Inc.</p>
				<p class="footer-links">
					<a href="#">情報セキュリティ基本方針</a>
					<a href="#">コンプライアンス・リスク管理基本方針</a>
					<a href="#">反社会勢力に対しての基本方針</a>
				</p>

			</div>
			<p class="copy sp-only">&copy; CyLeague Holdings, Inc.</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>


</html>
