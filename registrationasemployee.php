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

$email = $_POST['email'];
$password = $_POST['password'];
$aadhar = $_POST['jaadharnumber'];
$fname = $_POST['jfname'];
$lname = $_POST['jlname'];
$contact = $_POST['jcontactNumber'];
$city = $_POST['jcity'];
$state = $_POST['jstate'];


$q = "select * from applicant where Email='$email' and Password='$password' and Aadhar='$aadhar'";

$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "duplicate data";
    header('location: registerasseeker.php');
}
else{
    $qy= "insert into applicant (Email,Password,Aadhar,FName,LName,Contact,City,State) values ('$email','$password','$aadhar','$fname','$lname','$contact','$city','$state')";
    mysqli_query($con,$qy);
    header('location: login_employee.php');
}

?>