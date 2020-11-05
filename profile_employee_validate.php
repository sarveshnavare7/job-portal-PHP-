<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'portal');

$aadhar = $_SESSION['aadhar'];
$juniorcollege = $_POST['juniorcollege'];
$degreecollege = $_POST['degreecollege'];
$degree = $_POST['degree'];
$postgrad = $_POST['postgrad'];
$specialization = $_POST['specialization'];
$skills = $_POST['skills'];

$q = "select * from profile where Aadhar='$aadhar'";
$result=mysqli_query($con,$q) or die(mysqli_error($con));
$num = mysqli_num_rows($result);

if($num == 1){
    $query="update profile set junior_college='$juniorcollege',degree_college='$degreecollege', degree='$degree', post_graduation='$postgrad', specialization='$specialization',skills='$skills' where Aadhar='$aadhar' ";
    $result2=mysqli_query($con,$query) or die(mysqli_error($con));  
    echo '<script> alert("Profile modified");
    window.location.href="home_employee.php";
    </script>';
}
else{
    
    $qy= "insert into profile values ('$aadhar','$juniorcollege','$degreecollege','$degree','$postgrad','$specialization','$skills')";
    mysqli_query($con,$qy) or die(mysqli_error($con));    
    echo '<script> alert("Profile Created");
    window.location.href="home_employee.php";
    </script>';
}

?>