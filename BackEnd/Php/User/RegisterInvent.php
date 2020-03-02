<?php
include('../connection.php');

$CompanyName = $_POST['companyName'];
$CompanyAddr = $_POST['companyAddress'];
$password = $_POST['password'];
$phoneNumber = $_POST['phoneNumber'];
//$email_ID = $_POST['email_ID'];


$query="INSERT INTO `inventory`(`phoneNumber`, `companyName`, `companyAddress`, `password`, `location`) VALUES('$phoneNumber','$CompanyName','$password')";
$result=mysqli_query($con,$query); 

//header('Location:../profile.php');
// completed
?>