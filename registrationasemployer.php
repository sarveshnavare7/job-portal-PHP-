<?php

session_start();
header('location: login_employer.php');

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection sucessfull";
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'portal');

$email = $_POST['eemail'];
$password = $_POST['epassword'];
$gst = $_POST['gst'];
$name = $_POST['ename'];
$contact = $_POST['econtactNumber'];
$city = $_POST['ecity'];
$state = $_POST['estate'];
$locality = $_POST['elocality'];
// $_SESSION['gst']=$gst;

$q = "select * from Company where Email='$email' and Password='$password'";

$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "duplicate data";
}
else{
    $qy= "insert into Company (Email,Password,GST_no,Name,Contact,Locality,City,State) values ('$email','$password','$gst','$name','$contact','$locality','$city','$state')";
    mysqli_query($con,$qy);
    header('location: login_employer.php');
}

?>