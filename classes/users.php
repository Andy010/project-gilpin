<?php

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
      
      //Check connection
      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } else {
        
        //Create SQL statement
        $sql = 'INSERT INTO users (firstName, lastName, email, username, password) VALUES ( "' .$firstName .'", "' .$lastName .'", "' .$email .'", "' .$username .'", "' .$password .'")';
        
        //Add user into database
        if ($con->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
      }
    }
    
  }


?>