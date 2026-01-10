<?php
require './Models/user.php';

$valueError = 0;

if(isset($_POST["email"]) && isset($_POST["password"])){

  $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);

  $valueError = connection($email,$password);

  if (!$valueError){
    // TODO redirect user to their home page
  } else {
    // TODO show invalid field
  }

} 


require './views/auth.php';
require './views/footer.php';

?>