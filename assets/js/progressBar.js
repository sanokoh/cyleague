window.addEventListener('scroll', function () {
	const scrollPercentage = window.scrollY / (document.body.scrollHeight - window.innerHeight);
	const height = Math.min(scrollPercentage * 100, 100); // 最大100%
	document.querySelector('#meter .progress').style.height = `${height}%`;
});
