<?php

include 'config.php';

session_start();


if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
   $message[] = 'payment status has been updated!';

}

/*if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_orders.php');
}*/

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

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/order.css">

</head>
<body>
  <div class = "order">
<?php include 'admin_header.php'; ?>
</div>


<section class="orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">
      <?php
     $select = mysqli_query($conn, "SELECT * FROM orders");
      ?>

<div class="product-display">
   <table class="product-display-table">
      <thead>
      <tr>
         <th>order_Id</th>
         <th>Name</th>
         <th>Number</th>
         <th>Email</th>
         <th>Method</th>
         <th>Home No.</th>
         <th>street</th>
         <th>City</th>
         <th>State</th>
         <th>Country</th>
         <th>Pincode</th>
         <th>Total Product</th>
         <th>Quantity</th>
         <th>Total Price</th>
         <th>Date & Time</th>
         <th>Print</th>
        
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['name'];?></td>
         <td><?php echo $row['number']; ?></td>
         <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['method'];?></td>
         <td><?php echo $row['flat']; ?></td>
         <td><?php echo $row['street']; ?></td>
         <td><?php echo $row['city'];?></td>
         <td><?php echo $row['state']; ?></td>
         <td><?php echo $row['country']; ?></td>
         <td><?php echo $row['pin_code'];?></td>
         <td><?php echo $row['total_products']; ?></td>
         <td><?php echo $row['quantity'];?></td>
         <td><?php echo $row['total_price']; ?></td>
         <td><?php echo $row['date_added'];?></td>
         
         
         <td>
         <a href="print1.php?delete=<?php //echo $row['id']; ?>" class="btn"> <i class="fa fa-print"></i> Print </a>
      </td>
        
   
      </tr>
   <?php } ?>
   </table>
</div>

</div>
     

</section>










<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>