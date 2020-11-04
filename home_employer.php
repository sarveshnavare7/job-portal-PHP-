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
	<?php include('headerafterlogin_employer.php'); ?>
	<div class="bkgimg" >
		<br>
		<h1 style="text-align: centre">Welcome <?php echo $_SESSION['username'];?><h1>
	</div>
  	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
</body>
</html>