<?php

include 'config.php';

session_start();

//$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
  // header('location:login.php');
}

if(isset($_POST['send'])){

    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Number = $_POST['Number'];
    $Message = mysqli_real_escape_string($conn, $_POST['Message']);
 
       mysqli_query($conn, "INSERT INTO `contact`( Name, Email, Number, Message) VALUES('$Name', '$Email', '$Number', '$Message')") ;
       $message[] = 'message sent successfully!';
       
 }

?>
 <div class = "file-container">
<?php include 'welcome.php'; ?>
</div>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Computer Shop Mangement</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php //include 'welcome.php'; ?>

<div class="heading">
   <h3>contact us</h3>
</div>

<section class="contact">

   <form action="" method="post">
      <h3>say something!</h3>
      
      <input type="text" name="Name" required placeholder="enter your name" class="box">
     
      <input type="email" name="Email" required placeholder="enter your email" class="box">
     
      <input type="number" name="Number" required placeholder="enter your number" class="box">
      
      <textarea name="Message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>