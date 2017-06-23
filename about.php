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
			<p>LineUp is an online webapplication that helps parents get an insight into their kids' task's and progression. It was created by Myrell Richardson and Gijs Verdonschot, both first year IT-student's at the ROC ter AA in Helmond, The Netherlands.</p>
			<button id="aboutBackButton" onclick="location.href = 'inc/redirect.php'"><h1>Go Back<h1></button>
		</div>
	</body>
</html>