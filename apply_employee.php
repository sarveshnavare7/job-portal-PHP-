<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login_employee.php');
}
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'portal');
$q="select * from job";
$d=mysqli_query($con,$q);

$t=mysqli_num_rows($d);

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
	<link rel="stylesheet" href="assets/css/tables.css">
</head>
<body>
	<?php include('headerafterlogin_employee.php'); ?>
	<div class="bkgimg">
		<br><br>
		<h2 style="text-align: center;">Jobs Available</h2>
			<table class="tablestyling">
				<tr>
					<th>JID</th>
					<th>GST_No</th>
					<th>Company Name</th>
					<th>Position</th>
					<th>Vacancy</th>
					<th>Location</th>
					<th>City</th>
					<th>State</th>
					<th>Salary</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
				<?php
						while($r=mysqli_fetch_assoc($d))
						{
				?>
							<tr>
							<td><?php echo $r['JID']; ?></td>
							<td><?php echo $r['GST_no']; ?></td>

							<td><?php 
								$k=$r['GST_no'];
								$q2="select Name from Company where GST_no='$k'";
								$result=mysqli_query($con,$q2);
								$r1=mysqli_fetch_row($result);
								$_SESSION['companyname']=$r1[0];
							echo $_SESSION['companyname']; ?></td>

							<td><?php echo $r['position']; ?></td>
							<td><?php echo $r['vacancy']; ?></td>
							<td><?php echo $r['location']; ?></td>
							<td><?php echo $r['city']; ?></td>
							<td><?php echo $r['state']; ?></td>
							<td><?php echo $r['salary']; ?></td>
							<td><?php echo $r['description']; ?></td>
							<form action="apply_validate.php" method="POST">
							<td style="border:3px solid black;padding:7px;"><input style="background-color:lightblue;border-radius:20px;height:45px;" type="submit" value="Apply" name="<?php echo $r['JID'];?>" ></td>
							</form>
							</tr>

				<?php 	
						}
				?>
				</table>
		</div>
	</div>
	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 3030. All Rights Reserved</p>
</body>
</html>
    