<?php

require '../config.php';

class Game {
  public $sport;
  public $time;
  public $dat;
  public $address;
  public $lat;
  public $lng;
  public $price;
  public $currency;
  public $description;
  public $G_Id;
  public $level;
  public $owner;
  
  public function __construct($sport, $tim, $dat; $address, $lat, $lng, $price, $currency, $description, $level, $ownerId){
    $this->sport = $sport;
    $this->tim = $tim;
    $this->dat = $dat;
    $this->address = $address;
    $this->lat = $lat;
    $this->lng = $lng;
    $this->price = $price;
    $this->currency = $currency;
    $this->description = $description;
    $this->level = $level;
    $this->owner = $ownerId;  
  }
  
  public function addDatabase($sport, $tim, $dat; $address, $lat, $lng, $price, $currency, $description, $level, $ownerId){
     //Check connection
      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } else {
        
        //Create SQL statement
        $sql = 'INSERT INTO games (sport, tim, dat, address, lat, lng, price, currency, desc, level) VALUES ( "' .$sport .'", "' .$tim .'", "' .$dat .'", "'
        .$address .'", "' .$lat .'", "' .$lng .'", "' .$price .'", "' .$currency .'", "' .$description .'", "' .$level .'", "' .$ownerId .'")';
        
        //Add user into database
        if ($con->query($sql) === TRUE) {
          echo "New game created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
      }
  }
    
}

?>