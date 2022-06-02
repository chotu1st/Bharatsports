<?php


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Recovery</title>
  <style>
			body{
					background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(../a2.jpg);
					height: 96vh;
					background-size: cover;
					background-position:  center;
					border: 2px solid #E9F0E9;
				}	
  </style>
</head>
<body>
								<h2>User's (Username & Password RECOVERY) Section</h2>
          <div class="label">
          		<label>Username : </label>
          		<input type="text" name="username" placeholder=" Username or Email" required>
          		<label>DOB : </label>
          		<input type="text" name="dob" placeholder=" MM/DD/YYYY" required>
          		<label>Mobile No : </label>
          		<input type="text" name="contact" placeholder=" Registered mob no." required>
          </div>
          <br><br>
          <input type="submit" id="s_btn" name="s_btn" value="Submit">
</body>
</html>