(function($) {
	'use strict';

	/* Korrekte Screenhöhe übergeben (iPhone Safari Bugfix) */
	var vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', vh + 'px');

	if($('body').hasClass('home')) {
		/* Sharing Buttons einblenden */
		$("#sharing_container").jsSocials(global_vars.sharebuttons);
		/* Falls ein Hashtag vorhanden ist zur entsprechenden Position scrollen */
		var hash = window.location.hash;
		if(hash != '') {
			tpb_scroll_to_element(hash);
		}
	}

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
		tpb_scroll_to_element(scroll_to_container);
		/* Container Element als Hastag zur URL hinzufügen */
		window.location.hash = scroll_to_container;
	});

	function tpb_scroll_to_element(element) {
		$('html, body').animate({
			scrollTop: $(element).offset().top - 60
		}, 1000);
	}

	/* Bild auf Testimonial Seite in gross anzeigen */
	$('.image-hover-element').on('click', function() {
		var testimonial_name = $(this).data('name');
		var testimonial_job = $(this).data('job');
		var testimonial_image = $(this).data('image');
		/* Inhalte einfügen */
		var overscreen_container = $('#testimonial_image_wrapper');
		overscreen_container.find('h5').text(testimonial_name);
		overscreen_container.find('h6').text(testimonial_job);
		overscreen_container.find('img').attr('src', testimonial_image)
		$('body').addClass('no-scroll');
		overscreen_container.addClass('open');
	});

	/* Testimonial Wrapper schliessen */
	$('#testimonial_image_wrapper .close').on('click', function() {
		$('body').removeClass('no-scroll');
		$('#testimonial_image_wrapper').removeClass('open');
	});

	/* Nachdem beim Petitionsfomrmular die Bestätigung geladen wurde - wieder zum Petitions Element Scrollen */
	$(document).on('gform_confirmation_loaded', function(event, formId){
		if(formId == 1) {
			tpb_scroll_to_element('#petition');
		}
	});

})(jQuery);