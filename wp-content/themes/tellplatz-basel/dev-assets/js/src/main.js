(function($) {
	'use strict';

	/* Korrekte Screenhöhe übergeben (iPhone Safari Bugfix) */
	var vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', vh + 'px');

	/* Hamburger Button bei Klick auf active setzen und Menü öffnen */
	var menu_hamburger = $('.hamburger');
	menu_hamburger.on('click', function() {
		$(this).toggleClass('is-active');
		$('body').toggleClass('no-scroll');
		$('#menu_container').toggleClass('open');
	});

	/* Zu einem bestimmten Element scrollen */
	$('.js_scroll_to').on('click', function(event) {
		event.preventDefault();
		var scroll_to_container = $(this).data('scrollto');
		$('html, body').animate({
			scrollTop: $(scroll_to_container).offset().top - 60
		}, 1000);
		/* Container Element als Hastag zur URL hinzufügen */
		window.location.hash = scroll_to_container;
	});

})(jQuery);