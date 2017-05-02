(function ($) {
	// jquery goodness

	// Variables
	var clickedTab = null;
	var article = $(".wave-section article > div");
	var activeStuff = $(".wave-thing").hasClass("active");
	var activeStuffHeight = article.eq(0).outerHeight();


	// Set height of wrapper on page load
	article.height(activeStuffHeight);


	$(".wave-btn").on("click", function () {

		// Remove class from active tab
		$(".wave-thing").removeClass("active");

		// Add class active to clicked tab
		$(this).addClass("active");

		// Update clickedTab variable
		clickedTab = $(".wave-btn .active");

		// fade out active tab
		article.fadeOut(200, function () {

			// Remove active class all tabs
			$(".wave-section article > div").removeClass("active");

			// Get index of clicked tab
			var clickedTabIndex = clickedTab.index();

			// Add class active to corresponding tab
			$(".wave-thing").eq(clickedTabIndex).addClass("active");

			// update new active tab
			activeStuff = article.hasClass("active");

			// Update variable
			activeStuffHeight = activeStuff.outerHeight();

			// Animate height of wrapper to new tab height
			article.stop().delay(50).animate({
				height: activeStuffHeight
			}, 300, function () {

				// Fade in active tab
				activeStuff.delay(50).fadeIn(200);

			});
		});
	});


	// Modal

	/*var url = "//youtube.com/embed/" + vid + "?autoplay=1&wmode=transparent&autohide=1&modestbranding=1&rel=0&hd=1";
		jQuery(iframe, {
			name: 'videoframe',
			id: 'videoframe',
			src: url,
			width: width_f,
			height: height_f,
			frameborder: 0,
			class: 'youtube-player',
			type: 'text/html',
			allowfullscreen: true
		}).appendTo($midlayer);
	});*/
	function autoPlayModal() {
		var trigger = $("body").find('[data-toggle="modal"]');
		trigger.click(function () {
			var theFrame = $(this).data("frame");
			var theModal = $(this).data("target");
			var videoSRC = $(this).attr("data-theVideo");
			var videoSRCauto = videoSRC + "?autoplay=1";
			$(theModal + ' ' + theFrame).attr('src', videoSRCauto);
			$("[id*=liveModal]").on('hidden.bs.modal', function () {
				$("[id*=liveModal] " + theFrame).removeAttr('src');
			});
		});
	}

	$(".videoBtn").on("click", autoPlayModal());

})(jQuery);