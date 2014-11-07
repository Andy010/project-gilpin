<?php

include '../config.php';
include '../classes/games.php';

$newGame = new Game($_POST['sport'], $_POST['time'], $_POST['date'], $_POST['address'], $_POST['price'], $_POST['currency'], $_POST['description'], $_POST['level'], $_POST['ownerID']);

$newGame->addDatabase($newGame->sport, $newGame->timedate, $newGame->address, $newGame->lat, $newGame->lng, $newGame->price, $newGame->currency, $newGame->description, $newGame->level, $newGame->ownerId, $con);



?>