<?php

include 'config.php';

session_start();

if(isset($_GET['delete order'])){
   mysqli_query($conn, "DELETE FROM `orders`");
   header('location:product.php');
}
if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$remove_id'");
   header('location:cart.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php //include 'header.php'; ?>
<div container="navbar">
<?php include 'welcome.php'; ?>
</div>
<div class="heading">
   <h3>your orders</h3>
   <p> <a href="home.php">home</a> / orders </p>
</div>

<section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

      <?php

         $order_query = mysqli_query($conn, "SELECT * FROM `orders` ") or die('query failed');
         if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
      ?>
      <div class="box">
         <p> Name : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> Number : <span><?php echo $fetch_orders['number']; ?></span> </p>
         <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> Street : <span><?php echo $fetch_orders['street']; ?></span> </p>
         <p> House or Flat no : <span><?php echo $fetch_orders['flat']; ?></span> </p>
         <p> City : <span><?php echo $fetch_orders['city']; ?></span> </p>
         <p> Pincode : <span><?php echo $fetch_orders['pin_code'];?></span> </p>
         <p> State : <span><?php echo $fetch_orders['state']; ?></span> </p>
         <p> Country : <span><?php echo $fetch_orders['country']; ?></span> </p>
         <p> Payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> Your orders : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
         <p> Quantity : <span><?php echo $fetch_orders['quantity']; ?></span> </p>
         <p> Total price : <span>₹<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
         <p> Date and Time : <span><?php echo $fetch_orders['date_added'];?></span> </p>
         <td><a href="orders.php?remove=<?php echo $fetch_orders['id']; ?>" class="delete-btn" onclick="return confirm('are you sure you want to delete order');">Delete order</a></td>

         </div>
         

      <?php
            
       }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>