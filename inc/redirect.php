<?php
	session_start();

			if ($_SESSION['role'] == "kind")
			{

				header("Location: ../lineup.php");
			}
			else if ($_SESSION['role'] == "ouder") 
			{
				header("Location: ../dashboard.php");
			}
			else
			{
				header("Location: ../index.php");
			}
?>