document.addEventListener('DOMContentLoaded', function () {
	var externalLinks = document.querySelectorAll('a[href^="http"]');
	externalLinks.forEach(function (link) {
		if (!link.href.startsWith(window.location.origin)) {
			link.setAttribute('target', '_blank');
			link.setAttribute('rel', 'noreferrer noopener');
		}
	});
});
