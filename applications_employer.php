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
	<div class="bkgimg" >
		<h2 style="text-align: center;">Applications Received</h2>
		<br><br>
			<table class="tablestyling">
				<tr>
					<th>AID</th>
					<th style="border:3px solid black;text-align:center;padding-left:25px;padding-right:25px;">Aadhar</th>
					<th style="border:3px solid black;text-align:center;">Applicant's FirstName</th>
                    <th style="border:3px solid black;text-align:center;">Applicant's LastName</th>
                    <th style="border:3px solid black;text-align:center;">Email</th>
                    <th style="border:3px solid black;text-align:center;">JID</th>
					<th style="border:3px solid black;text-align:center;">Position</th>
					<th style="border:3px solid black;text-align:center;">Vacancy</th>
					<th style="border:3px solid black;text-align:center;">Location</th>
					<th style="border:3px solid black;text-align:center;">Salary</th>					
					<th style="border:3px solid black;text-align:center;">Action</th>
				</tr>
				<?php
						while($r=mysqli_fetch_assoc($d))
						{
				?>
							<tr>
							<td style="border:3px solid black"><?php echo $r['AID']; ?></td>
							<td style="border:3px solid black"><?php echo $r['Aadhar']; ?></td>

							<td style="border:3px solid black"><?php 
								$aadhar=$r['Aadhar'];
								$q2="select FName from applicant where Aadhar='$aadhar'";
								$result=mysqli_query($con,$q2);
								$r1=mysqli_fetch_row($result);
                                $_SESSION['fname']=$r1[0];
							echo $_SESSION['fname']; ?></td>

                            <td style="border:3px solid black"><?php 
								$aadhar=$r['Aadhar'];
								$q2="select LName from applicant where Aadhar='$aadhar'";
								$result=mysqli_query($con,$q2);
								$r1=mysqli_fetch_row($result);
                                $_SESSION['lname']=$r1[0];
							echo $_SESSION['lname']; ?></td>

                            <td style="border:3px solid black"><?php 
								$aadhar=$r['Aadhar'];
								$q2="select Email from applicant where Aadhar='$aadhar'";
								$result=mysqli_query($con,$q2);
								$r1=mysqli_fetch_row($result);
                                $_SESSION['email']=$r1[0];
							echo $_SESSION['email']; ?></td>

                            <td style="border:3px solid black"><?php echo $r['JID']; ?></td>
							
                            <td style="border:3px solid black"><?php 
								$jid=$r['JID'];
								$q2="select position from job where JID='$jid'";
								$result=mysqli_query($con,$q2);
								$r1=mysqli_fetch_row($result);
                                $_SESSION['position']=$r1[0];
							echo $_SESSION['position']; ?></td>

                            <td style="border:3px solid black"><?php 
								$jid=$r['JID'];
								$q2="select vacancy from job where JID='$jid'";
								$result=mysqli_query($con,$q2);
								$r1=mysqli_fetch_row($result);
                                $_SESSION['vacancy']=$r1[0];
							echo $_SESSION['vacancy']; ?></td>

                            <td style="border:3px solid black"><?php 
								$jid=$r['JID'];
								$q2="select location from job where JID='$jid'";
								$result=mysqli_query($con,$q2);
								$r1=mysqli_fetch_row($result);
                                $_SESSION['location']=$r1[0];
							echo $_SESSION['location']; ?></td>

                            <td style="border:3px solid black"><?php 
								$jid=$r['JID'];
								$q2="select salary from job where JID='$jid'";
								$result=mysqli_query($con,$q2);
								$r1=mysqli_fetch_row($result);
                                $_SESSION['salary']=$r1[0];
							echo $_SESSION['salary']; ?></td>

							<form action="applicant_profile_validate.php" method="POST">
							<input type="hidden" name="Aadhar" value="<?php echo $r['Aadhar'];?>">
							<input type="hidden" name="JID" value="<?php echo $r['JID'];?>">
							<td style="border:3px solid black;padding:7px;"><input style="background-color:lightblue;border-radius:20px;height:45px;" type="submit" value="Next" name="<?php echo $r['Aadhar'];?>" ></td>
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