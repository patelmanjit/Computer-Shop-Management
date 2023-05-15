<?php

include 'config.php';

session_start();




if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `registers` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
<?php include 'admin_header.php'; ?>
  
<section class="users">

   <h1 class="title"> user details </h1>

</section>   
  

<?php

   $select = mysqli_query($conn, "SELECT * FROM registers");

?>
<div class="product-display">
   <table class="product-display-table">
      <thead>
      <tr>
         <th>Usre Id</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email</th>
         <th>Contact</th>
         <th>Address</th>
         <th>Action</th>
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><?php  echo $row['id'];?></td>
         <td><?php  echo $row['Firstname'];?></td>
         <td><?php echo $row['Lastname'];?></td>
         <td><?php echo $row['Email']; ?></td>
         <td><?php echo $row['Contact']; ?></td>
         <td><?php echo $row['Address']; ?></td>
         <td>
         <a href="admin_users.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete user</a>
         </td>
      </tr>
   <?php } ?>
   </table>
</div>

</div>


</body>
</html>