<?php

include 'config.php';

if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } else {
        
        //Create SQL statement
        $sql = 'CREATE TABLE games(G_Id INT NOT NULL AUTO_INCREMENT, sport VARCHAR(20), starttime DATETIME, address VARCHAR(255), lat DECIMAL(18,14), lng DECIMAL(18,14), price DECIMAL(3,2), currency VARCHAR(3), description VARCHAR (255), level VARCHAR(10), PRIMARY KEY (G_Id))';
        
        //Add user into database
        if ($con->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
      }

?>