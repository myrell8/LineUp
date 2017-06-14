<?php
	if(!isset($_SESSION)) 
	    { 
	        session_start(); 
	    } 

	    if (isset($_SESSION['userID'])) {
			header("Location: inc/redirect.php");
		}


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

	<body class="homepagebody">

		<div id="mainLogo"><img src="img/Logo.png"></div>
		<div id="registerForm">
		<div id="licensePurchase">
			<h1>Create a LineUp-account</h1>
		</div>

		<div id="registerList">

				<form id="test" action="inc/signup.php" method="POST">
					<ul>
						<li>First Name</li>

						<li><input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required></li>

						<li>Last Name</li>

						<li><input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required></li>

						<li>Email</li>

						<li><input type="text" id="email" name="email" placeholder="Enter your Email" required></li>

						<li>Username</li>

						<li><input type="text" id="username" name="username" placeholder="Enter Username" required></li>

						<li>Password</li>

						<li><input type="password" id="password" name="password" placeholder="Enter Password" required></li>

						<li>Re-Enter Password</li>

						<li><input type="password" id="re-enter-password" name="re-enter-password" placeholder="Re-Enter Password" required></li>

						<li>Child accounts</li>

						<li><input type="number" id="childrenamount" name="childrenamount" min="1" max="10" value="1"></li>

						<li><input type="button" id="btnRegister" class="registerbuttons" value="Register" onclick = "validateForm()"></li>
						<li><button onclick="location.href = 'index.php'" class="registerbuttons">Back</button></li>

					</ul>

				</form>

			</div>

			</div>

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

		<script src="js/main.js"></script>

	</body>

</html>