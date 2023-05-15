<?php

include 'config.php';

session_start();




if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `contact` WHERE Id = '$delete_id'") or die('query failed');
   header('location:admin_contacts.php');
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

   <h1 class="title"> Messages </h1>

</section>   
  

<?php

   $select = mysqli_query($conn, "SELECT * FROM contact");

?>
<div class="product-display">
   <table class="product-display-table">
      <thead>
      <tr>
         <th>Usre Id</th>
         <th>Name</th>
         <th>Number</th>
         <th>Email</th>
         <th>Message</th>
         <th>Action</th>
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><?php  echo $row['Id'];?></td>
         <td><?php  echo $row['Name'];?></td>
         <td><?php echo $row['Number'];?></td>
         <td><?php echo $row['Email']; ?></td>
         <td><?php echo $row['Message']; ?></td>
         <td>
         <a href="admin_contacts.php?delete=<?php echo $row['Id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
         </td>
      </tr>
   <?php } ?>
   </table>
</div>

</div>


</body>
</html>