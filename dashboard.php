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

		<div id="dashboardcontainer"> 
			<div id="createtasktitle">
				<h1>Dashboard</h1>
			</div>

			<div id="dashboard">
				<?php
					foreach($UserArray as $user) 
					{ 
						if ($user['ouderID'] == $_SESSION['userID']) {

				?>
					<div class="dashboarditem">
						<h1 class="childname"><?php echo $user['username'];?></h1>
						<h2 class="passwordlabel">Password:</h2>
						<h2 class="childpassword"><?php echo $user['password'];?></h2>
						<form action="lineupparent.php" method="POST" class="editbuttoncontainer">
							<input type="submit" name="selectuser" value="View list" class="viewbutton">
							<input type="hidden" name="userId" value="<?php echo $user['userID']; ?>">
						</form>
					</div>
				<?php 
					}}
				?>
			</div>
		</div>

		<div id="footer">
			<nav id="main-navigation">
			</nav>
		</div>
	</body>
</html>