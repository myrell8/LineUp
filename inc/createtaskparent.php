<?php
	session_start();
	require("functions.php");
	$connect = connectToDB();

	if ($_POST['createbutton']) {
		$query = "INSERT INTO `lineup`.`task` (`taskID`, `userID`, `taskName`, `taskDescription`, `taskStatus`, `taskReward`, `deadline`) VALUES (NULL, '" . $_SESSION['parentchildID'] ."', '" . $_POST['taskname'] . "' , '" . $_POST['taskdescription'] . "', 'To Do', '" . $_POST['taskreward'] . "' , '" . $_POST['taskdeadline'] . "')";
	}

	mysqli_query($connect, $query);

	//echo $query;

	header("Location: ../lineupparent.php");
?>