<?php
	require("inc/functions.php");

	$connect = connectToDB();

	if ($_POST['status']){
		$query = "UPDATE `lineup`.`task` SET `taskStatus` = '" . $_POST['status'][$_POST['taskId']] . "' WHERE `task`.`taskID` = '" . $_POST['taskId'] . "'";
	}

	mysqli_query($connect, $query);

	header("Location: lineup.php");
?>