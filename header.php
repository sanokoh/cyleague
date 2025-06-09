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

			<?php
			// ロゴ、ナビゲーション、メニューのスタイル判定用変数
			$is_light_logo = (is_front_page() || is_page('about') || is_page('service') || (is_archive() && !is_tax() || is_page('ir_service')));
			?>

			<?php if (is_front_page()): ?>
				<h1 class="<?php echo $is_light_logo ? 'logo' : 'logo header-black'; ?>">
					<a href="<?php echo esc_url(home_url()); ?>">
						<picture>
							<source
								srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/logo' . ($is_light_logo ? '_white' : '') . '.webp'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/logo' . ($is_light_logo ? '_white' : '') . '.jpg'; ?>"
								alt="サイリーグ株式会社">
						</picture>
					</a>
				</h1>
			<?php else: ?>
				<div class="<?php echo $is_light_logo ? 'logo' : 'logo header-black'; ?>">
					<a href="<?php echo esc_url(home_url()); ?>">
						<picture>
							<source
								srcset="<?php echo STYLESHEET_DIRECTORY . '/assets/images/logo' . ($is_light_logo ? '_white' : '') . '.webp'; ?>"
								type="image/webp">
							<img src="<?php echo STYLESHEET_DIRECTORY . '/assets/images/logo' . ($is_light_logo ? '_white' : '') . '.jpg'; ?>"
								alt="サイリーグ株式会社" loading="lazy">
						</picture>
					</a>
				</div>
			<?php endif; ?>

			<nav class="pc-nav <?php echo $is_light_logo ? '' : 'header-black'; ?>" aria-label="メインナビゲーション">
				<?php wp_nav_menu(array('theme_location' => 'header')); ?>
			</nav>

			<div class="hamburger-menu <?php echo $is_light_logo ? '' : 'black'; ?> sp-only" id="hamburgerMenu">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<nav class="sp-menu" id="sp_menu">
				<div class="pc-nav header-black" aria-label="メインナビゲーション">
					<?php wp_nav_menu(array('theme_location' => 'header_sp')); ?>
				</div>
			</nav>
		</div>
	</header>
