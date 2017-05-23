<?php
	session_start();
?>

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

				<?php 
					if(isset($_SESSION['userID']))
					{
						echo "Logged in as" + $_SESSION['userID'];
					}
					else {
						echo "You are not logged in";
					}
				?>
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

		<div id="buyButton"><a href=""><h1>Koop</h1></a></div>

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>