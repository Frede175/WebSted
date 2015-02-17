$(document).ready(function() {


	$("#dElMag").mouseenter(function() {
			$(this).animate ({
				width: "450px",
				height: "270px",
				backgroundColor: "rgba(102,138,254,0.5)",
			}, 250, function() {

			});
	});

	$("#dElMag").mouseleave(function() {	
			$(this).animate ({
					width: "150px",
					height: "50px",
					backgroundColor: "#668AFE",
			}, 250, function() {

			});
	});





	$("#dMaskEl").mouseenter(function() {
			$(this).animate ({
				width: "610px",
				height: "715px",
				backgroundColor: "rgba(102,138,254,0.5)",
			}, 250, function() {

			});
	});

	$("#dMaskEl").mouseleave(function() {	
			$(this).animate ({
					width: "150px",
					height: "50px",
					backgroundColor: "#668AFE",
			}, 250, function() {

			});
	});





	$("#dBat").mouseenter(function() {
			$(this).animate ({
				width: "610px",
				height: "480px",
				backgroundColor: "rgba(102,138,254,0.5)",
			}, 250, function() {

			});
	});

	$("#dBat").mouseleave(function() {	
			$(this).animate ({
					width: "150px",
					height: "50px",
					backgroundColor: "#668AFE",
			}, 250, function() {

			});
	});





	$("#dElInd").mouseenter(function() {
			$(this).animate ({
				width: "610px",
				height: "690px",
				backgroundColor: "rgba(102,138,254,0.5)",
			}, 250, function() {

			});
	});

	$("#dElInd").mouseleave(function() {	
			$(this).animate ({
					width: "150px",
					height: "50px",
					backgroundColor: "#668AFE",
			}, 250, function() {

			});
	});





	$("#dOpf").mouseenter(function() {
			$(this).animate ({
				width: "610px",
				height: "1690px",
				backgroundColor: "rgba(102,138,254,0.5)",
			}, 250, function() {

			});

			$("#hback").animate ({
				height: "5150px",
			}, 250, function() {

			});
	});

	$("#dOpf").mouseleave(function() {	
			$(this).animate ({
					width: "150px",
					height: "50px",
					backgroundColor: "#668AFE",
			}, 250, function() {

			});

			$("#hback").animate ({
				height: "3700px",
			}, 250, function() {

			});
	});
});