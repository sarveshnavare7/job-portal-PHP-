<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login_employer.php');
}
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'portal');
$gst=$_SESSION['gst'];
$q="select * from applications where JID in (select JID from job where GST_no='$gst')";
$d=mysqli_query($con,$q) or die(mysqli_error($con));

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
	<?php include('headerafterlogin_employer.php'); ?>
	<div class="bkgimg-fixed" >
		<br>
		<h2 style="text-align: center;">Applications Received</h2>
		<br>
			<table class="tablestyling">
				<tr>
					<th>AID</th>
					<th>Aadhar</th>
					<th>Applicant's FirstName</th>
                    <th>Applicant's LastName</th>
                    <th>Email</th>
                    <th>JID</th>
					<th>Position</th>
					<th>Vacancy</th>
					<th>Location</th>
					<th>Salary</th>					
					<th>Action</th>
				</tr>
				<?php
						// error_reporting(0);
						while($r=mysqli_fetch_assoc($d))
						{
				?>
				<tr>
					<td ><?php echo $r['AID']; ?></td>
					<td ><?php echo $r['Aadhar']; ?></td>

					<td ><?php 
						$aadhar=$r['Aadhar'];
						$q2="select FName from applicant where Aadhar='$aadhar'";
						$result=mysqli_query($con,$q2);
						$r1=mysqli_fetch_row($result);
                        $_SESSION['fname']=$r1[0];
						echo $_SESSION['fname']; ?></td>

                    <td ><?php 
						$aadhar=$r['Aadhar'];
						$q2="select LName from applicant where Aadhar='$aadhar'";
						$result=mysqli_query($con,$q2);
						$r1=mysqli_fetch_row($result);
                        $_SESSION['lname']=$r1[0];
						echo $_SESSION['lname']; ?></td>

                    <td ><?php 
						$aadhar=$r['Aadhar'];
						$q2="select Email from applicant where Aadhar='$aadhar'";
						$result=mysqli_query($con,$q2);
						$r1=mysqli_fetch_row($result);
                        $_SESSION['email']=$r1[0];
						echo $_SESSION['email']; ?></td>

                    <td ><?php echo $r['JID']; ?></td>
					
					<td><?php 
						$jid=$r['JID'];
						$q2="select position from job where JID='$jid'";
						$result=mysqli_query($con,$q2);
						$r1=mysqli_fetch_row($result);
                        $_SESSION['position']=$r1[0];
						echo $_SESSION['position']; ?></td>

                    <td ><?php 
						$jid=$r['JID'];
						$q2="select vacancy from job where JID='$jid'";
						$result=mysqli_query($con,$q2);
						$r1=mysqli_fetch_row($result);
                        $_SESSION['vacancy']=$r1[0];
						echo $_SESSION['vacancy']; ?></td>

                    <td ><?php 
						$jid=$r['JID'];
						$q2="select location from job where JID='$jid'";
						$result=mysqli_query($con,$q2);
						$r1=mysqli_fetch_row($result);
                        $_SESSION['location']=$r1[0];
						echo $_SESSION['location']; ?></td>

                    <td ><?php 
						$jid=$r['JID'];
						$q2="select salary from job where JID='$jid'";
						$result=mysqli_query($con,$q2);
						$r1=mysqli_fetch_row($result);
                        $_SESSION['salary']=$r1[0];
						echo $_SESSION['salary']; ?></td>

					<form action="applicant_profile_validate.php" method="POST">
						<input type="hidden" name="Aadhar" value="<?php echo $r['Aadhar'];?>">
						<input type="hidden" name="JID" value="<?php echo $r['JID'];?>">
						<td><button class="btn" type="submit" value="Next" name="<?php echo $r['Aadhar'];?>" ></td> <!--This can be replaced by a button as well-->
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
    
<!-- <?php echo $r['JID'];?> -->