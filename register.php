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
  
        <script>
function checkUsername(str) {
 if (str=="") {
    document.getElementById("username").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("username-result").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","functions/username-check.php?q="+str,true);
  xmlhttp.send(); 

}
</script>
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
                <h1> Register. </h1>
              </div>
            </div>
          </div>
          
          
            <div class="container">
              <div class="sixteen columns">
                <form action="add-user.php" method="post">
                  <input type="text" name="firstName" placeholder=" First Name"><br>
                  <input type="text" name="lastName" placeholder=" Last Name"><br>
                  <input type="text" name="email" placeholder=" Email"><br>
                  <input type="text" name="username" id="username" placeholder=" Username" onchange="checkUsername(this.value)">
                  <div class="username-result" id="username-result"></div>
                  <input type="password" name="password" placeholder=" Password"><br>
                  <input type="submit" value="Sign Up!">
                </form>
              </div>
            </div>
          
          


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
