function update(form) {
	var score = 0;

	for (var i=1; i<10; i++) {
		var answer = $("#answer_"+i);
		if (answer.is(":checked") == true)
		{
		 	score++;
		}
	}


	for(var i = 1; i<2; i++){
		var tanswer = $("#tanswer_"+i);

		if (tanswer.val().toLowerCase() == "køge") 
			{
				score++;
			}
	}


	var p = document.createElement('input');
	form.appendChild(p);
	p.name = "p_rigtige";
	p.type = "hidden";
	p.value = score;
	form.submit();
}