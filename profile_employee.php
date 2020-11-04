<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login_employee.php');
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
            <form action="profile_employee_validate.php" method="post">
                <label for="juniorcollege">Junior College*</label>
                <input type="text" id="juniorcollege" name="juniorcollege" required><br><br>
                <label for="degreecollege">Degree College*</label>
                <input type="text" id="degreecollege" name="degreecollege" required><br><br>
                <label for="degree">Degree*</label>
                <input type="text" id="degree" name="degree" required><br><br>
                <label for="postgrad">Post Graduation</label>
                <input type="text" id="postgrad" name="postgrad"><br><br>
                <label for="specialization">Specialization*</label>
                <input type="text" id="specialization" name="specialization" required><br><br>
                <label for="skills">Skills*</label>
                <input type="text" id="skilss" name="skills" required><br><br>
                <button type="submit" class="btn">Complete Profile</button><br><br>
			</form>
        </div>
    </div>
    <hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
</body>
</html>
              