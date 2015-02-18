<?php
	include_once "db_connect.php";
	session_id('var');
	session_start();

	if(isset($_POST['p_rigtige'])) {
		$p = $_POST['p_rigtige'];//mysqli_real_escape_string($mysqli, $_POST['p_rigtige']);

		$type = 'correct_' . $p;

		$preparestr = "SELECT count FROM score";
		if($stmt = $mysqli->query($preparestr)) {
			$x = 0;

			while($row = mysqli_fetch_assoc($stmt)) {
				$count[] = $row['count'];
				echo '<p>' . $count[$x] . '</p>';
				$x++;
			}

			$p++;

			$visited = $count[0] + 1;
			$correct = $count[$p] + 1;

			echo '<p>' . $type . ' ' . $correct . '</p>';
			

			//$updatestr = "UPDATE score SET count='$visited' WHERE type='visited'";

			$updatestr = "UPDATE score 
					SET   count = 
	      				case  type 
	      				when '$type' then '$correct'
	      				when 'visited' then '$visited'
	      				ELSE count
					end";

			if($mysqli->query($updatestr)) {

				echo '<p>' . $mysqli->affected_rows . '</p>';

				if($mysqli->affected_rows == 2){
					$p--;
					$_SESSION['correct'] = $p;
					echo '<p>' . $_SESSION['correct'] . '</p>';
					header('Location: ../stats.php');
 
				}
				else
				{
					echo '<p>Falied affected_rows</p>';
							print_r(error_get_last());
				} 
			}
			else
			{
				echo '<p>Failed query</p>';
				print_r(error_get_last());
			} 
		}
		else
		{
			echo '<p>Failed prepare</p>';
			print_r(error_get_last());
		}

	}

?>