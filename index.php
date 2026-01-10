<?php

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'home') {
    require './Controllers/home.php';
  }
} else {
  require './Controllers/auth.php';
} 

?>