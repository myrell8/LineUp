<?php
	require("inc/functions.php");
	$connect = connectToDB();

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
						if ($user['ouderID'] == "1") {
				?>
					<div class="dashboarditem">
						<h1 class="childname"><?php echo $user['firstName'] . " " . $user['lastName'];?></h1>
						<form action="lineupparent.php" method="POST" class="editbuttoncontainer">
							<input type="submit" name="selectuser" value="View list">
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