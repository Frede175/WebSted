$(document).ready(function() {


	if(data != '' && data != "Array" && data != Array) {
		for(var i = 1; i < 11; i++) {
			var id = 'sp' + i;
			if(i != 5) {
				if(data[id] != "answer_" + id) {
					if(data[id] == "" || data[id] == null || data[id] == "null")
					{
						var id1 = "wrong_answer_1_" + id;
						var id2 = "wrong_answer_2_" + id;
						document.getElementById(id1).style.display = "";
						document.getElementById(id2).style.display = "";
					}
					else
					{
						document.getElementById(data[id]).style.display = "";	
					}
					
				}
			}
			else
			{
				if(data[id] == "køge") {

				}
				else if(data[id] != "" || data[id] == null || data[id] == "null")
				{
					$("#sp5_p").val(data[id]);
					document.getElementById("tanswer_1_wrong").style.display = "";
				}
			}
		}
	}

});