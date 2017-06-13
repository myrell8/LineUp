<?php
	session_start();
	require("functions.php");
	$connect = connectToDB();

	if ($_POST['createbutton']) {
		$query = "INSERT INTO `lineup`.`task` (`taskID`, `userID`, `taskName`, `taskDescription`, `taskStatus`, `taskReward`, `deadline`) VALUES (NULL, '" . $_SESSION['userID'] ."', '" . $_POST['taskname'] . "' , '" . $_POST['taskdescription'] . "', 'To Do', NULL, NULL)";
	}

	mysqli_query($connect, $query);

	//echo $query;

	header("Location: ../lineupparent.php");
?>