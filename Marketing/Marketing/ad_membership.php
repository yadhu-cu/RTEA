<?php
include('../../BackEnd/Php/connection.php');

$membership = $_POST['membership'];
$shopname = $_POST['shopname'];
$slot = $_POST['slot'];
$pricead = $_POST['pricead'];


$query = "INSERT INTO `market_addcollection`(`mem_type`,`ad_Shop`,`ad_Slot`,`Price`) VALUES('$membership','$shopname','$slot','$pricead')";
$result = mysqli_query($con,$query);

echo "success";

?>
