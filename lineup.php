<?php
	require("inc/functions.php");
	$connect = connectToDB();

	$query = "
		SELECT *
		FROM task
		";


	$resource = mysqli_query($connect, $query);

	$Array = array();
		while($result = mysqli_fetch_assoc($resource))
		{
			$Array[] = $result;
		}

	session_start();
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
	<body>
		<div id="navbar">
		<div id="main-nav">
			<ul>
				<li>
					<?php 
								if(isset($_SESSION['userID']))

								{

									echo "Logged in as" . " " . $_SESSION['userName'];

								}

								else {
									header("Location: index.php");
								}
					?>

					<div id="logoutButton">
					<a href="inc/logout.php">Logout</a>
					</div>
				</li>

			</ul>
		</div>
			<img id="logo" src="img/logo.png">
		</div>

		<div id="listcontainer">
		<div class="listsection">
			<div class="statustitle"><h1>To Do</h1></div>
			<div class="itemstatus" id="todo">
				<?php
					foreach($Array as $content) 
					{ 
						if ($content['taskStatus'] == "To Do") {
							if ($content['taskReward'] != null) 
							{
								$rewardclass = "reward";
								$reward = $content['taskReward'];
							}
							else
							{
								$rewardclass = "noreward";
								$reward = "No reward added";
							}
				?>
						<div class="itemcontainer">
							<p class="taskname"><?php echo $content['taskName']; ?></p>
							<label class="desclabel">Description:</label>
							<div class="taskdesc"><?php echo $content['taskDescription']; ?></div>
							<form action="changestatus.php" method="POST" class="movebuttoncontainer">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="In Progress" class="movebuttons">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="On Hold" class="movebuttons">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="Finished" class="movebuttons">
								<input type="hidden" name="taskId" value="<?php echo $content['taskID']; ?>">
							</form>
							<label class="deadlinelabel">Deadline:</label>
							<p class="taskdeadline"><?php echo $content['deadline'] ?></p>
							<label class="rewardlabel">Reward:</label>
							<div class="tooltip">
							<img src="img/reward.png" class=<?php echo $rewardclass; ?> height="30" width="30">
							<span class="tooltiptext"><?php echo $reward; ?></span>
							</div>
						</div>
				<?php 
					}}
				?>
			</div>
			</div>

			<div class="listsection">
			<div class="statustitle"><h1>In Progress</h1></div>
			<div class="itemstatus" id="inprogress">
				<?php
					foreach($Array as $content) 
					{ 
						if ($content['taskStatus'] == "In Progress") {
							if ($content['taskReward'] != null) 
							{
								$rewardclass = "reward";
								$reward = $content['taskReward'];
							}
							else
							{
								$rewardclass = "noreward";
								$reward = "No reward added";
							}
				?>
						<div class="itemcontainer">
							<p class="taskname"><?php echo $content['taskName']; ?></p>
							<label class="desclabel">Description:</label>
							<div class="taskdesc"><?php echo $content['taskDescription']; ?></div>
							<form action="changestatus.php" method="POST" class="movebuttoncontainer">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="To Do" class="movebuttons">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="On Hold" class="movebuttons">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="Finished" class="movebuttons">
								<input type="hidden" name="taskId" value="<?php echo $content['taskID']; ?>">
							</form>
							<label class="deadlinelabel">Deadline:</label>
							<p class="taskdeadline"><?php echo $content['deadline'] ?></p>
							<label class="rewardlabel">Reward:</label>
							<div class="tooltip">
							<img src="img/reward.png" class=<?php echo $rewardclass; ?> height="30" width="30">
							<span class="tooltiptext"><?php echo $reward; ?></span>
							</div>
						</div>
				<?php 
					}}
				?>
			</div>
			</div>

			<div class="listsection">
			<div class="statustitle"><h1>On Hold</h1></div>
			<div class="itemstatus" id="onhold">
				<?php
					foreach($Array as $content) 
					{ 
						if ($content['taskStatus'] == "On Hold") {
							if ($content['taskReward'] != null) 
							{
								$rewardclass = "reward";
								$reward = $content['taskReward'];
							}
							else
							{
								$rewardclass = "noreward";
								$reward = "No reward added";
							}
				?>
						<div class="itemcontainer">
							<p class="taskname"><?php echo $content['taskName']; ?></p>
							<label class="desclabel">Description:</label>
							<div class="taskdesc"><?php echo $content['taskDescription']; ?></div>
							<form action="changestatus.php" method="POST" class="movebuttoncontainer">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="To Do" class="movebuttons">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="In Progress" class="movebuttons">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="Finished" class="movebuttons">
								<input type="hidden" name="taskId" value="<?php echo $content['taskID']; ?>">
							</form>
							<label class="deadlinelabel">Deadline:</label>
							<p class="taskdeadline"><?php echo $content['deadline']; ?></p>
							<label class="rewardlabel">Reward:</label>
							<div class="tooltip">
							<img src="img/reward.png" class=<?php echo $rewardclass; ?> height="30" width="30">
							<span class="tooltiptext"><?php echo $reward; ?></span>
							</div>
						</div>
				<?php 
					}}
				?>
			</div>
			</div>

			<div class="listsection">
			<div class="statustitle"><h1>Finished</h1></div>
			<div class="itemstatus" id="finished">
				<?php
					foreach($Array as $content) 
					{ 
						if ($content['taskStatus'] == "Finished") {
							if ($content['taskReward'] != null) 
							{
								$rewardclass = "reward";
								$reward = $content['taskReward'];
							}
							else
							{
								$rewardclass = "noreward";
								$reward = "No reward added";
							}
				?>
						<div class="itemcontainer">
							<p class="taskname"><?php echo $content['taskName']; ?></p>
							<label class="desclabel">Description:</label>
							<div class="taskdesc"><?php echo $content['taskDescription']; ?></div>
							<form action="changestatus.php" method="POST" class="movebuttoncontainer">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="To Do" class="movebuttons">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="In Progress" class="movebuttons">
								<input type="submit" name="status[<?php echo $content['taskID']; ?>]" value="On Hold" class="movebuttons">
								<input type="hidden" name="taskId" value="<?php echo $content['taskID']; ?>">
							</form>
							<label class="deadlinelabel">Deadline:</label>
							<p class="taskdeadline"><?php echo $content['deadline'] ?></p>
							<label class="rewardlabel">Reward:</label>
							<div class="tooltip">
							<img src="img/reward.png" class=<?php echo $rewardclass; ?> height="30" width="30">
							<span class="tooltiptext"><?php echo $reward; ?></span>
							</div>
						</div>
				<?php 
					}}
				?>
			</div>
			</div>
		</div>

		<div id="rewardlistcontainer">
			<div id="rewardlisttitle">
				<h1>Reward list for ...</h1>
			</div>
			<div id="rewardlist">

				<?php
					foreach($Array as $content) 
					{ 
						if ($content['taskStatus'] == "Completed") {
				?>
					<div class="rewarditem">
						<h1 class="rewardname"><?php echo $content['taskReward']; ?></h1>
						<label class="rewardtasklabel">Task:</label>
						<label class="rewarddatelabel">Date completed:</label>
						<p class="rewardtask"><?php echo $content['taskName']; ?></p>
						<p class="rewarddate"><?php echo $content['deadline']; ?></p>
					</div>
				<?php 
					}}
				?>
			</div>
		</div>

		<div id="createtaskcontainer">
			<div id="createtasktitle">
				<h1>Create task for ...</h1>
			</div>
			<div id="createtaskdiv">
				<form action="createtaskchild.php" method="POST" id="createtaskform">
					<label>Taskname:</label><br>
					<input type="text" name="taskname"><br>
					<label>TaskDescription</label><br>
					<input type="text" name="taskdescription"><br>
					<input type="submit" name="createbutton" value="Create task">
				</form>
			</div>
		</div>


		<div id="footer">
			<nav id="main-navigation">
				<ul>
					<li>
						<button onclick="
										document.getElementById('createtaskcontainer').style.visibility='hidden';
										document.getElementById('rewardlistcontainer').style.visibility='hidden';
							 			document.getElementById('listcontainer').style.visibility='visible';
							 			document.getElementById('titlecontainer').style.visibility='visible';">
							To Do List
						</button>
					</li>
					<li>
						<button onclick="
										document.getElementById('createtaskcontainer').style.visibility='visible';
										document.getElementById('rewardlistcontainer').style.visibility='hidden';
							 			document.getElementById('listcontainer').style.visibility='hidden';
							 			document.getElementById('titlecontainer').style.visibility='hidden';">
							Create Task
						</button>
					</li>
					<li>
						<button onclick="
										document.getElementById('createtaskcontainer').style.visibility='hidden';
										document.getElementById('rewardlistcontainer').style.visibility='visible';
							 			document.getElementById('listcontainer').style.visibility='hidden';
							 			document.getElementById('titlecontainer').style.visibility='hidden';">
							Reward list
						</button>
					</li>
				</ul>
			</nav>
		</div>
	</body>
</html>