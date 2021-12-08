
<?php

include("database.php");

  $id=$_GET['updateid'];
  if(isset($_POST['submit'])){
  $username=mysqli_real_escape_string($con,$_POST['username']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password']);
  $password_2 = mysqli_real_escape_string($con, $_POST['re_pass']);
  $sqlquery="update user  set id='$id' ,username='$username',email='$email',password='$password_1' where id=$id";
  $result=mysqli_query($con,$sqlquery);
if($result){
  echo"data update succesfully";
  //header(location:manage-users.php);
}else {
  {die(mysqli_error($con));
  }
}


}



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
  <p> <center> Update user info</center></p>
<label>username</label>
        <input type="text" name="username"class="form-control" placeholder="Your username" autocomplete="username"value=""/>
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
<button type ="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
  </body>
  </html>
