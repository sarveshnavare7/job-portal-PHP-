<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login_employer.php');
}
?>

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
	<?php include('headerafterlogin_employee.php'); ?>
	<div class="bkgimg" >
		<br>
        <div class="reg" >
			<h2 style="text-align: center;"><b>Profile</b></h2>
			<p>Please complete your Profile:-</p>
            <form action="profile_employer_validate.php" method="post">
                <label for="contact">Contact*</label>
                <input type="tel" id="contact" name="contact" required><br><br>
                <label for="location">Location*</label>
                <input type="text" id="location" name="location" required><br><br>
                <label for="city">City*</label>
                <input type="text" id="city" name="city" required><br><br>
                <label for="state">State*</label>
                <input type="text" id="state" name="state"><br><br>
                <label for="aboutus">About Us*</label>
                <input type="text" id="aboutus" name="aboutus" required><br><br>
                <button type="submit" class="btn">Update </button><br><br>
			</form>
        </div>
    </div>
    <hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
</body>
</html>
              