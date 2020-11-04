<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'portal');

$position = $_POST['position'];
$vacancy = $_POST['vacancy'];
$location = $_POST['location'];
$city = $_POST['city'];
$state = $_POST['state'];
$salary = $_POST['salary'];
$description = $_POST['description'];
$gst=$_SESSION['gst'];

$qy= "insert into job (position,vacancy,location,city,state,salary,description,GST_no) values ('$position','$vacancy','$location','$city','$state','$salary','$description','$gst')";
mysqli_query($con,$qy);
header('location:home_employer.php')


?>