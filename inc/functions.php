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

	function d($v)
	{
		echo "<pre>";
		var_dump($v);
		echo "</pre>";
	}


	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

?>