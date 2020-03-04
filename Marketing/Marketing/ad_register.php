<?php
include('../../BackEnd/Php/connection.php');

$adName = $_POST['adName'];
$cat_Ad = $_POST['cat_Ad'];
$prodName = $_POST['prodName'];
$description = $_POST['description'];

$query = "INSERT INTO `market_add`(`adName`,`catProd`,`productName`,`description`) VALUES('$adName','$cat_Ad','$prodName','$description')";
$result = mysqli_query($con,$query);

echo "success";

?>
