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

$q = "select * from applicant where Email='$email' and Password='$password'";

$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username']=$email;
    header('location:home_employee.php');
}
else{
    header('location:login.php');
}

?>