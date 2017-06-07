<?php
	require("inc/functions.php");

	$connect = connectToDB();

	if ($_POST['selectuser']){
		echo $_POST['userId'];
	}

	//mysqli_query($connect, $query);

	//header("Location: lineupparent.php");
?>