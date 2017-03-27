<?php
  include 'register.php';
  ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php

    if (!isset($_COOKIE["User"])) {
       ?>
    <h1>This is my form.</h1>
    <h2>Welcome.</h2>
    <br>
    <br>
    <br>
    <form method="post" action="">
      <h3>First Name</h3>
      <input type="text" name="Name">
      <h3>Last Name</h3>
      <input type="text" name="LastName">
      <h3>Birth Month</h3>
      <input type="text" name="Birth">
      <h3>Height (centimeters)</h3>
      <input type="text" name="Height">
      <h3>Email (letters)</h3>
      <input type="text" name="Email">
      <br>
      <br>
      <input type="Submit" value="Let's go!!!">
    </form>
    <?php
    if ($_POST){
      echo("<h4>Thank you for your time!!<h4><br>");
    }
  }
  else {
    echo("<h1>Hi, " . $_COOKIE["User"] .", you recently signed up with the email address: " . $_COOKIE["Email"] . ", thank you!</h1>");
  }
  ?>


  </body>

</html>
