var score = 0;

for (var i=1; i<11; i++) {
	var answer = $("answer_"+i);
	var tanswer = $("tanswer_"+i);
	if (answer.is(":checked") == true) {score++;};
	if (tanswer.toLowerCase() == "køge") {score++;};
}