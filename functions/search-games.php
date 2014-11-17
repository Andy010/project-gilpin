<?php

include '../config.php';
include 'get-coords.php';

function gameSearch($address, $sport, $con){
  
  //Get coordinates
  $coords = fetchCoordinates($address);
  
   //SQL query to retrieve closest games
   if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      } else {
        
        //Create SQL statement
        $sql = 'SELECT *, ( 3959 * acos( cos( radians(' .$coords['longitude'] .') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('
          .$coords['latitude'] .') ) + sin( radians(' .$coords['longitude'] .') ) * sin( radians( lat ) ) ) ) AS distance FROM games WHERE sport = "' .$sport
          .'" HAVING distance < 25 ORDER BY distance LIMIT 0 , 20;';
        $result = $con->query($sql); 
      }
   
   //Insert results into an array
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if(ISSET($array)){
          $newArray = array(
            $result['G_Id'] => array(
              'distance' => $result['distance'],
              'datetime' => $result['starttime'],
              'desc' => $result['description'],
            )
        );
          
        array_push($array, $newArray);
      } else {
          $array = array(
            $result['G_Id'] => array(
              'distance' => $result['distance'],
              'datetime' => $result['starttime'],
              'desc' => $result['description'],
            )
        );
        }
      
      return $array;
     
  }
}
}

  $gameTest = gameSearch('hp16 9rj', 'football', $con);
  print_r($gameTest);
?>