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

$q = "select * from Company where Email='$email' and Password='$password'";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);

$q1 = "select GST_no from Company where Email='$email' and Password='$password'";
$result1=mysqli_query($con,$q1);
$row = mysqli_fetch_row($result1);



if($num == 1){
    $_SESSION['username']=$email;
    $_SESSION['gst']=$row[0];
    header('location:home_employer.php');
}
else{
    echo '<script>alert("Login has Failed")</script>';
    header('location:login_employer.php');
}

?>