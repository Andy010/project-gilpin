<?php
session_start();
include '../config.php';
?>

<html>
  
  <head>
  </head>
  
  <body>
    <p> Loading... </p>
  </body>
  
</html>

<?php

include 'validate-password.php';
include 'move-page.php';

$validate = validateUser($_POST['username'], $_POST['password'], $con);

if($validate){
  $_SESSION['ID'] = 'J8Hhh!0oPi8';
  movePage($_POST['retURL']);
} else {
  echo 'login failure';
}

?>