<?php
	session_start();
	include 'functions.php';
	$connect = connectToDB();
		$username = $_POST['username'];
		$password = $_POST['password'];


		$sql = ("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

		$loginResult = mysqli_query($connect, $sql);
		if (!$row = mysqli_fetch_assoc($loginResult))
		{
			echo "Login failed!";
		}
		else
		{
			$_SESSION['userID'] = $row['userID'];
		}

	header("Location: ../index.php");
?>