document.addEventListener('DOMContentLoaded', function () {
	const video = document.querySelector('.video-background');

	if ('IntersectionObserver' in window) {
		const observer = new IntersectionObserver((entries, observer) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					// data-src 属性から src に設定し、動画を読み込む
					entry.target.src = entry.target.getAttribute('data-src');
					observer.unobserve(entry.target); // 監視を停止
				}
			});
		});
		observer.observe(video);
	} else {
		// 古いブラウザ向け: デフォルトで src 属性を直接設定
		video.src = video.getAttribute('data-src');
	}
});
