<?php

session_start();
 if(!isset($_SESSION['username'])){
 header('location:login_employer.php');
 }
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con, 'portal');
 foreach($_POST as $name => $content){
     $aadhar=$name;
 }
 $a1 = $_POST['Aadhar'];
 $j1 = $_POST['JID'];

 $q="select * from profile where Aadhar='$aadhar'";
 $d=mysqli_query($con,$q);

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
		<div><center>
			<h2>Applicant's Profile</h2>

            <?php
				while($r=mysqli_fetch_assoc($d))
				{
			?>
			<?php echo $aadhar;?><br>
            <?php echo $r['junior_college']; ?><br>
			<?php echo $r['degree_college']; ?><br>
			<?php echo $r['degree']; ?><br>
			<?php echo $r['post_graduation']; ?><br>
			<?php echo $r['specialization']; ?><br>
			<?php echo $r['skills']; ?><br><br>
            <?php 	
				}
			?>			
							
			<form action="applications_validate.php" method="POST">
				<input type="hidden" name="Aadhar" value="<?php echo "$a1";?>">
				<input type="hidden" name="JID" value="<?php echo "$j1";?>">
                <td><button class="btn" style="width: 75%"; type="submit" name="<?php echo $aadhar;?>" >Next</button></td>
            </form>
        </tr>
				
		</div>
	</div>
	<hr class="bottom">
  	<p id="copyright">&#169 Copyright 3030. All Rights Reserved</p>
</body>
</html>



    


               

