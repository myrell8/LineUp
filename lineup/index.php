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
	<title>Template</title>
</head>
	<body>
		<?php
			foreach($Array as $content) 
			{
			echo "Test: " . $content['taskStatus'];	
			} 
		?>
	</body>
</html>