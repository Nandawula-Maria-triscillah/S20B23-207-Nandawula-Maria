
<?php

include("database.php");



  if(isset($_POST['submit'])){
  $username=mysqli_real_escape_string($con,$_POST['username']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password']);
  $password_2 = mysqli_real_escape_string($con, $_POST['re_pass']);

  $sql= "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password_1')";
  $result=mysqli_query($con,$sql);
  if($result){
  echo "Data inserted succesfully";
}
else{
  die(mysqli_error($con));
}}
  ?>
<!DOCTYPE html>
  <head>
    <title> </title>
    <link rel="stylesheet" href="styling.css"/>
  </head>
  <body>
    <div>

<form method="post" class="form2" >
<div>
  <p> <center> Add New Users</center></p>
<label>Username</label>
        <input type="text" name="username"class="form-control" placeholder="Your Name" autocomplete="username"value=""/>
</div>
<div>
<label>email</label>
        <input type="email" name="email"class="form-control"  placeholder="Your Email" autocomplete="email" value="" />
</div>
<div>
<label>password</label>

<input type="password" name="password"class="form-control" placeholder="Password"  value=""/>
</div>
<div>
<label>Confirm password</label>

<input type="password" name="re_pass" class="form-control" placeholder="Repeat your password"  />
</div>
<button type ="submit" class="loginbutton1" name="submit">Add User</button>
<button><a  href="manage-users.php">Back to Admin</button>

</form>
</div>
  </body>
  </html>
