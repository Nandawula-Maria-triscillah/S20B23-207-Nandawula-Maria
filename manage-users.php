

 <?php

 include("database.php");

?>
<!DOCTYPE html>
<head>
<title></title>
  <link rel="stylesheet" href="styledash.css">
</head>
<body>

  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Admin Dashboard</label>
    <ul>
      <li><a href="index.php">Home</a></li>




    </ul>
  </nav>

<p><a class=" add" href="user.php">Add User</a></p>

<table id="customers">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All User Details </h4>

                              <thead>
                              <tr>
                                  <th scope="col">no.</th>
                                  <th scope="col">Username</th>
                                  <th scope="col"> email</th>

                                  <th scope="col"> operations</th>  </tr>
                              </thead>

                                <?php $sql=mysqli_query($con,"select * from user");
               $cnt=1;
               while($row=mysqli_fetch_array($sql))
               {?>
                             <tr>
                             <td><?php echo $cnt;?></td>
                                 <td><?php echo $row['username'];?></td>
                                 <td><?php echo $row['email'];?></td>

                                   <td>
  <button><a href="update.php?updateid=<?php echo $row['id'];?>">Update
</a></button>

  <button> <a href="delete.php? deleteid=<?php echo $row['id'];?>">Delete</a></button>
                               </td>
                           </tr>
                           <?php $cnt=$cnt+1; }?>


                         </table>
                         <style>
                         #customers {
                           font-family: Arial, Helvetica, sans-serif;
                           border-collapse: collapse;
                           width: 100%;
                         }

                         #customers td, #customers th {
                           border: 1px solid #ddd;
                           padding: 8px;
                         }

                         #customers tr:nth-child(even){background-color: #f2f2f2;}

                         #customers tr:hover {background-color: #ddd;}

                         #customers th {
                           padding-top: 12px;
                           padding-bottom: 12px;
                           text-align: left;
                           background-color: #04AA6D;
                           color: white;
                         }
                         </style>

</body>
</html>
