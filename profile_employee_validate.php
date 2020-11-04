<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
    echo "connection sucessfull";
}
else{
    echo "no connection";
}

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
    echo "duplicate data";
    header('location: profile_employee.php');
}
else{
    $qy= "insert into profile values ('$aadhar','$juniorcollege','$degreecollege','$degree','$postgrad','$specialization','$skills')";
    mysqli_query($con,$qy) or die(mysqli_error($con));
    header('location: home_employee.php');
}

?>