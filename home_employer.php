<?php

 session_start();
 if(!isset($_SESSION['username'])){
 header('location:login_employer.php');

 }
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con, 'portal');
 $gst=$_SESSION['gst'];
 $q="select Name from Company where GST_no='$gst' ";
 $d=mysqli_query($con,$q);
 $t=mysqli_fetch_row($d);
 $name=$t[0];

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
	<div class="bkgimg-fixed" >
		<br><br>
		<h1 style="text-align: center; color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px #000080;">Welcome <?php echo $name;?></h1>
		<h1 style="text-align: center; color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px #000080;">A List of Candidates await to join you !</h1>
		<h1 style="text-align: center; color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px #000080;">Please Proceed to Create a Job Opening.</h1>
	</div>
  	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
</body>
</html>