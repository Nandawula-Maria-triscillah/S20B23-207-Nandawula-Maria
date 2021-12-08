<?php
session_start();
error_reporting(0);
include("database.php");
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass' ");

$ret =$row['username'];
if(!isset($ret)){
mysqli_close($con); // Closing Connection
header('Location: adminlogin.php'); }
}
?>
