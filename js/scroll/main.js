/*
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {


	skel.breakpoints({
		xxlarge: '(max-width: 1920px)',
		xlarge: '(max-width: 1680px)',
		large: '(max-width: 1280px)',
		medium: '(max-width: 1000px)',
		small: '(max-width: 736px)',
		xsmall: '(max-width: 480px)',
	});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$header = $('#header'),
			$all = $body.add($header);


		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 0);
			});

		// Touch mode.
			skel.on('change', function() {

				if (skel.vars.mobile || skel.breakpoint('small').active)
					$body.addClass('is-touch');
				else
					$body.removeClass('is-touch');

			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on small.
			skel.on('+small -small', function() {
				$.prioritize(
					'.important\\28 small\\29',
					skel.breakpoint('small').active
				);
			});


		// Section transitions.
			if (skel.canUse('transition')) {

				var on = function() {

						$('.section')
							.scrollex({
								mode:		'middle',
								delay:		100,
								initialize:	function() { $(this).addClass('inactive'); },
								terminate:	function() { $(this).removeClass('inactive'); },
								enter:		function() { $(this).removeClass('inactive'); },
								leave:		function() { $(this).addClass('inactive'); }
							});

				};

				var off = function() {

						$('.section')
							.unscrollex();

				};

				skel.on('change', function() {

					if (skel.breakpoint('small').active)
						(off)();
					else
						(on)();

				});

			}

		// Events.
			var resizeTimeout, resizeScrollTimeout;

			$window
				.resize(function() {

					// Disable animations/transitions.
						$body.addClass('is-resizing');

					window.clearTimeout(resizeTimeout);

					resizeTimeout = window.setTimeout(function() {

						// Update scrolly links.
							$('a[href^="#"]').scrolly({
								speed: 1500,
								offset: $header.outerHeight() - 1
							});

						// Re-enable animations/transitions.
							window.setTimeout(function() {
								$body.removeClass('is-resizing');
								$window.trigger('scroll');
							}, 0);

					}, 100);

				})
				.load(function() {
					$window.trigger('resize');
				});

	});

})(jQuery);
