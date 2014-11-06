<!DOCTYPE html>
<html>
  
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
    <form action="add-user.php" method="post">
      <input type="text" name="firstName" placeholder=" First Name">
      <input type="text" name="lastName" placeholder=" Last Name">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="username" id="username" placeholder=" Username" onchange="checkUsername(this.value)">
      <div class="username-result" id="username-result"></div>
      <input type="password" name="password" placeholder="Password">
      <input type="submit" value="Add User">
    </form>
  </body>
  
</html>