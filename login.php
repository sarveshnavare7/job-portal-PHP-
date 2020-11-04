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
	<img src="assets/images/logo.png" id="logo">
	
	<div id="navbar">
		<ul id="navigation" class="nav">
			<li class="navli"><a href="contact.php" >Contact Us</a></li>
			<li class="navli"><a href="login.html">Login</a></li>
			<li class="navli"><a href="index.php" >Home</a></li>
		</ul>	
	</div>
	<div class="bkgimg" >
		<br><br>
		<div class="login">
			<h2 style="text-align: center; color: #002060">Login</h2><br>
			
			<form action="validation.php" method="POST">

                <label><input type="radio" id="applicant" name="category" value="applicant" >Applicant</label><br>
				
				<label><input type="radio" id="company" name="category" value="company">Company</label><br>                
                
  				<div class="input-container">
    				<i class="fa fa-envelope icon"></i>
    				<input class="inputLogin" type="text" placeholder="Email" name="email" id="email">
  				</div>

  				<div class="input-container">
    				<i class="fa fa-key icon"></i>
    				<input class="inputLogin" type="password" placeholder="Password" name="password" id="password">
  				</div>

                  <button type="submit" class="btn">Login</button>
                  <!-- <button type="submit" class="btn" href="registerasseeker.php">Register</button> -->
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
	
	