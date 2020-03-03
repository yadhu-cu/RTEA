<?php
include('../../BackEnd/php/connection.php');

$adName = $_POST['adName'];
$cat_Prod = $_POST['cat_Prod'];
$prodName = $_POST['prodName'];
$description = $_POST['description'];

$query = "INSERT INTO `market_add`( `adName`, `catProd`, `productName`, `description`) VALUES ('$adName', '$cat_Prod' , '$prodName', '$description')";
$result = mysqli_query($con,$query);
?>