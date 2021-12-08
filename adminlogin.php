<?php
session_start();
error_reporting(0);
include("database.php");
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="manage-users.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="adminlogin.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>


    <title>Admin | Login</title>
  <link rel="stylesheet" href="styling.css"/>
  </head>

  <body>
	  <div >
	  	<div >


		      <form class="form1" action="" method="post">
		        <p class"sign">Sign in As Admin</p>
                    <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
		        <div >
		            <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password"><br >
		            <input  name="login" class="loginbutton" type="submit">
                <p><a  href="index.php">Back to Homepage</p>

		        </div>
		      </form>

	  	</div>
	  </div>



  </body>
</html>
