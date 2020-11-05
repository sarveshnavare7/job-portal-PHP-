<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'portal');

$gst = $_SESSION['gst'];
$contact = $_POST['contact'];
$location = $_POST['location'];
$city = $_POST['city'];
$state = $_POST['state'];
$aboutus = $_POST['aboutus'];

$q = "select * from company where GST_no='$gst'";
$result=mysqli_query($con,$q) or die(mysqli_error($con));
$num = mysqli_num_rows($result);

if($num == 1){
    $query="update company set Contact='$contact',Locality='$location', City='$city', State='$state', About_us='$aboutus' where GST_no='$gst' ";
    $result2=mysqli_query($con,$query) or die(mysqli_error($con));  
    echo '<script> alert("Updated");
    window.location.href="home_employer.php";
    </script>';
}


?>