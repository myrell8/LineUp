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
		<div id="aboutcontainer">
			<h2>About</h2>
			<p>*insert about text here*</p>
			<button id="aboutBackButton" onclick="location.href = 'inc/redirect.php'"><h1>Go Back<h1></button>
		</div>
	</body>
</html>