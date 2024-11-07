<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.typekit.net/mka4riw.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="modal-overlay" id="modalOverlay"></div>
	<header id="header">
		<div class="header container">
			<div class="spacer sp-only"> </div>
			<div
				class="<?php echo (is_front_page() || is_page('about') || is_page('service') || is_archive()) ? 'logo' : 'logo header-black'; ?>">
				<a href="<?php echo esc_url(home_url()); ?>">
					<picture>
						<source
							srcset="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo' . ((is_front_page() || is_page('about') || is_page('service') || is_archive()) ? '_white' : '') . '.webp'; ?>"
							type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo' . ((is_front_page() || is_page('about') || is_page('service') || is_archive()) ? '_white' : '') . '.jpg'; ?>"
							alt="CyLeagueのロゴ">
					</picture>
				</a>
			</div>
			<nav class="pc-nav <?php echo (is_front_page() || is_page('about') || is_page('service') || is_archive()) ? '' : 'header-black'; ?>"
				aria-label="メインナビゲーション">
				<?php wp_nav_menu(array('theme_location' => 'header')); ?>
			</nav>
			<div class="hamburger-menu <?php echo (is_front_page() || is_page('about') || is_page('service') || is_archive()) ? '' : 'black'; ?> sp-only"
				id="hamburgerMenu">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav class="sp-menu" id="sp_menu">
				<div class="pc-nav header-black" aria-label="メインナビゲーション">
					<?php wp_nav_menu(array('theme_location' => 'header')); ?>
				</div>
			</nav>
		</div>
	</header>
