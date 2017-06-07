<?php
include 'functions.php';
$connect = connectToDB();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$childrenamount = $_POST['childrenamount'];
$role = "ouder";
$childrole =

$sql = "INSERT INTO user (userID,firstName,lastName,email,username,password,role) VALUES('','$firstname','$lastname','$email','$username','$password','$role')";



	if (mysqli_query($connect, $sql))
	{
		$ouderid = mysqli_insert_id($connect);
	}
	else
	{

	}

	$insertChildren = "INSERT INTO user (userID,username,password,role,ouderID) VALUES";
	for($kind = 1; $kind <= $childrenamount; $kind++)
	{
		$insertChildren .= "(NULL,'". $username . "child" . $kind. "' , 'test', 'kind', '$ouderid'),";
	}
	$insertChildren = rtrim($insertChildren, ",");


// INSERT INTO `lineup`.`user` (`userID`, `username`, `password`, `firstName`, `lastName`, `email`, `dob`, `role`, `ouderID`) VALUES (NULL, 'piet', '', '', '', '', NULL, '', NULL), (NULL, 'bert', '', '', '', '', NULL, '', NULL);

// $signupQuery = mysqli_query($connect, $sql);
$signupQueryChild = mysqli_query($connect, $insertChildren);
	header("Location: ../index.php");
?>