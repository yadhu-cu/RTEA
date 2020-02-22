<?php
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// Data Base Connection
 $con = mysqli_connect("localhost","root","","rtea");
 $phn_No = $_POST ['phn_No'];
 $password = $_POST['password'];

 $query = "SELECT * FROM `distribution_info` WHERE `phoneNumber` = '$phn_No' and Password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
 if ($check == true){
     header('location:../../../Distribution/Distribution/home.html');
 }
else{
    echo "login faild";
}


?>