<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'portal');


foreach($_POST as $name => $content){
    $JID=$name;
}
$aadhar1=$_SESSION['aadhar'];

$q = "select AID,Aadhar,JID from applications where Aadhar='$aadhar1' and JID='$JID'";

$result=mysqli_query($con,$q) or die(mysqli_error($con));
error_reporting(0);

if ( mysqli_num_rows($result)>0){
    echo '<script> alert("Already applied.");
    window.location.href="apply_employee.php";
    </script>';
    // header('location:employee_apply.php');
}
else{
    
    
    $qz= "insert into applications (Aadhar,JID) values ('$aadhar1','$JID')";
    mysqli_query($con,$qz) or die(mysqli_error($con)) ;
    echo '<script> alert("Applied.");
    // window.location.href="apply_employee.php";
    </script>';
}

?>



<!-- f (!$dbc || mysqli_num_rows($dbc) == 0) -->

<!-- $isExist = mysql_query("Select count(id) from ..."); 
$r = mysql_fetch_array($isExist);
if($r['COUNT(id)'] > 0){
//item exists
}else{
//item doesnt exist
} -->