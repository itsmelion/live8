(function ($) {
	// jquery goodness
	$(".wave-btn").click(function () {
		var id = $(this).attr("data-id"); // Using a custom attribute.
		var article = $("#wave-section article > div");
		var nid = parseInt(id);

		if (nid === 0) {
			$("#wave0").removeClass("disapear", 200, "easeInOutQuint");
			article.eq(0).removeClass("disapear", 200, "easeInOutQuint");
			article.eq(1).addClass("disapear");
			article.eq(2).addClass("disapear");
			$("#wave-none").addClass("disapear", 200, "easeInOutQuint");
			$("#wave1").removeClass("reveal").addClass("disapear");
			$("#wave2").removeClass("reveal").addClass("disapear");
		} else if (nid === 1) {
			$("#wave1").removeClass("disapear", 200, "easeInOutQuint");
			article.eq(1).removeClass("disapear", 200, "easeInOutQuint");
			article.eq(0).addClass("disapear");
			article.eq(2).addClass("disapear");
			$("#wave-none").addClass("disapear", 200, "easeInOutQuint");
			$("#wave0").addClass("disapear").removeClass("reveal");
			$("#wave2").addClass("disapear").removeClass("reveal");

		} else if (nid === 2) {
			$("#wave2").removeClass("disapear", 200, "easeInOutQuint");
			article.eq(2).removeClass("disapear", 200, "easeInOutQuint");
			article.eq(0).addClass("disapear");
			article.eq(1).addClass("disapear");
			$("#wave-none").addClass("disapear", 200, "easeInOutQuint");
			$("#wave0").removeClass("reveal").addClass("disapear");
			$("#wave1").removeClass("reveal").addClass("disapear");

		} else {
			console.log("cant get button id");
			$("#wave-none").addClass("reveal").removeClass("disapear");
		}

	});
})(jQuery);