<!DOCTYPE html>
<html>
<head>
	<title>S-THR3E Jobs Portal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="assets/js/jobs.js"></script>
  	<link rel="stylesheet" href="assets/css/styling.css">
</head>
<body >
	
	<?php include('headerhome.php'); ?>
	
	<div class="bkgimg" style="height: auto;">
		<br>
		<div class="reg" >
			<h2 style="text-align: center;"><b>Employee Registration</b></h2>
			<p>Please enter the following details:-</p>
			<form action="registrationasemployee.php" method="post">
				<label for="jfname">First Name*</label>
		  		<input type="text" id="jfname" name="jfname" required><br><br>
		  		<label for="jlname">Last Name*</label>
		  		<input type="text" id="jlname" name="jlname" required><br><br>
		  		<label for="jcontactNumber">Contact Number*</label>
		  		<input type="tel" id="jcontactNumber" name="jcontactNumber" pattern="[0-9]{10}" required><br><br>
		  		<label for="jaadharnumber">AADHAR Number*</label>
		  		<input type="tel" id="jaadharnumber" name="jaadharnumber" pattern="[0-9]{12}" required><br><br>
		  		<label for="jaddress">Address*</label>
		  		<input type="text" id="jcity" name="jcity" placeholder="City" required>
		  		<input type="text" id="jstate" name="jstate" placeholder="State" required><br><br>
		  		<label for="jemail">Email Id*</label><br>
		  		<input type="email" id="email" name="email" required ><br><br>
		  		<label for="jpassword">Password*</label>
		  		<input type="password" id="password" name="password" required ><br><br>	  		
	  			
	  			<button type="submit" class="btn">Login</button><br><br>
			</form>
		</div>
	</div>
	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
</body>
</html>
