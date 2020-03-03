<?php
include('../connection.php');

$phoneNumber = $_POST['phoneNumber'];
$companyName = $_POST['companyName'];
//$companyAddress = $_POST['companyAddress'];
$location = $_POST['location'];
$password = $_POST['password'];

//$email_ID = $_POST['email_ID'];


$query="INSERT INTO `inventory`(`phoneNumber`, `companyName`, `password`, `location`) VALUES ('$phoneNumber','$companyName','$location','$password')";
$result=mysqli_query($con,$query); 

header('location:../../../Marketing/index.html');
// completed
?>