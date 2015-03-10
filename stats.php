<?php	
	include_once "includes/db_connect.php";
	include_once 'includes/load-stats.php';
	session_id('var');
	session_start();

	$correct = $_SESSION['correct'];

	if(isset($_SESSION['data'])) {
		$data = json_encode($_SESSION['data']);
	}
	else
	{
		$data = '""';
	}
	session_destroy();

	$visited = $count[0];
	$p = $correct + 1;
	$totalCorrect = $count[$p]-1;
?>

<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script>
			var data = <?php echo $data; ?>;
		</script>
		<script type="text/javascript" src="js/stats.js"></script>
		<title>Statistik</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/stats.css">
		<LINK REL="SHORTCUT ICON" HREF="img/logo.png">
	</head>
	<body>
		<div id="header">
			<div id="nav">
				<div id ="but1" class="navbut"><a href="index.html">Hjem</a></div>
				<div class="sep"> </div>
				<div id ="but2" class="navbut"><a href="historie.html">Historie</a></div>
				<div class="sep"> </div>
				<div id ="but3" class="navbut"><a href="formler.html">Formler</a></div>
				<div class="sep"> </div>
				<div id ="but4" class="navbut"><a href="quiz.html">Quiz</a></div>
				<a href="index.html"><img src="img/logo.png" id="logo"></a>
			</div>
		</div>

		<div class="back" id="iback">
			<p id="hometitle"><u>Statistik</u></p>

		<div class="sidesep" id="sep1"> </div>

			<div id="sitecon">
				<h2>Du fik <?php echo $correct; ?> rigtige!</h2>
				<h2>Ud af <?php echo $visited; ?> fik <?php echo $totalCorrect; ?> lige så mange rigtige som dig!</h2>
			</div>
		<div class="sidesep" id="sep2"> </div>

		<div id="main">
			<h1 class="underov">Spørgsmål 1</h1>
				<h1 class="underov" id="spml1">Hvornår blev elektrisk lys opdaget?</h1>

				<form id="sp1">
					<div class="centerbut">
					<div id="answer_sp1" ><img src="img/correct.png">År 1810</div> <br><br>
					<div id="wrong_answer_1_sp1" style="display:none"><img src="img/wrong.png">År 1820</div> <br><br>
					<div id="wrong_answer_2_sp1" style="display:none"><img src="img/wrong.png">År 1830</div> <br><br>
					</div>
				</form>

	<!--__________________________________________________________________________________________________________________-->

				<h1 class="underov" id="s2">Spørgsmål 2</h1>
				<h1 class="underov" id="spml2">Hvem opfandt vekselstrøms transformatoren?</h1>

				<form id="sp2">
					<div id="wrong_answer_1_sp2" style="display:none"><img src="img/wrong.png">H. C. Ørsted</div> <br><br>
					<div id="answer_sp2" ><img src="img/correct.png">William Stanley</div> <br><br>
					<div id="wrong_answer_2_sp2" style="display:none"><img src="img/wrong.png">Nikola Tesla</div> <br><br>
				</form>

	<!--__________________________________________________________________________________________________________________-->

				<h1 class="underov" id="s3">Spørgsmål 3</h1>
				<h1 class="underov" id="spml3">Hvornår blev stærkstrømsloven vedtaget?</h1>

				<form id="sp3">
					<div id="wrong_answer_1_sp3" style="display:none"><img src="img/wrong.png">År 1903</div> <br><br>
					<div id="answer_sp3" ><img src="img/correct.png"> År 1907</div><br><br>
					<div id="wrong_answer_2_sp3" style="display:none"><img src="img/wrong.png">År 1912</div> <br><br>
				</form>

	<!--__________________________________________________________________________________________________________________-->

				<h1 class="underov" id="s4">Spørgsmål 4</h1>
				<h1 class="underov" id="spml4">Hvad er formlen for strømstyrke?</h1>

				<form id="sp4">
					<div id="wrong_answer_1_sp4" style="display:none"><img src="img/wrong.png">I = t/Q</div> <br><br>
					<div id="wrong_answer_2_sp4" style="display:none"><img src="img/wrong.png">I = u/t</div> <br><br>
					<div id="answer_sp9" ><img src="img/correct.png">I = Q/t
