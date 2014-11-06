<?php

include '../config.php';

$username = $_GET['q'];

 if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } else {
        
        //Create SQL statement
        $sql = 'SELECT username FROM users WHERE username = "' .$username .'"';
        $result = $con->query($sql); 
      }

if($result->num_rows > 0){
  echo 'Username is taken.';
} else {
  echo 'Username available.';
}



?>