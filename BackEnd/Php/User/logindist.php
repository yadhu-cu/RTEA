<?php
 include('../connection.php');
 SESSION_START();
 $phn_No = $_POST ['phn_No'];
 $password = $_POST['password'];

 $query = "SELECT * FROM `distribution_info` WHERE `phoneNumber` = '$phn_No' and Password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
    $_SESSION['phn_No'] = $_POST['phn_No'];
     header('location:../../../Distribution/Distribution/home.php');
 }
else{
    echo "login failed";
}


?>