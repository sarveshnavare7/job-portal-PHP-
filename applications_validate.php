<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'portal');


$aadhar1=$_POST['Aadhar'];
$JID=$_POST['JID'];
$d2=date("Y/m/d");

$q1 = "select * from OfferLetter where Aadhar='$aadhar1' and JID='$JID'";
$result1=mysqli_query($con,$q1) or die(mysqli_error($con));

if ( mysqli_num_rows($result1)>0){
    echo '<script> alert("Already accepted.");
    window.location.href="applications_employer.php";
    </script>';
}
else{
    $v="select vacancy from job where JID='$JID'";
    $result2=mysqli_query($con,$v) or die(mysqli_error($con));
    $row= mysqli_fetch_row($result2);
    $vacancy= $row[0];
    $new_vacancy=((int)$vacancy-1);
    if ($vacancy<=0){
        echo "$vacancy";
        // echo '<script> alert("No vacancy");
        // window.location.href="applications_employer.php";
        // </script>';
    }
    else
    {
    $trigger="create trigger vacancytrigger after update on OfferLetter for each row update job set new.vacancy='$new_vacancy' where JID='$JID' ";
    $result2=mysqli_query($con,$trigger) or die(mysqli_error($con));  
    $qz= "insert into OfferLetter (Date,Aadhar,JID) values ('$d2','$aadhar1','$JID')";
    mysqli_query($con,$qz) or die(mysqli_error($con));
    echo "$new_vacancy";      
    // $remove="drop trigger vacancytrigger";
    // $result3=mysqli_query($con,$remove) or die(mysqli_error($con));   
    // echo '<script> alert("Accepted");
    // window.location.href="home_employer.php";
    // </script>';
    }
    
}
?>


