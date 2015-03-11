function update(form) {
	var score = 0;
	var answers = {};

	for(var i = 1; i < 11; i++) {
		var id = 'sp' + i;
		if(i != 5) {
			answers[id] = getRadioId(document.getElementById(id), "spørgsmål1");
			if(answers[id] == "answer_" + id) {
				score++;
			}
		}
		else
		{
			var tanswer = $("#tanswer_1");
			answers[id] = tanswer.val().toLowerCase();
			if(answers[id] == "køge") {
				score++;
			}
		}
	}

	answers["score"] = score;

	$.ajax({
		url: '../includes/updatetable.php',
		type: 'POST',
		dataType: 'JSON',
		data: {data: answers}
	})
	.always(function() {
		document.location = 'stats.php';
		alert("hello");
	})
	.fail(function() {
		alert("error");
	});
}
function getRadioId(form, name) {
	var id;

	var radios = form.elements[name];

	for(var i = 0; i < radios.length; i++) {
		if(radios[i].checked) {
			id = radios[i].id;
			break;
		}
	}

	return id;
}