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
				session_destroy();
				header("Location: ../index.php");
			}
?>