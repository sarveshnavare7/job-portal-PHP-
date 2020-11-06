<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login_employee.php');
}
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con, 'portal');
 $a=$_SESSION['aadhar'];
 $q="select * from OfferLetter where Aadhar='$a'";
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
	<div class="bkgimg-fixed">
		<br><br>
		<h2 style="text-align: center;">Application Status</h2>
			<table class="tablestyling">
				<tr>
					<th>LetterId</th>
                    <th>Date</th>
					<th>Aadhar</th>
					<th>Company Name</th>				
					<th>Position</th>
					<th>Location</th>
					<th>Salary</th>
					<th>Description</th>
					<th>Status</th>
				</tr>
				<?php
					while($r=mysqli_fetch_assoc($d))
					{
				?>
						<tr>
						<td><?php echo $r['LetterId']; ?></td>
						<td><?php echo $r['Date']; ?></td>
                        <td><?php echo $r['Aadhar']; ?></td>

						<td><?php 
							$k=$r['JID'];
							$q2="select Name from company where GST_no in (Select GST_no from job where JID='$k')";
							$result=mysqli_query($con,$q2);
							$r1=mysqli_fetch_row($result);
							$_SESSION['companyname']=$r1[0];
							echo $_SESSION['companyname']; ?></td>

						<td><?php 
							$k=$r['JID'];
							$q2="select position from job where JID='$k'";
							$result=mysqli_query($con,$q2);
							$r1=mysqli_fetch_row($result);
							$_SESSION['position']=$r1[0];
							echo $_SESSION['position']; ?></td>

                        <td><?php 
							$k=$r['JID'];
							$q2="select location from job where JID='$k'";
							$result=mysqli_query($con,$q2);
							$r1=mysqli_fetch_row($result);
							$_SESSION['location']=$r1[0];
							echo $_SESSION['location']; ?></td>

                        <td><?php 
							$k=$r['JID'];
							$q2="select salary from job where JID='$k'";
							$result=mysqli_query($con,$q2);
							$r1=mysqli_fetch_row($result);
							$_SESSION['salary']=$r1[0];
							echo $_SESSION['salary']; ?></td>

                        <td><?php 
							$k=$r['JID'];
							$q2="select description from job where JID='$k'";
							$result=mysqli_query($con,$q2);
							$r1=mysqli_fetch_row($result);
							$_SESSION['description']=$r1[0];
							echo $_SESSION['description']; ?></td>

                        <td><p>Accepted</p></td>
					</tr>

				<?php 	
					}
				?>
			</table>
            <br><br>
            <h3 style="color:white;"><center>Congratulations, You will contacted soon for further communications</center></h3>
		</div>
	</div>
	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 3030. All Rights Reserved</p>
</body>
</html>
    
