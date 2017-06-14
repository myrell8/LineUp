<?php
	session_start();
	require("inc/functions.php");
	$connect = connectToDB();
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

				<div id="logoutButton"><a href="inc/logout.php">Logout</a></div>
				<div id="aboutButton"><a href="about.php">About</a></div>
				<div id="contactButton"><a href="contact.php">Contact</a></div>

		</div>
			<img id="logo" src="img/logo.png">
		</div>

		<div id="edittaskcontainer">
			<div id="createtasktitle">
				<h1>Edit Task</h1>
			</div>
			<div id="createtaskdiv">
				<form action="inc/editmanual.php" method="POST" id="createtaskform">
					<label>Taskname:</label><br>
					<input type="text" name="taskname"><br>
					<label>TaskDescription</label><br>
					<input type="text" name="taskdescription"><br>
					<label>TaskStatus</label><br>
					<select name="taskstatus">
					  <option value="To Do">To Do</option>
					  <option value="In Progress">In Progress</option>
					  <option value="On Hold">On Hold</option>
					  <option value="Finished">Finished</option>
					  <option value="Completed">Completed</option>
					</select><br>
					<label>TaskDeadline</label><br>
					<input type="date" name="taskdeadline"><br>
					<label>TaskReward</label><br>
					<input type="text" name="taskreward"><br>
					<input type="submit" name="editbutton" value="Edit task">
				</form>
			</div>
		</div>

		<div id="footer">
			<nav id="main-navigation">
				<ul>
					<li>
						<button onclick="location.href = 'lineupparent.php'">
							Cancel
						</button>
					</li>
			</nav>
		</div>
	</body>
</html>