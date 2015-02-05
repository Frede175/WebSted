$(document).ready(function() {
	//Formel for strømstyrke!
	$('#sub1').unbind().click(function(event) {
		var i = $('#I_strm').val();
		var q = $('#Q').val();
		var t = $('#t').val();

		if(i == "" || q == "" || t == ""){
			if(i == "" && q != "" && t != ""){
				var result = q/t;
				result = result.toFixed(2);
				$('#I_strm').val(result);
			}
			else if(t == "" && q != "" && i != ""){
				var result = q/i;
				result = result.toFixed(2);
				$('#t').val(result);
			}
			else if(q == "" && i != "" && t != ""){
				var result = i*t;
				result = result.toFixed(2);
				$('#Q').val(result);
			}
			else
			{
				alert("Du er nød til at kende mindst to tal!");
			}
		}
		else
		{
			alert("Du har alle 3 input, ikke nogen grund til at udregne noget!");
		}
	});

	//Formel for effekt!
	$('#sub2').unbind().click(function(event) {
		var p = $('#P').val();
		var u = $('#U_effekt').val();
		var i = $('#I_effekt').val();

		if(i == "" || p == "" || u == ""){
			if(i == "" && p != "" && u != ""){
				var result = p/u;
				result = result.toFixed(2);
				$('#I_effekt').val(result);
			}
			else if(p == "" && i != "" && u != ""){
				var result = i*u;
				result = result.toFixed(2);
				$('#P').val(result);
			}
			else if(u == "" && i != "" && p != ""){
				var result = p/i;
				result = result.toFixed(2);
				$('#U_effekt').val(result);
			}
			else
			{
				alert("Du er nød til at kende mindst to tal!");
			}
		}
		else
		{
			alert("Du har alle 3 input, ikke nogen grund til at udregne noget!");
		}
	});

	//Formel for resistans
	$('#sub3').unbind().click(function(event) {
		var r = $('#R').val();
		var u = $('#U_resistans').val();
		var i = $('#I_resistans').val();

		if(i == "" || r == "" || u == ""){
			if(i == "" && r != "" && u != ""){
				var result = u/r;
				result = result.toFixed(2);
				$('#I_resistans').val(result);
			}
			else if(r == "" && i != "" && u != ""){
				var result = u/i;
				result = result.toFixed(2);
				$('#R').val(result);
			}
			else if(u == "" && i != "" && r != ""){
				var result = r*i;
				result = result.toFixed(2);
				$('#U_resistans').val(result);
			}
			else
			{
				alert("Du er nød til at kende mindst to tal!");
			}
		}
		else
		{
			alert("Du har alle 3 input, ikke nogen grund til at udregne noget!");
		}
	});
});