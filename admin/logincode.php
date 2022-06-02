<?php

session_start();

/*$con = mysqli_connect("localhost","root","") or die("Unable to connect");*/
$con = mysqli_connect("localhost","chotu1st","Dv@14111999","jks") or die("Unable to connect");
  mysqli_select_db($con,"jks");


if(isset($_POST['login_btn']))
{
	$email_login = $_POST['emaill'];
	$password_login = $_POST['passwordd'];

	$query = "SELECT * FROM admin WHERE admin_id ='$email_login' AND password ='$password_login'";
	$query_run = mysqli_query($con,$query);

	if(mysqli_fetch_array($query_run))
	{
		$_SESSION['username']= $email_login;

		header('Location: index.php');

	}
	else
	{
		$_SESSION['status']= 'Email id or password is invalid !!!';
		header('Location: login.php');
	}
}

?>
