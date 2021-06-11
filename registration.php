<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost', 'root', '5174030776');
mysqli_select_db($con, 'user');
$Name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$Name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1) {
  echo "Username Already Exist";

}
else {
$reg = "insert into usertable(Name, Pass) values('$Name', '$pass')";
mysqli_query($con, $reg);
echo "Registration Successful.";
}

 ?>
