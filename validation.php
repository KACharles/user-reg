<?php
session_start();
$con = mysqli_connect('localhost', 'root', '5174030776');
mysqli_select_db($con, 'user');
$Name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from usertable where Name = '$Name' && Pass = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1) {
  // echo "Username Already Exist";
  $_SESSION['username'] = $Name;
  header('location:home.php');

}
else {
header('location:login.php');
}

 ?>
