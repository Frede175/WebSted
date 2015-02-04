$(document).ready(function() {

	$(".navbut").mouseenter(function() {
		$(this).animate ({
			backgroundColor: "rgba(15,15,15,0.7)",
		}, 500, function() {

		});
	});

	$(".navbut").mouseleave(function() {
		$(this).animate ({
				backgroundColor: "rgba(256,256,256,0)",
		}, 500, function() {

		});
	});
});