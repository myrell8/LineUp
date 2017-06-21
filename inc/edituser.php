<?php
include 'functions.php';
$connect = connectToDB();
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$reEnterPassword = $_POST['re-enter-password'];


if($_POST['editButton'])
{
$sql = "UPDATE `lineup`.`user` SET 		`username` = '" . $username . "',
										`password` = '" . $password . "'
										WHERE `user`.`userID` = '" . $_SESSION['userID'] . "'";
}

mysqli_query($connect, $sql);
$_SESSION['userName'] = $username;
header("Location: redirect.php");


?>