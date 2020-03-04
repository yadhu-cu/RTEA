<?php
include('../../BackEnd/Php/connection.php');

$date = $_POST['date'];
$price = $_POST['price'];
$discount = $_POST['discount'];


$query = "INSERT INTO `market_addcollection`(`date`,`ad_place`,`discount`) VALUES('$date','$price','$discount')";
$result = mysqli_query($con,$query);

echo "success";

?>
