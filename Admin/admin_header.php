<!--<?php
/*if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}*/
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">Home</a>
         <a href="admin_products.php">Products</a>
         <a href="admin_orders.php">Orders</a>
         <a href="admin_users.php">Users</a>
         <a href="admin_contacts.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      

   </div>

</header>-->

<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
	<link rel="stylesheet" href="style.css">
    <title>COMPUTER SHOP MANAGEMENT</title>
  </head>
  <body>
  <nav class="navbar background">
    <ul class="nav-list">
	<div class="logo"><img src="img.jpg" alt="logo"> </div>
	<li> <a  href="admin_page.php">Home</a> </li>
	<li> <a  href="admin_orders.php">Order</a> </li>
  <li><a  href="admin_products.php">Product</a></li> 
	<li> <a  href="admin_users.php">User</a> </li>
   <!--<li> <a href="invoice/invoice_list.php">Invoice</a></li>-->
        <!-- <li> <a href="admin_supplier.php">Supplier<a><li>-->
  <li> <a href="admin_contacts.php">Message</a> </li>
  <li> <a href="logout.php">Logout</a> </li>
  
  </ul>

  
	<div class="rightNav">
  <div class="search-container">
 
  <input type="text" placeholder="Search.." name="search">
 
    <button type="submit"><i class="fa fa-search"></i></button>

	
	</div>	
</div>





</nav>




 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
