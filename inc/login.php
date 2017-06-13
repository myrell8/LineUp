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
			header("Location: ../index.php");
			session_destroy();
		}
		else
		{
			$_SESSION['userID'] = $row['userID'];
			$_SESSION['userName'] = $row['username'];
			$_SESSION['role'] = $row['role'];

			if ($_SESSION['role'] == "kind")
			{
				header("Location: ../lineup.php");
			}
			else
			{
				header("Location: ../dashboard.php");
			}
		}


?>