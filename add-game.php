<?php

session_start();
include 'functions/move-page.php';

if($_SESSION['ID'] != 'J8Hhh!0oPi8'){
  movePage('../index.html?notAuth=true&retURL=add-game.php');
}

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/skeleton.css"
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Start Header -->
      
        <header>
          <div class="hero-image">
            <div class="container">
              <div class="sixteen columns">
                <div class="logo-container">
                  <img src="img/logo.png" alt="sportlocator">
                </div>
                <h1> Add game. </h1>
              </div>
            </div>
          </div>
          
          <div class="search-bar">
            <div class="container">
              <div class="sixteen columns">
                <form action="search-games.php">
                  <input type="text" name="postcode" placeholder="Search close to...">
                  <input type="text" name="sport" placeholder="Start typing a sport">
                  <input type="submit" value="Search">
                </form>
              </div>
            </div>
          </div>
          
          <form action="functions/create-game.php" method="post">
            <input type="hidden" name="ownerID" value="<?php echo $_SESSION['U_Id']; ?>">
            <input type="text" name="sport" placeholder="Start typing a sport">
            <label> When is it? </label>
            <input type="date" name="date" placeholder="date">
            <input type="time" name="time">
            <input type="text" name="address" placeholder="Location name">
            <input type="text" name="postcode" placeholder="Type a postcode">
            <input type="text" name="price" placeholder="Price">
            <input type="hidden" name="currency" value="gbp">
            <input type="text" name="description" placeholder="Enter a title line">
            <input type="text" name="level" placeholder="What level">
            <input type="submit" value="Create game">
          </form>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
