<?php

	session_start();
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
		<div id=contactformcontainer>
			<form id="emailform" action="inc/contactmail.php" method="post">
				<p class="contactformlabel">Name</p>
				<input class="contactinput" type="text" name="cf_name" required><br>
				<p class="contactformlabel">E-mail</p>
				<input class="contactinput" type="text" name="cf_email" required><br>
				<p class="contactformlabel">Message</p>
				<textarea class="contactinput" id="message" name="cf_message" required rows="11" cols="80"></textarea><br>
				<div id="contactbuttoncontainer">
					<input class="contactbutton" type="submit" value="Send">
					<input class="contactbutton" type="reset" value="Clear">
				</div>
			</form>
		</div>
		<button id="aboutBackButton" onclick="location.href = 'inc/redirect.php'"><h1>Go Back<h1></button>
	</body>
</html>