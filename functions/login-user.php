<?php
session_start();
include '../config.php';
include '../classes/users.php';
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

if($validate['approved']){
  //Set session ID
  $_SESSION['ID'] = 'J8Hhh!0oPi8';
  
  //Fetch user information
  $userInfo = fetchInfo($validate['U_Id'], $con);
  
  //Store user information in session variables
  $_SESSION['U_Id'] = $validate['U_Id'];
  $_SESSION['username'] = $userInfo['username'];
  $_SESSION['firstName'] = $userInfo['firstName'];
  $_SESSION['lastName'] = $userInfo['lastName'];
  
  //Redirect to new return URL
  movePage($_POST['retURL']);
} else {
  echo 'login failure';
}

?>