<!DOCTYPE html>
<html>
<head>
	<title>S-THR3E Jobs Portal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="assets/js/jobs.js"></script>
  	<link rel="stylesheet" href="assets/css/styling.css">
</head>
<body>
	<?php include('headerhome.php'); ?>
	<div class="bkgimg-fixed" >
		<br><br>
		<div class="login">
			<h2 style="text-align: center; color: #002060">Seeker Login</h2><br>
			
			<form action="validation_employee.php" method="POST">
  				<div class="input-container">
    				<i class="fa fa-envelope icon"></i>
    				<input class="inputLogin" type="text" placeholder="Email" name="email" id="email">
  				</div>

  				<div class="input-container">
    				<i class="fa fa-key icon"></i>
    				<input class="inputLogin" type="password" placeholder="Password" name="password" id="password">
  				</div>

                  <button type="submit" class="btn">Login</button>
                  <!-- <button type="submit" class="btn" href="registerasseeker.php">Register Now</button>-->
			</form> 
            
            <!-- <form action="registration.php" method="POST">
		  		<label for="email">Email Id*</label><br>
		  		<input type="email" id="email" name="email" required ><br><br>
		  		<label for="password">Password*</label>
		  		<input type="password" id="password" name="password" required ><br><br>	  		
		  		
		  	
	  			<button type="submit" class="btn">Register</button><br><br>
			</form> -->
		</div>
	</div>
	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
	
	