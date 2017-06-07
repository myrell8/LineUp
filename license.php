<?php
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

	<meta charset="utf-8">

	<meta name="description" content="DatabaseTest">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="shortcut icon" href="img/Logo.png">

	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<title>LineUp</title>

</head>

	<body>

		<div id="mainLogo"><img src="img/Logo.png"></div>
		<div id="registerForm">
		<div id="licensePurchase">
			<h1>Create a LineUp-account</h1>
		</div>

		<div id="registerList">

				<form action="inc/signup.php" method="POST">
					<ul>
						<li>First Name</li>

						<li><input type="text" id="firstname" name="firstname" placeholder="Enter your first name"></li>

						<li>Last Name</li>

						<li><input type="text" id="lastname" name="lastname" placeholder="Enter your last name"></li>

						<li>Email</li>

						<li><input type="text" id="email" name="email" placeholder="Enter your Email"></li>

						<li>Username</li>

						<li><input type="text" id="username" name="username" placeholder="Enter Username"></li>

						<li>Password</li>

						<li><input type="password" id="password" name="password" placeholder="Enter Password"></li>

						<li>Child accounts</li>

						<li><input type="number" id="childrenamount" name="childrenamount" min="1" value="1"></li>

						<li><button type="submit" id="btnRegister">Register</button></li>

					</ul>

				</form>

			</div>

			</div>

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

		<script src="js/main.js"></script>

	</body>

</html>