<!DOCTYPE html>
<html>
  <head>
  </head>
  
  <body>
    <?php
      include 'config.php';
      include 'classes/users.php';

      $newUser = new User($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['username'], $_POST['password']);

      $newUser -> addDatabase($newUser->firstName, $newUser->lastName, $newUser->email, $newUser->username, $newUser->password, $con);
    ?>
  </body>
</html>