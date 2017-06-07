<?php
	function connectToDB()
	{
		$host	= "localhost";
		$user	= "root";
		$pass	= "usbw";
		$dB		= "lineup";
		
		$connect = mysqli_connect($host,$user, $pass, $dB);
		
		return $connect;
	}
?>

