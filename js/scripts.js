(function ($) {
	// jquery goodness

	// Variables
	var clickedTab = $(".tabs > .active");
	var tabWrapper = $(".tab__content");
	var wavebg = $(".wave-bg");
	var activeTab = tabWrapper.find(".active");
	var activewavebg = wavebg.find(".active");
	var activeTabHeight = activeTab.outerHeight();

	// Show tab on page load
	activeTab.show();

	// Set height of wrapper on page load
	tabWrapper.height(activeTabHeight);

	$(".tabs > li").on("click", function () {
		var el = $(this);
		var clickedtab = parseInt(el.attr("data-id"));
		console.log(clickedtab);
		// Remove class from active tab
		$(".tabs > li").removeClass("active");
		wavebg.removeClass("active");

		// Add class active to clicked tab
		el.addClass("active");
		wavebg.eq(clickedtab).addClass("active");

		// Update clickedTab variable
		clickedTab = $(".tabs .active");

		// fade out active tab
		activeTab.fadeOut(150, function () {

			// Remove active class all tabs
			$(".tab__content > li").removeClass("active");

			// Get index of clicked tab
			var clickedTabIndex = clickedTab.index() + 1;

			// Add class active to corresponding tab
			$(".tab__content > li").eq(clickedTabIndex).addClass("active");

			// update new active tab
			activeTab = $(".tab__content > .active");

			// Update variable
			activeTabHeight = activeTab.outerHeight();

			// Animate height of wrapper to new tab height
			tabWrapper.stop().animate({
				height: activeTabHeight
			}, 300, function () {

				// Fade in active tab
				activeTab.fadeIn(150);

			});
		});
	});

	// Modal
	function autoPlayModal() {
		var trigger = $("body").find('[data-toggle="modal"]');
		trigger.click(function () {
			var theFrame = $(this).data("frame");
			var theModal = $(this).data("target");
			var videoSRC = $(this).attr("data-theVideo");
			var videoSRCauto = videoSRC + "?showinfo=0&autoplay=1&wmode=transparent&autohide=1&modestbranding=1&rel=0&hd=1";
			$(theModal + ' ' + theFrame).attr('src', videoSRCauto);
			$("[id*=liveModal]").on('hidden.bs.modal', function () {
				$("[id*=liveModal] " + theFrame).removeAttr('src');
			});
		});
	}
	$(".videoBtn").on("click", autoPlayModal());

	$('.carousel').carousel({
		interval: 4000,
		pause: false,
		ride: 'carousel'
	});

	$('.card-container').slick({
  	infinite: true,
  	slidesToShow: 4,
		slidesToScroll: 4,
		variableWidth: true,
		adaptiveHeight: true,
		lazyLoad: 'ondemand',
		responsive: [
    {
      breakpoint: 1366,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
	});

	$('.card-container').photoSwipe();

	$(function() {      
		$("#home-wrap, .arrow").swipe( {
			swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
				if ( direction === 'up' ) {
					$("footer").animate(
						{
							marginTop: '-98vh'
						}
					);
				}
			},
			allowPageScroll:"none"
		});

		$("footer").swipe( {
			swipe:function(event, direction, distance, duration, fingerCount, fingerData) {

				if ( direction === 'down' ) {
					$("footer").animate(
						{
							marginTop: '0'
						}
					);
				}

			}
		});
	
	});

})(jQuery);