<?php

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'home') {
    require 'controllers/home.php';
} else {
  require 'controllers/auth.php';
} 

?>