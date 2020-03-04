<?php
 include('../../BackEnd/php/connection.php');

$inventoryname = $_POST['inventoryname'];
$productname = $_POST['productname'];
$location = $_POST['location'];
$quantity = $_POST['quantity'];
$deadline = $_POST['deadline'];

$query = "INSERT INTO `distribution_inventoryreq`(`inventory_name`, `location`,`Product_Name`,`	Quantity`, `Date`) VALUES ('$inventoryname','$productname','$location','$quantity','$deadline')";
$result = mysqli_query($con,$query);
echo "success";

?>