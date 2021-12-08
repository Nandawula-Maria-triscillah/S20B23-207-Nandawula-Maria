<?php
include('database.php');

$username = "";
  $email = "";
 $password_1 = "";
$errors = array();


if(isset($_POST['signup'])){
$username=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password_1 = mysqli_real_escape_string($con, $_POST['pass']);
$password_2 = mysqli_real_escape_string($con, $_POST['re_pass']);


if(empty($username))
{array_push($errors,"Username is required or invalid username length");}

if(empty($email) || !preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $email))
{array_push($errors,"email required or invalid email format");}

if(empty($password_1) || !preg_match("/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/", $password_1))
{array_push($errors,"password required or invalid password length");}

if ($password_1 != $password_2) {
 array_push($errors, "passwords dont match");
}

//checking whether the user existes in the Database$
$user_check_query="SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
$result=mysqli_query($con,$user_check_query);
$user=mysqli_fetch_assoc($result);
if ($user) {
if($user['username']===$username){
  array_push($errors,"Username already exists");
}
if($user['email'] ===$email){
  array_push($errors,"the email already exists");
}
}


if(count($errors)==0)
{
  $password=md5($password_1);//this is encrypting the passwords
  $query= "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
  mysqli_query($con,$query);
  $_SESSION['username']=$username;
  header('location: login.php');

}


}



 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
      <link rel="stylesheet" href="styling.css"/>

</head>
<body>




                        <form method="POST"  class ="form2">
                          <span class="error_space">    <?php include('errors.php'); ?></span>
                          <img src="iee.png" class="img1"  style="width:100px">

                                  <h2 class="h2">Sign up</h2>
                                <input type="text" name="name"class="form-control" placeholder="Your Name" autocomplete="username"value="<?php echo $username; ?>"/>
                                <input type="email" name="email"class="form-control"  placeholder="Your Email" autocomplete="email" value="<?php echo $email; ?>" />
                                <input type="password" name="pass"class="form-control" placeholder="Password"  value="<?php echo $password_1; ?>"/>
                                <input type="password" name="re_pass" class="form-control" placeholder="Repeat your password"  />



                                <input type="submit" name="signup" class="loginbutton1" value="Register"/><br>
  <p class ="link"><a href="login.php" >I am already member</a></p>
                        </form>




</body>
</html>
