<?php
$link = mysqli_connect("localhost","root","","dist");
$distuname= $_POST['distuname'];
$distPlace=$_POST['distPlace'];
$phoneNumber=$_POST['phoneNumber'];
$password=$_POST['password'];
$query="INSERT INTO `distribution_info`(`Place`, `name`, `phoneNumber`, `Password`) VALUES ('$distPlace', '$distuname', '$phoneNumber', '$password')";
$result= mysqli_query($link,$query);
?>