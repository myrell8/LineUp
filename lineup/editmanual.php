<?php
	session_start();

	require("inc/functions.php");

	$connect = connectToDB();

	if ($_POST['editbutton']) {
		$query = "UPDATE `lineup`.`task` SET 	`taskName` = '" . $_POST['taskname'] . "',
												`taskDescription` = '" . $_POST['taskdescription'] . "', 
												`taskStatus` = '" . $_POST['taskstatus'] . "',  
												`taskReward` = '" . $_POST['taskreward'] . "',  
												`deadline` = '" . $_POST['taskdeadline'] . "'
												WHERE `task`.`taskID` = '" . $_SESSION['sessionTaskId'] . "'";
	}

	mysqli_query($connect, $query);

	header("Location: lineupparent.php");
	
?>