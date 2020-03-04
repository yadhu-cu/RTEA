<?php
include('../connection.php');

$phoneNumber = $_POST['phoneNumber'];
$companyName = $_POST['companyName'];
$companyAddress = $_POST['companyAddress'];
$location = $_POST['location'];
$password = $_POST['password'];

$query = "INSERT INTO `inventory`(`phoneNumber`, `companyName`, `password`, `location`, `companyAddress`) VALUES ('$phoneNumber','$companyName','$password','$location','$companyAddress')";
$result = mysqli_query($con,$query);
header('location:../../../Marketing/index.html');
// completed
?>