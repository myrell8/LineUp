<?php
	session_start();

	require("functions.php");

	$connect = connectToDB();

	if ($_POST['status'][$_POST['taskId']] == "Edit") {
		$_SESSION['sessionTaskId'] = $_POST['taskId'];
		header("Location: ../edittask.php");
		die();
	}

	if ($_POST['status'][$_POST['taskId']] == "Delete") {
		$query = "DELETE FROM `lineup`.`task` WHERE `task`.`taskID` = '" . $_POST['taskId'] . "'";
	}

	if ($_POST['status'][$_POST['taskId']] == "Completed"){
		$query = "UPDATE `lineup`.`task` SET `taskStatus` = '" . $_POST['status'][$_POST['taskId']] . "' WHERE `task`.`taskID` = '" . 
		$_POST['taskId'] . "'";
	}

	mysqli_query($connect, $query);

	header("Location: ../lineupparent.php");
	
?>