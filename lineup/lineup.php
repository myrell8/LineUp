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
		<img id="logo" src="img/logo.png">
		</div>

		<div id="titlecontainer">
			<div class="statustitle"><h1>To Do</h1></div>
			<div class="statustitle"><h1>In Progress</h1></div>
			<div class="statustitle"><h1>On Hold</h1></div>
			<div class="statustitle"><h1>Finished</h1></div>
		</div>

		<div id="listcontainer">
			<div class="itemstatus" id="todo">
				<?php
					foreach($Array as $content) 
					{ 
						if ($content['taskStatus'] == "ToDo") {
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
			<div class="itemstatus" id="inprogress">
				<?php
					foreach($Array as $content) 
					{ 
						if ($content['taskStatus'] == "Progress") {
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
			<div class="itemstatus" id="onhold">
				<?php
					foreach($Array as $content) 
					{ 
						if ($content['taskStatus'] == "Hold") {
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

		<div id="rewardlistcontainer">
			
		</div>
		
		<div id="buttoncontainer">
			<div class="button">Create Task</div>
			<div class="button">
				<a onclick="document.getElementById('rewardlistcontainer').style.display='block';
				 			document.getElementById('listcontainer').style.display='none';
				 			document.getElementById('titlecontainer').style.display='none';">
					Reward list
				</a>
			</div>
		</div>
	</body>
</html>