<?php
	include_once 'includes/load-stats.php';
	session_id('var');
	session_start();

	$correct = $_SESSION['correct'];

	session_destroy();

	$visited = $count[0];
	$p = $correct + 1;
	$totalCorrect = $count[$p];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Stats</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
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
			<p id="hometitle"><u>Stats</u></p>

	<div class="sidesep" id="sep1"> </div>

			<div id="sitecon">
				<h2>Du fik <?php echo $correct; ?> rigtige!</h2>
				<h2>Ud af <?php echo $visited; ?> fik <?php echo $totalCorrect; ?> lige så mange rigtige som dig!</h2>
			</div>

		</div>
	</body>
</html>