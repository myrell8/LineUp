<?php
	session_start();


	require("inc/functions.php");

	$connect = connectToDB();



	$query = "

		SELECT *

		FROM user

		";





	$resource = mysqli_query($connect, $query);



	$Array = array();

		while($result = mysqli_fetch_assoc($resource))

		{
			$Array[] = $result;
		}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="DatabaseTest">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/icon.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<title>LineUp</title>
</head>

	<body class="myrellbody">
		<div id="navbar">
		<div id="main-nav">
			<ul>
				<li>
					<?php 
								if(isset($_SESSION['userID']))

								{
									echo "Logged in as" . " " . $_SESSION['userName'];
								}

								else 
								{
									header("Location: index.php");
								}
					?>
				</li>
			</ul>
				<div id="editButton"><a href="editaccount.php">Edit account</a></div>
				<div id="logoutButton"><a href="inc/logout.php">Logout</a></div>
				<div id="aboutButton"><a href="about.php">About</a></div>
				<div id="contactButton"><a href="contact.php">Contact</a></div>

		</div>
			<img id="logo" src="img/logo.png">
		</div>

		<div id="dashboardcontainer"> 
			<div id="createtasktitle">
				<h1></h1>
			</div>
<div id="dashboard">
				
					
			</div>
			<div class="dashboarditem">
					
					</div>
		<div id="footer">
			<nav id="main-navigation">
			
			</nav>
		</div>
	</body>
</html>