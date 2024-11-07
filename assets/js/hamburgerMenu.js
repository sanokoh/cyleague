document.addEventListener("DOMContentLoaded", function () {
	const hamburgerMenu = document.getElementById("hamburgerMenu");
	const menu = document.getElementById("sp_menu");
	const body = document.body;
	const modalOverlay = document.getElementById("modalOverlay");
	const logoSource = document.querySelector(".logo picture source");
	const logoImage = document.querySelector(".logo img");
	const isInitialLogoWhite = logoImage.src.includes("logo_white") && logoSource.srcset.includes("logo_white");

	// WordPressのディレクトリURIに代わる変数を定義
	const stylesheetDirectoryUri = `${window.location.protocol}//${window.location.host}/cyleague/wp-content/themes/cyleague/assets/images`;


	hamburgerMenu.addEventListener("click", function () {
		hamburgerMenu.classList.toggle("active");
		menu.classList.toggle("active");
		modalOverlay.classList.toggle("active");
		body.classList.toggle("modal-open");

		// ロゴ画像の切り替え（初期ロゴが_whiteのときのみ切り替えを実行）
		if (isInitialLogoWhite) {
			if (menu.classList.contains("active")) {
				logoSource.srcset = `${stylesheetDirectoryUri}/logo.webp`;
				logoImage.src = `${stylesheetDirectoryUri}/logo.jpg`;
			} else {
				// activeクラスが外れたとき、必ずlogo_whiteに戻す
				logoSource.srcset = `${stylesheetDirectoryUri}/logo_white.webp`;
				logoImage.src = `${stylesheetDirectoryUri}/logo_white.jpg`;
			}
		}
	});

	document.addEventListener("click", function (e) {
		if (menu.classList.contains("active") && !menu.contains(e.target) && e.target !== hamburgerMenu) {
			toggleMenu();
		}
	});
});
