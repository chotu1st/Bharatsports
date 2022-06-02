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

	if(!$_SESSION['customer'])
	{
		header('Location: login.php');
	}

?>