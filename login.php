<?php
session_start();
include ('database.php');


  $username = "";

$errors = array();

if(isset($_POST['signin'])){

  // receive all input values from the form and  preventig injection
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password']);





          //errors for the form
          if(empty($username))
          {array_push($errors,"username required or invalid username length");}

// error for password
          if(empty($password_1) || !preg_match("/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/", $password_1))
          {array_push($errors,"password required or invalid password length");}


// checking if user exists
//runing the query in my database to only one row
$user_check_query = "SELECT * FROM user WHERE username='$username'  LIMIT 1";
$result = mysqli_query($con, $user_check_query); // connecting it to my database
$user = mysqli_fetch_assoc($result);//retriving the data as a row

      if (!$user) { // if user doesnot exists
      array_push($errors, "Username does not exixt on our site!");
      }
      if(!empty($_POST["remember"])) {
      	setcookie ("username",$_POST["username"],time()+ 3600);
      	setcookie ("password",$_POST["password"],time()+ 3600);
      	echo "Cookies Set Successfuly";
      } else {
      	setcookie("username","");
      	setcookie("password","");
      	echo "Cookies Not Set";
      }

 // IF THE ERRORS DONT EXIST THEN WE LOGIN TEH USER
              if (count($errors) == 0) {
                //encrypting the password
                  $password_1 = md5($password_1);

                  // running the queery in the database
                  $query = "SELECT * FROM user WHERE username='$username' AND password='$password_1'";
                  $results = mysqli_query($con, $query);

                  if(isset($results)){
                    //assigning our session
                  $_SESSION['username'] = $username;
                  header('location: dashboard.php');
              }
        else {
          //if no details in the database this error pops up
          array_push($errors, "Wrong username/password combination");
        }
            }


}






 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
      <link rel="stylesheet" href="styling.css"/>







</head>
<body>

    <div >

      <section class>




                  <div class="signin-form">

                      <form method="POST"  class="form1">
                            <img src="iee.png" class="img1"  style="width:100px"><br>
                        <h2>Welcome To  The IEEE 2021 Virtual Conference</h2>
                        <p class="sign">Sign in</center></p>
                            <span class="error_space">    <?php include('errors.php'); ?></span>


                            <input type="text"class="form-control"  name="username"  placeholder="Your Name"  value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" >

<div>
                          <input type="password" class="form-control" name="password"   placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" >




                              <input type="submit" name="signin"  class="loginbutton" value="Log in"/>

                    <br>   <p> Don't have an account yet? <a href="registration.php">Register Now</a></p>
    <p><a href="reset-password.php">Forgot your password</a></p>
                      </form>


      </section>

    </div>

    </body>
    </html>
