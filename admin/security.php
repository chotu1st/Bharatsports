<?php
	session_start();

	//include ('dbconfig.php');

	/*if($dbconfig)
	{
		//echo "Database connected";
	}
	else
	{
		header("Location: dbconfig.php");
	}*/

	if(!$_SESSION['username'])
	{
		header('Location: login.php');
	}

?>
