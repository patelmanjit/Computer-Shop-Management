<!--<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Log out</div>
      <form action="#">
        <div class="field">
          <a>Do you really want to Logout?</a>
        </div>
        <li> <a  href="login.html">Yes</a> </li>
        <li> <a  href="welcome.php">No</a> </li>
      </form>
    </div>
  </body>
</html>
-->

<?php

include 'config.php';

session_start();
session_unset();
session_destroy();

header('location:index.php');

?>

