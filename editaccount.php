<?php
	session_start();
	require("inc/functions.php");
	$connect = connectToDB();

	/*
		if (isset($_SESSION['userID'])) {
		header("Location: inc/redirect.php");
	}
	*/

	$query = "
		SELECT *
		FROM task
		";

	$userquery = "
		SELECT *
		FROM user
		";

	$userresource = mysqli_query($connect, $userquery);
	$resource = mysqli_query($connect, $query);

	$Array = array();
		while($result = mysqli_fetch_assoc($resource))
		{
			$Array[] = $result;
		}

	$UserArray = array();
		while($result = mysqli_fetch_assoc($userresource))
		{
			$UserArray[] = $result;
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

		<div id="editaccountcontainer"> 
			<div id="createtasktitle">
				<h1>Edit Account</h1>
			</div>

			<div id="editaccountdiv">
				<form action="inc/edituser.php" method="POST" id="editaccountform">
					<ul>
						<li>New Username</li>
						<li><input type="text" id="username" name="username" placeholder="Enter Username" minlength="4" maxlength="15" required></li>
						<li>New password</li>
						<li><input type="password" id="password" name="password" placeholder="Enter Password" min="4" max="15"  required></li>
						<li>Re-enter new Password</li>
						<li><input type="password" id="re-enter-password" name="re-enter-password" placeholder="Re-Enter Password" min="4" max="15" required></li>
						<li><input type="submit" id="edituserbutton" name="editButton" value="Edit" onclick = "validateEdit()"></li>
						<li></li>
					</ul>
				</form>
			</div>
		</div>

		<div id="footer">
			<nav id="main-navigation">
			<ul>
					<li>
						<button onclick="location.href = 'inc/redirect.php'">
							Cancel
						</button>
					</li>
			</ul>
			</nav>
		</div>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>