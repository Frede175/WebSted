<?php
	include_once 'db_connect.php';


	$preparestr = "SELECT count FROM score";
	if($stmt = $mysqli->query($preparestr)) {

		while($row = mysqli_fetch_assoc($stmt)) {
			$count[] = $row['count'];
		}
	}

?>