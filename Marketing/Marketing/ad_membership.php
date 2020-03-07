<?php
SESSION_START();
include('../../BackEnd/Php/connection.php');
$ID = $_SESSION['ADD'];
$membership = $_POST['membership'];
$shopname = $_POST['shopname'];
$slot = $_POST['slot'];
$pricead = $_POST['pricead'];


$query = "INSERT INTO `market_membership`(`add_id`,`mem_type`,`ad_Shop`,`ad_Slot`,`Price`) VALUES('$ID','$membership','$shopname','$slot','$pricead')";
$result = mysqli_query($con,$query);
header('location:home.php');
echo $query;


?>
