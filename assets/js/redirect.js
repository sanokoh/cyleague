document.addEventListener('DOMContentLoaded', function () {
	if (window.location.hash === "#message") {
		window.location.href = "/message/";
	} else if (window.location.hash === "#company") {
		window.location.href = "/company/";
	}
});
