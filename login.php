<?php 
    error_reporting(0);
    include('include/connection.php');
    session_start();
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login Page</title>
 
 	<style type="text/css">
 		
 		body{
    			margin: 0;
    			padding: 0;
    			background: url(bg/bg2.jpg);
                height: 100vh;
    			background-size: cover;
    			background-position: center;
    			font-family: sans-serif;
			}

	.loginbox{
    			width: 320px;
    			height: 420px;
    			background: rgba(0,0,0.5,0.8);
                border-radius: 4px;
               	color: #fff;
    			top: 56%;
    			left: 50%;
    			position: absolute;
    			transform: translate(-50%,-50%);
    			box-sizing: border-box;
    			padding: 70px 30px;
			 }		

	.avatar{
    			width:auto;
    			height: 140px;
    			position: absolute;
   			    top: -85px;
   			    left: calc(41% - 50px);
  			}	

		  h1{
    			margin: 0;
    			padding: 0 0 20px;
    			text-align: center;
    			font-size: 29px;
                font-family: Bradley Hand ITC;
                font-weight: bolder;
                color: #fffa65;
            }  		
.loginbox p {
                margin: 0;
                padding: 0;
                font-weight: bold;

            }

.loginbox input{
                width: 100%;
                margin-bottom: 20px;
               }

.loginbox input[type="email"], input[type="password"]
        {
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;
                color: #4cd137;
                font-size: 16px;
        }
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: red;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: green;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 10px;
    color: darkgrey;
}
.loginbox{
    margin-top: 0;
}
.loginbox a:hover
{
    color: #ffc107;
}
.mono{
    width: 200px;
    height: auto;
    margin-top: 10%;
    margin-left: 10%;
    border-radius: 50%;
}
		 
 	</style>

 </head>
 <body>
  <div class="loginbox">
    <a href="index.php"><img src="logo/mlogo.png" class="avatar"></a>
        <h1>Login Here</h1>

        <form action="php_code.php" method="POST">
            <p>Username</p>
            <input type="email" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="login" id="login" value="Login">
            <a href="#">Fogot Password ?</a><br>
            <a href="signup1.php">Don't have an account ?</a>
        </form>
        
    </div>

    <?php

            $email = $_SESSION['newuser'];
            if($_SESSION['newuser'])
            {
                echo ' <script type="text/javascript"> alert("'.$email.' Resistered Successfully, Login Here") </script> ';
            }
            unset($_SESSION['newuser']);
    ?>
 </body>
 </html>