<?php
include('../connection.php');
$id = $_POST ['id'];
 $password = $_POST['password'];

 $query = "SELECT * FROM `inventory` WHERE  id = '$id' and password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     header('location:../../../Marketing/Marketing/home.html');
 }
else{
    echo "login faild";
}


?>