<?php include ('session.php');
 ?>
<?php


include("database.php");
if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];
  $sql="Delete from user where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    header('location:manage-users.php');
  }
  else{
    die(mysqli_error($con));
  }
}
?>
