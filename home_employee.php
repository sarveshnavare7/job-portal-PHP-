<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login_employee.php');
}
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'portal');
$email=$_SESSION['username'];
$q="select FName,LName from applicant where Email='$email' ";
$d=mysqli_query($con,$q);
$t=mysqli_fetch_row($d);
$fname=$t[0];
$lname=$t[1];
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
	<div class="bkgimg-fixed" >
		<br>
		
		<h1 style="text-align: center">Welcome <?php echo $fname,' ',$lname;?><h1>
		<h1 style="text-align: center">Please proceed to complete your Profile.</h1>
	</div>
	<!-- <br> -->
	<!-- <div><center>
		<table>
			<tr>
				<th colspan="7">Company names</th>
			</tr> 
			<tr>
				<th style="border:5px solid black">JID</th>
				<th style="border:5px solid black">Position</th>
				<th style="border:5px solid black">Vacancy</th>
				<th style="border:5px solid black">Location</th>
				<th style="border:5px solid black">City</th>
				<th style="border:5px solid black">State</th>
				<th style="border:5px solid black">Salary</th>
				<th style="border:5px solid black">Description</th>
			</tr>
			<?php 
				/*$con = mysqli_connect('localhost','root','');
				mysqli_select_db($con, 'portal');
				$q="select * from job";
				$d=mysqli_query($con,$q);
				$t=mysqli_num_rows($d);
				
				if($t!=0)
				{
					while($r=mysqli_fetch_assoc($d))
					{
						echo "
						<tr>
						<td>".$r['JID']."</td>
						<td>".$r['position']."</td>
						<td>".$r['vacancy']."</td>
						<td>".$r['location']."</td>
						<td>".$r['city']."</td>
						<td>".$r['state']."</td>
						<td>".$r['salary']."</td>
						<td>".$r['description']."</td>
						<td><button>Apply</button></td>
						</tr>
						";
					}
				}
				else
				{
					echo "No result found";
				}
			*/?>
		</table></center>
	</div> -->

  	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 2020. All Rights Reserved</p>
</body>
</html>