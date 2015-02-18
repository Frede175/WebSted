$(document).ready(function() {

	var tabExtended = [false,false,false,false,false];

	$("#dElMag").click(function() {
		if (tabExtended[0] == false) {
			$(this).animate ({
				width: "450px",
				height: "220px",
				backgroundColor: "rgba(102,138,254,0.5)",
			}, 250, function() {

			});

			$("#ElMagtext").show(100);
			$("#buttext1").hide();

			tabExtended[0] = !tabExtended[0];

		} else {

			$(this).animate ({
					width: "170px",
					height: "50px",
					backgroundColor: "#668AFE",
			}, 250, function() {

			});

			$("#ElMagtext").hide(100);
			$("#buttext1").show();

			tabExtended[0] = !tabExtended[0];
		};
	});






	$("#dMaskEl").click(function() {
		if (tabExtended[1] == false) {
			$(this).animate ({
				width: "610px",
				height: "715px",
				backgroundColor: "rgba(102,138,254,0.5)",
			}, 250, function() {

			});

			$("#MaskEltext").show(100);
			$("#buttext2").hide();

			tabExtended[1] = !tabExtended[1];

		} else {
			$(this).animate ({
					width: "170px",
					height: "50px",
					backgroundColor: "#668AFE",
			}, 250, function() {

			});

			$("#MaskEltext").hide(100);
			$("#buttext2").show();

			tabExtended[1] = !tabExtended[1];
		};
	});






	$("#dBat").click(function() {
		if (tabExtended[2] == false) {
			$(this).animate ({
				width: "610px",
				height: "480px",
				backgroundColor: "rgba(102,138,254,0.5)",
			}, 250, function() {

			});

			$("#Battext").show(100);
			$("#buttext3").hide();

			tabExtended[2] = !tabExtended[2];

		} else {
			$(this).animate ({
					width: "150px",
					height: "50px",
					backgroundColor: "#668AFE",
			}, 250, function() {

			});

			$("#Battext").hide(100);
			$("#buttext3").show();

			tabExtended[2] = !tabExtended[2];
		};
	});






	$("#dElInd").click(function() {
		if (tabExtended[3] == false) {
			$(this).animate ({
				width: "610px",
				height: "690px",
				backgroundColor: "rgba(102,138,254,0.5)",
			}, 250, function() {

			});

			$("#ElIndtext").show(100);
			$("#buttext4").hide();

			tabExtended[3] = !tabExtended[3];

		} else {
			$(this).animate ({
					width: "150px",
					height: "50px",
					backgroundColor: "#668AFE",
			}, 250, function() {

			});

			$("#ElIndtext").hide(100);
			$("#buttext4").show();

			tabExtended[3] = !tabExtended[3];
		};
	});






	$("#dOpf").click(function() {
		if (tabExtended[4] == false) {
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

			$("#Opftext").show(100);
			$("#buttext5").hide();

			tabExtended[4] = !tabExtended[4];

		} else {
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

			$("#Opftext").hide(100);
			$("#buttext5").show();

			tabExtended[4] = !tabExtended[4];
		};
	});
});