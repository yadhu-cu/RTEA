<?php
include('../connection.php');
 $Distribution_ID = $_POST ['Distribution_ID'];
 $Password = $_POST['Password'];

 $query = "select * from distribution_info where Distribution_ID = '$Distribution_ID' and Password = '$Password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     echo "success";
 }
else{
    echo "login faild";
}


?>