<?php
SESSION_START();
if(!isset($_SESSION['id'])){
	//header('location:index.html');
 }
 else{
   $id=$_SESSION['id'];
  
 }

include('../../BackEnd/Php/connection.php');

$adName = $_POST['adName'];
$cat_Ad = $_POST['cat_Ad'];
$prodName = $_POST['prodName'];
$description = $_POST['description'];

$query = "INSERT INTO `market_add`(`id`,`adName`,`catProd`,`productName`,`description`) VALUES('$id','$adName','$cat_Ad','$prodName','$description')";
$result = mysqli_query($con,$query);

echo "success";

?>