</div> <br><br>
				</form>

	<!--__________________________________________________________________________________________________________________-->

				<h1 class="underov" id="s5">Spørgsmål 5</h1>
				<h1 class="underov" id="spml5">I hvilken by åbnede det første elværk i Danamrk?</h1>

				<form id="sp5">
					<div id="tanswer_1_wrong" style="display:none"><img src="img/wrong.png"><p id="sp5_p"></p></div><br>
					<div id="tanswer_1"><img src="img/correct.png">Køge</div><br><br>      <!--Det rigtige svar er "Køge/køge"-->
				</form>

	<!--__________________________________________________________________________________________________________________-->

				<h1 class="underov" id="s6">Spørgsmål 6</h1>
				<h1 class="underov" id="spml6">Hvad var det at Faraday opdagede efter at have studeret H. C. Ørsteds værk om elektromagnetisme?</h1>

				<form id="sp6">
					<div id="wrong_answer_1_sp6" style="display:none"><img src="img/wrong.png">Det galvaniske batteri</div> <br><br>
					<div id="wrong_answer_2_sp6" style="display:none"><img src="img/wrong.png">At Ørsted havde lavet en fejl</div> <br><br>
					<div id="answer_sp6" ><img src="img/correct.png">Induktion</div> <br><br>
				</form>

	<!--_________________________________________________________________________________________________________________-->

				<h1 class="underov" id="s7">Spørgsmål 7</h1>
				<h1 class="underov" id="spml7">Hvad måler man strømstyrke i?</h1>

				<form id="sp7">
					<div id="wrong_answer_1_sp7" style="display:none"><img src="img/wrong.png">Volt</div> <br><br>
					<div id="answer_sp7" ><img src="img/correct.png">Ampere</div> <br><br>
					<div id="wrong_answer_2_sp7" style="display:none"><img src="img/wrong.png">Ohm</div> <br><br>
				</form>

	<!--_________________________________________________________________________________________________________________-->

				<h1 class="underov" id="s8">Spørgsmål 8</h1>
				<h1 class="underov" id="spml8">Hvornår blev batteriet opdaget?</h1>

				<form id="sp8">
					<div id="wrong_answer_1_sp8" style="display:none"><img src="img/wrong.png">År 1765</div> <br><br>
					<div id="answer_sp8" ><img src="img/correct.png">År 1800</div> <br><br>
					<div id="wrong_answer_2_sp8" style="display:none"><img src="img/wrong.png">År 1887</div> <br><br>
				</form>

	<!--_________________________________________________________________________________________________________________-->

				<h1 class="underov" id="s9">Spørgsmål 9</h1>
				<h1 class="underov" id="spml9">Hvem opfandt glødelampen?</h1>

				<form id="sp9">
					<div id="wrong_answer_1_sp9" style="display:none"><img src="img/wrong.png">Niels Finsen</div> <br><br>
					<div id="answer_sp9" ><img src="img/correct.png">Thomas Edinson</div> <br><br>
					<div id="wrong_answer_2_sp9" style="display:none"><img src="img/wrong.png">Paul Nipkow</div> <br><br>
				</form>

	<!--_________________________________________________________________________________________________________________-->

				<h1 class="underov" id="s10">Spørgsmål 10</h1>
				<h1 class="underov" id="spml10">Hvad har transistoren erstattet?</h1>

				<form id="sp10">
					<div id="answer_sp10" ><img src="img/correct.png">Radiorør</div> <br><br>
					<div id="wrong_answer_1_sp10" style="display:none"><img src="img/wrong.png">Wolframtråd</div> <br><br>
					<div id="wrong_answer_2_sp10" style="display:none"><img src="img/wrong.png">Katodestrålerør</div> <br><br>
				</form>
			</div>
		</div>

	</body>
</html>