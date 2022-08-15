var settings = {

	bannerMau: {
		indicators: true,
		speed: 1500,
		delay: 5000,
		parallax: 0.25
	}

};

(function($) {

	$(function() {
		var	$bannerMau 	= $('.bannerMau');

		$bannerMau._slider(settings.bannerMau);

		$bannerMau.scrollex({
			bottom:		$header.outerHeight(),
			terminate:	function() { $header.removeClass('alt'); },
			enter:		function() { $header.addClass('alt'); },
			leave:		function() { $header.removeClass('alt'); $header.addClass('reveal'); }
			});
	});

})(jQuery);