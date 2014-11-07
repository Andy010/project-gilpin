<?php

require '../config.php';
include 'get-coords.php';

class Game {
  public $sport;
  public $timedate;
  public $address;
  public $lat;
  public $lng;
  public $price;
  public $currency;
  public $description;
  public $G_Id;
  public $level;
  public $owner;
  
  public function __construct($sport, $tim, $dat, $address, $price, $currency, $description, $level, $ownerId){
    
    //Get coordinates
    $coords = fetchCoordinates($address);
    
    $this->sport = $sport;
    $this->timedate = $dat .' ' .$tim .':00';
    $this->address = $address;
    $this->lat = $coords['latitude'];
    $this->lng = $coords['longitude'];
    $this->price = $price;
    $this->currency = $currency;
    $this->description = $description;
    $this->level = $level;
    $this->ownerId = $ownerId;  
  }
  
  public function addDatabase($sport, $timedate, $address, $lat, $lng, $price, $currency, $description, $level, $ownerId, $con){
     //Check connection
      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } else {
        
        //Create SQL statement
        $sql = 'INSERT INTO games (sport, starttime, address, lat, lng, price, currency, description, level, ownerId) VALUES ( "' .$sport .'", "' .$timedate .'", "' 
        .$address .'", "' .$lat .'", "' .$lng .'", "' .$price .'", "' .$currency .'", "' .$description .'", "' .$level .'", "' .$ownerId .'")';
        
        //Add game into database
        if ($con->query($sql) === TRUE) {
          echo "New game created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
      }
  }
    
}

?>