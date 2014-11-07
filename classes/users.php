<?php

include '../config.php';

  class User {
    public $firstName;
    public $lastName;
    public $email;
    public $username;
    public $password;
    
    public function __construct($firstName, $lastName, $email, $username, $password) {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
      $this->username = $username;
      $this->password = $password;
    }
    
    //Add user to database
    public function addDatabase($firstName, $lastName, $email, $username, $password, $con) {
      //Hash password
      $hash = hashPassword($password);
      
      //Check connection
      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } else {
        
        //Create SQL statement
        $sql = 'INSERT INTO users (firstName, lastName, email, username, password) VALUES ( "' .$firstName .'", "' .$lastName .'", "' .$email .'", "' .$username .'", "' .$hash .'")';
        
        //Add user into database
        if ($con->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
      }
    }
    

  }
    
     function fetchInfo($U_Id, $con){
      //Check connection
      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } else {
        
        //Create SQL statement
        $sql = 'SELECT * FROM users WHERE U_Id ="' .$U_Id .'" LIMIT 1';
        
        //Perform SQL query
        $result = $con->query($sql);
        
         //Insert results into an array
        if ($result->num_rows > 0) {
          
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $array = array(
            'username' => $row['username'],
            'firstname' => $row['firstName'],
            'lastname' => $row['lastName'],
            'id' => $row['U_Id'],
            );
          }
        }
        
        return $array;
      }
    }

?>