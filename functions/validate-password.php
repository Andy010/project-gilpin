<?php

include '../config.php';

function validateUser($username,$password,$con){
  
  $validated = false;
  
  //Query to retrieve hash
   if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } else {
        
        //Create SQL statement
        $sql = 'SELECT password FROM users WHERE username = "' .$username .'" LIMIT 1';
        $result = $con->query($sql); 
      }
  
  //Extract hash from SQL result
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $hash = $row['password'];
    }
  }
  
  //Validate password
  if (password_verify($password, $hash)){
    $validated = true;
  }
  
  return $validated;
}

?>