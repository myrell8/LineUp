<?php

	session_start();

	if (isset($_SESSION['userID'])) {
		header("Location: inc/redirect.php");
	}

	require("inc/functions.php");
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="description" content="DatabaseTest">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/Logo.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<title>LineUp</title>

</head>
	<body class="homepagebody">
		<div id="mainLogo"><img src="img/Logo.png"></div>

			<div id="loginForm">
				<div id="loginButton"><h1>Login</h1></div>
				<div id="loginList">
					<form action="inc/login.php" method="POST">
						<ul>
							<li>Username:</li>
							<li><input type="text" id="username" name="username" placeholder="Enter Username"></li>
							<li>Password:</li>
							<li><input type="password" id="password" name="password" placeholder="Enter Password"></li>
							<li><button type="submit" id="btnLogin">Login</button></li>
						</ul>
					</form>
				</div>
			</div>

		<button id="buyButton" onclick="location.href = 'license.php'">Purchase License</button>
		<div id=smallButtoncontainer>
		<div id="smallButton"><a href="about.php"><h1>About</h1></a></div>
		<div id="smallButton"><a href="contact.php"><h1>Contact</h1></a></div>
		</div>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>