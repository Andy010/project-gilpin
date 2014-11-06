<?php

session_start();
include 'functions/move-page.php';

if($_SESSION['ID'] != 'J8Hhh!0oPi8'){
  movePage('../index.html?notAuth=true&retURL=dashboard.php');
}

?>

<html>
  
  <head>
  </head>
  
  <body>
    <p> Logged in </p>
  </body>
  
</html>