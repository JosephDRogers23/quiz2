<?php
    if($_POST) {
      $post = $_POST;
      $name = $post["Name"];
      $email = $post["Email"];
      $height = $post["Height"];
      $birth = $post["Birth"];
      $lastName = $post["LastName"];
      setcookie("User", $name);
      setcookie("Email", $email);
      setcookie("Height", $height);
      setcookie("Birth", $birth);
      setcookie("LastName", $lastName);
    }
 ?>
