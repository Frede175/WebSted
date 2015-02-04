$(document).ready(function() {


	$(".navbut").mouseenter(function() {
			$(this).animate ({
				backgroundColor: "rgba(15,15,15,0.7)",
			}, 250, function() {

			});
	});

	$(".navbut").mouseleave(function() {	
			$(this).animate ({
					backgroundColor: "rgba(15,15,15,0)",
			}, 250, function() {

			});
	});
});