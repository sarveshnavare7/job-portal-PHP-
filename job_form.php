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
<body>
	<?php include('headerafterlogin_employer.php'); ?>
	
	<div class="bkgimg" style="height: auto;">
		<br>
		<div class="reg">
			<h2 style="text-align: center;"><b>Job Details</b></h2>
			<p>Please enter the following details:-</p>
			<form action="job_form_validation.php" method="post">
				<label for="position">Job position*</label>
		  		<input type="text" id="position" name="position" required><br><br>
		  		<label for="vacancy">Vacancy*</label>
		  		<input type="tel" id="vacancy" name="vacancy" required><br><br>
		  		<label for="address">Address*</label>
		  		<input type="text" id="location" name="location" placeholder="Location" required>
		  		<input type="text" id="city" name="city" placeholder="City" required>
		  		<input type="text" id="state" name="state" placeholder="State" required><br><br>
		  		<label for="salary">Salary*</label>
		  		<input type="text" id="salary" name="salary" required ><br><br>
		  		<label for="description">Job Description*</label><br>
		  		<input type="text" id="description" name="description" required ><br><br>
		  		<button type="submit" class="btn">Create</button><br><br>
			</form>
		</div>
	</div>
	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
</body>
</html>