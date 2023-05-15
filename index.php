<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Computer Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="home.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell Computers and Other Hardware</h1>
                       <a href="login.html" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
              
           </div>

    <section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="welcome.php">home</a>
         <a href="about.php">about</a>
         <a href="shop.php">shop</a>
         <a href="contact.php">contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="login.php">login</a>
         <a href="register.php">register</a>
         <a href="cart.php">cart</a>
         <a href="orders.php">orders</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
         <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
         <p> <i class="fas fa-envelope"></i> msv2004@gmail.com </p>
         <p> <i class="fas fa-map-marker-alt"></i> Anand, India - 388001 </p>
      </div>


   </div>

   <p class="credit"> &copy; copyright  @ <?php echo date('Y'); ?> by <span>Group No:6</span> </p>

</section>
          
    </body>
</html>



