<?php 
 include('include/connection.php');
  /*$con = mysqli_connect("localhost","root","") or die("Unable to connect");
  mysqli_select_db($con,"bharatsports");  */
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>User Detail</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	
	body{
	background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(bg/a2.jpg);
	height: 96vh;
	background-size: cover;
	background-position:  center;
	border: 2px solid #E9F0E9;
}
.head h1{
	color: #E9F0E9;
	font-variant: small-caps;
	text-shadow: 2px 2px black;
	font-size: 250%; 
	margin-top: 0;
	text-align: center;
}
.head img{
	margin-top: 8px;
	margin-bottom: 0;
}


.s{
	margin-top: -40px;
}

.table form label{
	               font-size: 20px;
	               line-height: 55px;
	               padding-top: 10px;
	               padding-bottom: 5px;
	               color: #ccc;	
	               text-align: left;
	               margin-left: 5%;
                 }

.input{
	margin-left: 38%;
	margin-top: -47%;
	line-height: 40px;
}

.table{
     position: absolute;
	 margin-top: -3%;
	 margin-left: 24%;
	 background: rgba(0,0,0,0.5);
	 border-radius: 8px;
	 border: 1px solid #ccc;
	 width: 50%;
	 height: 68%;
	 
	}



input[type=text],[type=email], [type=date], [type=password]{
  width: 260px;
  padding: 8px 16px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: content-box;
  background: transparent;
  font-weight: bold;
  font-size: 14px;
  color: #4cd137;
  margin-top: 10PX;    
}


.btn input{
	background-color: #8e44ad;
	padding: 10px;
	width: 100px;
	color: white;
	border: none;
	margin-left: 11%;
	margin-top: 10PX;
	margin-bottom: 10PX;
	font-size: 14px;
	border-radius: 6px;

}

input[type=submit]:hover {
  background-color: #2ecc71 ;
}
input[type=button]:hover {
  background-color:#c0392b;
}

.footer p{
	text-align: right;
	margin-top: 30%;
	margin-right: 30px;
	color: white;
	font-size: 22px;
	text-shadow: 1px 1px blue;
}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btns {
  border: 2px solid gray;
  color: gray;
  padding: 8px 98px;
  border-radius: 8px;
  font-size: 15px;
  font-weight: bold;
  background-color: white;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>

</head>

<body>

	<div class="head">
     		<br>
     		<h1>User Signup Form</h1>
     			<div class="s">
     				<marquee behavior="alternate" width="99%" direction="right"><img src="logo/logo.png" width="80px" height="auto"></marquee>
     				<marquee behavior="alternate" width="99%" direction="left"><img src="logo/logo.png" width="80px" height="auto"></marquee>
     			</div>
     	</div>	

	 <div class="table">
		<form action="php_code.php" method="POST" enctype ="multipart/form-data">
			            <br>
						<label  for="dp">Display Pic :</label>
						<br>
						<label  for="full_name">Full Name :</label>
						
						<br>
						<label for="place">Address :</label>
						<br>
						<label for="contact">Contact :</label>
						<br>
						<label for="email">E-mail :</label>
						<br>
						<label for="password">Password :</label>
						<br>
					<div class="input">
						<div class="upload-btn-wrapper">
  							<button class="btns">Upload pic &nbsp;<i class="fa fa-camera" aria-hidden="true"></i></button>
 							 <input type="file" name="upload" />
						</div>

						<input type="text" name="full_name" maxlength="100" size="25" placeholder="Ex. - Sanu Shrivastava" required>
							<br>			
						
															
														
						<input type="text" name="place" maxlength="250"  placeholder=" Compelete Address" required>
						<br>			
						
								
						<input type="text" name="contact" maxlength="10"  placeholder="Mobile No." required>
						<br>				
						
									
						<input type="email" name="email" maxlength="100"  placeholder="Ex- xyz@gmail.com" required >
						<br>
						
									
						<input type="password" name="password" maxlength="100"  placeholder="Safe Password" required>
						<br>	
				</div>
				<br><br>
					<div colspan="2" style="text-align: center" class="btn" > 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" id="s_btn" name="s_btn" value="Submit">		
						<a href="login.php"><input type="button" value="Back" id="back_btn"></a>		
					</div>	
						
		</form> 
	
	</div>	

				<div class="footer">
						<p>Dv's Creation . . . </p>
				</div>
			
   </body>
</html>